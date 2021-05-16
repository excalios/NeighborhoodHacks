<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthSignupRequest extends FormRequest
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
            'name' => 'required|string',
            'password' => 'required|string|alpha_num|confirmed',
            'phone_number' => 'required|string|min:11|max:15|regex:/\d/',
            'province_id' => 'required|integer|exists:provinces,id',
            'regency_id' => 'required|integer|exists:regencies,id',
            'profile_image' => 'mimes:jpg,png,jpeg',
            'education' => 'string|alpha_num'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'province_id.required' => 'A province is required',
            'regency_id.required' => 'A regency is required',
        ];
    }
}
