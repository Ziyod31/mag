<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
            'price' => 'required|numeric|min:2|max:9999',
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:5|max:255',
            'quantity' => 'required|numeric|min:1|max:999',
            'image' => 'mimes:jpeg,jpg,png|max:4999',
        ];
    }
}