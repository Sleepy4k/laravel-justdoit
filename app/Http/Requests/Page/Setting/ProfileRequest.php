<?php

namespace App\Http\Requests\Page\Setting;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class ProfileRequest extends FormRequest
{
    /**
     * Indicates if the validator should stop on the first rule failure.
     *
     * @var bool
     */
    protected $stopOnFirstFailure = false;

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

        if ($this->has('form_pw')) {
            $rules = [
                'old_password' => ['required','min:8','max:255','string'],
                'password' => ['required','min:8','max:255','string'],
                'confirm_password' => ['required','min:8','max:255','same:password','string']
            ];
        } elseif ($this->has('form_user')) {
            $rules = [
                'surename' => ['required','max:255','string'],
                'language' => ['required','max:255','string'],
                'logo' => ['nullable','image','mimes:jpg,jpeg,png,svg','max:4092','dimensions:min_width=100,min_height=100'],
                'old_logo' => ['nullable','string']
            ];
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
        Toastr::error('Data gagal untuk dibuat', 'Profile');
    }
}