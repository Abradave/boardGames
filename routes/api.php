<?php

use App\Http\Controllers\API\AppointmentController;
use App\Http\Controllers\API\BoardGameController;
use App\Http\Controllers\API\EmployeeController;
use App\Http\Controllers\API\GuestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/guest', function (Request $request) {
    return $request->guest();
});

Route::post("/guestregister", [GuestController::class, "guestregister"]);
Route::post("/guestlogin", [GuestController::class, "guestlogin"]);
Route::post("/guestlogout", [GuestController::class, "guestlogout"]);

Route::post("employeeregister", [EmployeeController::class, "employeeRegister"]);
Route::post("employeelogin", [EmployeeController::class, "employeeLogin"]);
Route::post("employeelogout", [EmployeeController::class, "employeeLogout"]);


Route::apiResource("/boardgame", BoardGameController::class);

Route::apiResource("/employee", EmployeeController::class);

Route::apiResource("/appointment", AppointmentController::class);

Route::apiResource("/guest", GuestController::class);
