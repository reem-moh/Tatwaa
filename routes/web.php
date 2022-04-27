<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\RoutesController; 

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
Route::get('/profile',[HomeController::class,'profile'])->name("profile")->middleware('auth.basic');
////

Route::get('/', [RoutesController::class, 'homepage'])->name("homepage");

Route::get('/individual', [RoutesController::class, 'individual'])->name("individual");

Route::get('/agency/{agencyId}/{agencyName}/{agencyDesc}', [HomeController::class, 'agency'])->name("agency");

Route::get('/contactus',[RoutesController::class,'contactus'])->name("contactus");

Route::post('/signVolunteer',[RoutesController::class, 'signVolunteer'])->name("signVolunteer");


