<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyWebsiteController;
use App\Http\Controllers\MyContactController;
use App\Http\Controllers\EducationController;


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

Route::get('/', [MyWebsiteController::class, 'index'])->name('home');
Route::get('/portfolio/mycontact/', [MyContactController::class, 'index'])->name('mycontact');
Route::get('/portfolio/education/', [EducationController::class, 'index'])->name('education');
//Route::get('/product-category/{id}', [MyWebsiteController::class, 'productCategory'])->name('product.category');

//
//Route::get('/', function () {return view('welcome');});
