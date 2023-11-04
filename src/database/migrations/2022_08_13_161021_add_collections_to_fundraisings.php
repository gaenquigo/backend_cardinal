<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
class AddCollectionsToFundraisings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fundraisings', function (Blueprint $table) {
 
            $table->float('collections')->comment('Columna que registra valores de derechos por cobrar de las corporaciones')->nullable();
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fundraisings', function (Blueprint $table) {
            $table->dropColumn('collections');
        });
    }
}