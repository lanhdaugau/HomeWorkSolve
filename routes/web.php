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
            Route::get('/contact/{idUserContact}', 'index')->name('read');
            Route::post('/contact/{idUserContact}', 'send')->name('send');
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
        Route::group(['as' => 'admin.'], function () {
            Route::group(['controller' => AdminControllerUserController::class, 'prefix' => 'post'], function () {

                Route::get('/postlist', 'showPost')->name('postlist');
            });
            Route::group(['controller' => AdminControllerUserController::class, 'prefix' => 'statistical'], function () {

                Route::get('/', 'statistical')->name('statistical');
            });
            Route::group(['controller' => SettingController::class, 'prefix' => 'setting'], function () {

                Route::get('/', 'setting')->name('profileadmin');
                Route::put('/', 'update')->name('updateadmin');
                Route::get('/reset', 'reset')->name('resetPassAdmin');
                Route::post('/reset', 'resetUpdate')->name('resetPassAdminUpdate');
            });
        });
        Route::post('/setting/{idUser}', [UserController::class, 'update'])->name('admin.setting');
        
    });
    Route::group(['controller' => AdminControllerLoginController::class, 'as' => 'admin.'], function () {
        Route::get('/login', 'index')->name('login');
        Route::post('/login', 'login')->name('login.in');
        Route::get('/logout', 'logout')->name('logout');
        Route::get('/forgot', 'forgot')->name('forgot');
        Route::post('/forgot', 'reset')->name('reset');
        Route::get('/reset/{token}', 'resetPass')->name('resetPass');
        Route::post('/reset/{token}', 'confirm')->name('confirm');
    });
});



//user
// <<<<<<< HEAD
Route::group(['controller' => InterFaceController::class], function () {
    Route::get('/',  'index')->name('user.index');
    Route::get('/search', 'search')->name('user.search');
    Route::get('/api/name', 'apiName')->name('apiname');
    Route::get('/getUser', 'getUserSearch')->name('api');
});





Route::middleware('CheckUserLogin')->group(function () {
    Route::group(['controller' => UserController::class], function () {
        Route::get('/addPost', 'addPost')->name('post.addPost');
        Route::get('/setting',  'setting')->name('user.setting');
        Route::post('/setting',  'update')->name('user.setting');
        Route::get('/profile',  'profile')->name('profile');
        Route::get('/checkRating', 'checkRating')->name('checkRating');
    });
    
    Route::get('/profile/{id}', [InterFaceController::class, 'detail'])->name('detail');

    // chat admin
    Route::group(['controller' => ContactAdminController::class, 'as' => 'contact.'], function () {
        Route::post('/contact', 'send')->name('send');
        Route::get('/contact', 'contact')->name('contact');
    });

    Route::group(['controller' => ReportController::class, 'as' => 'report.'], function () {
        Route::post('/report', 'send')->name('send');
    });
    Route::get('/markAsRead', function () {
        $user = User::find(Auth::user()->idUsers);
        $user->unreadNotifications->markAsRead();
        return back();
    })->name('maskAsRead');
    //comment
    Route::group(['controller' => CommentController::class], function () {
        Route::post('/comment',  'comment')->name('comment');
        Route::post('/rating',  'rating')->name('rating');
        Route::get('/like/{idComment}',  'like')->name('like');
        Route::post('/update/{idComment}',  'update')->name('comment.update');
        Route::delete('comment/destroy/{idComment}',  'destroy')->name('comment.destroy');
        Route::post('/reply',  'reply')->name('comment.reply');
    });

    //post
    Route::group(['controller' => PostController::class, 'as' => 'post.'], function () {
        Route::post('/addPost',  'post')->name('post');
        Route::get('/post/detail/{slug}',  'detail')->name('detail');
        Route::get('/post/edit/{idPost}',  'editPost')->name('edit');
        Route::post('/post/edit/{idPost}',  'updatePost')->name('update');
        Route::get('/post/publish/{idPost}',  'publish')->name('publish');
        Route::delete('/destroy/{id}',  'destroy')->name('destroy');
        Route::get('post/detail/{idPost}/{idNotification}', 'detail')->name('detail.read');
    });
});




//login
Route::group(['controller' =>LoginController::class], function () {
    // Route::get('/login/{url}', 'index')->name('login');
    Route::get('/login', 'index')->name('login');
    // Route::get('/login/{url}','login')->
    Route::post('/login', 'login')->name('login.login');
    
    Route::get('/logout', 'logout')->name('login.logout');
    Route::get('/forgot', 'forgot')->name('forgot');
    Route::post('/forgot', 'checkMail')->name('checkMail');
    Route::get('/reset/{token}', 'resetPass')->name('resetPass');
    Route::post('/reset/{token}', 'confirm')->name('confirm');
    Route::get('/login/social/callback/{provider}', 'callBack')->name('social');
    Route::get('/login/social/redirect/{provider}', 'redirect')->name('socialR');
});

//register
Route::group(['controller' =>RegisterController::class,'as'=>'register.'], function () {
    Route::get('/register',  'index')->name('index');
    Route::post('/register',  'register')->name('register');
    Route::get('/active/{token}',  'active')->name('active');
});




Route::get('/searchPost', function () {
    return view('users.searchPost');
})->name('searchPost');












