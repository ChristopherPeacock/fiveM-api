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


require __DIR__.'/auth.php';