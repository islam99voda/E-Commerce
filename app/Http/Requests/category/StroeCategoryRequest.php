<?php

namespace App\Http\Requests\category;

use Illuminate\Foundation\Http\FormRequest;

class StroeCategoryRequest extends FormRequest
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
            'name' => ['required','unique:categories'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Category is required',
            'name.unique' => 'this Category already exist',
        ];
    }
}
