<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGuestRequest;
use App\Http\Requests\UpdateGuestRequest;
use App\Models\Guest;
use GMP;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guests = Guest::all();
        return response()->json($guests, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuestRequest $request)
    {
        //Guest::create($request->all());
        $guest = new Guest();
        $guest->fill($request->all());
        $guest->save();
        return response()->json($guest, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $guest = Guest::find($id);
        if(is_null($guest)){
            return response()->json(["message" => "Guest not found with id: $id"], 404);
        }
        return $guest;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuestRequest $request, string $id)
    {
        $guest = Guest::find($id);
        if(is_null($guest)){
            return response()->json(["message" => "Guest not found with id: $id"], 404);
        }
        $guest->fill($request->all());
        $guest->save();
        return $guest;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
