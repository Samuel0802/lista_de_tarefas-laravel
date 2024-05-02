<?php

use App\Http\Controllers\TarefasController;
use Illuminate\Support\Facades\Route;


Route::prefix('home')->group(function(){
    Route::get('/', [TarefasController::class,'cadastrarTarefas'])->name('home');
    Route::post('/', [TarefasController::class, 'cadastrarTarefas'])->name('home');
   Route::delete('/{id}', [TarefasController::class, 'destroy'])->where('id', '[0-9]+')->name('home-destroy');

});



