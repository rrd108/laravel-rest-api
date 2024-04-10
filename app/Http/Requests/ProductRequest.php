<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category' => 'required|string|min:2',
            'name' => 'required|string|max:255|min:3',
            'description' => 'required|string|min:10',
            'picture' => 'required|string|min:20',
            'price' => 'numeric',
            'stock' => 'nullable|numeric',
        ];
    }
}
