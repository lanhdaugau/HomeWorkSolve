<?php

use App\Http\Controllers\AdminController\DashBoardController;
use App\Http\Controllers\AdminController\RoleController;
use App\Http\Controllers\InterFaceController;
use App\Http\Controllers\UserController\CommentController;
use App\Http\Controllers\UserController\LoginController;
use App\Http\Controllers\UserController\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController\UserController;

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



Route::prefix('admin')->group(function(){
    Route::middleware('checkAdminLogin')->group(function(){
        Route::group(['controller' => DashBoardController::class, 'as' => 'dashboard.'], function(){
            Route::get('/', 'index')->name('index');
        });

        Route::group(['controller' => RoleController::class,'prefix' => 'role', 'as' => 'role.'], function(){
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
        });
    });
});
Route::get('/',[InterFaceController::class,'index'])->name('user.index');
Route::get('/search',[InterFaceController::class,'search'])->name('user.search');
Route::get('/api/name',[InterFaceController::class,'apiName'])->name('apiname');
Route::get('/getUser',[InterFaceController::class,'getUser'])->name('api');
Route::get('/profile/{id}',[InterFaceController::class,'detail'])->name('detail');

Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'login'])->name('login.login');
Route::get('/register',[RegisterController::class,'index'])->name('register.index');
Route::post('/register',[RegisterController::class,'register'])->name('register.register');
Route::get('/active/{token}',[RegisterController::class,'active'])->name('register.active');

Route::get('/logout',[LoginController::class,'logout'])->name('login.logout');
Route::get('/forgot',[LoginController::class,'forgot'])->name('forgot');
Route::post('/forgot',[LoginController::class,'checkMail'])->name('checkMail');
Route::get('/reset/{token}',[LoginController::class,'resetPass'])->name('resetPass');
Route::post('/reset/{token}',[LoginController::class,'confirm'])->name('confirm');

Route::get('/profile',[UserController::class,'profile'])->name('profile');
Route::middleware('CheckUserLogin')->group(function(){
    Route::get('/addPost',[UserController::class,'addPost'])->name('post.addPost');
    Route::get('/setting',[UserController::class,'setting'])->name('user.setting');
});
Route::post('/setting',[UserController::class,'update'])->name('user.setting');
Route::post('/addPost',[UserController::class,'post'])->name('post.post');
Route::get('/post/detail/{idPost}',[UserController::class,'detail'])->name('post.detail');
Route::get('/post/edit/{idPost}',[UserController::class,'editPost'])->name('post.edit');
Route::post('/post/edit/{idPost}',[UserController::class,'updatePost'])->name('post.update');
Route::get('/post/publish/{idPost}',[UserController::class,'publish'])->name('post.publish');
Route::delete('/destroy/{id}', [UserController::class,'destroy'])->name('post.destroy');

Route::post('/comment',[CommentController::class,'comment'])->name('comment');
Route::post('/rating',[UserController::class,'rating'])->name('rating');
Route::get('/like/{idComment}',[UserController::class,'like'])->name('like');