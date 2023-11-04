<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->float('value')->comment('Valor pagado');
            $table->boolean('payment')->default(false)->comment('Pagado');
            $table->date('payment_date')->nullable()->comment('Fecha Pago');
            $table->unsignedBigInteger('evidence_id')->comment('Código evidencia');
            $table->foreign('evidence_id')->references('id')->on('evidence_advance');
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
        Schema::dropIfExists('payments');
    }
}
