<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\StorefrontController;


Route::get('/', function () {
    return view('storefront.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [StorefrontController::class,"index"])->name("index");
Route::middleware('role:admin')->get("/admin",function(){
    dd("I'M have permission to access this panel as ADMIN");
});
Route::middleware('role:writer')->get("/write",function(){
    dd("I'M WRITER and have permission to access this panel as writer");
});
require __DIR__.'/auth.php';
