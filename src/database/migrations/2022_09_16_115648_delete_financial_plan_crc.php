<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteFinancialPlanCrc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        delete from cardinal.financial_plans
        where id in
        (select fp.id from cardinal.financing_sources fs
        inner join cardinal.financial_plans fp on fs.id = fp.source_id
        where fs.group_id = 30
        and fp.year = 3
        and fs.name like 'Excedentes%');
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
