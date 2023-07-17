<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\PagamentosController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LojaController::class, 'index'])->name('home');

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

//Rotas de pagamento
Route::post('/pagamento-pix', [PagamentosController::class, 'pix'])->name('pagamento-pix');
Route::post('/pagamento-boleto', [PagamentosController::class, 'boleto'])->name('pagamento-boleto');
