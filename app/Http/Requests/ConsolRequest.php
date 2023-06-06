<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsolRequest extends FormRequest
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
            'name'=>'required|max:50',
            'brand'=>'required|max:100',
            'description'=>'required',
            'logo'=>'image',
        ];
    }
    public function messages(): array{
        return [
            'name.required'=>'Attenzione!il titolo deve contenere massimo 50 caratteri!',
            'brand.required'=>'Attenzione!il brand deve contenere da 1 a 100 caratteri!',
            'logo.image'=>'Attenzione!devi caricare un file di tipo image.',
            'description.required'=>'Attenzione!E\' necessario riempire il campo descrizione!',
        ];
    }
}
