<?php
use App\Http\Controllers\cursoscontroller;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\Cast\Double;
use App\Http\Controllers\JugadorController;
Route::get('/', function () {
    return view('home.home');
});

Route::resource('cursos', cursoscontroller::class);
Route::post('/jugadores', [JugadorController::class, 'store'])->name('jugadores.store');