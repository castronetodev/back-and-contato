<?php

namespace apiPoseidon\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'nome_empresa'     =>'required|max:255',
            'tel'    =>   'required|numeric',
            'cel'    =>   'required|numeric',            	
            'email'     =>'required|max:255',
            'endereco'     =>'required|max:255',
            'bairro'     =>'required|max:255',
            'bairro'     =>'required|max:255',
            'numero'    =>   'required|numeric', 
            'referencia'     =>'required|max:255',
            'desc'     =>'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'cities_id' => 'required|exists:cities,id'
        ];
    }
}
