<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'name' => 'Required | min: 5 | max:50',
            'client_name' => 'Required | min: 5 | max:75',
            'cover_image' => 'Required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Campo obbligatorio',
            'name.min' => 'Caratteri minimi :min',
            'name.max' => 'Caratteri minimi :max',
            'client_name.required' => 'Campo obbligatorio',
            'client_name.min' => 'Caratteri minimi :min',
            'client_name.max' => 'Caratteri minimi :max',
            'cover_image.required' => 'Campo obbligatorio',
        ];
    }
}
