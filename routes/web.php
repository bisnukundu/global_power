<?php

use App\Http\Controllers\AirPowerController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CountryDetails;
use App\Http\Controllers\FinancialsController;
use App\Http\Controllers\frontend\Country_list;
use App\Http\Controllers\frontend\Total_population;
use App\Http\Controllers\GeorgraphyController;
use App\Http\Controllers\LandForcesController;
use App\Http\Controllers\LogisticController;
use App\Http\Controllers\ManPowerController;
use App\Http\Controllers\NaturalResourcesController;
use App\Http\Controllers\NavalForcesController;
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

Route::get('/', function () {
    return view('frontend.home');
});


Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('dashboard',[CountryController::class,'index'])->name('dashboard');
});

Route::resource('country', CountryController::class);
Route::resource('airpower', AirPowerController::class);
Route::resource('financial', FinancialsController::class);
Route::resource('geography', GeorgraphyController::class);
Route::resource('landforces', LandForcesController::class);
Route::resource('logistic', LogisticController::class);
Route::resource('manpower', ManPowerController::class);
Route::resource('naturl_resource', NaturalResourcesController::class);
Route::resource('naval_forces', NavalForcesController::class);
Route::get("country_details/{id}",[CountryDetails::class,'index'])->whereNumber('id')->name("country_details");




// Front-End
Route::resource('/countrys',Country_list::class);
Route::get('countrys-population',[Total_population::class,'index'])->name('total_population');


Route::view('/test','test');
