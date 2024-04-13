<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginEmployeeRequest;
use App\Http\Requests\RegisterEmployeeRequest;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;

class EmployeeAuthController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function employeeRegister(RegisterEmployeeRequest $request)
    {
        $employee = Employee::create([
            "e_name" =>$request->e_name,
            "e_email" =>$request->e_email,
            "e_password" => Hash::make($request->e_password)
        ]);
        return response()->json($employee, 201);

    }

    public function employeeLogin(LoginEmployeeRequest $request)
    {
        $employee = Employee::where("e_email", $request->e_email)->first();

        if(!$employee || !Hash::check($request->e_password, $employee->e_password)){
            return response()->json(["message" => "Incorrect email or password."], 401);
        }

        $e_token = $employee->createToken("EmployeeAuthToken")->plainTextToken;
        return response()->json(["token" => $e_token]);
    }

    public function employeeLogout(Request $request)
    {
        $employee = auth()->user();
        /** @disregard P1013 Undefined method */
        $currentToken = $employee->currentAccessToken();
        $currentToken->delete();
    }
}
