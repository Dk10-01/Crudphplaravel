<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;



//rotas de produto

Route::get('/usuarios', [UserController::class, 'index'])->name('user.index');

Route::get('/', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/create-produto',[ProdutoController::class, 'create'])->name('produtos.create');
Route::get('/edit-produto/{produto}',[ProdutoController::class, 'edit'])->name('produtos.edit');
Route::put('/update-produto/{produto}',[ProdutoController::class, 'update'])->name('produtos.update');
Route::post('/store-produto',[ProdutoController::class, 'store'])->name('produtos.store');
Route::delete('/delete-produto/{produto}',[ProdutoController::class, 'delete'])->name('produtos.delete');
