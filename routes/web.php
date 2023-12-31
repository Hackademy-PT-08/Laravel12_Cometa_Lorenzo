<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PictureController;

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

Route::get('/', [HomeController::class,'index'])
->name('index');

Route::get('/quadri', [PictureController::class,'index'])
->name('pictures.index');

Route::get('/quadri/aggiungi', [PictureController::class,'create'])
->name('pictures.create');

Route::post('/quadri/aggiungi', [PictureController::class,'store'])
->name('pictures.store');


