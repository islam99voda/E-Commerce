<?php

namespace App\Http\Requests\page;

use Illuminate\Foundation\Http\FormRequest;

class StorePageRequest extends FormRequest
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
            'title'       => ['required'],
            'content'  => ['required'],
        ];
    }
    public function messages()
    {
        return [
            'title.required'     => 'title is required',
            'content.required'   => ' content is required',
        ];
    }
}
