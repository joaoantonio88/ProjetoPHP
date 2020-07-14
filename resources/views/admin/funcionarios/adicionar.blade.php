@extends('layout.site')

@section('titulo','Funcionarios')

@section('conteudo')
  <div class="container">
    <h3 class="center">Adicionar Funcionário</h3>
    <div class="row">
      <form class="" action="{{route('admin.funcionarios.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.funcionarios._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>
@endsection
