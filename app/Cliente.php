<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    Use SoftDeletes;
    protected $table = 'cliente';
    public $timestamps = false;
    protected $fillable = array('id');

    //Relação com a tabela Pessoa
    public function pessoa()
    {
        return $this->belongsTo('App\Pessoa');
    }

    //Relação com a tabela Endereco
    public function endereco()
    {
        return $this->hasMany('App\Endereco');
    }

    //Relação com a tabela Passaporte
    public function passaporte()
    {
        return $this->hasOne('App\Passaporte');
    }

    //Relação com a tabela Ds
    public function ds()
    {
        return $this->hasOne('App\Ds');
    }

}
