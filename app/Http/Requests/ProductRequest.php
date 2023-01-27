<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


//Validação de dados das Requests do Controller
class ProductRequest extends FormRequest
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

            'name' => ['required'],
            'category' => ['required'],
            'quantity' => ['numeric', 'required'],
            'created_at'=>['date'],
            'updated_at'=>['date'],
            'deleted_at'=>['date'],
            
        ];
    }


    //Mensagens de erro personalizadas
    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'numeric' => 'O campo :attribute deve ser numérico',
        ];
    }
}



