@extends('layouts.application')

@section('content')
  <form method="post" action="{{ route('putEdit', ['id' => $tarefa->id]) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <label for="nome">Nome</label>
    <input type="text" name="nome" value="{{ $tarefa->nome }}"><br>
    <label for="descricao">Descrição</label>
    <input type="text" name="descricao" value="{{ $tarefa->descricao }}"><br>
    <label for="fim">Fim</label>
    <input type="date" name="fim" value="{{ $tarefa->fim }}"><br>
    <button type="submit">Salvar</button>
  </form>
@endsection
