<?php

use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/validation-example",[ItemController::class,"validation_example"]);
Route::post("/validation-example",[ItemController::class,"validationform"])->name("validationPost");
Route::get("/items",[ItemController::class,'index']);

Route::prefix("/item")->controller(ItemController::class)->group(function(){
    Route::post("/store","store");
    Route::put("/{id}","update");
    Route::delete("/{id}","destroy");
    Route::put("/edit/{id}","edit");
});
