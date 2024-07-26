<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObjectRequest extends FormRequest
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
            'title' => 'nullable',
            'description' => 'nullable',
            'city' => 'nullable',
            'type_room' => 'required',
            'column_pitch' => 'nullable',
            'lighting' => 'nullable',
            'fire_system' => 'nullable',
            'price_type' => 'nullable',
            'price' => 'nullable',
            'all_square' => 'nullable',
            'free_square' => 'nullable',
            'min_square' => 'nullable',
            'class_house' => 'nullable',//string
            'height' => 'nullable',
            'floor_load' => 'nullable',
            'region_id' => 'nullable',
            'highway_id' => 'nullable',
            'direction_id' => 'nullable',
            'distance_mkad' => 'nullable',
            'images' => 'nullable',
            'date' => 'nullable|date',
            'availability' => 'nullable',

            'zoom' => 'nullable',
            'x_coord' => 'nullable',
            'y_coord' => 'nullable',

            'eng_city' => 'nullable',
            'eng_title' => 'nullable',
            'eng_description' => 'nullable',
            'eng_lighting' => 'nullable',
            'eng_fire_system' => 'nullable',
        ];
    }
}
