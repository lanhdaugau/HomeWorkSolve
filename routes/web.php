<?php

use App\Http\Controllers\AdminController\DashBoardController;
use App\Http\Controllers\AdminController\LoginController as AdminControllerLoginController;
use App\Http\Controllers\AdminController\RoleController;
use App\Http\Controllers\AdminController\SettingController;
use App\Http\Controllers\AdminController\UserController as AdminControllerUserController;
use App\Http\Controllers\InterFaceController;
use App\Http\Controllers\UserController\CommentController;
use App\Http\Controllers\UserController\ContactAdminController;
use App\Http\Controllers\UserController\LoginController;
use App\Http\Controllers\UserController\PostController;
use App\Http\Controllers\UserController\RegisterController;
use App\Http\Controllers\UserController\ReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController\UserController;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


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


//admin
Route::prefix('admin')->group(function () {
    Route::middleware('checkAdminLogin')->group(function () {
        Route::group(['controller' => DashBoardController::class, 'as' => 'dashboard.'], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/contact/{idUserContact}','index')->name('read');
            Route::post('/contact/{idUserContact}','send')->name('send');
        });

        Route::group(['controller' => AdminControllerUserController::class, 'prefix' => 'user', 'as' => 'admin.'], function () {
            Route::get('/', 'index')->name('index');
            
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/show/{userModel}', 'show')->name('show');
            Route::get('/edit/{userModel}', 'edit')->name('edit');
            Route::put('/update/{userModel}', 'update')->name('update');
            Route::delete('/destroy/{userModel}', 'destroy')->name('destroy');
        });
        Route::group(['as'=>'admin.'],function(){
            Route::group(['controller' => AdminControllerUserController::class, 'prefix' => 'post'], function () {
            
                Route::get('/postlist','showPost')->name('postlist');
            });
            Route::group(['controller' => AdminControllerUserController::class, 'prefix' => 'statistical'], function () {
                
                Route::get('/','statistical')->name('statistical');
            });
            Route::group(['controller' => SettingController::class, 'prefix' => 'setting'], function () {
            
                Route::get('/','setting')->name('profileadmin');
                Route::put('/','update')->name('updateadmin');
                Route::get('/reset','reset')->name('resetPassAdmin');
                Route::post('/reset','resetUpdate')->name('resetPassAdminUpdate');
            });
        });
        
       
        
    });
    Route::group(['controller' => AdminControllerLoginController::class, 'as' => 'admin.'], function () {
        Route::get('/login','index')->name('login');
        Route::post('/login','login')->name('login.in');
        Route::get('/logout','logout')->name('logout');
        Route::get('/forgot','forgot')->name('forgot');
        Route::post('/forgot','reset')->name('reset');
        Route::get('/reset/{token}','resetPass')->name('resetPass');
        Route::post('/reset/{token}','confirm')->name('confirm');

    }); 
});

//post
Route::post('/addPost', [PostController::class, 'post'])->name('post.post');
Route::get('/post/detail/{slug}', [PostController::class, 'detail'])->name('post.detail');
Route::get('/post/edit/{idPost}', [PostController::class, 'editPost'])->name('post.edit');
Route::post('/post/edit/{idPost}', [PostController::class, 'updatePost'])->name('post.update');
Route::get('/post/publish/{idPost}', [PostController::class, 'publish'])->name('post.publish');
Route::delete('/destroy/{id}', [PostController::class, 'destroy'])->name('post.destroy');

//user

Route::get('/',[InterFaceController::class,'index'])->name('user.index');
Route::get('/search',[InterFaceController::class,'search'])->name('user.search');
Route::get('/api/name',[InterFaceController::class,'apiName'])->name('apiname');
Route::get('/getUser',[InterFaceController::class,'getUserSearch'])->name('api');
Route::get('/contact',[InterFaceController::class,'contact'])->name('contact');



Route::middleware('CheckUserLogin')->group(function(){
    Route::get('/addPost',[UserController::class,'addPost'])->name('post.addPost');
    Route::get('/setting',[UserController::class,'setting'])->name('user.setting');
    Route::post('/setting',[UserController::class,'update'])->name('user.setting');
    Route::get('/profile/{id}',[InterFaceController::class,'detail'])->name('detail');
    Route::get('/profile',[UserController::class,'profile'])->name('profile');

});

Route::post('/setting/{idUser}',[UserController::class,'update'])->name('admin.setting');
// =======
// Route::get('/', [InterFaceController::class, 'index'])->name('user.index');
// Route::get('/search', [InterFaceController::class, 'search'])->name('user.search');
// Route::get('/api/name', [InterFaceController::class, 'apiName'])->name('apiname');
// Route::get('/getUser', [InterFaceController::class, 'getUser'])->name('api');
// Route::get('/profile/{id}', [InterFaceController::class, 'detail'])->name('detail');
// Route::get('/profile', [UserController::class, 'profile'])->name('profile');
// Route::post('/setting', [UserController::class, 'update'])->name('user.setting');
// Route::middleware('CheckUserLogin')->group(function () {
//     Route::get('/addPost', [UserController::class, 'addPost'])->name('post.addPost');
//     Route::get('/setting', [UserController::class, 'setting'])->name('user.setting');
// >>>>>>> 31ee70a9a4fad89bcff97151d52c6513f10eaaff
// });

//login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
Route::get('/forgot', [LoginController::class, 'forgot'])->name('forgot');
Route::post('/forgot', [LoginController::class, 'checkMail'])->name('checkMail');
Route::get('/reset/{token}', [LoginController::class, 'resetPass'])->name('resetPass');
Route::post('/reset/{token}', [LoginController::class, 'confirm'])->name('confirm');
Route::get('/login/social/callback/{provider}',[LoginController::class, 'callBack'])->name('social');
Route::get('/login/social/redirect/{provider}',[LoginController::class, 'redirect'])->name('socialR');


//register
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'register'])->name('register.register');
Route::get('/active/{token}', [RegisterController::class, 'active'])->name('register.active');





//comment
Route::post('/comment', [CommentController::class, 'comment'])->name('comment');
Route::post('/rating', [CommentController::class, 'rating'])->name('rating');
Route::get('/like/{idComment}', [CommentController::class, 'like'])->name('like');
Route::post('/update/{idComment}', [CommentController::class, 'update'])->name('comment.update');
Route::delete('comment/destroy/{idComment}', [CommentController::class, 'destroy'])->name('comment.destroy');
Route::post('/reply', [CommentController::class, 'reply'])->name('comment.reply');
//inbox



Route::get('/markAsRead',function(){
    $user=User::find(Auth::user()->idUsers);
   $user->unreadNotifications->markAsRead();
   return back();
})->name('maskAsRead');
Route::get('post/detail/{idPost}/{idNotification}',[PostController::class,'detail'])->name('post.detail.read');


Route::get('/searchPost',function(){
    return view('users.searchPost');
})->name('searchPost');

Route::get('/checkRating',[UserController::class,'checkRating'])->name('checkRating');


// chat admin
Route::group(['controller' => ContactAdminController::class, 'as' => 'contact.'], function () {
    Route::post('/contact','send')->name('send');
    Route::get('/contact','contact')->name('contact');
    

}); 
Route::group(['controller'=>ReportController::class, 'as' => 'report.'],function(){
    Route::post('/report','send')->name('send');
});