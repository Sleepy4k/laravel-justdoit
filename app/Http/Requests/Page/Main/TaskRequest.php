<?php

namespace App\Http\Requests\Page\Main;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class TaskRequest extends FormRequest
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

        switch($this->method())
        {
            case 'POST':
                $rules = [
                    'user' => ['required','string','max:255'],
                    'task' => ['required','string','max:255'],
                    'subject' => ['required','string'],
                    'priority' => ['required','string','max:255'],
                    'isDone' => ['required','string','max:255']
                ];
                break;
            case 'PUT':
                $rules = [
                    'task' => ['required','string','max:255'],
                    'subject' => ['required','string'],
                    'priority' => ['required','string','max:255'],
                    'isDone' => ['required','string','max:255']
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
     * Custom error response for validation.
     *
     * @return array
     */
    public function failedValidation(Validator $validator)
    {
        Toastr::error('Data gagal untuk dibuat', 'Task');
    }
}