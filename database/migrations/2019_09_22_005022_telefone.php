<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Telefone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('telefone', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_pais');
            $table->string('numero');
            $table->integer('tipo_telefone_id')->unsigned()->index('fk_tipo_telefone1');
            $table->integer('cliente_id')->unsigned()->index('fk_cliente2');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefone');
        //
    }
}
