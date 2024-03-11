<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::post('/submit','App\Http\Controllers\student@display');
Route::get('/submit','App\Http\Controllers\student@data');
