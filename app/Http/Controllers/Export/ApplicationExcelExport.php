<?php

namespace App\Http\Controllers\Export;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Application;

class ApplicationExcelExport implements FromQuery, WithMapping, WithHeadings
{
	use Exportable;

    /**
     * Prepare a query for an export. Behind the scenes this query is executed in chunks.
     * 
     * @return \Illuminate\Database\Query\Builder
     */
    public function query()
    {
        return Application::query()->latest();
    }

    /**
     * Control the actual source for each column.
     * 
     * @param  \App\Application  $application
     * @return array
     */
    public function map($application): array
    {
        return [

            $application->id,
            ucwords($application->name),
            $application->email,
            $application->country,
            $application->phone,
            $application->company,
            $application->year_established,
            $application->company_phone,
            $application->company_email,
            $application->physical_address,
            $application->form_of_business,
            $application->home_office,
            $application->corporate_partners,
            $application->employee_number,
            $application->annual_revenue,
            $application->ownership_proportion,
            $application->farmers_number,
            $application->products_produced,
            $application->major_markets,
            $application->potential_markets,
            $application->installed_capacity,
            $application->financing,
            $application->production_goal,
            $application->technology,
            $application->ngo_partnerships,
            $application->challenges,
            $application->interests,
            $application->needs,
            $application->success,
            $application->owners,
            $application->premises,
        ];
    }

    /**
     * The heading to be added as very first row of the sheet.
     * 
     * @return array
     */
    public function headings(): array
    {
        return [

            'ID',
            'Name',
			'E-mail Address',
			'Country',
			'Phone',
			'Company',
			'Year Established',
			'Company Phone',
			'Company Email',
			'Physical Address',
			'Form of Business',
			'Home Office',
			'corporate_partners',
			'Employee Number',
			'Annual Revenue',
			'Ownership Proportion',
			'Farmers Number',
			'Products Produced',
			'Major Markets',
			'Potential Markets',
			'Installed Capacity',
			'Financing',
			'Production Goal',
			'Technology',
			'NGO Partnerships',
			'Challenges',
			'Interests',
			'Needs',
			'Success',
			'Owners',
			'Premises',
        ];
    }
}