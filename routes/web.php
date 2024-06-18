<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\UserController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\AdminController::class, 'index']);

/*TODO: Rutas de los reportes de asistencias */
Route::get('/asistencias/reportes', [AsistenciaController::class, 'reportes']);
Route::get('/asistencias/reportes_pdf', [AsistenciaController::class, 'reportesPdf']);
Route::get('/asistencias/reportes_fechas_pdf', [AsistenciaController::class, 'reportespdfFechas']);

/*TODO: Rutas de los reportes de usuarios */
Route::get('/usuarios/reportes', [UserController::class, 'reportes']);
Route::get('/usuarios/reportes_pdf', [UserController::class, 'reportesPdf']);

/*TODO Rutas de los reportes de cursos */
Route::get('/cursos/reportes', [CursoController::class, 'reportes']);

/*TODO: deshabilitar la ruta para la vista de register */
Auth::routes(['register'=>true]);

/*TODO: Para avilitar todas las rutas y acceder a todas las funciones del controlador de Miembro */
route::resource('/miembros',\App\Http\Controllers\MiembroController::class);

/*TODO: Habilitando las rutas para los cursos */
route::resource('/cursos',\App\Http\Controllers\CursoController::class);

/*TODO: Habilitando las rutas para los usuarios */
route::resource('/usuarios', \App\Http\Controllers\UserController::class);

route::resource('/asistencias', \App\Http\Controllers\AsistenciaController::class);

/*Route::get('/miembros', [App\Http\Controllers\MiembroController::class, 'index']);

Route::get('/miembros/create', [App\Http\Controllers\MiembroController::class, 'create']);*/

/*TODO: habilitando la ruta para listar los miembros registrados 
Route::get('/miembros', function () {
    return view('miembros.index');
})->middleware('auth');*/

/*Route::get('/miembros/create', function () {
    return view('miembros.create');
})->middleware('auth');*/
