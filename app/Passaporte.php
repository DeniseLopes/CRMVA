<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Passaporte extends Model
{
    use SoftDeletes;
    protected $table = 'usuario';
    public $timestamps = false;
    protected $fillable = array('id', 'numero_passaporte', 'data_emissao', 'data_vencimento', 'cidade_emissao','estado_emissao');

    //Relação com a tabela Cliente
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}
