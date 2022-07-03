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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::group(['middleware'=>['auth']],function (){
    //RUTAS PARA TRAMITES
    Route::get('/tramites', function () {
        return view('tramites.index'); //REDERIZA VISTA
    })->name('tramites.index');
    Route::get('/tramites/prueba', function () {
        return view('tramites.prueba'); //REDERIZA VISTA
    })->name('tramites.prueba');
    Route::get('/tramites/crear', function () {
        return view('tramites.crear'); //CREAR TRAMITE DOCUMENTARIO.
    })->name('tramites.crear');
    Route::get('/tramites/mostrar', function () {
        return view('tramites.mostrar'); //VER TUS TRAMITES.
    })->name('tramites.mostrar');
    Route::get('/tramites/requisitos', function () {
        return view('tramites.requisitos'); //REQUISITOS DE TRAMITES.
    })->name('tramites.requisitos');


    //RUTAS PARA CERTIFICADOS
    Route::get('/certificados', function () {
        return view('certificados.index'); //REDERIZA VISTA
    })->name('certificados.index');

    //RUTAS PARA VENTAS
    Route::get('/ventas', function () {
        return view('ventas.index'); //REDERIZA VISTA
    })->name('ventas.index');

    Route::get('/dashboard', function () {
        return view('dash.index'); //REDERIZA VISTA
    })->name('dash.index');;
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
