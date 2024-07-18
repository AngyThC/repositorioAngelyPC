<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('nombre')->group(function () {
    Route::get('/get',[ PersonaController::class, 'get']);
    Route::post('/crear',[ PersonaController::class, 'create']);
});

// En tu archivo routes/web.php
Route::get('/csrf-token', function () {
    return response()->json(['csrf_token' => csrf_token()]);
});
