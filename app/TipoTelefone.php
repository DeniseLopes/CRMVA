<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoTelefone extends Model
{
    //
    protected $table = 'tipo_telefone';
    protected $fillable = ['tipo'];


    public function telefone()
    {
        return $this->hasMany('App\Telefone');
    }
}
