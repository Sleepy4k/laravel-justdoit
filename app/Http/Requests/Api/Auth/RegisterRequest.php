<?php

namespace App\Http\Requests\Api\Auth;

use App\Traits\ApiRespons;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterRequest extends FormRequest
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
        return [
            'username' => ['required','string','max:255','unique:users,username'],
            'surename' => ['required','string','max:255'],
            'password' => ['required','string','min:8','max:255','same:confirm_password'],
            'confirm_password' => ['required','string','min:8','max:255']
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
        throw new HttpResponseException(
            $this->createResponse(500, 'Server Error',
                [
                    'error' => $validator->errors()
                ],
                [
                    route('api.register')
                ]
            )
        );
    }
}