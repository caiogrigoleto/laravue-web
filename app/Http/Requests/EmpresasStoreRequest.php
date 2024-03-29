<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresasStoreRequest extends FormRequest
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
            'cnpj' => 'required|string|max:255',
            'email' =>'required|string|max:255',
            'senha' => 'required|string|max:255',
            'nomeEmpresa' => 'required|string|max:255',
            'codEmpresa' => 'required|integer',
            'codLoja' => 'required|integer',
            'flagAtivo' => 'required|boolean',
        ];
    }
}
