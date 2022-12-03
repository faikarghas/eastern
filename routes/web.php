<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ServicesController;
use App\Http\Controllers\Web\CareerController;
use App\Http\Controllers\Web\NewsController;
use App\Http\Controllers\Web\ContactController;

use App\Http\Controllers\Web\GoogleLoginController;


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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[AboutController::class,'index'])->name('home');
Route::get('/services',[ServicesController::class,'index'])->name('services');
Route::get('/career',[CareerController::class,'index'])->name('career');
Route::get('/news',[NewsController::class,'index'])->name('news');
Route::get('/news/{slug}',[NewsController::class,'show'])->name('news-detail');
Route::get('/contact',[ContactController::class,'index'])->name('contact');



Route::group(['middleware' => ['guest']], function() {

});


