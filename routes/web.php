<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
//use App\Http\Controllers\SectorController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MembershipController;


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

Route::get('/home',[App\Http\Controllers\UserController::class, 'index'])->name('home');

Route::resource('users', UserController::class);


//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//RUTA PARA PAGOS
Route::get('/index', [App\Http\Controllers\PaymentController::class, 'index'])->name('index');
Route::resource('payments', PaymentController::class);

//RUTA PARA MEMBRESÍA
Route::get('/index', [App\Http\Controllers\MembershipController::class, 'index'])->name('index');
Route::resource('memberships', MembershipController::class);

