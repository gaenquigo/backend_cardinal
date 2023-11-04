<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExternalCodeToEvidenceAdvanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('evidence_advance', function (Blueprint $table) {
            $table->string('external_code', 500)->nullable()->comment('Código de la evidencia, avance o rezago');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evidence_advance', function (Blueprint $table) {
            $table->dropColumn('external_code');
        });
    }
}
