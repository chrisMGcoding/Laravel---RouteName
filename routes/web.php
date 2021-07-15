<?php

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('accueil');

Route::get('/info', function () {
    return view('infos/contact/info');
})->name('info');

Route::get('/partenariat', function () {
    return view('infos/contact/partenariat');
})->name('partenariat');

Route::get('/sav', function () {
    return view('infos/contact/sav');
})->name('sav');

Route::get('/backend', function () {
    $backTab = [
        (object)["nom"=>"Seif", "fonction"=>"backend", "src"=>"test.jpg"],
        (object)["nom"=>"Elvis", "fonction"=>"backend", "src"=>"test.jpg"],
        (object)["nom"=>"Kevin", "fonction"=>"backend", "src"=>"test.jpg"],
        (object)["nom"=>"ali", "fonction"=>"backend", "src"=>"test.jpg"], 
    ];
    return view('team/web/backend', compact('backTab'));
})->name('backend');

Route::get('/frontend', function () {
    $frontTab = [
        (object)["nom"=>"chris", "fonction"=>"frontend", "src"=>"test.jpg"],
        (object)["nom"=>"alan", "fonction"=>"frontend", "src"=>"test.jpg"],
        (object)["nom"=>"arnaud", "fonction"=>"frontend", "src"=>"test.jpg"],
        (object)["nom"=>"gilles", "fonction"=>"frontend", "src"=>"test.jpg"], 
        (object)["nom"=>"lio", "fonction"=>"frontend", "src"=>"test.jpg"]
    ];
    return view('team/web/frontend', compact('frontTab'));
})->name('frontend');