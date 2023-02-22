<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::view("/example","example");

Route::any('/', function () {

});
