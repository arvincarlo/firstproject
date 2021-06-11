<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateValidationRequest extends FormRequest
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
            // validation happens here, check some rules before it will perform
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
            'name' => 'required',
            'founded' => 'required|integer|min:1886|max:2021',
            'description' => 'required'
        ];
    }
}
