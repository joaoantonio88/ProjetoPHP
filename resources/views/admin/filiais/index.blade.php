@extends('layout.site')

@section('titulo','Filiais')

@section('conteudo')
  <div class="container">
    <h3 class="center">Lista de Filiais</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Endereço Completo</th>
            <th>Inscrição Estadual</th>
            <th>CNPJ</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->nome }}</td>
              <td>{{ $registro->endereco }}</td>
              <td>{{ $registro->ie }}</td>
              <td>{{ $registro->cnpj }}</td>
              <td>
                <a class="btn deep-primary" href="{{ route('admin.filiais.editar',$registro->id) }}">Editar</a>
                <a class="btn red" href="{{ route('admin.filiais.deletar',$registro->id) }}">Deletar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.filiais.adicionar') }}">Adicionar</a>

    </div>

  </div>
@endsection
