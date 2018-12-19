<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FuncionarioRequest extends FormRequest
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
        $rules = [
            'nome'      => 'required',
            'sexo'      => 'required|in:Masculino,Feminino',
            'idade'     => 'required|integer|min:16|max:80',
            'tipo'      => 'required|in:P,A',
            'linguagem' => [
                'required_if:tipo,P',
                'nullable',
                Rule::in(['PHP', 'Java', 'C#', 'Python'])
            ],
            'projeto'   => [
                'required_if:tipo,A',
                'nullable',
                Rule::in([
                    'Gestor Comercial',
                    'Sistema para Farmacias',
                    'SmartMarket'
                ])
            ],
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'nome.required'         => 'O Nome é obrigatório',
            'sexo.required'         => 'O Sexo é obrigatório',
            'sexo.in'               => 'Informe um Sexo válido',
            'idade.required'        => 'A Idade é obrigatória',
            'idade.min'             => 'A Idade mínima é 16 anos',
            'idade.max'             => 'A Idade máxima é 80 anos',
            'tipo.required'         => 'O Tipo é obrigatório',
            'tipo.in'               => 'O Tipo é inválido',
            'linguagem.required_if' => 'A Linguagem é obrigatória para programadores',
            'linguagem.in'          => 'Informe uma Linguagem válida',
            'projeto.required_if'   => 'O Projeto é obrigatório para analistas',
            'projeto.in'            => 'Informe um Projeto válido',
        ];
    }
}
