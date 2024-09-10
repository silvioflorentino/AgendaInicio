<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;

Route::get('/', function () {
    return view('cadastroagenda');
});

Route::post('/salvar',[AgendaController::class,'SalvarContato']);
