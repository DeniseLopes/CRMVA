<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    //
    use SoftDeletes;
    protected $table = 'cliente';
    protected $fillable = ['nome', 'email', 'dt_nascimento'];


    public function telefones()
    {
        return $this->hasMany('App\Telefone');
    }
    public function documentos()
    {
        return $this->hasMany('App\Documento');
    }

    public function enderecos()
    {
        return $this->hasMany('App\Endereco');
    }
}
