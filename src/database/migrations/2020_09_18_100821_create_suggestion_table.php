<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuggestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suggestions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->comment('Código usuario');
            $table->foreign('user_id')->references('id')->on('users');
          
            $table->integer('group_id')->unsigned()->comment('Código Grupo');
            $table->foreign('group_id')->references('id')->on('groups');  
          
            $table->integer('p_a_i_id')->unsigned()->comment('Código PAI');
            $table->foreign('p_a_i_id')->references('id')->on('pais');

            $table->integer('domain_id')->unsigned()->comment('Código dominio Anexo');
            $table->foreign('domain_id')->references('id')->on('domains');
          
            $table->string('suggestion', 500000)->comment('Texto sugerencias');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suggestions');
    }
}
