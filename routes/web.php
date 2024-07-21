<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class,'index']);
Route::get('/category/create', [CategoryController::class,'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class,'store'])->name('category.store');
