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
Route::get('/repetidosltf', [LotofacilController::class, 'repetidosltf'])->name('repetidosltf');
Route::post('/sorteios-lotofacil', [LotofacilController::class, 'sorteiosltf'])->name('lotofacil.sorteio');
Route::get('/ganhadores-lotofacil', function () {
    return view('lotofacil/ganhadores-lotofacil');
});
Route::get('/repetidos-lotofacil', function () {
    return view('lotofacil/repetidos-lotofacil');
});
Route::get('/repetidos-lotofacil/{concurso}', function () {
    return view('lotofacil/sorteio');
});

Route::post('/combinacoes-lotofacil', [LotofacilController::class, 'combinacoesltf'])->name('lotofacil.combinacoesltf');

Route::get('/sorteios-lotofacil', function () {
    return view('lotofacil/sorteios-lotofacil');
});
Route::get('/combinacoes-lotofacil', function () {
    return view('lotofacil/combinacoes-lotofacil');
});

Route::get('/megasena', [MegasenaController::class, 'index'])->name('index');
Route::get('/repetidosmg', [MegasenaController::class, 'repetidosmg'])->name('repetidosmg');
Route::get('/sorteios-megasena', function () {
    return view('megasena/sorteios-megasena');
});
Route::post('/sorteios-megasena', [MegasenaController::class, 'sorteiosmg'])->name('megasena.sorteio');
Route::get('/ganhadores-megasena', function () {
    return view('megasena/ganhadores-megasena');
});
Route::get('/repetidos-megasena', function () {
    return view('megasena/repetidos-megasena');
});


Route::get('/quina', [QuinaController::class, 'index'])->name('index');
Route::get('/repetidosqu', [QuinaController::class, 'repetidosqu'])->name('repetidosqu');
Route::post('/sorteios-quina', [QuinaController::class, 'sorteiosqu'])->name('quina.sorteio');
Route::get('/ganhadores-quina', function () {
    return view('quina/ganhadores-quina');
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('index');



