<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\PlaneController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::resource('flights', FlightsController::class, [
	'as' => 'api'
]);
Route::resource('airports', AirportController::class);
Route::resource('planes', PlaneController::class);
// Route::get('flights', [FlightsController::class, 'getAll']);
