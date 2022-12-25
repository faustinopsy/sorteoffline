<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LotofacilController;
use App\Http\Controllers\MegasenaController;
use App\Http\Controllers\QuinaController;
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
    return view('home');
});

Route::get('/lotofacil', [LotofacilController::class, 'index'])->name('index');
Route::get('/api', [LotofacilController::class, 'api'])->name('api');

Route::get('/ganhadores-lotofacil', function () {
    return view('lotofacil/ganhadores-lotofacil');
});
Route::get('/repetidos-lotofacil', function () {
    return view('lotofacil/repetidos-lotofacil');
});
//Route::get('/repetidos-lotofacil', [LotofacilController::class, 'repetidos'])->name('repetidos');

Route::get('/sorteios-lotofacil', function () {
    return view('lotofacil/sorteios-lotofacil');
});
Route::get('/combinacoes-lotofacil', function () {
    return view('lotofacil/combinacoes-lotofacil');
});
Route::get('/megasena', [MegasenaController::class, 'index'])->name('index');

Route::get('/quina', [QuinaController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('index');



