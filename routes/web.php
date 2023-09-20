<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricesencitiveController;
use App\Http\Controllers\SubsubcategoryController;
use App\Http\Controllers\MenuController;





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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



//Frontend routes...............

Route::get('/', [HomeController::class, 'getHome'])->name('home');


//About Section......................


Route::get('/mission', [MenuController::class, 'getMission'])->name('mission');
Route::get('/message', [MenuController::class, 'getMessage'])->name('message');

Route::get('/certification', [MenuController::class, 'getCertification'])->name('certification');

Route::get('/award', [MenuController::class, 'getAward'])->name('award');


//Investors Corners Section......................



Route::get('/profile', [MenuController::class, 'getProfile'])->name('profile');
Route::get('/pricesencitive', [PricesencitiveController::class, 'index'])->name('pricesencitive');
Route::get('/download/{filename}', [PricesencitiveController::class, 'download'])->name('download');


//Operational Excelence

Route::get('/quality', [MenuController::class, 'getQuality'])->name('quality');


//Contact

Route::get('/contact', [MenuController::class, 'getContact'])->name('contact');


