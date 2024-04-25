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


// vendég regisztrálása végpont
Route::post("/guestregister", [GuestController::class, "guestregister"]);
//vendég bejelentkezése végpont (token nélkül)
Route::post("/guestlogin", [GuestController::class, "guestlogin"]);
//vendég bejelentkezése végpont(tokennel)
Route::post("/guestlogintoken", [GuestController::class, "guestlogintoken"]);
//vendég kijelentkezése (tokennel authentikálva)
Route::post("/guestlogout", [GuestController::class, "guestlogout"])->middleware('auth:sanctum');;
// bejelentkezett vendég adatai (tokennel authentikálva)
Route::get("/guestauthdata", [GuestController::class, "authGuestData"])->middleware('auth:sanctum');

// munkavállaló regisztrálása végpont
Route::post("/employeeregister", [EmployeeAuthController::class, "employeeRegister"]);
//munkavállaló bejelentkezése végpont
Route::post("/employeelogin", [EmployeeAuthController::class, "employeeLogin"]);
//munkavállaló kijelentkezése végpont
Route::post("/employeelogout", [EmployeeAuthController::class, "employeeLogout"])->middleware('auth:sanctum');
//bejelentkezett munkavállaló adatai
Route::get("/employeeauthdata", [EmployeeAuthController::class, "authEmployeeData"])->middleware('auth:sanctum');

// társasjátékok végpontja (CRUD)
Route::apiResource("/boardgame", BoardGameController::class);
// munkavállalók végpontja (CRUD)
Route::apiResource("/employee", EmployeeController::class);
// időpontok végpontja (CRUD)
Route::apiResource("/appointment", AppointmentController::class);
// bejelentkezett munkavállaló saját időpontjai
Route::get("/authemployeeappointment", [AppointmentController::class, "authEmployeeAppointment"])->middleware('auth:sanctum');
// vendégek végpontja (CRUD)
Route::apiResource("/guest", GuestController::class);
