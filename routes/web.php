<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RiskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [PublicController::class, 'index']);

Route::get('/kontak', [PublicController::class, 'kontak']);

Route::get('/about', [PublicController::class, 'about']);

Route::middleware('only_guest')->group(function(){
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
});

Route::middleware('auth')->group(function(){
    Route::middleware('only_admin')->group(function(){
        Route::get('dashboard', [DashboardController::class, 'index']);
        Route::get('risks', [RiskController::class, 'index']);
        Route::get('risk-show/{slug}', [RiskController::class, 'show']);

        Route::get('users', [UserController::class, 'index']);
        Route::get('user-add', [UserController::class, 'add']);
        Route::post('user-add', [UserController::class, 'store']);
        Route::get('user-edit/{slug}', [UserController::class, 'edit']);
        Route::patch('user-edit/{slug}', [UserController::class, 'update']);
        Route::get('user-show/{slug}', [UserController::class, 'show']);
        Route::get('user-delete/{slug}', [UserController::class, 'delete']);
        Route::get('user-destroy/{slug}', [UserController::class, 'destroy']);
        Route::get('user-deleted', [UserController::class, 'deleteduser']);
        Route::get('user-restore/{slug}', [UserController::class, 'restore']);
        Route::get('user-restoreall', [UserController::class, 'restoreAll']);
    });
    
    Route::get('profile', [UserController::class, 'profile'])->middleware('only_user');
    
    Route::get('datas', [DataController::class, 'index']);

    Route::get('logout', [AuthController::class, 'logout' ]);

});

    