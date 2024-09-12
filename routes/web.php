<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;

//Esta rota serve para abrir a home
Route::get('/',[AgendaController::class,'showHome'])->name('mostrar-home');

//Estas rotas são para manipular os registros da Agenda
Route::get('/gerencia-agenda', [AgendaController::class,'gerenciarAgenda'])->name('gerenciar-agenda');

Route::get('/altera-agenda/{id}', [AgendaController::class,'mostrarAgendaId'])->name('mostrar-agenda-id');

Route::get('/salvar-agenda', [AgendaController::class,'ShowFormulario'])->name('mostrar-formulario');

Route::post('/salvar-agenda',[AgendaController::class,'SalvarContato'])->name('cadastrar-formulario');

Route::delete('/apaga-agenda/{id}',[AgendaController::class,'destroy'])->name('apagar-agenda');

Route::put('/altera-agenda/{id}',[AgendaController::class,'update'])->name('alterar-agenda');


