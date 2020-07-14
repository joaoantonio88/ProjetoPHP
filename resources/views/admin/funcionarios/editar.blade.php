@extends('layout.site')

@section('titulo','Funcionarios')

@section('conteudo')
  <div class="container">
    <h3 class="center">Editando Funcionários</h3>
    <div class="row">
      <form class="" action="{{route('admin.funcionarios.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.funcionarios._form')
        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>
  </div>
@endsection
