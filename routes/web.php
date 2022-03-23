<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdmissionController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DownloadController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\NewsandeventsController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\PageController;
use App\Models\About;
use App\Models\Information;
use App\Models\Newsandevents;
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
Route::get('/about-us/{slug}',[PageController::class,'about']);
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('notice',[PageController::class,'notice']);
Route::get('/informations/{slug}',[PageController::class,'information']);
Route::get('/photogallery',[PageController::class,'photogallery']);
Route::get('/photogallery/{id}',[PageController::class,'photogalleryimages']);
Route::get('/video-gallery',[PageController::class,'videogallery']);
Route::post('/contact/send',[PageController::class,'contactsend']);
Route::get('singlepage/{slug}',[PageController::class,'singlepage']);
Route::get('singleevent/{slug}',[PageController::class,'singleevent']);
Route::get('blogall',[PageController::class,'blogall']);
Route::get('eventandnewsall',[PageController::class,'eventall']);
Route::get('admissionform',[PageController::class,'admissionform'])->name('admissionform');
Route::post('/student/admission',[PageController::class,'admission']);

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin Controllers
Route::resource('setting', SettingController::class);
Route::resource('about', AboutController::class);
Route::resource('information', InformationController::class);
Route::resource('download', DownloadController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('video', VideoController::class);
Route::resource('post-notice', NoticeController::class);
Route::resource('sliders',SliderController::class);
Route::resource('/blogs', BlogController::class);
Route::resource('/newsandevent', NewsandeventsController::class);
Route::resource('/contacts',ContactController::class);
// Route::get('admissionview',[VideoController::class,'admissionview']);
Route::resource('admission',AdmissionController::class);


