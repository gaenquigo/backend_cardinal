<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddObjectiveProductCodeToObjectiveProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('objective_products', function (Blueprint $table) {
            $table->string('objective_product_code', 500)->nullable()->comment('Código del producto objetivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('objective_products', function (Blueprint $table) {
            $table->dropColumn('objective_product_code');
        });
    }
}
