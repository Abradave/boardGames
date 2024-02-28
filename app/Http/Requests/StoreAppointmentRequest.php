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
            "appointment" => "required|dateTime|min:now",
            "employee_id" => "required|bigInteger",
            "booked" => "boolean",
            "guest_id" => "bigInteger",
            "board_game_id" => "bigInteger",
            "number_of_players" => "integer"
        ];
    }
}
