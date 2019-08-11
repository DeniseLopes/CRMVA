<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;


class Usuario extends Model
{
    use SoftDeletes;
    protected $table = 'usuario';
    public $timestamps = false;
    protected $fillable = array('id', 'nome', 'email', 'senha', 'user_id');

    //Relação com a tabela Users
    public function user()
    {
        return $this->hasOne('App\User');
    }
    //Relação com a tabela Endereco
    public function endereco()
    {
        return $this->hasMany('App\Endereco');
    }

    //Relação com a tabela Ds
    public function ds()
    {
        return $this->hasOne('App\Ds');
    }
}
