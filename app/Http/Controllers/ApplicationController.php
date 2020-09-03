<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;
use App\Http\Requests\Application\StoreRequest;
use App\Http\Resources\ApplicationCollection;
use App\Http\Controllers\Export\ApplicationExcelExport;
use PDF;
use Storage;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (! $request->ajax() )
            # show backoffice table
            return view('application.index');

        $applications = Application::when($request->search, function ($query, $search) {

            $query->where(

                'id', 'like', "$search%"

            )->orWhere(

                'name', 'like', "%$search%"
                
            )->orWhere(

                'email', 'like', "%$search%"
                
            )->orWhere(

                'country', 'like', "%$search%"
                
            )->orWhere(

                'phone', 'like', "%$search%"
                
            )->orWhere(

                'company', 'like', "%$search%"
                
            )->orWhere(

                'form_of_business', 'like', "%$search%"
                
            )->orWhere(

                'annual_revenue', 'like', "%$search%"
            );

        })->orderBy(

            $request->order_column,
            $request->order_direction

        )->paginate($request->per_page, ['*'], 'page', $request->page);

        return new ApplicationCollection($applications);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('application.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Application\StoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        # save file uploads
        
        $company_logo = $request->hasFile('company_logo') ? $request->file('company_logo')->store('application/company_logo') : null;

        $brand_document = $request->hasFile('brand_document') ? $request->file('brand_document')->store('application/brand_document') : null;

        # add application to database

        Application::create( array_merge( $request->except([

            'company_logo', 'brand_document', '_token', 'tocs',

        ]), compact('company_logo', 'brand_document')) );

        return back()->with('success', 'Thank you. Your application has been received successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        return view('application.show',compact('application'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        $application->delete();
    }

    /**
     * Export to excel.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function export()
    {
        return (new ApplicationExcelExport)->download('applications.xlsx');
    }

    /**
     * Show application attachement.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function attachment(Application $application)
    {
        return ( PDF::loadView('application/attachment', compact('application')) )->stream("$application->company.pdf");
    }

    /**
     * Show application attachement.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function brandDocument(Application $application)
    {
        return Storage::download(

            $application->brand_document,
            "$application->company brand document." . pathinfo(

                public_path("storage/$application->brand_document"), 
                PATHINFO_EXTENSION
            )
        );
    }
}
