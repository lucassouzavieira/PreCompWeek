@extends('layouts.application')

@section('content')
    <table class="table">
      <thead>
        <tr>
          <td>ID</td>
          <td>Nome</td>
          <td>Descrição</td>
          <td>Fim</td>
          <td>Ações</td>
        </tr>
      </thead>
      <tbody>
      @foreach($tarefas as $tarefa)
        <tr>
          <td>{{ $tarefa->id }}</td>
          <td>{{ $tarefa->nome }}</td>
          <td>{{ $tarefa->descricao }}</td>
          <td>{{ $tarefa->fim }}</td>
          <td>
            <a class="btn btn-success" href="{{ route('getEdit', ['id' => $tarefa->id])}}">Editar</a>
            <form method="post" action="{{ route('delete', ['id' => $tarefa->id])}}">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}
              <button class="btn btn-danger" type="submit">Excluir</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
    </table>
@endsection
