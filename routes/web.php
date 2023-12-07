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

Route::get('/', function () {
    return view('accueil');
});

Route::get('/cours', function () {
    return view('cours');
});

Route::get('/tarifs', function () {
    return view('tarifs');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/mentions-legales', function () {
    return view('mentions-legales');
});

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\TarifsController;
use App\Http\Controllers\MentionsLegalesController;

Route::get('/', [AccueilController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/cours', [CoursController::class, 'index']);
Route::get('/tarifs', [TarifsController::class, 'index']);
Route::get('/mentions-legales', [MentionsLegalesController::class, 'index']);