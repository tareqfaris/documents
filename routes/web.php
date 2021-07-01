<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\UsersController;


Route::middleware(['auth'])->group(function () {
Route::get('/', function () {return view('welcome');});
Route::post('form',[MainController::class,'store'])->name('form');
Route::get('documents',[MainController::class,'documents'])->name('myDocuments');
Route::get('documents/{document}',[MainController::class,'show'])->name('document.show');
Route::get('attachment/{attachment}',[MainController::class,'downloadAttachment'])->name('download');
Route::prefix('forms')->group(function () {
    Route::get('other',[MainController::class,'other'])->name('other');
    Route::get('document',[MainController::class,'document'])->name('document');
    Route::get('endorsement',[MainController::class,'endorsement'])->name('endorsement');
});
Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    Route::get('action/{document}',[AdminController::class,'action'])->name('admin.action');
    Route::post('action/{document}',[AdminController::class,'actionSave']);
    Route::get('documents',[AdminController::class,'documents'])->name('admin.documents');
    Route::get('departments',[DepartmentsController::class,'index'])->name('admin.departments');
    Route::get('departments/create',[DepartmentsController::class,'create'])->name('admin.departments.create');
    Route::post('departments',[DepartmentsController::class,'store'])->name('admin.departments.store');
    Route::get('departments/edit/{department}',[DepartmentsController::class,'edit'])->name('admin.departments.edit');
    Route::put('departments/{department}',[DepartmentsController::class,'update'])->name('admin.departments.update');
    Route::delete('departments/{department}',[DepartmentsController::class,'destroy'])->name('admin.departments.delete');
    Route::delete('attachment/{attachment}',[AdminController::class,'attachmentDestroy'])->name('admin.attachment.delete');

    Route::prefix('users')->group(function () {
        Route::get('/',[UsersController::class,'index'])->name('admin.users');
        Route::get('create',[UsersController::class,'create'])->name('admin.users.create');
        Route::post('/',[UsersController::class,'store'])->name('admin.users.store');
        Route::get('edit/{department}',[UsersController::class,'edit'])->name('admin.users.edit');
        Route::put('{department}',[UsersController::class,'update'])->name('admin.users.update');
        Route::delete('{department}',[UsersController::class,'destroy'])->name('admin.users.delete');
    });
});

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
