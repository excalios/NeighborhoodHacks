<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRegistrationRequest extends FormRequest
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
            'email' => 'required|unique:users|email',
            'name' => 'required|string|not_regex:/:\/\//g',
            'password' => 'required|string|alphanumeric|confirmed',
            'phone_number' => 'required|numeric|min:11|max:15',
            'province_id' => 'required|integer|exists:provinces,id',
            'regency_id' => 'required|integer|exists:regencies,id',
        ];
    }
}
