<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard',[HomeController::class,'home']);
Route::post('/dashboard',[HomeController::class,'homeForm']);

Route::get('/info', [HomeController::class, 'info']);
Route::post('/info', [HomeController::class, 'infoForm']);

Route::get('/howuse', [HomeController::class, 'howuse']);
Route::post('/howuse', [HomeController::class, 'howuseForm']);

Route::get('/setting', [HomeController::class, 'setting']);
Route::post('/setting', [HomeController::class, 'settingForm']);

Route::get('/contact-us', [HomeController::class, 'contactUs']);
Route::get('/contact-us-2', [HomeController::class, 'contactUsWork']);


Route::get('/vantages', [HomeController::class, 'vantages']);
Route::get('/create-vantages', [HomeController::class, 'createVantages']);
Route::post('/create-vantages', [HomeController::class, 'createVantagesForm']);
Route::get('/delete-vantages-{id}', [HomeController::class, 'deleteVantages']);
Route::get('/edit-vantages-{id}', [HomeController::class, 'editVantages']);
Route::post('/edit-vantages', [HomeController::class, 'editVantagesForm']);

Route::get('/admin-about-us', [HomeController::class, 'AboutUs']);
Route::get('/admin-privacy-policy', [HomeController::class, 'PrivacyPolicy']);
Route::post('/admin-about-us', [HomeController::class, 'AboutUsForm']);
Route::post('/admin-privacy-policy', [HomeController::class, 'PrivacyPolicyForm']);
Route::post('/admin-how-use', [HomeController::class, 'HowUseTwoUpdate']);


Route::get('/admin-how-use', [HomeController::class, 'HowUseTwo']);
Route::get('/create-how-use-two', [HomeController::class, 'createUse']);
Route::post('/create-how-use-two', [HomeController::class, 'createUseForm']);
Route::get('/delete-how-use-two-{id}', [HomeController::class, 'deleteUseForm']);
Route::get('/edit-how-use-two-{id}', [HomeController::class, 'editHowUseTwo']);
Route::post('/edit-how-use-two-{id}', [HomeController::class, 'editHowUseTwoForm']);


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){

        Route::get('/', [WebController::class, 'home']);
        Route::get('/index', [WebController::class, 'home']);
        Route::get('/contact', [WebController::class, 'contact']);
        Route::get('/privacy', [WebController::class, 'privacy']);
        Route::get('/useapp', [WebController::class, 'useapp']);
        Route::get('/work', [WebController::class, 'work']);

    });

Route::post('/contact-form-one', [WebController::class, 'contactFormOne']);
Route::post('/contact-form-two', [WebController::class, 'contactFormTwo']);
