<?php

use App\Http\Controllers\GameGenreController;
use App\Http\Controllers\ProgrammingLangController;
use App\Http\Controllers\ProjectStateController;
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
    return view('welcome');
});

Route::get('/genre', [GameGenreController::class, 'index']);
Route::get('/genre/create', [GameGenreController::class, 'create']);
Route::post('/genre/store', [GameGenreController::class, 'store']);

Route::get('/state', [ProjectStateController::class, 'index']);
Route::get('/state/create', [ProjectStateController::class, 'create']);
Route::post('/state/store', [ProjectStateController::class, 'store']);

Route::get('/lang', [ProgrammingLangController::class, 'index']);
Route::get('/lang/create', [ProgrammingLangController::class, 'create']);
Route::post('/lang/store', [ProgrammingLangController::class, 'store']);
