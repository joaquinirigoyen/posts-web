<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'getHome'])
->name('home');

Route::get('/login', function(){
  return "Login Usuario";
});
Route::get('/logout', function(){
  return "Logout Usuario";
});
Route::get('/category', [CategoryController::class,'getIndex'])
->name('category.index');

Route::post('/category', [CategoryController::class, 'store'])
->name('category.store');

Route::get('/category/show/{id}', [CategoryController::class, 'getShow'])
->name('category.show');

Route::get('category/create', [CategoryController::class, 'getCreate'])
->name('category.create');

Route::get('category/edit/{id}', [CategoryController::class, 'getEdit'])
->name('category.edit');

Route::put('/category/show/{id}', [CategoryController::class, 'update'])
->name('category.update');

Route::delete('/category/show/{id}', [CategoryController::class, 'destroy'])
->name('category.destroy');
