<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', [HomeController::class, 'getIndex'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/category', [CategoryController::class,'getIndex'])->middleware(['auth', 'verified'])->name('category.index');

Route::get('category/create', [CategoryController::class, 'getCreate'])->middleware(['auth', 'verified'])
->name('category.create');

Route::post('/category', [CategoryController::class, 'store'])->middleware(['auth', 'verified'])
->name('category.store');

Route::get('/category/show/{idpost}', [CategoryController::class, 'getShow'])->middleware(['auth', 'verified'])
->name('category.show');

Route::get('category/edit/{idpost}', [CategoryController::class, 'getEdit'])->middleware(['auth', 'verified'])
  ->name('category.edit');

  Route::put('/category/show/{idpost}', [CategoryController::class, 'update'])->middleware(['auth', 'verified'])
  ->name('category.update');

  Route::delete('/category/show/{idpost}', [CategoryController::class, 'destroy'])->middleware(['auth', 'verified'])
  ->name('category.destroy');
require __DIR__.'/auth.php';
