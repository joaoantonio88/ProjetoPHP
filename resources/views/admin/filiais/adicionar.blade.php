@extends('layout.site')

@section('titulo','Filiais')

@section('conteudo')
  <div class="container">
    <h3 class="center">Adicionar Filial</h3>
    <div class="row">
      <form class="" action="{{route('admin.filiais.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.filiais._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>




@endsection
