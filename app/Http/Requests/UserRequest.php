<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'required',
            'preco' => 'required|numeric',
            'descricao' => 'required|texto',
        ];
    }

    public function messages(): array
    {
        return[ 
            'name.required' => 'Campo nome é obrigatório!',
            'preco.required' => 'Campo preço é obrigatório!',
            'descricao.required' => 'Campo descrição é obrigatório!',
        ];

    }
}
