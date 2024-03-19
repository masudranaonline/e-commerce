<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
            'site_name' => 'required|string',
            'site_description' => 'required|string',
            'site_logo' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'whatsup' => 'required|string|max:15',
            'address' => 'required|string',
            'facebook' => 'required|string',
            'twitter' => 'required|string',
            'instagram' => 'required|string',
            'youtube' => 'required|string',
            'linkedin' => 'required|string',
            'map' => 'required|string',
            'copyright' => 'required|string',
            'language' => 'required|string',

        ];
    }
}
