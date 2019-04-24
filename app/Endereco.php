<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Endereco extends Model
{
    Use SoftDeletes;
    protected $table = 'endereco';
    public $timestamps = false;
    protected $fillable = array('id','rua','numero','complemento', 'bairro', 'cidade', 'estado', 'cep');

    //Relação com a tabela Usuario
    public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }

    //Relação com a tabela Cliente
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}
