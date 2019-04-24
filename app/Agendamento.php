<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agendamento extends Model
{
    Use SoftDeletes;
    protected $table = 'agendamento';
    public $timestamps = false;
    protected $fillable = array('id', 'data_entrevista', 'data_entrevista', 'horario_entrevista','local');

    //Relação com a tabela Ds

    public function ds()
    {
        return $this->belongsTo('App\Ds');
    }


}
