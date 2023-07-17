<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\PagamentosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LojaController::class, 'index'])->name('home');

//Rotas de pagamento
Route::post('/pagamento-pix', [PagamentosController::class, 'pix'])->name('pagamento-pix');
Route::post('/pagamento-boleto', [PagamentosController::class, 'boleto'])->name('pagamento-boleto');
Route::post('/pagamento-credito', [PagamentosController::class, 'credito'])->name('pagamento-credito');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
});
