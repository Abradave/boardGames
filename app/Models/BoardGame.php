<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardGame extends Model
{
    use HasFactory;
    protected $fillable = [
        "bg_name",
        "min_players",
        "max_players",
        "description"
    ];
}
