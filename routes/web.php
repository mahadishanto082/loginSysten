<?php

use Illuminate\Support\Facades\Route;

Route::get('{any?}', function () {
    return view('app');
})->where('any', '.*');
Route::post('api/login', [App\Http\Controllers\API\V1\AuthController::class, 'login']);

