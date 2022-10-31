<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuarioRequest extends FormRequest
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
        $id = $this->route( 'user' )->id;
        return [
            'nombre' => 'required|min:3|max:200',
            'apellido' => 'required|min:3|max:200',
            'email' => "required|min:5|max:100|email|unique:usuarios,email,{$id}",
        ];
    }
}
