<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RondaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::resource('preguntas',PreguntaController::class);
    Route::resource('equipos', EquipoController::class);

    // JUGADORES
    Route::get('clave', [RondaController::class, 'clave'])->name('clave');
    Route::post('ingresar', [RondaController::class, 'ingresar'])->name('ingresar');
    // ruta donde se registra como van picandole al botón
    Route::post('participaciones', [RondaController::class, 'participacion'])->name('participaciones');
    Route::post('espera',[RondaController::class, 'espera'])->name('espera');

    // ADMIN
    Route::get('tableroPreguntas',[PreguntaController::class, 'tablero'])->name('tableroPreguntas');
    Route::get('laPregunta/{id_pregunta}',[PreguntaController::class,'unaPregunta'])->name('laPregunta');
    Route::get('estatus/{id_pregunta}',[PreguntaController::class,'cambioEstatus'])->name('estatus');


});

require __DIR__.'/auth.php';
