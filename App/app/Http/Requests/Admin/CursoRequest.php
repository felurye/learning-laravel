<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo'    => 'required|max:255',
            'descricao' => 'required|max:255',
            'valor'     => 'required|numeric|min:0',
            'imagem'    => 'nullable|image|max:2048',
            'publicado' => 'nullable|boolean',
        ];
    }

    public function messages()
    {
        return [
            'titulo.required'    => 'O título é obrigatório.',
            'titulo.max'         => 'O título não pode ter mais de 255 caracteres.',
            'descricao.required' => 'A descrição é obrigatória.',
            'descricao.max'      => 'A descrição não pode ter mais de 255 caracteres.',
            'valor.required'     => 'O valor é obrigatório.',
            'valor.numeric'      => 'O valor deve ser numérico.',
            'valor.min'          => 'O valor não pode ser negativo.',
            'imagem.image'       => 'O arquivo deve ser uma imagem.',
            'imagem.max'         => 'A imagem não pode ultrapassar 2 MB.',
        ];
    }
}
