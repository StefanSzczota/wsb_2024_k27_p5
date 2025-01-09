<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeatsController;
use App\Http\Controllers\UsersController;
use App\http\Controllers\UserbeatController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [UserbeatController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    ////
    Route::get('comment/create/{id}', [CommentController::class, 'create'])->name('comment/create');
    Route::post('comment/store/{id}', [CommentController::class, 'store'])->name('comment/store');
});

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin/dashboard');
///////
    Route::get('/admin/users', [UsersController::class, 'index'])->name('admin/users');
    Route::post('/admin/users/save', [UsersController::class, 'save'])->name('admin/users/save');
    Route::get('/admin/users/edit/{id}', [UsersController::class, 'edit'])->name('admin/users/edit');
    Route::put('/admin/users/edit/{id}', [UsersController::class, 'update'])->name('admin/users/update');
    Route::get('/admin/users/delete/{id}', [UsersController::class, 'delete'])->name('admin/users/delete');
/////
    Route::get('/admin/beats', [BeatsController::class, 'index'])->name('admin/beats');
    Route::get('/admin/beats/create', [BeatsController::class, 'create'])->name('admin/beats/create');
    Route::post('/admin/beats/save', [BeatsController::class, 'save'])->name('admin/beats/save');
    Route::get('/admin/beats/edit/{id}', [BeatsController::class, 'edit'])->name('admin/beats/edit');
    Route::put('/admin/beats/edit/{id}', [BeatsController::class, 'update'])->name('admin/beats/update');
    Route::get('/admin/beats/delete/{id}', [BeatsController::class, 'delete'])->name('admin/beats/delete');
///
    Route::get('beats/{id}/comments', [CommentController::class, 'index'])->name('comments/index');

});

require __DIR__.'/auth.php';
//nieaktualne 
//Route::get('admin/dashboard', [HomeController::class, 'index']);
//Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware('auth', 'admin');