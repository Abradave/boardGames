<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        "appointment",
        "employee_id",
        "booked",
        "guest_id",
        "board_game_id",
        "number_of_players"
    ];
}
