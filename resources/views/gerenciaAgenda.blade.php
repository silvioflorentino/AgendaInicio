@extends('layout')
@section('content')

<section class="container m-5">
    <h1> Gerenciar Registros da Agenda</h1>

    <form class="row g-3">

        <div class="col-auto">
            <label for="staticEmail2" class="visually-hidden">Nome:</label>
            <input type="text" class="form-control-plaintext" id="staticEmail2" value="email@example.com">
        </div>


        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Pesquisar</button>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Alterar</th>
                <th scope="col">Excluir</th>

            </tr>
        </thead>
        <tbody>
            @foreach($registrosAgenda as $registrosAgendas)
            <tr>
                <th scope="row">{{$registrosAgendas->id}}</th>
                <td>{{$registrosAgendas->nome}}</td>
                <td>{{$registrosAgendas->email}}</td>
                <td>
                    <a href="{{'altera-agenda',$registrosAgendas->id}}">
                        <button type="button" class="btn btn-primary">X</button>
                    </a>
                </td>
                <td>
                        <form method="Post" action="{{route('apaga-agenda',$registrosAgendas->id)}}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">x</button>
                        </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>



</section>
@endsection