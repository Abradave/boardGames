<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBoardGameRequest extends FormRequest
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
            "bg_name" => "required|string|max:200|unique:board_games,bg_name",
            "min_players" => "required|integer|min:1",
            "max_players" => "required|integer",
            "description" => "required|string|max:30000"
        ];
    }
}
