<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestPreparationController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\UniversityController;
use App\Http\Controllers\Admin\VisaAcceptanceController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DocumentRequiredController;
use App\Http\Controllers\Admin\StudyAbroadController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\EnquiryController;
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

    Route::get('manage-website',[AdminController::class,'manageWebsite'])->name('manageWebsite');
    Route::post('manage-website',[AdminController::class,'updateWebsite']);

    Route::get('manage-homepage-banner',[AdminController::class,'manageHomepageBanner'])->name('manageBanner');
    Route::post('manage-homepage-banner',[AdminController::class,'updateHomepageBanner']);

    Route::get('manage-how-it-work',[AdminController::class,'howItWork'])->name('howItWork');
    Route::post('manage-how-it-work',[AdminController::class,'updateHowItWork']);

    Route::get('manage-visa-acceptance-content',[AdminController::class,'manageVisaAcceptanceContent'])->name('manageVisaAcceptanceContent');
    Route::post('manage-visa-acceptance-content',[AdminController::class,'updateVisaAcceptanceContent']);

    Route::resource('page',PageController::class);
    Route::resource('team',TeamController::class);
    Route::resource('visa-acceptance',VisaAcceptanceController::class);
    Route::resource('university',UniversityController::class);
    Route::resource('service',ServiceController::class);
    Route::resource('study-abroad',StudyAbroadController::class);
    Route::resource('course',CourseController::class);
    Route::resource('document-required',DocumentRequiredController::class);
    Route::resource('test-preparation',TestPreparationController::class);
    Route::resource('enquiry',EnquiryController::class);


    Route::get('profile',[AdminController::class,'profile'])->name('profile');
    Route::post('profile',[AdminController::class,'updateProfile']);

    Route::get('update-password',[AdminController::class,'password'])->name('password');
    Route::post('update-password',[AdminController::class,'updatePassword']);





});




