<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MiembroController;
use App\Http\Controllers\UserController;

/*TODO: permite que si un usuario esta autenticado pueda ingresar a la ruta de la vista del index 
Route::get('/', function () {
    return view('index');
})->middleware('auth');*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('index');

/*TODO: Rutas de los reportes de asistencias */
Route::get('/asistencias/reportes', [AsistenciaController::class, 'reportes'])->name('asistencia_reportes');
Route::get('/asistencias/reportes_pdf', [AsistenciaController::class, 'reportesPdf'])->name('asistencia_pdf');
Route::get('/asistencias/reportes_fechas_pdf', [AsistenciaController::class, 'reportespdfFechas'])->name('asistencia_pdf_fechas');

/*TODO: Rutas de los reportes de usuarios */
Route::get('/usuarios/reportes', [UserController::class, 'reportes'])->name('usuarios_repprtes');
Route::get('/usuarios/reportes_pdf', [UserController::class, 'reportesPdf'])->name('usuarios.pdf');

/*TODO Rutas de los reportes de cursos */
Route::get('/cursos/reportes', [CursoController::class, 'reportes'])->name('cursos_reportes');
Route::get('/cursos/reportes_pdf', [CursoController::class, 'reportesPdf'])->name('cursos_pdf');

/*TODO: Rutas de los reportes de miembros */
Route::get('/miembros/reportes', [MiembroController::class, 'reportes'])->name('miembros_reportes');
Route::get('/miembros/reportes_pdf', [MiembroController::class, 'reportesPdf'])->name('miembros_pdf');

/*TODO: deshabilitar la ruta para la vista de register */
Auth::routes(['register'=>true]);

/*TODO: Para avilitar todas las rutas y acceder a todas las funciones del controlador de Miembro */
route::resource('/miembros',\App\Http\Controllers\MiembroController::class)->middleware('can:miembros');

/*TODO: Habilitando las rutas para los cursos */
route::resource('/cursos',\App\Http\Controllers\CursoController::class);

/*TODO: Habilitando las rutas para los usuarios */
route::resource('/usuarios', \App\Http\Controllers\UserController::class);

route::resource('/asistencias', \App\Http\Controllers\AsistenciaController::class);

/*TODO: habilitando la ruta para listar los miembros registrados 
Route::get('/miembros', function () {
    return view('miembros.index');
})->middleware('auth');*/

/*Route::get('/miembros/create', function () {
    return view('miembros.create');
})->middleware('auth');*/
