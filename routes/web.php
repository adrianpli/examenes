<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ExamenController;

Route::get('/', function () {
    return view("inicio");
});
Route::get('/cerrar',[UsuarioController::class,'cerrarSesion'])->name('cerrarSesion');
Route::get('/login',[UsuarioController::class,'login'])->name('login');
Route::post('/login',[UsuarioController::class,'verificarUsuario'])->name('login.form');
Route::get('/loginAdmin',[UsuarioController::class,'loginAdmin'])->name('loginAdmin');
Route::post('/loginAdmin',[UsuarioController::class,'verificarAdmin'])->name('loginAdmin.form');
Route::get('/registro',[UsuarioController::class,'registro'])->name('registro');
Route::post('/registro',[UsuarioController::class,'registroForm'])->name('registro.form');
Route::get('/imprimir/usuario/{id}',[UsuarioController::class,'imprimirPDF'])->name('imprimir.datos');
Route::get('/imprimir/usuario/{id}/{nombre}/{edad}/{sexo}/{correo}/{resultado}',[UsuarioController::class,'informacion'])->name('enviar.datos');

Route::get('/examen',[ExamenController::class,'examen']) -> name('examen');
Route::post('/examen',[ExamenController::class,'respuestas'])->name('examen.form');
