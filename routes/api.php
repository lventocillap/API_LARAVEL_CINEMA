<?php

use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group([
    'prefix' => 'movies',
    'controller' => MovieController::class,
], static function (){
    Route::get('/','index');
    Route::get('/{movie}', 'show');
    Route::post('/', 'store');
    Route::patch('/{movie}', 'update');
    Route::delete('/{movie}', 'delete');
});