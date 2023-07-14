<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\PagamentosController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LojaController::class, 'index'])->name('home');

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

//Rotas de pagamento
Route::post('/pagamento-pix', [PagamentosController::class, 'pix'])->name('pagamento-pix');
