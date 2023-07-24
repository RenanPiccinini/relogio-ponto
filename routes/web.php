<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\PagamentosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function(){
    Route::get('/', [AdminController::class, 'admin'])->name('home');
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
    Route::get('/horarios', [AdminController::class, 'admin'])->name('horarios.index');
    Route::post('/horarios', [AdminController::class, 'store'])->name('horarios.store');

    Route::get('/meses', [AdminController::class, 'mesesIndex'])->name('meses-index');
    Route::post('/fechar-mes', [AdminController::class, 'fecharMes'])->name('fechar-mes');
    Route::get('gerar-pdf-mes/{mes}', [AdminController::class, 'gerarPDFMes'])->name('gerar-pdf-mes');

    Route::get('/funcionarios', [AdminController::class, 'funcionariosIndex'])->name('funcionarios');
    Route::get('/funcionario/{id}', [AdminController::class, 'funcionarioDetalhes'])->name('funcionario-detalhes');

    Route::get('/adicionar-funcionario', [AdminController::class, 'adicionarFuncionario'])->name('adicionar-funcionario');
    Route::post('/adicionar-funcionario-post', [AdminController::class, 'adicionarFuncionarioPost'])->name('adicionar-funcionario-post');

    Route::get('/editar-funcionario/{id}', [AdminController::class, 'editarFuncionario'])->name('editar-funcionario');
    Route::put('/editar-funcionario-post/{id}', [AdminController::class, 'editarFuncionarioPost'])->name('editar-funcionario-post');

    Route::delete('/excluir-funcionario/{id}', [AdminController::class, 'excluirFuncionario'])->name('excluir-funcionario');

    Route::post('/horario/search', [AdminController::class, 'search'])->name('search');
});
