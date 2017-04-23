<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'tarefas';

    protected $fillable = [
      'nome',
      'descricao',
      'fim'
    ];
}
