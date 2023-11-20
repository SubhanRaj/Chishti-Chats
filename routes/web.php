<?php

use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;

use App\Http\Controllers\MediaController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DeleteAllController;
use App\Http\Controllers\Admin_PostController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\AjaxRequestController;
use App\Http\Controllers\BlogCommentController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\TagsModelController;
use App\Http\Controllers\Admin_PostCategoryController;

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
Route::controller(CategoryController::class)->prefix('categories')->name('categories.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create-new-category', 'create')->name('create');
    Route::post('/create-new-category', 'store')->name('store');
    Route::get('/{slug}', 'show')->name('show');
    Route::get('/{category}/edit', 'edit')->name('edit');
    Route::put('/{category}', 'update')->name('update');
    Route::delete('/{category}', 'destroy')->name('destroy');
});

// Posts Routes
Route::controller(PostController::class)->prefix('posts')->name('posts.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create-new-post', 'create')->name('create');
    Route::post('/create-new-post', 'store')->name('store');
    Route::get('/{slug}', 'show')->name('show');
    Route::get('/{post}/edit', 'edit')->name('edit');
    Route::put('/{post}', 'update')->name('update');
    Route::delete('/{post}', 'destroy')->name('destroy');
});

// auth routes
Route::get('/login', [IndexController::class, 'login'])->name('login');
Route::get('/register', [IndexController::class, 'register'])->name('register');
Route::get('/forgot-password', [IndexController::class, 'forgotPassword'])->name('forgot-password');
Route::get('/reset-password', [IndexController::class, 'resetPassword'])->name('reset-password');

// user profile routes
Route::get('/profile', [IndexController::class, 'profile'])->name('profile');
// return 404 page if any route or url is not found
Route::fallback(function () {
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

    Route::controller(Admin_PostCategoryController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/post-category', 'index')->name('adminPostCategory');
        Route::post('/post-category', 'save')->name('adminPostCategorySave');
        Route::get('/post-category-edit/{id}', 'show')->name('adminPostCategoryShow');
        Route::post('/post-category-edit/{id}', 'update')->name('adminPostCategoryUpdate');
        Route::get('/show-post-category', 'showPostCategory')->name('showPostCategory');
    });

    Route::controller(Admin_PostController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/add-post', 'addPostIndex')->name('adminAddPost');
        Route::post('/add-post', 'addPostSave')->name('addPostSave');
        Route::get('/view-posts', 'viewPosts')->name('viewPosts');
        Route::get('/edit-post/{id}', 'editPost')->name('editPost');
        Route::post('/edit-post/{id}', 'updatePost')->name('updatePost');
        Route::get('/post-datatable-data', 'getPostData')->name('getPostData');
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

    Route::controller(TagsModelController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/add-tag', 'addTagIndex')->name('addTagIndex');
        Route::post('/add-tag', 'saveTag')->name('saveTag');
        Route::get('/edit-tag/{id}', 'editTag')->name('editTag');
        Route::post('/edit-tag/{id}', 'updateTag')->name('updateTag');
        Route::get('/show-tag', 'showTag')->name('showTag');
    });
});

// [================== Adming Route End ==================]
// [================== Adming Route End ==================]
