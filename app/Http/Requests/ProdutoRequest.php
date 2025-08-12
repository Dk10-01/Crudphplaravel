<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{



    public function rules(): array
    {
        return [
            'nome' => 'required',
            'preco' => 'required',
            'descricao' => 'required',
        ];
    }

    public function messages(): array
    {
        return[
            'nome.required' => 'Campo nome é obrigatório!',
            'preco.required' => 'Campo preço é obrigatório!',
            'descricao.required' => 'Campo descrição é obrigatório!',
        ];

    }
}
