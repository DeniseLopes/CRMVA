<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    //
    protected $table = 'tipo_documento';
    protected $fillable = ['nome'];

    public function documento()
    {
        return $this->hasMany('App\Documento');
    }
}
