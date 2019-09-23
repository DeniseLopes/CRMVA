<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    //
    public $timestamps = false;
    protected $table = 'endereco';
    protected $fillable = ['cep', 'logradouro','endereco_numero', 'complemento', 'bairro', 'cidade', 'uf', 'cliente_id'];


    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}
