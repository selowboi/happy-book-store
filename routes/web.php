<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Book
Route::get('/', [BookController::class, 'books']);
Route::get('/books', [BookController::class, 'books']);

// Category
Route::get('/fiction/{category_id}', [CategoryController::class, 'fictions']);
Route::get('/science/{category_id}', [CategoryController::class, 'science']);
Route::get('/computer/{category_id}', [CategoryController::class, 'computers']);

// Detail
Route::get('/details/{detail_id}', [DetailController::class, 'details']);

// Contact
Route::get('/contact', [ContactController::class, 'contact']);



