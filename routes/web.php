<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
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

Route::get('posts', [PostController::class, 'index'])->name('posts');
Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');
Route::get('/post/create}', [PostController::class, 'create'])->name('posts.create');
Route::get('/post/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/contact', [PostController::class, 'contact'])->name('contact');

Route::get('/', [Controller::class, 'index']);
