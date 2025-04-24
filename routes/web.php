<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['error' => 'Unhealthy'], 400);
});

Route::get('/test', function () {
    return response()->json([
        'status' => 'ok',
        'timestamp' => now()
    ], 200);
});

Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'timestamp' => now()
    ], 200);
});
