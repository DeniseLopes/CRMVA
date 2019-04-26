<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoa extends Model
{
    Use SoftDeletes;
    protected $table = 'pessoa';
    public $timestamps = false;
    protected $fillable = array('id', 'nome', 'sobrenome', 'data_nasc', 'cpf');

    //Relação com a tabela Usuario
     public function usuario()
    {
        return $this->hasOne('App\Usuario');
    }

    //Relação com a tabela Cliente
    public function cliente()
    {
        return $this->hasOne('App\Cliente');
    }
}
