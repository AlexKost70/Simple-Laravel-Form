<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:120',
            'surname' => 'required|string|max:120',
            'username' => 'required|string|regex:/^[A-Za-z0-9]+$/|max:30|unique:users',
            'password' => 'required|string|min:8'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please, enter your name.',
            'name.max' => 'Your name is too long.',
            'surname.required' => 'Please, enter your surname.',
            'surname.max' => 'Your surname is too long.',
            'username.required' => 'Please, enter your username.',
            'username.max' => 'Your username is too long.',
            'username.regex' => 'Your username can only contain latin letters and numbers.',
            'username.unique' => 'This username already exists.',
            'password.required' => 'Please, enter your password.',
            'password.min' => 'Your password must be at least 8 characters.'
        ];
    }
}
