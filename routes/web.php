<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;


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

Route::get('/', HomeController::class)->name('home')->middleware('age');


Route::controller(CursoController::class)->group(function() {
    Route::get('cursos', 'index')->name('cursos.index');
    Route::get('cursos/create','create')->name('cursos.create');
    Route::get('cursos/{curso}','show')->name('cursos.show');
    Route::post('cursos', 'store')->name('cursos.store');
    Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
    Route::put('cursos/{curso}', 'update')->name('cursos.update');
    Route::delete('cursos/{curso}', 'destroy')->name('cursos.destroy');
});

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::controller(ContactanosController::class)->group(function (){
    Route::get('contactanos', 'index')->name('contactanos.index');
    Route::post('contactanos', 'store')->name('contactanos.store');
});

// Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');


// Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null) {
//     if ($categoria) {
//         return "Bienvenido al curso $curso, de la categoria $categoria";
//     } else {
//         return "Bienvenido al curso $curso";
//     }

// });




