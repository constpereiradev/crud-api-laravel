<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MunicipioRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'id' => ['increment'],
            'ibge_id' => ['increment'],
            'ibge_name' => ['string'],
            
        ];
    }


    //Mensagem de erro personalizada
    public function messages()
    {
        return [
            'unique' => ['Não é possível haver dados duplicados'],
        ];
    }
}
