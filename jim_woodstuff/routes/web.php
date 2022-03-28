<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\Backoffice\BackofficeProductController;

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


Route::get('/', [AccueilController::class,'homePage']);

Route::get('/catalogue', [ProduitController::class,'catalogue']);

Route::get('/detailProduit/{id}', [ProduitController::class,'detailProduit']);

Route::get('/backoffice',[AccueilController::class,'backoffice'])->middleware('auth');

Route::resource('/backofficeProduits',BackofficeProductController::class)->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
