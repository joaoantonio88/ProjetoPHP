@extends('layout.site')

@section('titulo','Funcionarios')

@section('conteudo')
  <div class="container">
    <h3 class="center">Lista de Funcionários</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Endereço Completo</th>
            <th>Cargo</th>
            <th>Salário</th>
            <th>Situação</th>

            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->nome }}</td>
              <td>{{ $registro->cpf }}</td>
              <td>{{ $registro->endereco }}</td>
              <td>{{ $registro->cargo }}</td>
              <td>{{ $registro->salario }}</td>
              <td>{{ $registro->situacao }}</td>

              <td>
                <a  class="btn deep-primary"  href="{{ route('admin.funcionarios.editar',$registro->id) }}">Editar</a>
                <a  class="btn red"  href="{{ route('admin.funcionarios.deletar',$registro->id) }}">Deletar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.funcionarios.adicionar') }}">Adicionar</a>
    </div>
  </div>
@endsection
