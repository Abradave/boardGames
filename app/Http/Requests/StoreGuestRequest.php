<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGuestRequest extends FormRequest
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
            "g_username" => "required|string|max:100|unique:guests,g_username",
            "g_password" => "required|string|max:100",
            "g_name" => "required|string|max:100",
            "g_email" => "required|email|max:200|unique:guests,g_email",
            "g_phone_number" => "required|string|max:20",
        ];
    }
}
