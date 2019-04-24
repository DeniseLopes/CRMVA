<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentario extends Model
{
    use SoftDeletes;
    protected $table = 'comentario';
    public $timestamps = false;
    protected $fillable = array('id', 'texto', 'data_hora');

    //Relação com a tabela Ds
    public function ds()
    {
        return $this->belongsTo('App\Ds');
    }
}
