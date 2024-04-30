<?php

use App\Http\Controllers\API\AppointmentController;
use App\Http\Controllers\API\BoardGameController;
use App\Http\Controllers\API\EmployeeAuthController;
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



//Guest registration
Route::post("/guestregister", [GuestController::class, "guestregister"]);
//Guest log in (no token created)
Route::post("/guestlogin", [GuestController::class, "guestlogin"]);
//Guest log in (create token)
Route::post("/guestlogintoken", [GuestController::class, "guestlogintoken"]);
//Guest log out
Route::post("/guestlogout", [GuestController::class, "guestlogout"])->middleware('auth:sanctum');;
//Authenticated guest's data
Route::get("/guestauthdata", [GuestController::class, "authGuestData"])->middleware('auth:sanctum');

//Employee registration
Route::post("/employeeregister", [EmployeeAuthController::class, "employeeRegister"]);
//Employee log in
Route::post("/employeelogin", [EmployeeAuthController::class, "employeeLogin"]);
//Employee log out
Route::post("/employeelogout", [EmployeeAuthController::class, "employeeLogout"])->middleware('auth:sanctum');
//Authenticated employee's data
Route::get("/employeeauthdata", [EmployeeAuthController::class, "authEmployeeData"])->middleware('auth:sanctum');


//Board games (CRUD)
Route::apiResource("/boardgame", BoardGameController::class);
//Employees (CRUD)
Route::apiResource("/employee", EmployeeController::class);
//Appoinmtents (CRUD)
Route::apiResource("/appointment", AppointmentController::class);
//Authenticated employee's appointments
Route::get("/authemployeeappointment", [AppointmentController::class, "authEmployeeAppointment"])->middleware('auth:sanctum');
//Guests (CRUD)
Route::apiResource("/guest", GuestController::class);
