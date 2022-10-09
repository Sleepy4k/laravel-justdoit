<?php

namespace App\Http\Requests\Page\System;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class ApplicationRequest extends FormRequest
{
    /**
     * Indicates if the validator should stop on the first rule failure.
     *
     * @var bool
     */
    protected $stopOnFirstFailure = false;

    /**
     * The URI that users should be redirected to if validation fails.
     *
     * @var string
     */
    // protected $redirect = '';

    /**
     * The route that users should be redirected to if validation fails.
     *
     * @var string
     */
    // protected $redirectRoute = '';

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'application_name' => ['required','max:255','string'],
            'application_icon' => ['nullable','image','mimes:jpg,jpeg,png,svg','max:4092','dimensions:min_width=100,min_height=100'],
            'old_app_icon' => ['nullable','string','max:255'],
            'application_author' => ['required','max:255','string'],
            'application_keywords' => ['required','max:255','string'],
            'application_description' => ['required','string'],
            'sidebar_name' => ['required','max:255','string'],
            'sidebar_icon' => ['nullable','image','mimes:jpg,jpeg,png,svg','max:4092','dimensions:min_width=100,min_height=100'],
            'old_side_icon' => ['nullable','string','max:255']
        ];
    }
    
    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            // 
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            // 
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            // 
        ]);
    }

    /**
     * Custom error message for validation
     *
     * @return array
     */
    public function failedValidation(Validator $validator)
    {
        foreach ($validator->errors()->getMessages() as $data) {
            foreach ($data as $error) {
                Toastr::error($error, 'Application');
            }
        }
    }
}