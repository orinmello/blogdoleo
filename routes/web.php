<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//---------------------------------- PRODUTO ----------------------------------------------------------------
Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');
//Create
Route::get('/produto/create', [ProdutoController::class, 'create'])->name('produto.create'); //exibir form
Route::post('/produto/create', [ProdutoController::class, 'store'])->name('produto.store'); //salvar form
//Show
Route::get('/produto/{id}', [ProdutoController::class, 'show'])->name('produto.show');
//Edit
Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit'])->name('produto.edit'); //exibir form
Route::put('/produto/{id}',[ProdutoController::class, 'update'])->name('produto.update'); //atualizar form
//Destroy
Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])->name('produto.destroy'); //excluir itens

//---------------------------------- CATEGORIA ----------------------------------------------------------------
Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');
//Create
Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create'); //exibir form
Route::post('/categoria/create', [CategoriaController::class, 'store'])->name('categoria.store'); //salvar form
//Show
Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');
//Edit
Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit'); //exibir form
Route::put('/categoria/{id}',[CategoriaController::class, 'update'])->name('categoria.update'); //atualizar form
//Destroy
Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy'); //excluir itens
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
