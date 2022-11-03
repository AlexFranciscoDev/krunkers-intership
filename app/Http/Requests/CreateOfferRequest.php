<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOfferRequest extends FormRequest
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
            'offerName' => 'required|max: 50',
            'typeWorkday' => 'required',
            'area' => 'required',
            'description' => 'required',
            'city' => 'required|max: 50',
            'requirements' => 'required'
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
            'offerName.required' => 'El campo nombre és obligatorio',
            'offerName.max' => 'El campo nombre no puede superar los 50 carácteres',
            'typeWorkday.required' => 'El campo tipo de jornada és obligatorio',
            'area.required' => 'El campo area és obligatorio',
            'description.required' => 'El campo descripción és obligatorio',
            'city.required' => 'El campo ciudad és obligatorio',
            'city.max' => 'El campo ciudad no puede superar los 50 carácteres',
            'requirements.required' => 'El campo requerimentos és obligatorio'
        ];
    }
}
