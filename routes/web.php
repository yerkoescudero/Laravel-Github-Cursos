<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', HomeController::class)->name('home');

Route::controller(CursoController::class)->group(function(){
    // Route::get('cursos', 'index')->name('cursos.index');
    // Route::get('cursos/create', 'create')->name('cursos.create');
    // Route::post('cursos', 'store')->name('cursos.store');
    // Route::get('cursos/{id}', 'show')->name('cursos.show');
    // Route::get('cursos/{id}/edit','edit')->name('cursos.edit');
    // Route::put('cursos/{id}','update')->name('cursos.update');
    // Route::delete('cursos/{curso}', 'destroy')->name('cursos.destroy');
    //Route::get('cursos/{id}/edit','NOMBRE DE METODO')->name('NOMBRE PARA ACCEDER');


    Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');

    Route::view('nosotros','nosotros')->name('nosotros');

   

});

Route::get('contactanos',[ContactanosController::class,'index'])->name("contactanos.index");
Route::post('contactanos',[ContactanosController::class,'store'])->name("contactanos.store");



// Route::get('cursos/{curso}', function($curso) {
//     return "Bienvenido al curso: $curso , de la categoria $categoria";
// });

// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {

//     if ($categoria)
//     {
//         return "Bienvenido al curso: $curso , de la categoria $categoria";
//     }else{
//         return "Bienvenido al curso: $curso";
//     }

   
    
// });