<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;

Route::get('/salvar-agenda', [AgendaController::class,'ShowFormulario'])->name('mostra-formulario');

Route::post('/salvar-agenda',[AgendaController::class,'SalvarContato'])->name('cadastrar-formulario');

Route::delete('/apaga-agenda/{id}',[AgendaController::class,'destroy'])->name('apaga-agenda');

Route::put('/altera-agenda/{id}',[AgendaController::class,'update'])->name('altera-agenda');


