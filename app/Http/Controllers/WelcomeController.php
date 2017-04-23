<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;

class WelcomeController extends Controller
{
    public function index()
    {
      $tarefas = Tarefa::all();
      return view('hello', ['tarefas' => $tarefas]);
    }

    public function getForm()
    {
      return view('create');
    }

    public function salvaTarefa(Request $request)
    {
      $dados = $request->except('_token');
      $tarefa = new Tarefa();

      $tarefa->nome = $dados['nome'];
      $tarefa->descricao = $dados['descricao'];
      $tarefa->fim = $dados['fim'];

      $tarefa->save();
      return redirect('/');
    }

    public function editarTarefa($id)
    {
      $tarefa = Tarefa::find($id);
      return view('edit', ['tarefa' => $tarefa]);
    }

    public function salvarEdicao($id, Request $request)
    {
      $tarefa = Tarefa::find($id);

      $dados = $request->except('_token');
      $tarefa->nome = $dados['nome'];
      $tarefa->descricao = $dados['descricao'];
      $tarefa->fim = $dados['fim'];

      $tarefa->save();
      return redirect('/');
    }

    public function delete($id)
    {
      Tarefa::destroy($id);
      return redirect('/');
    }
}
