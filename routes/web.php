<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvestorsController;
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


//All Product view section..........

Route::get('/AD-product-view', [MenuController::class, 'AdProductView'])->name('AD-product-view');
Route::get('/disposable-syringes', [MenuController::class, 'disposableProductView'])->name('disposable-syringes');
Route::get('/tommey-syringes', [MenuController::class, 'tommeyProductView'])->name('tommey-syringes');
Route::get('/insulin-syringes', [MenuController::class, 'insulinProductView'])->name('insulin-syringes');
Route::get('/disposable-needles', [MenuController::class, 'disposableNeedleProductView'])->name('disposable-needles');
Route::get('/scalp-vein-set', [MenuController::class, 'scalpveinProductView'])->name('scalp-vein-set');
Route::get('/iv-infusion-set', [MenuController::class, 'infusionProductView'])->name('iv-infusion-set');
Route::get('/iv-cannula', [MenuController::class, 'cannulaProductView'])->name('iv-cannula');
Route::get('/blood-transfusion-set', [MenuController::class, 'transfusionProductView'])->name('blood-transfusion-set');
Route::get('/first-aid-bandage', [MenuController::class, 'bandageProductView'])->name('first-aid-bandage');
Route::get('/urine-drainage-bag', [MenuController::class, 'drainageProductView'])->name('urine-drainage-bag');
Route::get('/leg_bag', [MenuController::class, 'legProductView'])->name('leg_bag');
Route::get('/Nelatob_Catheter', [MenuController::class, 'NelatobProductView'])->name('Nelatob_Catheter');
Route::get('/JMI-Disposable-Stomach-Tube', [MenuController::class, 'StomachProductView'])->name('JMI-Disposable-Stomach-Tube');
Route::get('/Umbilical_Cord_Clamp', [MenuController::class, 'UmbilicalProductView'])->name('Umbilical_Cord_Clamp');
Route::get('/wound_dt', [MenuController::class, 'WoundProductView'])->name('wound_dt');
Route::get('/feeding_tube', [MenuController::class, 'FeedProductView'])->name('feeding_tube');
Route::get('/JMI-Oral-Dispenser', [MenuController::class, 'DispenserProductView'])->name('JMI-Oral-Dispenser');
Route::get('/suction_catheter', [MenuController::class, 'SuctionProductView'])->name('suction_catheter');
Route::get('/3-Way-Stopcock', [MenuController::class, 'StopcockProductView'])->name('3-Way-Stopcock');
Route::get('/blood_Lancet', [MenuController::class, 'LancetProductView'])->name('blood_Lancet');
Route::get('/safety-Box', [MenuController::class, 'SafetyProductView'])->name('safety-Box');

Route::get('/copper-t', [MenuController::class, 'CopperProductView'])->name('copper-t');


//About Section.................

Route::get('/mission', [MenuController::class, 'getMission'])->name('mission');
Route::get('/message', [MenuController::class, 'getMessage'])->name('message');
Route::get('/certification', [MenuController::class, 'getCertification'])->name('certification');
Route::get('/award', [MenuController::class, 'getAward'])->name('award');


//Investors Corners Section.......

Route::get('/profile', [MenuController::class, 'getProfile'])->name('profile');

Route::get('/psi', [InvestorsController::class, 'PSIView'])->name('psi');
Route::get('/adreport', [InvestorsController::class, 'ADView'])->name('adreport');

Route::get('/unauditreport', [InvestorsController::class, 'UNAView'])->name('unauditreport');
Route::get('/notice', [InvestorsController::class, 'NoticeView'])->name('notice');
Route::get('/credit-rating', [InvestorsController::class, 'CreditView'])->name('credit-rating');
Route::get('/dividend-distribution', [InvestorsController::class, 'DevinedView'])->name('dividend-distribution');

Route::get('/unpaid-devined', [InvestorsController::class, 'UnpaidView'])->name('unpaid-devined');




//Operational Excelence

Route::get('/quality', [MenuController::class, 'getQuality'])->name('quality');


//Contact

Route::get('/contact', [MenuController::class, 'getContact'])->name('contact');


