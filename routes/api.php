<?php

use App\Http\Controllers\WilayahController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(WilayahController::class)->group(function () {
    Route::get('provinsi', 'getProvinces');
});
