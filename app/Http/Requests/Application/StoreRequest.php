<?php

namespace App\Http\Requests\Application;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'year_established' => 'numeric|digits:4',
            'farmers_number' => 'numeric|digits_between:1,54',
            'annual_revenue' => 'numeric',
            'company_logo' => 'required|image',
            'brand_document' => 'nullable|file',
        ];
    }
}
