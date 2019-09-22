<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    //
    protected $table = 'endereco';
    protected $fillable = ['cep', 'logradouro', 'complemento', 'bairro', 'cidade', 'uf', 'cliente_id'];


    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}
