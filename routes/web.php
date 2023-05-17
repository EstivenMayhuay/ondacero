<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\ProgramsController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/noticias', [NewsController::class, 'index']);
Route::get('/noticias/categoria/{category_alias}', [NewsController::class, 'newsByCategory']);

Route::get('/musica/ranking', [RankingController::class, 'index']);


Route::get('/programas', [ProgramsController::class, 'index']);
