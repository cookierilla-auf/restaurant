<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMenuProductsRequest extends FormRequest
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
            'menu_id' => 'required|filled|integer|exists:menus,id',
            'product_id' => 'required|filled|integer|exists:products,id',
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
            'menu_id.required' => 'You cannot set the menu ID to null. The menu ID field is required.',
            'menu_id.filled' => 'You cannot set the menu ID to null. The menu ID field is required.',
            'menu_id.integer' => 'The menu ID must be an integer.',
            'menu_id.exists' => 'The selected menu does not exist.',
            'product_id.required' => 'You cannot set the product ID to null. The product ID field is required.',
            'product_id.filled' => 'You cannot set the product ID to null. The product ID field is required.',
            'product_id.integer' => 'The product ID must be an integer.',
            'product_id.exists' => 'The selected product does not exist.',
        ];
    }
}
