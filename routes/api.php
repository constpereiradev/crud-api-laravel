<?php

use App\Http\Controllers\MunicipiosController;
use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*

ROTAS

WEB API CRUD

*/

//Listagem
Route::get('products', [ProductsController::class, 'index'])->name('index');

//Create
Route::post('products', [ProductsController::class, 'store'])->name('store');

//Show
Route::get('products/{id}', [ProductsController::class, 'show'])->name('show');

//Update
Route::put('products/{id}', [ProductsController::class, 'update'])->name('update');

//Delete
Route::delete('products/{id}', [ProductsController::class, 'destroy'])->name('destroy');




/*

ROTAS

API IBGE

*/

//Endpoint p/ listagem de itens cadastrados no banco de dados
Route::get('/ibge', [MunicipiosController::class, 'index'])->name('index');


//Endpoint p/ consulta de municípios
Route::get('/ibge/municipios', [MunicipiosController::class, 'store'])->name('store');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
