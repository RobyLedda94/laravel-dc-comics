<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController as PageController;
// importo il resource controller
use App\Http\Controllers\ComicController as ComicController;

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

Route::get('/', [PageController::class, 'index'])->name('homepage');
// imposto la rotta al resource (creo le rotte in automatico)
Route::resource('comics', ComicController::class);
