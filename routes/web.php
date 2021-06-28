<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('index');
});
Route::get('form',[MainController::class,'form'])->name('form');
Route::post('form',[MainController::class,'store']);

Route::prefix('admin')->group(function () {
    Route::get('documents',[AdminController::class,'documents'])->name('admin.documents');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
