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
