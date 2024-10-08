<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class,'index']);
Route::get('/show/{id}', [HomeController::class,'show'])->name('show');
Route::get('/create', [HomeController::class,'create'])->name('create');
Route::get('/edit/{id}', [HomeController::class,'edit'])->name('edit');
Route::get('/delete/{id}', [HomeController::class,'destroy'])->name('delete');
Route::post('/', [HomeController::class,'store'])->name('store');
Route::put('/update/{todo}', [HomeController::class,'update'])->name('update');

Route::get('/category', [CategoryController::class,'index'])->name('category');
Route::get('/category/create', [CategoryController::class,'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class,'store'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class,'edit']);
Route::put('/category/update/{id}', [CategoryController::class,'update']);
Route::get('/category/{id}', [CategoryController::class,'destroy'])->name('category.destroy');
