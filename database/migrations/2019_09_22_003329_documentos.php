<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Documentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_documento');
            $table->integer('tipo_documento_id');
            $table->date('emissao')->nullable();
            $table->date('vencimento')->nullable();
            $table->integer('cliente_id')->unsigned()->index('fk_cliente3');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()

    {
        Schema::dropIfExists('documento');
        //
    }
}
