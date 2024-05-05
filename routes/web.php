<?php

use Illuminate\Support\Facades\Route;

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

/*TODO: permite que si un usuario esta autenticado pueda ingresar a la ruta de la vista del index */
Route::get('/', function () {
    return view('index');
})->middleware('auth');

/*TODO: deshabilitar la ruta para la vista de register */
Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/miembros', [App\Http\Controllers\MiembroController::class, 'index']);

/*TODO: habilitando la ruta para listar los miembros registrados 
Route::get('/miembros', function () {
    return view('miembros.index');
})->middleware('auth');*/

Route::get('/miembros/create', function () {
    return view('miembros.create');
})->middleware('auth');
