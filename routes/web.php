<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;

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

// Views Routes

Route::controller(ViewsController::class)->prefix('/')->group(function(){
    Route::get('/', 'index')->name('index');
});

// Posts Routes
Route::controller(PostController::class)->prefix('/')->group(function(){
    Route::get('/posts', 'index')->name('posts.index');
    Route::get('/posts/create-new-post', 'create')->name('posts.create');
    Route::post('/posts/create-new-post', 'store')->name('posts.store');
    Route::get('/posts/{post}', 'show')->name('posts.show');
    Route::get('/posts/{post}/edit', 'edit')->name('posts.edit');
    Route::put('/posts/{post}', 'update')->name('posts.update');
    Route::delete('/posts/{post}', 'destroy')->name('posts.destroy');
});
