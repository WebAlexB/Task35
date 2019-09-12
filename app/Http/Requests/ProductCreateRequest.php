<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'title'=> 'required|unique:products|min:5|max:50',
            'short_description' => 'required|min:50|max:150',
            'price' => 'required|numeric|min:1',
            'in_stock' => 'required|numeric|min:1',
            'thumbnail' => 'required|mimetypes:image/jpg'
        ];
    }
}
