<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
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
            'title'=>'required|min:3|max:50',
            'producer'=>'required|max:100',
            'cover'=>'image',
            'description'=>'required',
        ];
    }

    public function messages(): array{
        return [
            'title.required'=>'Attenzione!il titolo deve contenere da 3 a 50 caratteri!',
            'producer.required'=>'Attenzione!il producer deve contenere da 1 a 100 caratteri!',
            'cover.image'=>'Attenzione!devi caricare un file di tipo image.',
            'description.required'=>'Attenzione!E\' necessario riempire il campo descrizione!',
        ];
    }
}
