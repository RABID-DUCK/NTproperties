<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
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
            'price_type' => 'nullable',
            'type_room' => 'nullable|integer',
            'price_min' => 'nullable|integer',
            'price_max' => 'nullable|integer',
            'square_min' => 'nullable|integer',
            'square_max' => 'nullable|integer',
            'region' => 'nullable',
            'direction' => 'nullable',
            'highway' => 'nullable',
            'distance_min' => 'nullable|integer',
            'distance_max' => 'nullable|integer',
        ];
    }
}
