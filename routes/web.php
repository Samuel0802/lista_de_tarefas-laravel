<?php

use App\Http\Controllers\TarefasController;
use Illuminate\Support\Facades\Route;


Route::prefix('home')->group(function(){
    Route::get('/', [TarefasController::class,'cadastrarTarefas'])->name('home');
    Route::post('/', [TarefasController::class, 'cadastrarTarefas'])->name('home');
    Route::put('/', [TarefasController::class, 'update'])->where('id', '[0-9]+')->name('home-update');
   
   

});

Route::delete('home/{id}', [TarefasController::class, 'destroy'])->name('home'); // for deleting tasks