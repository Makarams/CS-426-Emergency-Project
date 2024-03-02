<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFraudRequest extends FormRequest
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
            "name" => ['string','max:255'],
            "email" => ['email','max:255'],
            "phone" => ['string','max:255'],
            "consent" => ['string','max:255'],
            "location" => ['string','max:255'],
            "evidence" => ['string','max:255'],
            "fraud_type" => ['string','max:255'],
            "description" => ['string','max:255'],
            "report_anonymously" => ['string','max:255'],
            "emergency_services_contacted" => ['string','max:255'],
            'isSolve' => ['boolean'],
        ];
    }
}