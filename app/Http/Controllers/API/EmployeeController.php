<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return response()->json($employees, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        $employee = Employee::create([
            "e_name" =>$request->e_name,
            "e_email" =>$request->e_email,
            "e_password" => Hash::make($request->e_password)
        ]);
        return response()->json($employee, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::find($id);
        if(is_null($employee)){
            return response()->json(["message" => "Employee not found with id: $id"], 404);
        }
        return $employee;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, string $id)
    {
        $employee = Employee::find($id);
        if(is_null($employee)){
            return response()->json(["message" => "Employee not found with id: $id"], 404);
        }
        //$employee->fill($request->all());
        $employee->fill([
            "e_name" =>$request->e_name,
            "e_email" =>$request->e_email,
            "e_password" => Hash::make($request->e_password)
        ]);
        $employee->save();
        return $employee;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::find($id);
        if(is_null($employee)){
            return response()->json(["message" => "Employee not found with id: $id"], 404);
        }
        $employee->delete();
        return response()->noContent();
    }
}
