<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anexo extends Model
{
    Use SoftDeletes;
    protected $table = 'anexo';
    public $timestamps = false;
    protected $fillable = array('id', 'arquivo', 'descricao');
    
    //Relação com a tabela Ds
    public function ds()
    {
        return $this->belongsTo('App\Ds');
    }
}
