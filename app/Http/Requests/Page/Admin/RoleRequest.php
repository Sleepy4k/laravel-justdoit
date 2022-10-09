<?php

namespace App\Http\Requests\Page\Admin;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class RoleRequest extends FormRequest
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
                    'name' => ['required','max:255','unique:roles','string'],
                    'guard_name' => ['required','max:255','string'],
                    'permission' => ['required']
                ];
                break;
            case 'PUT':
                $rules = [
                    'name' => ['required','max:255','string'],
                    'guard_name' => ['required','max:255','string'],
                    'permission' => ['required']
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
        Toastr::error('Data gagal untuk dibuat', 'Role');
    }
}