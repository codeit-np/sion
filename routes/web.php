<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\PageController;
use App\Models\About;
use App\Models\Information;
use App\Models\Setting;
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

//Frontend
Route::get("/",[PageController::class,'index']);
Route::get('/about-us/{id}',[PageController::class,'about']);
Route::get('/informations/{id}',[PageController::class,'information']);
Route::get('/photogallery',[PageController::class,'photogallery']);
Route::get('/photogallery/{id}',[PageController::class,'photogalleryimages']);
Route::get('/video-gallery',[PageController::class,'videogallery']);

Auth::routes(['register' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin Controllers
Route::resource('setting', SettingController::class);
Route::resource('about', AboutController::class);
Route::resource('information', InformationController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('video', VideoController::class);
Route::resource('post-notice', NoticeController::class);


