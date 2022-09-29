<?php

use App\Http\Controllers\AdminController\DashBoardController;
use App\Http\Controllers\AdminController\RoleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


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
