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

/* permite que si un usuario esta autenticado pueda ingresar a la ruta de la vista del index */
Route::get('/', function () {
    return view('index');
})->middleware('auth');

/* deshabilitar la ruta para la vista de register */
Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
