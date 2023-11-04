<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedBudget extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.budget_from_history(
            p_year integer,
            p_activity integer,
            p_paid integer)
            RETURNS TABLE(presp_ini double precision) AS $$
        DECLARE date1 timestamp;
        DECLARE date2 timestamp;
        
        begin
           
        SELECT 
        CAST( min(created_at)  FILTER (WHERE version=1) as timestamp) AS updated_at_1,
        CAST( min(created_at)  FILTER (WHERE version=2) as timestamp) AS updated_at_2
        into 
        date1,date2
        FROM pais_history where parent_id=p_paid;
        
         
        --DROP TABLE temp_table2;
        CREATE TEMP TABLE IF NOT EXISTS temp_table2 AS
        select sum(table4.value) as presp_ini
        from (select distinct table3.value from (select * from (select CAST(value as double precision) as value, CAST(id as integer) as id, CAST(activity_id as integer) as activity_id,
        CAST(age as integer) as age, updated_at from (select
        CAST(activity_sources_history.history as json) ->> 'value' as value,
        CAST(activity_sources_history.history as json) ->> 'id' as id,
        CAST(activity_sources_history.history as json) ->> 'activity_id' as activity_id,
        CAST(activity_sources_history.history as json) ->> 'age' as age,
        updated_at
        from activity_sources_history ) as table1 
        ) as table2 where table2.age=p_year and activity_id=p_activity and updated_at  between date1 and date2) as table3 
        inner join activities on table3.activity_id = activities.id
        inner join objectives on objectives.id = activities.objective_id
        inner join projects on projects.id = objectives.project_id
        inner join programs on programs.id = projects.program_id
        inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
        inner join pais on pais.id = strategic_lines.p_a_i_id
        inner join indicator_activities on indicator_activities.activities_id = activities.id
        inner join indicators on indicators.id = indicator_activities.indicator_id
        where table3.age=p_year and table3.activity_id=p_activity and indicator_activities.year=p_year) as table4;
           
           
        
        --CREATE TEMP TABLE IF NOT EXISTS temp_table3 AS 
        
        --update temp_table2 set updated_1=date1, updated_2=date2;   
        
        RETURN QUERY 
        SELECT *
        from temp_table2; --where temp_table.father_id=5;
        --   return titles;
        DROP TABLE temp_table2;
        end;
        $$ language plpgsql;");
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
