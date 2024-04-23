<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Livewire\MyPosts;

Route::get('/', function () {
    return view('login-page');
});

Route::get('/registration/form',[AuthController::class,'loadRegisterForm']);
Route::post('/register/user',[AuthController::class,'registerUser'])->name('registerUser');

Route::get('/login/form',[AuthController::class,'loadLoginPage']);

Route::post('/login/user',[AuthController::class,'LoginUser'])->name('LoginUser');

Route::get('/logout',[AuthController::class,'LogoutUser']);

Route::get('/forgot/password',[AuthController::class,'forgotPassword']);

Route::post('/forgot',[AuthController::class,'forgot'])->name('forgot');

Route::get('/reset/password',[AuthController::class,'loadResetPassword']);

Route::post('/reset/user/password',[AuthController::class,'ResetPassword'])->name('ResetPassword');

Route::get('/404',[AuthController::class,'load404']);
// create controllers for each user
Route::get('user/home',[UserController::class,'loadHomePage'])->middleware('user');
Route::get('my/posts', [UserController::class,'loadMyPosts'])->middleware('user');
Route::get('create/post', [UserController::class,'loadCreatePost'])->middleware('user');
Route::get('/edit/post/{post_id}', [UserController::class,'loadEditPost'])->middleware('user');
Route::get('/view/post/{id}',[UserController::class,'loadPostPage'])->middleware('user');
Route::get('/profile',[UserController::class,'loadProfile'])->middleware('user');
Route::get('/view/profile/{user_id}',[UserController::class,'loadGuestProfile'])->middleware('user');

Route::get('admin/home',[AdminController::class,'loadHomePage'])->middleware('admin');