<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\NeighborhoodsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/countries', [CountryController::class, 'index']);
Route::get('/countries/{id}', [CountryController::class, 'show']);
Route::get('/cities', [CityController::class, 'index']);
Route::get('/cities/{id}', [CityController::class, 'show']);
Route::get('/countries/{country_id}/cities', [CountryController::class, 'citiesInCountry']);
Route::get('/neighborhoods', [NeighborhoodsController::class, 'index']);
Route::get('/neighborhoods/{id}', [NeighborhoodsController::class, 'show']);
Route::get('/cities/{city_id}/neighborhood', [CityController::class, 'neighborhoodsInCity']);

