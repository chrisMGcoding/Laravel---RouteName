<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PartenariatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SavController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/welcome', [WelcomeController::class, 'index'])->name('accueil');

Route::get('/info', [InfoController::class, 'index'])->name('info');

Route::get('/partenariat', [PartenariatController::class, 'index'])->name('partenariat');

Route::get('/sav', [SavController::class, 'index'])->name('sav');

Route::get('/backend', [BackendController:: class, 'index'])->name('backend');

Route::get('/frontend', [FrontendController::class, 'index'])->name('frontend');