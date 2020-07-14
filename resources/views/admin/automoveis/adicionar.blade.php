@extends('layout.site')

@section('titulo','Automoveis')

@section('conteudo')
  <div class="container">
    <h3 class="center">Adicionar Automóvel</h3>
    <div class="row">
      <form class="" action="{{route('admin.automoveis.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.automoveis._form')
        <button class="btn deep-orange">Salvar</button>
        <button class="btn btn-danger" type="reset">Cancelar</button>
      </form>
    </div>
  </div>
@endsection
