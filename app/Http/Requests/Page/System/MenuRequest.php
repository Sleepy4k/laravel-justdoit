<?php

namespace App\Http\Requests\Page\System;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class MenuRequest extends FormRequest
{
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
        $rules = [];

        switch($this->method())
        {
            case 'POST':
                $rules = [
                    'name' => ['required','unique:menus','max:255','string'],
                    'label' => ['required','max:255','string'],
                    'icon' => ['nullable','max:255','string'],
                    'category' => ['required','numeric','min:1'],
                    'type' => ['required','string','max:255'],
                    'page_url' => ['nullable','string','max:255'],
                    'permission' => ['required','max:255']
                ];
                break;
            case 'PUT':
                $rules = [
                    'name' => ['required','max:255','string'],
                    'label' => ['required','max:255','string'],
                    'icon' => ['nullable','max:255','string'],
                    'category' => ['required','numeric','min:1'],
                    'type' => ['required','string','max:255'],
                    'page_url' => ['nullable','string','max:255'],
                    'permission' => ['required','max:255']
                ];
                break;
            default: break;
        }

        return $rules;
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
        Toastr::error('Data gagal untuk dibuat', 'Menu');
    }
}