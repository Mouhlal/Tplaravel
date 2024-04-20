<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StgController;
use Illuminate\Support\Facades\Route;

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

//get pour la lecture
//post pour  l'ajout

Route::get('/',[BooksController::class,'index'])->name('index');

Route::get('/add',[BooksController::class,'add'])->name( 'add' );
Route::post('/store',[BooksController::class, 'store'] )->name('store');

Route::get('/delete/{id}',[BooksController::class,'delete'])->name('delete');
/* Route::delete('/delete/{id}',[BooksController::class,'delete'])->name('delete');
 */
Route::get('/edit/{id}', [BooksController::class, 'edit'])->name('edit');
Route::post('/books/update/{id}', [BooksController::class, 'update'])->name('update');


Route::get('/show',[LoginController::class,'show'])->name('show');

Route::post('/login',[LoginController::class,'login'])->name('login');

Route::get('/signup',[LoginController::class,'signup'])->name('signup');
Route::post('/register',[LoginController::class,'register'])->name('register');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/details/{id}',[LoginController::class,'details'])->name('details');

/* Route::get('/art',[ArticleController::class,'index'])->name('index');
 */
