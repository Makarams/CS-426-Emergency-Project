<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonalRequest extends FormRequest
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
            'first_name' => [ 'string', 'max:255'],
            'last_name' => [ 'string', 'max:255'],
            'occupation' => ['string', 'max:255'],
            'position' => ['string', 'max:255'],
            'phone_number' => ['string', 'max:255'],
            'date_of_birth' => ['date'],
            'account_id' => ['numeric'],
            'department_id' => ['string']
        ];
    }
}
