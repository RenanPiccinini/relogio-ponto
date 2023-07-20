<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required',
            'categoria' => 'required',
            'subcategoria' => 'required',
            'marca' => 'required',
            'estoque' => 'required',
            'tamanho' => 'required',
            'cor' => 'required',
            'imagem' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Campo nome é obrigatório',
            'descricao.required' => 'Campo descricao é obrigatório',
            'preco.required' => 'Campo preco é obrigatório',
            'categoria.required' => 'Campo categoria é obrigatório',
            'subcategoria.required' => 'Campo subcategoria é obrigatório',
            'marca.required' => 'Campo marca é obrigatório',
            'estoque.required' => 'Campo estoque é obrigatório',
            'tamanho.required' => 'Campo tamanho é obrigatório',
            'cor.required' => 'Campo cor é obrigatório',
            'imagem.required' => 'Campo imagem 1 é obrigatório',
        ];
    }
}
