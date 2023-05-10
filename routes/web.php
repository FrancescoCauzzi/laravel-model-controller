<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;

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

// aprire un array, inserire la classe del controller come primo parametro (NomeController::class)
// ,
// nome della funzione da chiamare
Route::get('/', [PageController::class, 'index'])->name('home');
