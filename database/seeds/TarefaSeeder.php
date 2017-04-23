<?php

use Illuminate\Database\Seeder;
use App\Tarefa;

class TarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tarefa = new Tarefa();
      
      $tarefa->nome = "Nome tarefa";
      $tarefa->descricao = "Descricao tarefa";
      $tarefa->fim = "2017-04-22";

      $tarefa->save();
    }
}
