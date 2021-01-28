<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;

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
Route::get('/modifica-articoli', [AdminController::class, 'index'])->name('admin.index');
Route::get('/modifica/{article}', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/modifica/submit/{article}', [AdminController::class, 'update'])->name('admin.edit.submit');
Route::delete('/cancella/{article}', [AdminController::class, 'destroy'])->name('admin.delete');
Route::get('/pannello-admin', [UserController::class, 'index'])->name('user.index');
Route::delete('/cancella/{user}', [UserController::class, 'destroy'])->name('user.delete');
Route::put('/aggiungi/{user}', [UserController::class, 'add'])->name('user.index.add');
Route::put('/rimuovi/{user}', [UserController::class, 'remove'])->name('user.index.remove');

