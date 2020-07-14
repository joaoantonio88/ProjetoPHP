@extends('layout.site')

@section('titulo','Automoveis')

@section('conteudo')
  <div class="container">
    <h3 class="center">Lista de Automóveis</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Ano</th>
            <th>Modelo</th>
            <th>Cor</th>
            <th>Número do Chassis </th>
            <th>Categoria</th>

            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->nome }}</td>
              <td>{{ $registro->ano }}</td>
              <td>{{ $registro->modelo }}</td>
              <td>{{ $registro->cor }}</td>
              <td>{{ $registro->numerochassis }}</td>
              <td>{{ $registro->categoria }}</td>

              <td>
                <a style="width:10" class="btn deep-primary"  href="{{ route('admin.automoveis.editar',$registro->id) }}">Editar</a>
                <a style="width:10" class="btn red"  href="{{ route('admin.automoveis.deletar',$registro->id) }}">Deletar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.automoveis.adicionar') }}">Adicionar</a>
    </div>
  </div>
@endsection
