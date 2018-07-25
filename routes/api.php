<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Produto', 'MinhaController@getProduto')->name('getProduto');

Route::post('/Produto', 'MinhaController@criarProduto')->name('criarProduto');

Route::put('Produto/{id}','MinhaController@atualizarProduto')->name('atualizarProduto');

Route::delete('Produto/{id}', 'MinhaController@deletarProduto')->name('deletarProduto');

Route::get('resource/{id}', 'ProdutoController@showResource');
Route::get('resource/{id}', 'ServicoController@showResource');
Route::get('resource/{id}', 'ParceiroController@showResource');
Route::apiResource('produtos', 'ProdutoController');
Route::apiResource('servicos', 'ServicoController');
Route::apiResource('parceiros', 'ParceiroController');