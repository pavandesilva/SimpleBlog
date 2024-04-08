<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Posting posts
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');

//Showing posts on home
Route::get('/posts/{postId}/show', [PostController::class, 'show'])->name('posts.show');

//show all posts
Route::get('/posts/all', [HomeController::class, 'allPosts'])->name('posts.all');

//go to edit post
Route::get('/posts/{postId}/edit', [PostController::class, 'edit'])->name('posts.edit');

//edit post
Route::post('/posts/{postId}/update', [PostController::class, 'update'])->name('posts.update');

//delete post
Route::get('/posts/{postId}/delete', [PostController::class, 'delete'])->name('posts.delete');
