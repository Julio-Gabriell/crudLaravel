<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

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

Route::get('/', [ProdutoController::class, 'index'])->name('home');

Route::get('/produtos/create', [ProdutoController::class, 'create'])->name('produtos.create');
Route::get('/produtos/{id}/edit', [ProdutoController::class, 'edit'])->name('produtos.edit');
Route::put('/produtos/{id}', [ProdutoController::class, 'update'])->name('produtos.update');
Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');
Route::post('/produtos', [ProdutoController::class, 'store'])->name('produtos.store');