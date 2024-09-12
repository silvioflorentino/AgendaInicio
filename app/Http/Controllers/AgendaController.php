<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use Illuminate\Support\Facades\Redirect;
class AgendaController extends Controller
{
    //CRUD
    //C-create salvar os contatos na tabela
    function SalvarContato(Request $request){

        $registros = $request->validate([
            'nome'=>'string|required',
            'email'=>'string|required'
        ]);

        Agenda::create($registros);
        return Redirect::route('/');
    }
    //CRUD
    //R - Read mostrar os registros da tabela
    public function ShowFormulario(){
        return view('cadastroagenda');
    }

    //CRUD
    //D - Delete Apagar um registro na tabela
    public function destroy(Agenda $id){
        $id->delete();
        return Redirect::route('mostrar-home');
    }
    //CRUD
    //U- Update alterar um registro
    public function update(Agenda $id, Request $request){
        $registros = $request->validate([
            'nome'=> 'string|required',
            'email'=> 'string|required'
        ]);
        $id->fill($registros);
        $id->save();
        return Redirect::route('mostrar-home');
    }

    public function showHome(){
        return view('mostrar-home');
    }

    public function gerenciarAgenda(Request $request){
        $registros = Agenda::query();
        $registros->when($request->nome,function($query,$valor){
            $query->where('nome','like','%'.$valor.'%');
        });
        $todosRegistros = $registros->get();
        return view('gerenciaAgenda',['registrosAgenda'=>$todosRegistros]);
    }

    public function mostrarAgendaId(Agenda $id){
        return view('alterarAgenda',['registrosAgenda'=>$id]);
    }
}
