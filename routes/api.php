<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
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


Route::get( 'articulos', 'ArticuloController@index' );
Route::post( 'articulos', 'ArticuloController@store' );
Route::put( 'articulos/{id}', 'ArticuloController@update' );
Route::delete( 'articulos/{id}', 'ArticuloController@destroy' );