<?php

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
    return view('welcome');
});

Route::get('Categorias', 'CategoriasController@create');
Route::post('CategoriasGuardar', 'CategoriasController@store');

Route::get('DatosLaborales', 'DatosLaborales@Nueva');

Route::get('DocumentosAsociados', 'DocumentosAsociadosController@Nueva');

Route::get('Documentos', 'DocumentosController@Nueva');

Route::get('Empresas', 'EmpresasController@Nueva');

Route::get('Trabajador', 'TrabajadorController@Nueva');


Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
