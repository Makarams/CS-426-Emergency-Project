<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCrimeRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'crime_type' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'witness' => ['required', 'boolean'],
            'urgency' => ['required', 'boolean'],
            'isSolve' => ['boolean'],
        ];
    }
}