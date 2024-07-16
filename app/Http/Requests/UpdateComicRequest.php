<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateComicRequest extends FormRequest
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
            'title' => [
                'required',
                'string',
                'min:3',
                'max:100',
                Rule::unique('comics', 'title')->ignore($this->route('comic')),
            ],
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
}

