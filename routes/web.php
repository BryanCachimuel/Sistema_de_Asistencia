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

Route::get('/', [App\Http\Controllers\AdminController::class, 'index']);

/*TODO: deshabilitar la ruta para la vista de register */
Auth::routes(['register'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*TODO: Para avilitar todas las rutas y acceder a todas las funciones del controlador de Miembro */
route::resource('/miembros',\App\Http\Controllers\MiembroController::class);

/*TODO: Habilitando las rutas para los cursos */
route::resource('/cursos',\App\Http\Controllers\CursoController::class);

/*TODO: Habilitando las rutas para los usuarios */
route::resource('/usuarios', \App\Http\Controllers\UserController::class);

/*Route::get('/miembros', [App\Http\Controllers\MiembroController::class, 'index']);

Route::get('/miembros/create', [App\Http\Controllers\MiembroController::class, 'create']);*/

/*TODO: habilitando la ruta para listar los miembros registrados 
Route::get('/miembros', function () {
    return view('miembros.index');
})->middleware('auth');*/

/*Route::get('/miembros/create', function () {
    return view('miembros.create');
})->middleware('auth');*/
