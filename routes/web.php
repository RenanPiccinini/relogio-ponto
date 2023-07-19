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

    Route::get('/produtos', [LojaController::class, 'produtoIndex'])->name('produtos');
    Route::get('/criar-produto', [LojaController::class, 'criarProduto'])->name('criar-produto');
    Route::post('/criar-produto-post', [LojaController::class, 'criarProdutoPost'])->name('criar-produto-post');
    Route::get('/editar-produto/{id}', [LojaController::class, 'editarProduto'])->name('editar-produto');
    Route::put('/editar-produto-post/{id}', [LojaController::class, 'editarProdutoPost'])->name('editar-produto-post');
    Route::delete('/deletar-produto/{id}', [LojaController::class, 'deletarProduto'])->name('deletar-produto');

    Route::get('/categorias', [LojaController::class, 'categoriaIndex'])->name('categorias');
    Route::get('/criar-categoria', [LojaController::class, 'criarCategoria'])->name('criar-categoria');
    Route::post('/criar-categoria-post', [LojaController::class, 'criarCategoriaPost'])->name('criar-categoria-post');
    Route::get('/editar-categoria/{id}', [LojaController::class, 'editarCategoria'])->name('editar-categoria');
    Route::put('/editar-categoria-post/{id}', [LojaController::class, 'editarCategoriaPost'])->name('editar-categoria-post');
    Route::delete('/deletar-categoria/{id}', [LojaController::class, 'deletarCategoria'])->name('deletar-categoria');

    Route::get('/subcategorias', [LojaController::class, 'subcategoriaIndex'])->name('subcategorias');
    Route::get('/criar-subcategoria', [LojaController::class, 'criarSubcategoria'])->name('criar-subcategoria');
    Route::post('/criar-subcategoria-post', [LojaController::class, 'criarSubcategoriaPost'])->name('criar-subcategoria-post');
    Route::get('/editar-subcategoria/{id}', [LojaController::class, 'editarSubcategoria'])->name('editar-subcategoria');
    Route::put('/editar-subcategoria-post/{id}', [LojaController::class, 'editarSubcategoriaPost'])->name('editar-subcategoria-post');
    Route::delete('/deletar-subcategoria/{id}', [LojaController::class, 'deletarSubcategoria'])->name('deletar-subcategoria');
});
