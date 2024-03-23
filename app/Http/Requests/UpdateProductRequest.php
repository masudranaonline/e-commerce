<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            // 'category_id'   => 'required',
            // 'brand_id'      => 'required',
            // 'vendor_id'     => 'required',
            // 'title'         => 'required',
            // 'description'   => 'required',
            // 'cost_price'    => 'required',
            // 'sale_price'    => 'required',
            // 'quantity'      => 'required',
            // 'min_quantity'  => 'required',
            // 'sizes'         => 'required',
            // 'colors'        => 'required',
            // 'warranty'      => 'required',
            // 'status'        => 'required',
            
        ];
    }
}
