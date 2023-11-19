<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;
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

// Index Route
Route::get('/', [IndexController::class, 'index'])->name('index');

// Categories Routes
Route::controller(CategoryController::class)->prefix('categories')->group(function(){
    Route::get('/', 'index')->name('categories.index');
    Route::get('/create-new-category', 'create')->name('categories.create');
    Route::post('/create-new-category', 'store')->name('categories.store');
    Route::get('/{category}/edit', 'edit')->name('categories.edit');
    Route::put('/{category}', 'update')->name('categories.update');
    Route::delete('/{category}', 'destroy')->name('categories.destroy');
});

// Posts Routes
Route::controller(PostController::class)->prefix('posts')->group(function(){
    Route::get('/', 'index')->name('posts.index');
    Route::get('/create-new-post', 'create')->name('posts.create');
    Route::post('/create-new-post', 'store')->name('posts.store');
    Route::get('/{url_slug}', 'show')->name('posts.show');
    Route::get('/{post}/edit', 'edit')->name('posts.edit');
    Route::put('/{post}', 'update')->name('posts.update');
    Route::delete('/{post}', 'destroy')->name('posts.destroy');
});


// return 404 page if any route or url is not found
Route::fallback(function(){
    return view('pages.404');
});