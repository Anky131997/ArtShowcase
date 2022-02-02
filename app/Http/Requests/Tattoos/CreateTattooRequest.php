<?php

namespace App\Http\Requests\Tattoos;

use Illuminate\Foundation\Http\FormRequest;

class CreateTattooRequest extends FormRequest
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
            'name' => 'required | unique:tattoos',
            'description' => 'required',
            'image' => 'required | image',
            'color' => 'required',
            'type' => 'required',
        ];
    }
}
