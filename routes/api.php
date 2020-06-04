<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login',   'AuthController@login')->name('login');
Route::get ('logout',  'AuthController@logout')->name('logout');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
     return $request->user();
});