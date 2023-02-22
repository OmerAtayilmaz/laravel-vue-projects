<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//binding
//users/1 -> User::find(1) gibi davranır
//users/1 -> User::where("id",1)->first() gibi davranır
Route::get("/users/{user}",function (User $user){
    return $user;
});

Route::fallback(function () {
    return "invalid route";
});
