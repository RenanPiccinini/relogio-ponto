<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncionarioRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'tipo' => 'required',
            'password' => 'required|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Campo nome é obrigatório',
            'email.required' => 'Campo E-mail é obrigatório',
            'tipo.required' => 'Campo Tipo é obrigatório',
            'password.required' => 'Campo Senha é obrigatório',
            'password.confirmed' => 'A confirmação de senha não está correta.'
        ];
    }
}
