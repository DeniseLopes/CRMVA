<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function(Blueprint $table){
            $table->increments('id');
            $table->string('email');
            $table->string('senha');
            
            $table->softDeletes();

        });

        //referencia chave estrangeira
        $table->foreign('pessoa_id')->references('id')->on('pessoa');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
