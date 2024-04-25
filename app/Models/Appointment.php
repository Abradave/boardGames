<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function employee() : BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
