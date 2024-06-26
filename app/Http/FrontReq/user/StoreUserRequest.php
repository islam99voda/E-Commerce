<?php

namespace App\Http\FrontReq\user;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name'                   => ['required'],
            'email'                  => ['required','email','unique:users'],
            'password'               => ['required','confirmed','min:8'],
            'password_confirmation'  => ['required'],
        ];
    }
    public function messages()
    {
        return [

        ];
    }
}
