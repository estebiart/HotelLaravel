<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\CategoriasController;
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


Route::get('/hoteles', [HotelController::class, 'getAll']);
Route::get('/hoteles/?{id}', [HotelController::class,'show']);
Route::delete('/hoteles/?{id}', [HotelController::class,'destroy']);
Route::put('/hoteles/?{id}', [HotelController::class,'update']);
Route::get('/hoteles/?{filtro,tipo}', [HotelController::class,'filtrar']);

Route::post('/hoteles', [HotelController::class, 'store']);