<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BibleStudyMaterialController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\InKindDonationController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\LiturgicalActivitiesController;
use App\Http\Controllers\MassSchedulesController;
use App\Http\Controllers\MoneyDonationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/mass-schedules', 'MassSchedulesController@index')->name('mass-schedules.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/liturgicalActivitiesScheduling', function () {
        return view('pages.liturgicalActivitiesScheduling');
    })->name('liturgicalActivitiesScheduling');
    Route::get('/resources', function () {
        return view('pages.resources');
    })->name('resources');
    Route::get('/application', function () {
        return view('pages.application');
    })->name('application');
    Route::get('/donation', function () {
        return view('pages.donation');
    })->name('donation');
    Route::get('/forum', function () {
        return view('pages.forum');
    })->name('forum');
    Route::get('/feedback', function () {
        return view('pages.feedback');
    })->name('feedback');
    Route::get('/financialreport', function () {
        return view('pages.financialreport');
    })->name('financialreport');
    Route::get('/financialreport2', function () {
        return view('pages.financialreport2');
    })->name('financialreport2');
});

Route::get('/massSchedule',[MassSchedulesController::class, 'index'])->name('massSchedule');
Route::get('/resources',[BibleStudyMaterialController::class, 'index'])->name('resources');
Route::get('/forum',[ForumController::class, 'index'])->name('forum');
Route::post('/liturgicalActivity/store', [LiturgicalActivitiesController::class, 'store'])->name('liturgicalActivity.store');
Route::post('/application/store', [ApplicationController::class, 'store'])->name('application.store');
Route::post('/forum/store', [ForumController::class, 'store'])->name('forum.store');
Route::post('/donation/stores', [MoneyDonationController::class, 'stores'])->name('donation.stores');
Route::post('/donation/store', [InKindDonationController::class, 'store'])->name('donation.store');
Route::post('/register/store', [RegisterController::class, 'stores'])->name('register.store');
Route::get('/financialreport',[MoneyDonationController::class, 'index'])->name('financialreport');
Route::get('/financialreport2',[InKindDonationController::class, 'indexs'])->name('financialreport2');
Route::post('/feedback/store', [FeedbackController::class, 'store'])->name('feed.store');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);

});



