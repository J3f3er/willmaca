<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Willmaca\WillmacaController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('willmaca.index');
});

Auth::routes();

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */

Route::controller(WillmacaController::class)->group(function(){
    Route::get('/willmaca', 'index')->name('willmaca.index');
    Route::get('/guantes', 'guantes')->name('willmaca.guantes');
    Route::get('/botas', 'botas')->name('willmaca.botas');
    Route::get('/tapa_bocas', 'tapaBocas')->name('willmaca.tapa_bocas');
    Route::get('/lentes', 'lentes')->name('willmaca.lentes');
    Route::get('/trajes', 'trajes')->name('willmaca.trajes');
    /* Route::get('login', 'login')->name('auth.login'); */
});



Route::controller(CategoriaController::class)->group(function(){
    Route::get('/admin/formulario_productos', 'Categorias')->name('formulario.productos');
    Route::post('/admin/registro_productos', 'registro')->name('regitro.productos');
    Route::get('/admin/listado_productos', 'listado')->name('listado.productos');
    Route::get('/admin/lista_botas', 'indexListaBotas')->name('willmaca.listado_botas');
    /* Route::get('/admin/listado_botas', 'listaBotas')->name('willmaca.lista_botas'); */
    Route::get('/admin/lista_trajes', 'listaTrajes')->name('willmaca.listado_trajes');
    Route::get('/admin/lista_guantes', 'listaGuantes')->name('willmaca.listado_guantes');
    Route::get('/admin/lista_tapa_bocas', 'listaTapaBocas')->name('willmaca.listado_tapa_bocas');
    Route::get('/admin/lista_lentes', 'listaLentes')->name('willmaca.listado_lentes');
/*     Route::get('/admininstrador/listas_lentes', 'AdministradorlistaLentes')->name('willmacas.listados_guantes');     */
});
