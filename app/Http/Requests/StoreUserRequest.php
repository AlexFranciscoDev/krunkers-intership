<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required',
            'lastName' => 'required',
            'email' => 'required|email:rfc,dns',
            'group' => 'required|max:5',
            'phone' => 'required|digits:9',
            'password' => 'min:6|required_with:passwordConfirm|same:passwordConfirm',
            'passwordConfirm' => 'min:6'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'lastName.required' => 'Los apellidos son obligatorios',
            'email.required' => 'El email es obligatorio',
            'email.email' => 'El email introducido no es válido',
            'group.required' => 'El grupo es obligatorio',
            'group.max' => 'El grupo tiene que tener 5 caracteres como máximo',
            'phone.required' => 'El número de teléfono es obligatorio',
            'phone.digits' => 'El número de teléfono debe estar formado por 9 digitos',
            'password.min' => 'La contraseña tiene que tener 6 caracteres como mínimo',
            'password.same' => 'Las contraseñas no coinciden'
        ];
    }
}
