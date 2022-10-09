<?php

namespace App\Http\Requests\Api\Main;

use App\Traits\ApiRespons;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class TaskRequest extends FormRequest
{
    use ApiRespons;

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
        return true;
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
                    'task' => ['required','string','max:255'],
                    'subject' => ['required','string'],
                    'priority' => ['required','string','max:255'],
                    'isDone' => ['required','string','max:255']
                ];
                break;
            case 'PATCH':
                $rules = [
                    'id' => ['required','string','max:255'],
                    'task' => ['required','string','max:255'],
                    'subject' => ['required','string'],
                    'priority' => ['required','string','max:255'],
                    'isDone' => ['required','string','max:255']
                ];
                break;
            case 'DELETE':
                $rules = [
                    'id' => ['required','string','max:255']
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
        throw new HttpResponseException(
            $this->createResponse(500, 'Server Error',
                [
                    'error' => $validator->errors()
                ],
                [
                    route('api.login')
                ]
            )
        );
    }
}