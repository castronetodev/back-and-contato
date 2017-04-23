<?php

namespace apiPoseidon\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            'itemName' => 'required|max:255',
            'desc'     =>'required|max:255',
            'value'    =>   'required|numeric',
            'category_id' => 'required|exists:categories,id'
        ];
    }
}
