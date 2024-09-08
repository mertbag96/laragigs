<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string'
            ],
            'email' => [
                'required',
                'string',
                'email',
                'unique:users,email'
            ],
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed'
            ],
            'password_confirmation' => [
                'required',
                'string',
                'min:8'
            ]
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'required' => ':attribute field is required!',
            'unique' => ':attribute already exists!',
            'email' => ':attribute is not valid!',
            'min' => ':attribute must be at least 8 characters!',
            'confirmed' => 'Passwords do not match!',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'password_confirmation' => 'Confirm Password'
        ];
    }
}
