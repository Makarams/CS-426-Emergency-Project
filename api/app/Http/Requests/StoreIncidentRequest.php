<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIncidentRequest extends FormRequest
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
            'photo' => '',
            'consent' => 'required',
            'reporter_name' => 'required',
            'reporter_contact' => 'required',
            'incident_location' => 'required',
            'incident_description' => 'required',
            'emergency_assistance' => 'required',
            'contact_reporter' => 'required',
            'isSolve' => ['boolean'],
        ];
    }
}