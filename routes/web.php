<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RiskController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::middleware('only_guest')->group(function(){
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
});

Route::middleware('auth')->group(function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['only_admin']);
    Route::get('profile', [UserController::class, 'profile'])->middleware('only_user');
    Route::get('datas', [DataController::class, 'index']);

    Route::get('risk', [RiskController::class, 'index']);

    Route::get('users', [UserController::class, 'index']);
    Route::get('user-add', [UserController::class, 'add']);
    Route::post('user-add', [UserController::class, 'store']);
    Route::get('user-edit/{slug}', [UserController::class, 'edit']);
    Route::patch('user-edit/{slug}', [UserController::class, 'update']);
    
    Route::get('logout', [AuthController::class, 'logout' ]);
});

    