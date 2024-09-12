@extends('layout')
@section('content')

<section class="container m-5">
    <h1>Cadastrar Contatos</h1>
    <section>
    <div style="display: flex; justify-content:center; align-items:center; height:50vh">
        <form class="row g-3" method="POST" action="{{route('altera-agenda',$registrosAgenda->id)}}">
        @method('put')  
        @csrf
            <div class="col-md-6">
              <label for="inputNome" class="form-label">Nome</label>
              <input type="text" name="nome" value="{{old('nome',$registrosAgenda->nome)}}" class="form-control" id="inputNome" placeholder="João">
              @error('nome')
              <div class="text-sm-start text-light">*Preencher o campo Nome.</div>
              @enderror
            </div>
            
            <div class="col-md-6">
              <label for="inputEmail" class="form-label">Email</label>
              <input type="text" name="email" value="{{old('email',$registrosAgenda->email)}}" class="form-control" id="inputEmail" placeholder="jose@email.com">
              @error('email')
              <div class="text-sm-start text-light">*Preencher o campo email.</div>
              @enderror
            </div>
            
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
          </form>
    </div>
  </section> 
</section>
@endsection
