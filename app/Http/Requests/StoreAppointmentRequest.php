<?php

namespace App\Http\Requests;

use Brick\Math\BigInteger;
use DateTime;
use Illuminate\Foundation\Http\FormRequest;

class StoreAppointmentRequest extends FormRequest
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
            "appointment" => "required|date_format:Y-m-d H:i:s",
            "employee_id" => "required|integer",
            "booked" => "boolean",
            //"guest_id" => "integer",
            //"board_game_id" => "integer",
            //"number_of_players" => "integer"
        ];
    }
}
