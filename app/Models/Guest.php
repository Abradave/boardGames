<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Guest extends Model
{
    use HasFactory,HasApiTokens;

    protected $fillable = [
        "g_username",
        "g_password",
        "g_name",
        "g_email",
        "g_phone_number"
    ];
}
