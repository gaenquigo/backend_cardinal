<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->string('name')->comment('Nombre del funcionario');
            $table->string('last_name')->comment('Apellidos del Funcionario');
            $table->enum('type_document', ['CEDULA', 'CEDULA_EXTRANJERIA', 'NUIP', 'PASAPORTE'])->comment('Tipo documento Funcionario');
            $table->string('document')->unique()->comment('Número de Documento');
            $table->string('email')->unique()->comment('Correo Electronico');
            $table->date('start_date')->default(now()->isoFormat('YYYY-MM-DD'))->comment('Fecha Inicial');
            $table->date('end_date')->comment('Fecha de caducidad/vencimiento funcionario');
            $table->string('active')->default('1')->comment('Activo');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default(bcrypt('SIPGA2020'))->comment('Clave funcionario');
            $table->unsignedBigInteger('group_id')->comment('Código grupo');
            $table->foreign('group_id')
                ->references('id')
                ->on('groups');
           // $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
