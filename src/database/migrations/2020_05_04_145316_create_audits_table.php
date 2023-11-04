<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audits', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->string('user_type')->nullable()->comment('Ruta Modelo usuario');
            $table->unsignedBigInteger('user_id')->nullable()->comment('Código usuario');
            $table->foreign('user_id')
               ->references('id')
               ->on('users');
            $table->string('event')->comment('Accion realizada');
            $table->morphs('auditable');
            $table->text('old_values')->nullable()->comment('valor antiguo');
            $table->text('new_values')->nullable()->comment('valor nuevo');
            $table->text('url')->nullable()->comment('url');
            $table->ipAddress('ip_address')->nullable()->comment('dirección ip');
            $table->string('user_agent', 1023)->nullable()->comment('Navegador');
            $table->string('tags')->nullable()->comment('Tags');
            $table->timestamps();
            $table->index(['user_id', 'user_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audits');
    }
}
