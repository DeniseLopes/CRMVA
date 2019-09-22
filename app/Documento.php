<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    //Attributes
    protected $table = "documento";
    protected $fillable = ['numero', 'tipo', 'emissao', 'vencimento', 'cliente_id', 'tipo_documento'];


    //Functions
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
    public function tipoDocumento()
    {
        return $this->belongsTo('App\TipoDocumento');
    }
}
