<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcomWebsiteController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/ecom/home', [EcomWebsiteController::class,'index'])->name('ecom.home');
//Route::get('/product/category/{id}', [EcomWebsiteController::class,'categoryProduct'])->name('product.category');
//Route::get('/product/subCategory/{id}', [EcomWebsiteController::class,'subCategoryProduct'])->name('product.subCategory');
//Route::get('/product/detail/{id}', [EcomWebsiteController::class,'productDetails'])->name('product.detail');

