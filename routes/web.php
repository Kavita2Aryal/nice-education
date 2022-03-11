<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\Admin\CalendarController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[WebsiteController::class,'index']);
Route::get('about-us',[WebsiteController::class,'aboutUs'])->name('aboutUs');

Route::get('contact-us',[WebsiteController::class,'contactUs'])->name('contactUs');
Route::post('enquiry',[WebsiteController::class,'enquiry'])->name('enquiry');

Route::get('our-services',[WebsiteController::class,'ourServices'])->name('ourServices');
Route::get('our-services/{id}/{slug}',[WebsiteController::class,'serviceDetail'])->name('serviceDetail');
Route::get('test-preparation/{id}/{slug}',[WebsiteController::class,'testPreparation'])->name('testPreparation');

Route::get('study-abroad',[WebsiteController::class,'studyAbroad'])->name('studyAbroad');
Route::get('study-abroad/{id}/{slug}',[WebsiteController::class,'studyAbroadDetail'])->name('studyAbroadDetail');

Auth::routes();


Route::get('test',function ()
{
   return view('admin.testPreparation.add');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/show-event-calendar', [CalendarController::class, 'index']);
Route::post('/manage-events', [CalendarController::class, 'manageEvents']);
