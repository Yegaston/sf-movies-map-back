<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\Api')->group(function () {

    Route::prefix('/api/v1')->group(function () {
        Route::get('/map-points', 'MoviesController@getAll');
    });

    Route::get('/health', function (Request $request) {
        return response()->json(['ok' => 'ok'], 200);
    });

    Route::fallback(function () {
        return response()->json(['error' => 'Not Found'], 404);
    });
});
