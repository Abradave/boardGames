<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBoardGameRequest;
use App\Models\BoardGame;
use Illuminate\Http\Request;

class BoardGameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $board_games = BoardGame::all();
        return response()->json($board_games, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBoardGameRequest $request)
    {
        $board_game = new BoardGame();
        $board_game->fill($request->all());
        $board_game->save();
        return response()->json($board_game, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $board_game = BoardGame::find($id);
        if(is_null($board_game)){
            return response()->json(["message" => "Board game not found with id: $id"], 404);
        }
        return $board_game;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
