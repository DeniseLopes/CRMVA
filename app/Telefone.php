<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefone';
    protected $fillable = ['ddd', 'cod_pais', 'numero', 'tipo_telefone_id', 'cliente_id'];

    //functions

    public function cliente()
    {
        return $this->belongsTo('App\Telefone');
    }
    public function tipoTelefone()
    {
        return $this->belongsTo('App\TipoTelefone');
    }
}
