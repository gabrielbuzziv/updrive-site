<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemoRequest extends FormRequest
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
            'name'    => 'required',
            'email'   => 'required|email',
            'phone'   => 'required',
            'company' => 'required'
        ];
    }

    /**
     * Translate attributes name.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => 'nome',
            'email' => 'e-mail',
            'phone' => 'telefone',
            'company' => 'empresa'
        ];
    }
}
