<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;
use App\Http\Requests\Application\StoreRequest;
use App\Http\Resources\ApplicationCollection;
use App\Http\Controllers\Export\ApplicationExcelExport;
use PDF;

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
            $request->order_direction,

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
        
        $owners = $request->hasFile('owners') ? $request->file('owners')->store('application/owners') : null;

        $premises = $request->hasFile('premises') ? $request->file('premises')->store('application/premises') : null;

        # add application to database

        Application::create( array_merge( $request->except([

            'owners', 'premises', '_token', 'tocs',

        ]), compact('owners', 'premises')) );

        return back()->with('success', 'Thanking for making your application');
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
     * Show invoice attachement.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function invoice(Application $application)
    {
        return ( PDF::loadView('application/invoice', compact('application')) )->stream();
    }
}
