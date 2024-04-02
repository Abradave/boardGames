<?php

use App\Models\BoardGame;
use App\Models\Employee;
use App\Models\Guest;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->dateTime("appointment");
            $table->foreignIdFor(Employee::class)->constrained();
            $table->boolean("booked");
            $table->foreignIdFor(Guest::class)->nullable()->constrained();
            $table->foreignIdFor(BoardGame::class)->nullable()->constrained();
            $table->integer("number_of_players")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
