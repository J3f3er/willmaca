<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Willmaca\WillmacaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\Admin\Admincontroller;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Administrador;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

 Route::get('/', function () {
    return view('willmaca.index');
});
 
Auth::routes();

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */

Route::controller(WillmacaController::class)->group(function(){
    Route::get('/', 'index')->name('willmaca.index');
/*     Route::get('/guantes', 'guantes')->name('willmaca.guantes');
    Route::get('/botas', 'botas')->name('willmaca.botas');
    Route::get('/tapa_bocas', 'tapaBocas')->name('willmaca.tapa_bocas');
    Route::get('/lentes', 'lentes')->name('willmaca.lentes');
    Route::get('/trajes', 'trajes')->name('willmaca.trajes'); */
    Route::post('/login_verify', 'loginVerify')->name('willmaca.login.verify');
    Route::get('/restriccion', 'restriccion')->name('willmaca.restriccion');
    Route::get('/logout', 'logOut')->name('willmaca.logout');
    Route::get('/pretty', 'pretty')->name('willmaca.pretty');
    Route::get('/Guantes', 'prettyGuantes')->name('willmaca.guantes');
    Route::get('/Botas', 'prettyBotas')->name('willmaca.botas');
    Route::get('/Tapa_Bocas', 'prettyTapaBocas')->name('willmaca.tapa_bocas');
    Route::get('/Lentes', 'prettyLentes')->name('willmaca.lentes');
    Route::get('/Trajes', 'prettyTrajes')->name('willmaca.trajes');
    /* Route::get('login', 'login')->name('auth.login'); */
});


/* Route::get("/restriccion", function(){
    return view("willmaca.restriccion");
}); */



/* Route::controller(CategoriaController::class)->group(function(){
  Route::get('/admin/formulario_productos', 'Categorias')->name('formulario.productos');
    Route::post('/admin/registro_productos', 'registro')->name('registro.productos');
    Route::get('/admin/listado_productos', 'listado')->name('listado.productos');
    Route::get('/admin/lista_botas', 'indexListaBotas')->name('willmaca.listado_botas');
    Route::get('/admin/listado_botas', 'listaBotas')->name('willmaca.lista_botas');
    Route::get('/admin/lista_trajes', 'listaTrajes')->name('willmaca.listado_trajes');
    Route::get('/admin/lista_guantes', 'listaGuantes')->name('willmaca.listado_guantes');
    Route::get('/admin/lista_tapa_bocas', 'listaTapaBocas')->name('willmaca.listado_tapa_bocas');
    Route::get('/admin/lista_lentes', 'listaLentes')->name('willmaca.listado_lentes');
    Route::get('/admininstrador/listas_lentes', 'AdministradorlistaLentes')->name('willmacas.listados_guantes');  
}); */



Route::controller(AdminController::class)->group( function(){
    Route::get('/admin/formulario_productos', 'Categorias')->name('formulario.productos');
    Route::post('/admin/registro_productos', 'registro')->name('registro.productos');
    Route::get('/admin/listado_productos', 'listado')->name('listado.productos');
    Route::get('/admin/lista_botas', 'indexListaBotas')->name('willmaca.listado_botas');
/*      Route::get('/admin/listado_botas', 'listaBotas')->name('willmaca.lista_botas');                   */
    Route::get('/admin/lista_trajes', 'listaTrajes')->name('willmaca.listado_trajes');
    Route::get('/admin/lista_guantes', 'listaGuantes')->name('willmaca.listado_guantes');
    Route::get('/admin/lista_tapa_bocas', 'listaTapaBocas')->name('willmaca.listado_tapa_bocas');
    Route::get('/admin/lista_lentes', 'listaLentes')->name('willmaca.listado_lentes');
/*      Route::get('/admininstrador/listas_lentes', 'AdministradorlistaLentes')->name('willmacas.listados_guantes');                  */
    Route::get('/admin/guantes', 'vistaGuantes')->name('admin.guantes');
    Route::get('/admin/botas', 'vistaBotas')->name('admin.botas');
    Route::get('/admin/tapa_bocas', 'vistaTapaBocas')->name('admin.tapa_bocas');
    Route::get('/admin/lentes', 'vistaLentes')->name('admin.lentes');
    Route::get('/admin/trajes', 'vistaTrajes')->name('admin.trajes');
    Route::get('/admin/prueba_vue', 'pruebaVue')->name('admin.pruebaVue');
    Route::get('/admin/ProductosVue', 'productosVue');
    Route::delete('/admin/DeleteProduct/', 'destroy');
/*      Route::get('/logout', 'logout')->name('willmaca.logout');                    */
});