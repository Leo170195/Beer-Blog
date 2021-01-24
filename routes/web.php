<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/article', [ArticleController::class, 'article'])->name('article');
Route::post('/article/submit', [ArticleController::class, 'submit'])->name('article.submit');
Route::get('/article/detail/{article}', [ArticleController::class, 'detail'])->name('detail');
Route::get('/cartina', [HomeController::class, 'cartina'])->name('cartina');
Route::get('/article/{region}', [HomeController::class, 'show'])->name('show');


