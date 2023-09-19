<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class BioFormRequest extends FormRequest
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
            //BioFormRequest
            'name'=>['required', "min:3"],
            'second_name'=> ['required', 'min:3'],
            'description'=>['required', 'min:10'],
            'image'=> ["required", 'mimes:png,svg,jpg']
        ];
    }
}
