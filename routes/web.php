<?php

use App\Http\Controllers\FrontendHomeController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\Login;

use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\DeleteAllController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AjaxRequestController;
use App\Http\Controllers\BlogCommentController;
use App\Http\Controllers\MediaController;

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
    Route::get('/{url_slug}', 'show')->name('categories.show');
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

// auth routes
Route::get('/login', [IndexController::class, 'login'])->name('login');
Route::get('/register', [IndexController::class, 'register'])->name('register');
Route::get('/forgot-password', [IndexController::class, 'forgotPassword'])->name('forgot-password');
Route::get('/reset-password', [IndexController::class, 'resetPassword'])->name('reset-password');

// user profile routes
Route::get('/profile', [IndexController::class, 'profile'])->name('profile');
// return 404 page if any route or url is not found
Route::fallback(function(){
    return view('pages.404');
});


// vaibhav routes

Route::get('/cache', function () {
    Artisan::call('cache:clear');
    dd('cache cleard successfully');
});
Route::get('/route-cache', function () {
    Artisan::call('route:cache');
    dd('route cache successfully');
});

Route::controller(AjaxRequestController::class)->name('frontend.')->group(function () {
    Route::post('/front-ajax', 'frontAjaxRequest')->name('frontAjaxRequest');
});

Route::controller(BlogController::class)->name('frontend.')->group(function () {
    Route::get('/blog', 'index')->name('blog');
    Route::get('/blog/{blogname}', 'blogDetails')->name('blogDetails');
});


Route::controller(BlogCommentController::class)->name('frontend.')->group(function () {
    Route::post('/save-comment', 'addComment')->name('addComment');
});

// User Login Started
Route::controller(UserController::class)->name('frontend.')->group(function () {
    // register new user
    Route::get('/register', 'Register')->name('Register');
    Route::post('/register', 'saveRegister')->name('saveRegister');
    Route::get('/verification/{token}', 'emailVerification')->name('emailVerification');

    // login started
    Route::post('/login', 'login')->name('login');
    Route::post('/login-otp', 'loginOtpVerification')->name('loginOtpVerification');
    Route::post('/resent-verification-link', 'sendReEmailVerificationLink')->name('sendReEmailVerificationLink');
    Route::get('/glogin', 'googleLoginRedirect')->name('googleLoginRedirect');
    Route::get('/glogin/callback', 'googleCallback')->name('googleCallback');

    // password reset 
    Route::post('/password-reset', 'passwordResetCheckUser')->name('passwordResetCheckUser');
    Route::post('/password-reset-otp-check', 'passwordResetOtpCheck')->name('passwordResetOtpCheck');
    Route::post('/passwordd-update', 'updatePassword')->name('updatePassword');

    Route::get('/account', 'userAccount')->name('userAccount');

    Route::get('/not-authorized', 'notLogin')->name('notLogin');
});
// User Login Ended


// user panel started 

Route::controller(UserAccountController::class)->name('user_account.')->group(function () {
    Route::get('/logout-successfully', 'userLogoutPage')->name('userLogoutPage');
});


Route::middleware('UserLogin')->group(function () {
    Route::controller(UserAccountController::class)->name('user_account.')->group(function () {
        Route::get('/account', 'userAccount')->name('userAccount');
        Route::get('/logout', 'logout')->name('logout');
        Route::post('/edit-account/{id}', 'editAccount')->name('editAccount');
    });
});


// =================== Admin Dashboard Started =================

// [================== Login Page Route  Start ==================]
// [================== Login Page Route  Start ==================]

Route::controller(Login::class)->group(function () {
    Route::get('/ad-min', 'index')->name('login-view');
    Route::post('/ad-min', 'login')->name('login-check');
    Route::post('/otp-verification', 'loginOtpVerification')->name('login-otp-verification');
    Route::get('/reset-otp-verification', 'resetOtpVerification')->name('reset-otp-verification');

    // ================== Reset Passowrd =============
    Route::get('/reset-password', 'showPasswordResetPage')->name('showPasswordResetPage');
    Route::post('/reset-password', 'passwordResetCheckUser')->name('passwordResetCheckUser');
    Route::post('/reset-password-otp-check', 'passwordResetOtpCheck')->name('passwordResetOtpCheck');
    Route::get('/cancel-reset-password', 'cancelPasswordReset')->name('cancelPasswordReset');
    Route::post('/update-passwordd', 'updatePassword')->name('updatePassword');
    Route::get('/goto-login', 'GotoLogin')->name('GotoLogin');
});

// [================== Login Page Route  End ==================]
// [================== Login Page Route  End ==================]


Route::middleware('adminLogin')->group(function () {

    // ********************* Delete All Controller Start **********************
    Route::controller(DeleteAllController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/deleteall', 'deleteAll')->name('deleteAll');
    });
    // ********************* Delete All Controller End **********************




    Route::controller(AjaxRequestController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::post('/ajax-request', 'ajaxRequest')->name('ajaxRequest');
    });




    // ============ Media route start ============
    Route::controller(MediaController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/add-media', 'index')->name('addMediaIndex');
        Route::post('/add-media', 'save')->name('saveMediaIndex');
        Route::get('/show-media', 'mediaIndex')->name('mediaIndex');
        Route::get('/edit-media/{id}', 'editMedia')->name('editMedia');
        Route::post('/edit-media/{id}', 'updateMedia')->name('updateMedia');
        Route::get('/media-datatable-data', 'getMediaData')->name('getMediaData');
    });
    // ============ Media route End ============

    // ***************** Admin Index Page  Route Start**************************

    Route::controller(AdminIndexController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', 'index')->name('indexView');
        Route::get('/logout', 'logout')->name('logout');
    });

    // ***************** Admin Index Page  Route End**************************

    Route::controller(BlogCategoryController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/blog-category', 'index')->name('adminBlogCategory');
        Route::post('/blog-category', 'save')->name('adminBlogCategorySave');
        Route::get('/blog-category-edit/{id}', 'show')->name('adminBlogCategoryShow');
        Route::post('/blog-category-edit/{id}', 'update')->name('adminBlogCategoryUpdate');
        Route::get('/show-blog-category', 'showPostCategory')->name('showPostCategory');
    });

    Route::controller(BlogController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/add-blog', 'addBlogIndex')->name('adminAddBlog');
        Route::post('/add-blog', 'addBlogSave')->name('addBlogSave');
        Route::get('/view-blogs', 'viewBlogs')->name('viewblogs');
        Route::get('/edit-blob/{id}', 'editBlog')->name('editBlog');
        Route::post('/edit-blog/{id}', 'updateBlog')->name('updateBlog');
        Route::get('/blog-datatable-data', 'getBlogData')->name('getBlogData');
    });

    Route::controller(BlogCommentController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/show-comments', 'showComment')->name('showComment');
        Route::get('/comment-datatable-data', 'getCommentData')->name('getCommentData');
    });


    Route::controller(MetaController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/add-meta', 'index')->name('addMeta');
        Route::post('/add-meta', 'save')->name('addMetaSave');
        Route::get('/view-meta', 'show')->name('showMeta');
        Route::get('/edit-meta/{id}', 'editMeta')->name('editMeta');
        Route::post('/edit-meta/{id}', 'updateMeta')->name('updateMeta');
    });
});

// [================== Adming Route End ==================]
// [================== Adming Route End ==================]
