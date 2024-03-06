<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\File;
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
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => ['nullable', File::image()->max('10mb')],
            'custom_price' => 'required|integer|min:0',
            'salse_price' => 'required|integer|min:0',
            'quantity' => 'required|integer|min:0',
            'minimum_quantity' => 'required|integer|min:2',
            'sizes' => 'required',
            'colors' => 'required',
            'warranty' => 'required',
        ];
    }
}
