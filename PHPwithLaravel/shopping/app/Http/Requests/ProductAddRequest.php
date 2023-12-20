<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
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
            'name' => 'bail|required|unique:products|max:255|min:4',
            'price' =>'required',
            'category_id' =>'required',
            'content' => 'required'

        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'price.required' => 'Price is required',
            'category_id' => 'Category is required',
            'content' => 'Content is required'
        ];
    }
}
