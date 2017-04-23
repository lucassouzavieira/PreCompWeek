@extends('layouts.application')

@section('content')
  <form method="post" action="{{ url('/novatarefa') }}">
    {{ csrf_field() }}
    <label for="nome">Nome</label>
    <input type="text" name="nome"><br>
    <label for="descricao">Descrição</label>
    <input type="text" name="descricao"><br>
    <label for="fim">Fim</label>
    <input type="date" name="fim"><br>
    <button type="submit" value="Salvar">Salvar</button>
  </form>
@endsection
