<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginGuestRequest;
use App\Http\Requests\StoreGuestRequest;
use App\Http\Requests\UpdateGuestRequest;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    public function guestregister(StoreGuestRequest $request)
    {
        $guest = Guest::create([
            "g_username" => $request ->g_username,
            "g_password" => Hash::make($request ->g_password),
            "g_name" => $request ->g_name,
            "g_email" => $request ->g_email,
            "g_phone_number" => $request ->g_phone_number
        ]);
        return response()->json($guest, 201);
    }

    public function guestlogintoken(LoginGuestRequest $request)
    {
        $guest = Guest::where("g_email", $request -> g_email)->first();

        if (!$guest || !Hash::check($request -> g_password, $guest -> g_password)) {
            return response() -> json(["message" => "Incorrect username or password"], 401);
        }

        $token = $guest -> createToken("AuthToken")->plainTextToken;

        //return $guest;

        return response()->json(["token" => $token]);
    }

    public function guestlogin(LoginGuestRequest $request)
    {
        $guest = Guest::where("g_email", $request -> g_email)->first();

        if (!$guest || !Hash::check($request -> g_password, $guest -> g_password)) {
            return response() -> json(["message" => "Incorrect username or password"], 401);
        }

        return $guest;
    }

    public function guestlogout(Request $request)
    {
        $guest = auth()->user();
        /** @disregard P1013 Undefined method */
        $currentToken = $guest->currentAccessToken();
        $currentToken->delete();
    }

    public function authGuestData(Request $request)
    {
        $guest = auth()->user();
        /** @disregard P1013 Undefined method */
        $currentToken = $guest->currentAccessToken();
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
        $guest -> fill([
            "g_username" => $request ->g_username,
            "g_name" => $request ->g_name,
            "g_phone_number" => $request ->g_phone_number
        ]);
        $guest->save();
        return $guest;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guest = Guest::find($id);
        if(is_null($guest)){
            return response()->json(["message" => "Guest not found with id: $id"], 404);
        }
        $guest->delete();
        return response()->noContent();
    }
}
