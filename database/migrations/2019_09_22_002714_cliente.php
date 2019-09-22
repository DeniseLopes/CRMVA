<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->date('dt_nascimento')->nullable();
            $table->integer('email')->unsigned()->nullable();
            $table->enum('tipo_cliente',['Físico','Jurídico']); // Físico ou Jurídico
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
        Schema::dropIfExists('cliente');
    }
}
