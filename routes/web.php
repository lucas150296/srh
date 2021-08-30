<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


route::get('/', 'pricipalController@principal')->name('site.index');
route::get('/pedido', 'pedidosController@pedido')->name('site.pedido');

route::get('/produtos/novo', 'produtosController@create')->name('site.produto');
route::post('/produtos/novo', 'produtosController@store')->name('registrar_produto');

route::get('/clientes', 'clientesController@create')->name('site.cliente');
route::post('/clientes', 'clientesController@store')->name('site.cliente');


