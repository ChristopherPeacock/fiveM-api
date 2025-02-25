<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    try {
        $allFiveMPlayers = DB::table('players')->get();
        return response()->json($allFiveMPlayers);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Could not retrieve players.'], 500);
    }
    
});

Route::get('/players/{id}', function ($id) {
    try {
        $playerName = DB::table('players')->where('id', $id)->pluck('name')->first();
        $playerMoney = DB::table('players')->where('id', $id)->pluck('money')->first();
        return response()->json([$playerName, $playerMoney]);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Could not retrieve player.'], 500);
    }
});




require __DIR__.'/auth.php';