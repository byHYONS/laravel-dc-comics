<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|unique:comics,title|string|min:3|max:100',
            'description' => 'required|string|max:3500',
            'thumb' => 'required|string|max:512',
            'price' => 'required|string|min:1|max:10',
            'series' => 'required|string|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:50',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve essere più di 3 caratteri',
            'title.max' => 'Il titolo deve essere lunggo massimo 100 caratteri',
            'description.required' => 'La descrizione è obbligatoria',
            'thumb.required' => 'L\'immagine è obbligatoria',
            'price.required' => 'Il prezzo è obbligatorio',
            'series.required' => 'La serie è obbligatoria',
            'sale_date.required' => 'La data è obbligatoria',
            'sale_date.data' => 'Inserisci il formato data',
            'type.required' => 'Il tipo è obbligatorio',
            'artists.required' => 'L\'artista è obbligatorio',
            'writers.required' => 'Lo scrittore è obbligatorio',
        ];
    }
}

 	 	 	 	 	 	 	 	