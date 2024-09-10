<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use Illuminate\Support\Facades\Redirect;
class AgendaController extends Controller
{
    //CRUD
    function SalvarContato(Request $request){
        Agenda::create($request);
        return Redirect::route('/');
    }
}
