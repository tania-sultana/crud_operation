<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|max:10',
            'email' => 'required|email',
            'phone' => 'required|numeric'
        ];
    }

    public function messages()
    {
          return[
            'name.required'=>'Enter your name',
            'name.max'=>'Your name can not contain more than 10 charecter',
            'email.required'=>'Enter your email',
            'email.email'=>'Email must be a valid eamil',
            'phone.required'=>'Enter your phone number',
            'phone.numeric'=>'Phone number must be number'
        ];
    }
}
