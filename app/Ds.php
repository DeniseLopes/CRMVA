<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ds extends Model
{
    Use SoftDeletes;
    protected $table = 'ds';
    public $timestamps = false;
    protected $fillable = array('id', 'codigo_Ds', 'status', 'data_abertura', 'prioridade');

    //Relação com a tabela Agendamento
    public function agendamento()
    {
        return $this->hasOne('App\Agendamento');

    }
    //Relação com a tabela Cliente
    public function cliente()
    {
        return $this->hasOne('App\Cliente');

    }

    //Relação com a tabela Usuario
    public function usuario()
    {
        return $this->belogsTO('App\Usuario');

    }

    //Relação com a tabela Anexo
    public function anexo()
    {
        return $this->hasMany('App\Anexo');

    }

    //Relação com a tabela Comentario
    public function comentario()
    {
        return $this->hasMany('App\Comentario');

    }
}
