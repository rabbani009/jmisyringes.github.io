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

// Route::get('/admin/subsubcategories', [SubsubcategoryController::class, 'index']);


//Frontend routes...............

Route::get('/', [HomeController::class, 'getHome'])->name('home');


Route::get('/product-view', function () { return view('frontend.product.product-view'); });

//About Section......................

Route::get('/mission', function () { return view('frontend.about.mission'); });
Route::get('/message', function () { return view('frontend.about.message'); });
Route::get('/certification', function () { return view('frontend.about.certification'); });
Route::get('/award', function () { return view('frontend.about.award'); });


//Investors Corners Section......................

Route::get('/profile', function () { return view('frontend.investors.profile'); });
Route::get('/pricesencitive', [PricesencitiveController::class, 'index'])->name('pricesencitive');
Route::get('/download/{filename}', [PricesencitiveController::class, 'download'])->name('download');


//Prerational Excelence

Route::get('/quality', function () { return view('frontend.quality.quality'); });




//Contact

Route::get('/contact', function () { return view('frontend.contact.contact'); });



