<?php

namespace App\Http\Requests\Listing;

use Illuminate\Foundation\Http\FormRequest;

class ListingStoreRequest extends FormRequest
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
            'title' => [
                'required',
                'string'
            ],
            'tags' => [
                'required',
                'string'
            ],
            'company' => [
                'required',
                'string',
                'unique:listings,company'
            ],
            'location' => [
                'required',
                'string'
            ],
            'email' => [
                'required',
                'string',
                'email',
                'unique:listings,email'
            ],
            'website' => [
                'required',
                'string',
                'url'
            ],
            'logo' => [
                'required',
                'image',
                'mimes:png,jpg,jpeg',
                'max:5120',
            ],
            'description' => [
                'required',
                'string',
                'max:240'
            ],
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
            'url' => ':attribute is not valid!',
            'image' => ':attribute must be an image!',
            'mimes' => ':attribute must be a file of type: .png, .jpg, .jpeg!',
            'logo.max' => ':attribute must not be greater than 5MB!',
            'description.max' => ':attribute is too long!',
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
            'title' => 'Job Title',
            'tags' => 'Tags',
            'company' => 'Company Name',
            'location' => 'Job Location',
            'email' => 'Contact Email',
            'website' => 'Website/Application URL',
            'logo' => 'Company Logo',
            'description' => 'Job Description',
        ];
    }
}
