<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGuestRequest extends FormRequest
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
            "g_username" => "string|max:100",
            "g_password" => "string|max:100",
            "g_name" => "string|max:100",
            "g_email" => "email|max:200",
            "g_phone_number" => "string|max:20",
        ];
    }
}
