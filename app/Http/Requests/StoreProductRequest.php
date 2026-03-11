<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|filled|string|max:255|min:1',
            'price' => 'required|filled|numeric|min:0',
            'image_path' => 'nullable|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'You cannot leave the product name blank. The name field is required.',
            'name.filled' => 'You cannot leave the product name blank. The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name must not exceed 255 characters.',
            'name.min' => 'You cannot leave the product name blank. The name field is required.',
            'price.required' => 'You cannot leave the price blank. The price field is required.',
            'price.filled' => 'You cannot leave the price blank. The price field is required.',
            'price.numeric' => 'The price must be a numeric value.',
            'price.min' => 'The price must be at least 0.',
            'image_path.string' => 'The image path must be a string.',
        ];
    }
}
