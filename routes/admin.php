<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestPreparationController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/



Route::name('admin.')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::redirect('/', '/admin/v1', 301);

Route::middleware('auth:admin')->group(function () {
    Route::get('v1/{param1?}/{param2?}/{param3?}', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('page',PageController::class);
    Route::resource('service',ServiceController::class);
    Route::resource('test-preparation',TestPreparationController::class);


});




