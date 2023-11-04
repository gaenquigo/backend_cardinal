<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProcedReportPaiYear2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION cardinal.report_pai_year_2(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(level bigint, grupo_pai bigint, id bigint, name character varying, ponderacion integer, indicador character varying, unit_goal integer, name_unit_goal character varying, total_goal double precision, goal_1 integer, goal_2 integer, goal_3 integer, goal_4 integer, repor_vigencia integer, repor_rezago_1 integer, desc_vig_1 character varying, desc_rez_1 character varying, repor_vigencia_2 integer, repor_rezago_2 integer, desc_vig_2 character varying, desc_rez_2 character varying, repor_vigencia_3 integer, repor_rezago_3 integer, desc_vig_3 character varying, desc_rez_3 character varying, repor_vigencia_4 integer, repor_rezago_4 integer, desc_vig_4 character varying, desc_rez_4 character varying, goal_anio double precision, av_met_fin double precision, met_fin_anual double precision, met_fin_total double precision, acum_met_fin double precision, cuatrienio integer, pc_av_gest double precision, pc_av_fin double precision, pc_av_acum double precision) AS $$
            declare 
                    --titles text default '';
                    --rec_film  record;	 
                cur_codes cursor
                        for select 
                distinct 
            cardinal.activities.id as act_id,
            cardinal.activities.objective_id,
            cardinal.activities.product_id,
            cardinal.activities.name as act_name,
            cardinal.activities.goal,
            cardinal.activities.goal_1,
            cardinal.activities.goal_2,
            cardinal.activities.goal_3,
            cardinal.activities.goal_4,
            cardinal.activities.weighing as act_weighing,
            cardinal.objective_products.id as act_prod,
            cardinal.objective_products.objective_id,
            cardinal.objective_products.product_id,
            cardinal.objective_products.product_other as prod_name,
            cardinal.objective_products.goal_1,
            cardinal.objective_products.goal_2,
            cardinal.objective_products.goal_3,
            cardinal.objective_products.goal_4,
            cardinal.objective_products.total_goal,
            cardinal.objective_products.unit_goal,
            CAST (NULL as character varying) as name_unit_goal,
            --cardinal.domains.name as name_unit_goal,
            cardinal.objective_products.weighing as prod_weighing,
            cardinal.objectives.id as obj_id,
            cardinal.objectives.project_id,
            cardinal.objectives.objective as obj_name,
            cardinal.objectives.weighing as obj_weighing,
            cardinal.programs.id as id_prog,
            cardinal.programs.car_program,
            cardinal.programs.weighing as prog_weighing,
            cardinal.projects.id as proy_id,
            cardinal.projects.program_id,
            cardinal.projects.project,
            cardinal.projects.weighing as proy_weighing,
            cardinal.strategic_lines.id as st_lin_id,
            cardinal.strategic_lines.name as st_lin_name,
            cardinal.strategic_lines.weighing as st_lin_weighing ,
            cardinal.strategic_lines.p_a_i_id,
            --cardinal.pais.id,
            cardinal.objective_products.indicator_ods_id,
            --CAST(0 as integer) as id_paid,
            --
            --cardinal.pais.name,
            CAST(0 as character varying) as paid_name,
            CAST(0 as integer) as id_1,
            CAST(0 as integer) as id_2,
            CAST(0 as integer) as id_3,
            CAST(0 as integer) as id_4,
            CAST(0 as integer) as id_5,
            CAST(0 as integer) as id_6,
            CAST(0 as integer) as id_7,
            CAST(0 as integer) as id_8,
            CAST(0 as integer) as id_9,
            CAST(0 as integer) as weighing,
            cardinal.indicator_activities.result,
            cardinal.indicator_activities.result_completed,
            cardinal.indicator_activities.result_completed,
            cardinal.indicator_activities.result_completed,
            cardinal.indicator_activities.indicator_id,
            cardinal.indicator_activities.activities_id,
            cardinal.indicator_activities.activities_id,
            cardinal.indicator_activities.activities_id,
            cardinal.objective_products.weighing,
            cardinal.indicators.abbreviated_name	
            
            FROM
            cardinal.activities 
            
            INNER JOIN cardinal.objectives ON cardinal.activities.objective_id = cardinal.objectives.id
            -- COLOCO OBJECTIVE PRODUCTS CON LEFT JOIN PARA TRAER TODO
            LEFT JOIN cardinal.objective_products ON cardinal.objectives.id = cardinal.objective_products.objective_id
            --AND cardinal.activities.product_id = cardinal.objective_products.id
            INNER JOIN cardinal.projects ON cardinal.objectives.project_id = cardinal.projects.id
            INNER JOIN cardinal.programs ON cardinal.projects.program_id = cardinal.programs.id
            INNER JOIN cardinal.strategic_lines ON cardinal.programs.strategic_line_id = cardinal.strategic_lines.id
            INNER JOIN cardinal.indicator_activities ON cardinal.activities.id = cardinal.indicator_activities.activities_id
            INNER JOIN cardinal.indicators ON cardinal.indicator_activities.indicator_id = cardinal.indicators.id
            INNER JOIN cardinal.domains ON cardinal.indicator_activities.variable_in = cardinal.domains.id
            LEFT JOIN cardinal.activity_sources ON cardinal.activities.id = cardinal.activity_sources.activity_id
            
            where cardinal.strategic_lines.p_a_i_id=p_paid -- cardinal.indicator_activities.year=1
            ORDER BY cardinal.programs.id,cardinal.projects.id,cardinal.objectives.id,
            cardinal.objective_products.id,cardinal.activities.id;
            
                    
            DECLARE   cons_index  integer := 0;
            ------ Declaración de las variables cons para  la consulta
            
            DECLARE   cons_1  integer := 0;
            DECLARE   cons_2  integer := 0;
            DECLARE   cons_3  integer := 0;
            DECLARE   cons_4  character varying;
            DECLARE   cons_5  double precision := 0;
            DECLARE   cons_6  integer := 0;
            DECLARE   cons_7  integer := 0;
            DECLARE   cons_8  integer := 0;
            DECLARE   cons_9  integer := 0;
            DECLARE   cons_10  integer := 0;
            DECLARE   cons_11  integer := 0;
            DECLARE   cons_12  integer := 0;
            DECLARE   cons_13  integer := 0;
            DECLARE   cons_14  character varying;
            DECLARE   cons_15  integer := 0;
            DECLARE   cons_16  integer := 0;
            DECLARE   cons_17  integer := 0;
            DECLARE   cons_18  integer := 0;
            DECLARE   cons_19  integer := 0;
            DECLARE   cons_20  integer := 0;
            DECLARE   cons_21  character varying;
            DECLARE   cons_22  integer := 0;
            DECLARE   cons_23  integer := 0;
            DECLARE   cons_24  integer := 0;
            DECLARE   cons_25  character varying;
            DECLARE   cons_26  integer := 0;
            DECLARE   cons_27  integer := 0;
            DECLARE   cons_28  character varying;
            DECLARE   cons_29  integer := 0;
            DECLARE   cons_30  integer := 0;
            DECLARE   cons_31  integer := 0;
            DECLARE   cons_32  character varying;
            DECLARE   cons_33  integer := 0;
            DECLARE   cons_34  integer := 0;
            DECLARE   cons_35  character varying;
            DECLARE   cons_36  integer := 0;
            DECLARE   cons_37  integer := 0;
            DECLARE   cons_38  integer := 0;
            DECLARE   cons_39  character varying;
            DECLARE   cons_40  integer := 0;
            DECLARE   cons_41  integer := 0;
            DECLARE   cons_42  integer := 0;
            DECLARE   cons_43  integer := 0;
            DECLARE   cons_44  integer := 0;
            DECLARE   cons_45  integer := 0;
            DECLARE   cons_46  integer := 0;
            DECLARE   cons_47  integer := 0;
            DECLARE   cons_48  integer := 0;
            DECLARE   cons_49  integer := 0;
            DECLARE   cons_50  integer := 0;
            DECLARE   cons_51  integer := 0;
            DECLARE   cons_52  integer := 0;
            DECLARE   cons_53  integer := 0;
            DECLARE   cons_54  integer := 0;
            DECLARE   cons_55  integer := 0;
            DECLARE   cons_56  integer := 0;
            DECLARE   cons_57  integer := 0;
            DECLARE   cons_58  integer := 0;
            DECLARE   cons_59  character varying;
            
            -------------------------------------------
            DECLARE level integer := 0;
            DECLARE   suma_vigencia  integer := 0;
            DECLARE   suma_cuatrienio  integer := 0;
            DECLARE   index_tmp  integer := 0;
            DECLARE cons_evidence integer := 0;
            DECLARE cons_repor_rezago_1 integer := 0;
            DECLARE   cons_desc_vig_1  character varying;
            DECLARE   cons_desc_rez_1  character varying;
            
            DECLARE cons_repor_vigencia_2 integer := 0;
            cons_repor_rezago_2 integer := 0;
            cons_repor_vigencia_3 integer := 0;
            cons_repor_rezago_3 integer := 0;
            cons_repor_vigencia_4 integer := 0; 
            cons_repor_rezago_4 integer := 0;
            DECLARE cons_desc_vig_2 character varying;
            cons_desc_rez_2 character varying;cons_desc_vig_3 character varying;cons_desc_rez_3 character varying;
            cons_desc_vig_4 character varying;cons_desc_rez_4  character varying;
            DECLARE grupo integer := 0;
            
            DECLARE cons_fid integer := 0;
            DECLARE cons_ffid integer := 0;
            DECLARE cons_fcode character varying;
            DECLARE cons_fgid integer := 0;
            DECLARE cons_fidfc integer := 0;
            DECLARE cons_fvalue_bugeted double precision DEFAULT 0;
            DECLARE cons_fvalue_comitted double precision DEFAULT 0;
            DECLARE cons_fvalue_required double precision DEFAULT 0;
            DECLARE cons_fvalue_paid double precision DEFAULT 0;
            
            DECLARE cons_ffund_value double precision DEFAULT 0;
            DECLARE cons_frecaudo double precision DEFAULT 0;
            DECLARE len_code integer := 0;
            DECLARE up_code character varying;
            DECLARE id_code integer := 0;
            
            DECLARE cons2_id integer := 0;
            DECLARE cons2_value double precision DEFAULT 0;
            
            DECLARE cons_av_met_fin integer := 0;
            DECLARE cons_acum_met_fin double precision := 0;
            DECLARE cons_goal_anio integer := 0;
            DECLARE cons_met_fin_anual double precision := 0;
            DECLARE cons_met_fin_total double precision := 0;
            DECLARE cons_pc_av_gest double precision := 0;
            DECLARE cons_pc_av_fin double precision := 0;
            DECLARE cons_pc_av_acum double precision := 0;
            
            DECLARE temp_av_met_fin integer := 0;
            DECLARE temp_acum_met_fin double precision := 0;
            DECLARE temp_goal_anio integer := 0;
            DECLARE temp_met_fin_anual double precision := 0;
            DECLARE temp_met_fin_total double precision := 0;
            DECLARE temp_pc_av_gest double precision := 0;
            DECLARE temp_pc_av_fin double precision := 0;
            DECLARE temp_pc_av_acum double precision := 0;
            
            DECLARE   id_lin_tmp   integer :=0;
            DECLARE   id_prod_tmp integer :=0;
            DECLARE   id_proy_tmp integer :=0;
            DECLARE   id_prog_tmp integer :=0;
            DECLARE   id_obj_tmp integer :=0;
            DECLARE   id_act_tmp integer :=0;
            DECLARE   obj_prod_tmp integer :=0;
            
            begin
                
            --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table AS
            select 
            CAST(0 as double precision) as id_source,
            CAST(0 as double precision) as id_lin,
            CAST(0 as double precision) as id_prod,
            CAST(0 as double precision) as id_obj,
            CAST(0 as double precision) as id_prog,
            CAST(0 as double precision) as id_proy,
            
            CAST(0 as bigint) as level_t,
            CAST(0 as bigint) as grupo_pai,
            act.id,
            CAST(NULL as character varying) as name,
            CAST(0 as integer) as ponderacion,
            CAST(NULL as character varying) as indicador,
            CAST(0 as integer) as unit_goal,
            CAST (NULL as character varying) as name_unit_goal,
            CAST(0 as double precision) as total_goal,
            CAST(0 as integer) as goal_1,
            CAST(0 as integer) as goal_2,
            CAST(0 as integer) as goal_3,
            CAST(0 as integer) as goal_4,
            CAST(0 as integer) as repor_vigencia_1,
            CAST(0 as integer) as repor_rezago_1,
            CAST (NULL as character varying) as desc_vig_1,
            CAST (NULL as character varying) as desc_rez_1,
            CAST(0 as integer) as repor_vigencia_2,
            CAST(0 as integer) as repor_rezago_2,
            CAST (NULL as character varying) as desc_vig_2,
            CAST (NULL as character varying) as desc_rez_2,
            CAST(0 as integer) as repor_vigencia_3,
            CAST(0 as integer) as repor_rezago_3,
            CAST (NULL as character varying) as desc_vig_3,
            CAST (NULL as character varying) as desc_rez_3,
            CAST(0 as integer) as repor_vigencia_4,
            CAST(0 as integer) as repor_rezago_4,
            CAST (NULL as character varying) as desc_vig_4,
            CAST (NULL as character varying) as desc_rez_4,
            
            CAST(0 as double precision) as goal_anio,
            CAST(0 as double precision) as av_met_fin,
            CAST(0 as double precision) as met_fin_anual,
            CAST(0 as double precision) as met_fin_total,
            CAST(0 as double precision) as acum_met_fin,
            CAST(0 as integer) as cuatrienio,
            CAST(0 as double precision) as pc_av_gest,
            CAST(0 as double precision) as pc_av_fin,
            CAST(0 as double precision) as pc_av_acum
            
            --CAST(0 as integer) as goal_anio,
            --CAST(0 as integer) as goal_anio,
            --CAST(0 as integer) as goal_anio,
            --pc_av_gest double precision,pc_av_fin double precision,pc_av_acum double precision
            from  cardinal.activities act 
            order by act.id
            limit 0;
                -- open the cursor
                open cur_codes;
            
                loop
                -- fetch row into the film
                    fetch cur_codes into 
                    cons_1,cons_2,cons_3,cons_4,cons_5,cons_6,cons_7,cons_8,cons_9,cons_10,
                    cons_11,cons_12,cons_13,cons_14,cons_15,cons_16,cons_17,cons_18,cons_19,cons_20,
                    cons_21,cons_22,cons_23,cons_24,cons_25,cons_26,cons_27,cons_28,cons_29,cons_30,
                    cons_31,cons_32,cons_33,cons_34,cons_35,cons_36,cons_37,cons_38,cons_39,cons_40,
                    cons_41,cons_42,cons_43,cons_44,cons_45,cons_46,cons_47,cons_48,cons_49,cons_50,
                    cons_51,cons_52,cons_53,cons_54,cons_55,cons_56,cons_57,cons_58,cons_59;
                -- exit when no more row to fetch
                    exit when not found;
            
                --se agrega la línea estratégica
                --id_code := (select count(temp_table.id) from temp_table where temp_table.id_obj=cons_2); 
                
                --IF id_code=0 THEN
                --index_tmp := index_tmp+1;
                
                --se agrega la línea estratégica
                cons_index := cons_index+1;
                id_code:=cons_34;
                id_lin_tmp := (select count(temp_table.id) from temp_table where temp_table.id_lin=cons_34 and temp_table.level_t=1);
                id_prod_tmp := (select count(temp_table.id) from temp_table where temp_table.id_prod=cons_3  and temp_table.level_t=5);
                id_obj_tmp := (select count(temp_table.id) from temp_table where temp_table.id_obj=cons_2  and temp_table.level_t=4);
                id_prog_tmp :=  (select count(temp_table.id) from temp_table where temp_table.id_prog=cons_27  and temp_table.level_t=2);
                id_proy_tmp :=  (select count(temp_table.id) from temp_table where temp_table.id_proy=cons_24  and temp_table.level_t=3);
                id_act_tmp := (select count(temp_table.id) from temp_table where temp_table.id_source=cons_1  and temp_table.level_t=6);
                obj_prod_tmp := (select count(temp_table.id) from temp_table where temp_table.id_prod=cons_3 and temp_table.id_obj=cons_2 and temp_table.level_t=5);
            
                IF cons_14 is NULL THEN
                cons_14:= (select cardinal.domains.domain FROM cardinal.domains where cardinal.domains.id=cons_3);
                END IF;
                
                IF cons_58 is NULL THEN
                cons_58:= (select  weighing from cardinal.objective_products where objective_products.id=cons_3 and objective_products.objective_id=cons_2 );
                END IF;
                
                -- se busca el nombre de la unidad de medida según el producto
                cons_21:= (select domains.name from cardinal.domains where domains.id = (select objective_products.unit_goal from cardinal.objective_products where objective_products.product_id = cons_3 and objective_products.objective_id=cons_2));
            
                --	 3,4,24,25,28
                    --obj,prod,onbj,proy,prog
                
                cons_evidence  := (select sum(value) from cardinal.evidence_advance where activity_id=cons_1 and year=p_year and rezago=false);
                suma_cuatrienio:= (select sum(value) from cardinal.evidence_advance where activity_id=cons_1  and rezago=false);
                cons_repor_rezago_1  := (select sum(value) from cardinal.evidence_advance where activity_id=cons_1 and year=p_year and rezago=true);
            
                IF cons_repor_rezago_1 IS NULL THEN
                cons_repor_rezago_1:=0;
                END IF;
            
                cons_desc_vig_1  := (select string_agg(description, ', ') from cardinal.evidence_advance where activity_id=cons_1 and rezago=true and year=p_year);
                cons_desc_rez_1  := (select string_agg(description, ', ') from cardinal.evidence_advance where activity_id=cons_1 and rezago=true and year=p_year);
                
                cons_repor_vigencia_2  := (select sum(value) from cardinal.evidence_advance where activity_id=cons_1 and year=2);
                cons_repor_rezago_2  := (select sum(value) from cardinal.evidence_advance where activity_id=cons_1 and year=2);
                cons_desc_vig_2  := (select string_agg(description, ', ') from cardinal.evidence_advance where activity_id=cons_1 and year=2);
                cons_desc_rez_2  := (select string_agg(description, ', ') from cardinal.evidence_advance where activity_id=cons_1 and year=2);
                cons_repor_vigencia_3  := (select  sum(value) from cardinal.evidence_advance where activity_id=cons_1 and year=3);
                cons_repor_rezago_3  := (select string_agg(description, ', ') from cardinal.evidence_advance where activity_id=cons_1 and year=3);
                cons_desc_rez_3  := (select string_agg(description, ', ') from cardinal.evidence_advance where activity_id=cons_1 and year=3);
                cons_repor_vigencia_4  := (select  sum(value) from cardinal.evidence_advance where activity_id=cons_1 and year=4);
                cons_repor_rezago_4  := (select  sum(value) from cardinal.evidence_advance where activity_id=cons_1 and year=4);
                cons_desc_vig_4  := (select string_agg(description, ', ') from cardinal.evidence_advance where activity_id=cons_1 and year=4);
                cons_desc_rez_4  :=(select  sum(value) from cardinal.evidence_advance where activity_id=cons_1 and year=3);
                cons_desc_vig_3  := (select string_agg(description, ', ') from cardinal.evidence_advance where activity_id=cons_1 and year=4);
            
                grupo:= grupo+1;
            --	cons_av_met_fin:= (select sum(value) from evidence_financial where activity_source_id=cons_40);
            cons_met_fin_anual:=(select sum(value) from cardinal.activity_sources where activity_sources.activity_id=cons_1 and activity_sources.age=p_year);
            cons_av_met_fin:=(select sum(value) from cardinal.evidence_financial e where e.activity_source_id in (select ac.id from cardinal.activity_sources ac where ac.activity_id=cons_1 and ac.age=p_year));
            cons_met_fin_total:= (select sum(value) from cardinal.financial_plans f where f.id in (select source_id from cardinal.activity_sources where activity_id=cons_1 and f.p_a_i_id=p_paid));
            cons_acum_met_fin:=(select sum(value) from cardinal.activity_sources where activity_sources.activity_id=cons_1);
            
            cons_pc_av_gest:= (cons_evidence + cons_repor_rezago_1)/cons_5;
            IF cons_pc_av_gest >1 THEN 
            cons_pc_av_gest:=1;
            
            END IF;
            
            cons_pc_av_fin:= cons_met_fin_anual/cons_met_fin_total;
            IF cons_pc_av_fin >1 THEN 
            cons_pc_av_fin:=1;
            END IF;
            
            cons_pc_av_acum:= cons_acum_met_fin/cons_met_fin_total;
            IF cons_pc_av_acum >1 THEN 
            cons_pc_av_acum:=1;
            END IF;
            
            --cons_av_met_fin:=(select sum(value) from activity_sources where activity_sources.activity_id=cons_1 and activity_sources.age=p_year);
            --	cons_met_fin_anual:=(SELECT value FROM financial_plans where financial_plans.id=cons_42 and financial_plans.year=p_year);
            --cons_met_fin_anual:= (select sum(value) from financial_plans f where f.id in (select source_id from activity_sources where activity_id=cons_1) and f.year=p_year and f.p_a_i_id=p_paid);	
            --	cons_met_fin_total:=(SELECT sum(value) FROM financial_plans where financial_plans.id=cons_42 );
            
            IF p_year=1 THEN
            cons_goal_anio=cons_6;
            ELSEIF(p_year=2) THEN
            cons_goal_anio=cons_7;
            ELSEIF(p_year=3)THEN
            cons_goal_anio=cons_8;
            ELSEIF (p_year=4)THEN
            cons_goal_anio=cons_9;
            END IF;
            
            --- linea estratégica
                IF id_lin_tmp=0 THEN
                level:=1;
                INSERT INTO temp_table(id_source,id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
                total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
                desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin,pc_av_gest,pc_av_fin,pc_av_acum)
                VALUES (cons_1,id_code,cons_3,cons_2,cons_27,cons_24,level,grupo,cons_index,cons_35,cons_36,'',0,'',0,0,0,0,0,0,0,'','',
                        cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,cons_acum_met_fin,cons_pc_av_gest,cons_pc_av_fin,cons_pc_av_acum);
            
                ELSE
                temp_met_fin_anual:=(select temp_table.met_fin_anual from temp_table where temp_table.id_lin=cons_34 and temp_table.level_t=1 Limit 1); 
                temp_av_met_fin:=(select temp_table.av_met_fin from temp_table where temp_table.id_lin=cons_34 and temp_table.level_t=1 Limit 1); 
                temp_met_fin_total:=(select temp_table.met_fin_total from temp_table where temp_table.id_lin=cons_34 and temp_table.level_t=1 Limit 1); 
                temp_acum_met_fin:=(select temp_table.acum_met_fin from temp_table where temp_table.id_lin=cons_34 and temp_table.level_t=1 Limit 1); 
                temp_pc_av_gest :=(select temp_table.pc_av_gest from temp_table where temp_table.id_lin=cons_34 and temp_table.level_t=1 Limit 1);
                temp_pc_av_fin := (select temp_table.pc_av_fin from temp_table where temp_table.id_lin=cons_34 and temp_table.level_t=1 Limit 1);
                temp_pc_av_acum := (select temp_table.pc_av_acum from temp_table where temp_table.id_lin=cons_34 and temp_table.level_t=1 Limit 1);	
            
                temp_pc_av_gest:=cons_pc_av_gest+temp_pc_av_gest;
                temp_pc_av_fin :=cons_pc_av_fin+temp_pc_av_fin;
                temp_pc_av_acum:=cons_pc_av_acum+temp_pc_av_acum;
                
                    IF temp_pc_av_gest >1 THEN temp_pc_av_gest:=1; END IF;
                    IF temp_pc_av_fin >1 THEN temp_pc_av_fin:=1; END IF;
                    IF temp_pc_av_acum >1 THEN  temp_pc_av_acum:=1;END IF;
                                        
                update temp_table set met_fin_anual=(cons_met_fin_anual+temp_met_fin_anual), av_met_fin=(cons_av_met_fin+temp_av_met_fin),
                                        met_fin_total=(cons_met_fin_total+temp_met_fin_total), acum_met_fin=(cons_acum_met_fin+temp_acum_met_fin),
                                        pc_av_gest=temp_pc_av_gest,pc_av_fin=temp_pc_av_fin,
                                        pc_av_acum=temp_pc_av_acum
                where temp_table.id_lin=cons_34 and temp_table.level_t=1;
            
                --ELSE
                --cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1 Limit 1); 
                --update temp_table set  comprometido= (cons_fvalue_comitted+ cons_26)
                --where temp_table.id_lin=cons_16 and temp_table.level=1;
                                        
                END IF;
                -- programa
                IF id_prog_tmp=0 THEN
                -- se agrega el programa si no existe
                
                level:=2;
                INSERT INTO temp_table(id_source,id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
                total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
                desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin,pc_av_gest,pc_av_fin,pc_av_acum)
                VALUES (cons_1,id_code,cons_3,cons_2,cons_27,cons_24,level,grupo,cons_index,cons_28,cons_29,'',0,'',0,0,0,0,0,0,0,'','',
                        cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,cons_acum_met_fin,cons_pc_av_gest,cons_pc_av_fin,cons_pc_av_acum);
                        
                ELSE
                temp_met_fin_anual:=(select temp_table.met_fin_anual from temp_table where temp_table.id_prog=cons_27 and temp_table.level_t=2 Limit 1); 
                temp_av_met_fin:=(select temp_table.av_met_fin from temp_table where temp_table.id_prog=cons_27 and temp_table.level_t=2 Limit 1); 
                temp_met_fin_total:=(select temp_table.met_fin_total from temp_table where temp_table.id_prog=cons_27 and temp_table.level_t=2 Limit 1); 
                temp_acum_met_fin:=(select temp_table.acum_met_fin from temp_table where temp_table.id_prog=cons_27 and temp_table.level_t=2 Limit 1); 
                temp_pc_av_gest :=(select temp_table.pc_av_gest from temp_table where temp_table.id_prog=cons_27 and temp_table.level_t=2 Limit 1);
                temp_pc_av_fin := (select temp_table.pc_av_fin from temp_table where temp_table.id_prog=cons_27 and temp_table.level_t=2 Limit 1);
                temp_pc_av_acum := (select temp_table.pc_av_acum from temp_table where temp_table.id_prog=cons_27 and temp_table.level_t=2 Limit 1);				 
                                        
                temp_pc_av_gest:=cons_pc_av_gest+temp_pc_av_gest;
                temp_pc_av_fin :=cons_pc_av_fin+temp_pc_av_fin;
                temp_pc_av_acum:=cons_pc_av_acum+temp_pc_av_acum;
                
                    IF temp_pc_av_gest >1 THEN temp_pc_av_gest:=1; END IF;
                    IF temp_pc_av_fin >1 THEN temp_pc_av_fin:=1; END IF;
                    IF temp_pc_av_acum >1 THEN  temp_pc_av_acum:=1;END IF;
                                        
                update temp_table set met_fin_anual=(cons_met_fin_anual+temp_met_fin_anual), av_met_fin=(cons_av_met_fin+temp_av_met_fin),
                                        met_fin_total=(cons_met_fin_total+temp_met_fin_total), acum_met_fin=(cons_acum_met_fin+temp_acum_met_fin),
                                        pc_av_gest=temp_pc_av_gest,pc_av_fin=temp_pc_av_fin,
                                        pc_av_acum=temp_pc_av_acum
                where temp_table.id_prog=cons_27 and temp_table.level_t=2 ;	
                
                end if;
                -- proyecto
                IF id_proy_tmp=0 THEN
                level:=3;
                INSERT INTO temp_table(id_source,id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
                total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
                desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin,pc_av_gest,pc_av_fin,pc_av_acum)
                VALUES (cons_1,id_code,cons_3,cons_2,cons_27,cons_24,level,grupo,cons_index,cons_32,cons_33,'',0,'',0,0,0,0,0,0,0,'','',
                        cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,cons_acum_met_fin,cons_pc_av_gest,cons_pc_av_fin,cons_pc_av_acum);
                
                ELSE
                temp_met_fin_anual:=(select temp_table.met_fin_anual from temp_table where temp_table.id_proy=cons_24  and temp_table.level_t=3 Limit 1); 
                temp_av_met_fin:=(select temp_table.av_met_fin from temp_table where temp_table.id_proy=cons_24  and temp_table.level_t=3 Limit 1); 
                temp_met_fin_total:=(select temp_table.met_fin_total from temp_table where temp_table.id_proy=cons_24  and temp_table.level_t=3 Limit 1); 
                temp_acum_met_fin:=(select temp_table.acum_met_fin from temp_table where temp_table.id_proy=cons_24  and temp_table.level_t=3 Limit 1); 
                temp_pc_av_gest :=(select temp_table.pc_av_gest from temp_table where temp_table.id_proy=cons_24  and temp_table.level_t=3 Limit 1);
                temp_pc_av_fin := (select temp_table.pc_av_fin from temp_table where temp_table.id_proy=cons_24  and temp_table.level_t=3 Limit 1);
                temp_pc_av_acum := (select temp_table.pc_av_acum from temp_table where temp_table.id_proy=cons_24 and temp_table.level_t=3 Limit 1);				 
                                        
                temp_pc_av_gest:=cons_pc_av_gest+temp_pc_av_gest;
                temp_pc_av_fin :=cons_pc_av_fin+temp_pc_av_fin;
                temp_pc_av_acum:=cons_pc_av_acum+temp_pc_av_acum;
                
                    IF temp_pc_av_gest >1 THEN temp_pc_av_gest:=1; END IF;
                    IF temp_pc_av_fin >1 THEN temp_pc_av_fin:=1; END IF;
                    IF temp_pc_av_acum >1 THEN  temp_pc_av_acum:=1;END IF;
                                        
                update temp_table set met_fin_anual=(cons_met_fin_anual+temp_met_fin_anual), av_met_fin=(cons_av_met_fin+temp_av_met_fin),
                                        met_fin_total=(cons_met_fin_total+temp_met_fin_total), acum_met_fin=(cons_acum_met_fin+temp_acum_met_fin),
                                        pc_av_gest=temp_pc_av_gest,pc_av_fin=temp_pc_av_fin,
                                        pc_av_acum=temp_pc_av_acum
                where temp_table.id_proy=cons_24 and temp_table.level_t=3 ;	
                
                END IF;
                -- objetivo
                IF (id_obj_tmp=0) THEN
                level:=4;
                INSERT INTO temp_table(id_source,id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
                total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
                desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin,pc_av_gest,pc_av_fin,pc_av_acum)
                VALUES (cons_1,id_code,cons_3,cons_2,cons_27,cons_24,level,grupo,cons_index,cons_25,cons_26,'',0,'',0,0,0,0,0,0,0,'','',
                        cons_goal_anio,cons_av_met_fin,
                        cons_met_fin_anual,
                        cons_met_fin_total,
                        cons_acum_met_fin,cons_pc_av_gest,cons_pc_av_fin,cons_pc_av_acum);
                        
                ELSEIF  id_act_tmp = 0 THEN
                temp_met_fin_anual:=(select temp_table.met_fin_anual from temp_table where temp_table.id_obj=cons_2 and temp_table.level_t=4 Limit 1); 
                temp_av_met_fin:=(select temp_table.av_met_fin from temp_table where temp_table.id_obj=cons_2 and temp_table.level_t=4 Limit 1); 
                temp_met_fin_total:=(select temp_table.met_fin_total from temp_table where temp_table.id_obj=cons_2 and temp_table.level_t=4 Limit 1); 
                temp_acum_met_fin:=(select temp_table.acum_met_fin from temp_table where temp_table.id_obj=cons_2 and temp_table.level_t=4 Limit 1); 
                temp_pc_av_gest :=(select temp_table.pc_av_gest from temp_table where temp_table.id_obj=cons_2 and temp_table.level_t=4 Limit 1);
                temp_pc_av_fin := (select temp_table.pc_av_fin from temp_table where temp_table.id_obj=cons_2 and temp_table.level_t=4 Limit 1);
                temp_pc_av_acum := (select temp_table.pc_av_acum from temp_table where temp_table.id_obj=cons_2 and temp_table.level_t=4 Limit 1);				 
                                        
                temp_pc_av_gest:=cons_pc_av_gest+temp_pc_av_gest;
                temp_pc_av_fin :=cons_pc_av_fin+temp_pc_av_fin;
                temp_pc_av_acum:=cons_pc_av_acum+temp_pc_av_acum;
                
                    IF temp_pc_av_gest >1 THEN temp_pc_av_gest:=1; END IF;
                    IF temp_pc_av_fin >1 THEN temp_pc_av_fin:=1; END IF;
                    IF temp_pc_av_acum >1 THEN  temp_pc_av_acum:=1;END IF;
                                        
                update temp_table set met_fin_anual=(cons_met_fin_anual+temp_met_fin_anual), av_met_fin=(cons_av_met_fin+temp_av_met_fin),
                                        met_fin_total=(cons_met_fin_total+temp_met_fin_total), acum_met_fin=(cons_acum_met_fin+temp_acum_met_fin),
                                        pc_av_gest=temp_pc_av_gest,pc_av_fin=temp_pc_av_fin,
                                        pc_av_acum=temp_pc_av_acum
                where temp_table.id_obj=cons_2 and temp_table.level_t=4 ;	
            
                
                END IF;
                
                -- PRODUCTO
                suma_vigencia := (select sum(value) from cardinal.evidence_advance where year=p_year and activity_id=cons_1);
                cons_desc_vig_1  := (select string_agg(description, ', ')  from cardinal.evidence_advance where activity_id=cons_1 and year=p_year limit 1);
                cons_desc_rez_1  := (select string_agg(description, ', ')  from cardinal.evidence_advance where activity_id=cons_1 and year=p_year limit 1);
            IF id_prod_tmp=0 THEN
                level:=5;
                INSERT INTO temp_table(id_source,id_lin,id_prod,id_obj,id_prog,id_proy,level_t, grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
                total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
                desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin,pc_av_gest,pc_av_fin,pc_av_acum)
                VALUES (cons_1,id_code,cons_3,cons_2,cons_27,cons_24,level, grupo,cons_index,cons_14,cons_58,'NA',cons_20,cons_21,0,cons_15,cons_16,cons_17,cons_18,
                        cons_evidence,0,'NA','NA',cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,
                        cons_acum_met_fin,cons_pc_av_gest,cons_pc_av_fin,cons_pc_av_acum);
                
                ELSEIF obj_prod_tmp= 0  THEN
                level:=5;
                INSERT INTO temp_table(id_source,id_lin,id_prod,id_obj,id_prog,id_proy,level_t, grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
                total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
                desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin)
                VALUES (cons_1,id_code,cons_3,cons_2,cons_27,cons_24,level, grupo,cons_index,cons_14,cons_58,'NA',cons_20,cons_21,0,cons_15,cons_16,cons_17,cons_18,
                        cons_evidence,0,'NA','NA',cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,
                        cons_acum_met_fin);
            
                ELSEIF  id_act_tmp = 0 THEN
                temp_met_fin_anual:=(select temp_table.met_fin_anual from temp_table where temp_table.id_prod=cons_3 and temp_table.id_obj=cons_2 and temp_table.level_t=5 Limit 1); 
                temp_av_met_fin:=(select temp_table.av_met_fin from temp_table where temp_table.id_prod=cons_3 and temp_table.id_obj=cons_2 and temp_table.level_t=5 Limit 1); 
                temp_met_fin_total:=(select temp_table.met_fin_total from temp_table where temp_table.id_prod=cons_3 and temp_table.id_obj=cons_2 and temp_table.level_t=5 Limit 1); 
                temp_acum_met_fin:=(select temp_table.acum_met_fin from temp_table where temp_table.id_prod=cons_3 and temp_table.id_obj=cons_2 and temp_table.level_t=5 Limit 1); 
                temp_pc_av_gest :=(select temp_table.pc_av_gest from temp_table where temp_table.id_prod=cons_3 and temp_table.id_obj=cons_2 and temp_table.level_t=5 Limit 1);
                temp_pc_av_fin := (select temp_table.pc_av_fin from temp_table where temp_table.id_prod=cons_3 and temp_table.id_obj=cons_2 and temp_table.level_t=5 Limit 1);
                temp_pc_av_acum := (select temp_table.pc_av_acum from temp_table where temp_table.id_prod=cons_3 and temp_table.id_obj=cons_2 and temp_table.level_t=5 Limit 1);				 
                                        
                temp_pc_av_gest:=cons_pc_av_gest+temp_pc_av_gest;
                temp_pc_av_fin :=cons_pc_av_fin+temp_pc_av_fin;
                temp_pc_av_acum:=cons_pc_av_acum+temp_pc_av_acum;
                
                    IF temp_pc_av_gest >1 THEN temp_pc_av_gest:=1; END IF;
                    IF temp_pc_av_fin >1 THEN temp_pc_av_fin:=1; END IF;
                    IF temp_pc_av_acum >1 THEN  temp_pc_av_acum:=1;END IF;
                                        
                update temp_table set met_fin_anual=(cons_met_fin_anual+temp_met_fin_anual), av_met_fin=(cons_av_met_fin+temp_av_met_fin),
                                        met_fin_total=(cons_met_fin_total+temp_met_fin_total), acum_met_fin=(cons_acum_met_fin+temp_acum_met_fin),
                                        pc_av_gest=temp_pc_av_gest,pc_av_fin=temp_pc_av_fin,
                                        pc_av_acum=temp_pc_av_acum
                where temp_table.id_prod=cons_3 and temp_table.id_obj=cons_2 and temp_table.level_t=5;	
            
                    
                END IF;		   
                    -- actividad
                
                    IF id_act_tmp= 0 THEN
                    level:=6;
                    INSERT INTO temp_table(id_source,id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
                    total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
                    desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin, cuatrienio,pc_av_gest,pc_av_fin,pc_av_acum)
                    VALUES (cons_1,id_code,cons_3,cons_2,cons_27,cons_24,level,grupo,cons_index,cons_4,cons_10,cons_59,cons_20,cons_21,cons_5,cons_6,cons_7,cons_8,cons_9,
                            cons_evidence,cons_repor_rezago_1,cons_desc_vig_1,cons_desc_rez_1,
                            cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,cons_acum_met_fin,suma_cuatrienio,cons_pc_av_gest,cons_pc_av_fin,cons_pc_av_acum);
                
                    END IF;
                   end loop;
                  
                   -- close the cursor
                   close cur_codes;
           
         
           
           RETURN QUERY 
           SELECT temp_table.level_t , temp_table.grupo_pai , temp_table.id , temp_table.name , 
           temp_table.ponderacion , temp_table.indicador, temp_table.unit_goal , temp_table.name_unit_goal ,
           temp_table.total_goal , temp_table.goal_1 , temp_table.goal_2 , temp_table.goal_3 , temp_table.goal_4 , 
           temp_table.repor_vigencia_1 , temp_table.repor_rezago_1 , temp_table.desc_vig_1 ,
           temp_table.desc_rez_1 , temp_table.repor_vigencia_2 , temp_table.repor_rezago_2 , temp_table.desc_vig_2 , 
           temp_table.desc_rez_2 , temp_table.repor_vigencia_3,
           temp_table.repor_rezago_3 , temp_table.desc_vig_3 , temp_table.desc_rez_3 , temp_table.repor_vigencia_4 , 
           temp_table.repor_rezago_4 , temp_table.desc_vig_4 , 
           temp_table.desc_rez_4 , temp_table.goal_anio , temp_table.av_met_fin , temp_table.met_fin_anual , 
           temp_table.met_fin_total , temp_table.acum_met_fin , temp_table.cuatrienio, temp_table.pc_av_gest,
           temp_table.pc_av_fin,temp_table.pc_av_acum
           from temp_table; --where temp_table.father_id=5;
           --   return titles;
           DROP TABLE temp_table;
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
