<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFinancialPlanCodeToFinancialPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('financial_plans', function (Blueprint $table) {
            $table->string('financial_plan_code', 500)->nullable()->comment('Código del plan financiero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('financial_plans', function (Blueprint $table) {
            $table->dropColumn('financial_plan_code');
        });
    }
}
