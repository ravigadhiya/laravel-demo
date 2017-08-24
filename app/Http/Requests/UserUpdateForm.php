<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateForm extends FormRequest
{
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
            'name' => 'required|unique:users,name,'.$this->id,
            'email' => 'required|email|unique:users,email,'.$this->id,
            'firstname' => 'required',
            'lastname' => 'required',
            'phonenumber' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'The Name field is required.',
            'firstname.required' => 'The First Name field is required.',
            'lastname.required' => 'The Last Name field is required.',
            'email.required' => 'The Email id field is required.',
            'phonenumber.required' => 'The phonenumber field is required.',
            'address.required' => 'The address field is required.',
            'city.required' => 'The city field is required.',
            'state.required' => 'The state field is required.',
            'zip.required' => 'The userrole field is required.',
            //'profilepicture.required' => 'The profilepicture field is required.',
            'name.unique' => 'The username has already been taken.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'The email has already been taken.',
        ];
    }
}
