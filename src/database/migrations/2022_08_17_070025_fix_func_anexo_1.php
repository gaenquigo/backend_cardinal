<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixFuncAnexo1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION cardinal.report_pai_year_gral(
        p_year integer,
        p_paid integer)
        RETURNS TABLE(id_lin double precision, level bigint, grupo_pai bigint, id bigint, name character varying, ponderacion double precision, indicador character varying, unit_goal integer, name_unit_goal character varying, total_goal double precision, goal_1 double precision, goal_2 double precision, goal_3 double precision, goal_4 double precision, repor_vigencia double precision, repor_rezago_1 double precision, desc_vig_1 character varying, desc_rez_1 character varying, goal_anio double precision, av_met_fin double precision, met_fin_anual double precision, met_fin_total double precision, acum_met_fin double precision, cuatrienio double precision, pc_av_gest double precision, pc_av_fin double precision, pc_av_acum double precision, pc_av_fis double precision, pc_av_fis_rez double precision) AS $$
            declare 
            cur_codes cursor
                    for SELECT
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
                        (CAST((cardinal.activities.weighing) as double precision) / CAST(100 as double precision))as act_weighing,
                        cardinal.objective_products.product_id,
                        cardinal.objective_products.product_other as prod_name,
        
                        cardinal.objective_products.unit_goal,
                        CAST (NULL as character varying) as name_unit_goal,
                        cardinal.objectives.project_id,
                        cardinal.programs.id as id_prog,
                        cardinal.indicators.abbreviated_name,
                        
                        cardinal.strategic_lines.id as st_lin_id,
                        (CAST((cardinal.objective_products.weighing) as double precision) / CAST(100 as double precision)),
                        cardinal.strategic_lines.name as st_lin_name,
                        (CAST((cardinal.strategic_lines.weighing) as double precision) / CAST(100 as double precision)),
                        cardinal.programs.car_program,
                        (CAST((cardinal.programs.weighing) as double precision) / CAST(100 as double precision)),
                        cardinal.projects.project,
                        (CAST((cardinal.projects.weighing) as double precision) / CAST(100 as double precision)),
                        cardinal.objectives.objective as obj_name,
                        (CAST((cardinal.objectives.weighing) as double precision) / CAST(100 as double precision)),
                        cardinal.objective_products.goal_1,
                        cardinal.objective_products.goal_2,
                        cardinal.objective_products.goal_3,
                        cardinal.objective_products.goal_4,
                        cardinal.objective_products.id 
        
                        FROM
                        cardinal.activities 
        
                        INNER JOIN cardinal.objectives ON cardinal.activities.objective_id = cardinal.objectives.id
                        -- COLOCO OBJECTIVE PRODUCTS CON LEFT JOIN PARA TRAER TODO
                        LEFT JOIN cardinal.objective_products ON cardinal.objectives.id = cardinal.objective_products.objective_id
                        AND cardinal.activities.product_id = cardinal.objective_products.id
                        INNER JOIN cardinal.projects ON cardinal.objectives.project_id = cardinal.projects.id
                        INNER JOIN cardinal.programs ON cardinal.projects.program_id = cardinal.programs.id
                        INNER JOIN cardinal.strategic_lines ON cardinal.programs.strategic_line_id = cardinal.strategic_lines.id
                        LEFT JOIN cardinal.indicator_activities ON cardinal.activities.id = cardinal.indicator_activities.activities_id
                        LEFT JOIN cardinal.indicators ON cardinal.indicator_activities.indicator_id = cardinal.indicators.id
                        LEFT JOIN cardinal.domains ON cardinal.indicator_activities.variable_in = cardinal.domains.id
                        LEFT JOIN cardinal.activity_sources ON cardinal.activities.id = cardinal.activity_sources.activity_id
        
                        where cardinal.strategic_lines.p_a_i_id=p_paid; -- cardinal.indicator_activities.year=1
                        --ORDER BY cardinal.programs.id,cardinal.objective_products.id,cardinal.activities.id;
                
                ------------------------Declaración de constantes para la consulta--------------------------------------
                DECLARE cons_id_source integer := 0;
                DECLARE cons_id_obj integer := 0;
                DECLARE cons_id_prod integer := 0;
                DECLARE cons_name character varying;
                DECLARE cons_total_goal double precision;
                DECLARE cons_goal_1 double precision := 0;
                DECLARE cons_goal_2 double precision := 0;
                DECLARE cons_goal_3 double precision := 0;
                DECLARE cons_goal_4 double precision := 0;
                DECLARE cons_ponderacion double precision := 0;
                DECLARE cons_product_id integer := 0;
                DECLARE cons_prod_name character varying;
                DECLARE cons_unit_goal integer := 0;
                DECLARE cons_name_unit_goal character varying;
                DECLARE cons_id_proy integer := 0;
                DECLARE cons_id_prog integer := 0;
                DECLARE cons_indicador character varying;
                ----
                DECLARE cons_id_lin_st integer := 0;
                DECLARE cons_prod_weigh double precision := 0;
                DECLARE cons_st_name character varying;
                DECLARE cons_st_weigh double precision := 0;
                DECLARE cons_car_program character varying;
                DECLARE cons_prog_weigh double precision := 0;
                DECLARE cons_proy_name character varying;
                DECLARE cons_proy_weigh double precision := 0;
                DECLARE cons_obj_name character varying;
                DECLARE cons_obj_weigh double precision := 0;
                
                DECLARE cons_goal_prod_1 integer := 0;
                DECLARE cons_goal_prod_2 integer := 0;
                DECLARE cons_goal_prod_3 integer := 0;
                DECLARE cons_goal_prod_4 integer := 0;
                
                DECLARE cons_id_prod_tbl integer := 0;
                
                ----------------------------------------------------------------------------------------------------------
                DECLARE   cons_index  integer := 0;
                
                DECLARE level integer := 0;
                DECLARE   suma_vigencia  integer := 0;
                DECLARE   suma_cuatrienio  double precision := 0;
                DECLARE   index_tmp  integer := 0;
                DECLARE cons_evidence double precision := 0;
                DECLARE cons_evidence_total double precision := 0;
                
                DECLARE cons_repor_vigencia_1 integer := 0;
                DECLARE cons_repor_rezago_1 integer := 0;
                DECLARE   cons_desc_vig_1  character varying;
                DECLARE   cons_desc_rez_1  character varying;
                
                DECLARE grupo integer := 0;
                
                DECLARE cons_fid integer := 0;
                DECLARE cons_ffid integer := 0;
                DECLARE cons_fcode character varying;
                DECLARE cons_fgid integer := 0;
                DECLARE cons_fidfc integer := 0;
                DECLARE cons_fvalue_paid double precision DEFAULT 0;
                
                DECLARE id_code integer := 0;
                
                DECLARE cons2_id integer := 0;
                DECLARE cons2_value double precision DEFAULT 0;
                
                DECLARE cons_av_met_fin double precision := 0;
                DECLARE cons_acum_met_fin double precision := 0;
                DECLARE cons_goal_anio double precision := 0;
                DECLARE cons_met_fin_anual double precision := 0;
                DECLARE cons_met_fin_total double precision := 0;
                DECLARE cons_pc_av_gest double precision := 0;
                DECLARE cons_pc_av_fin double precision := 0;
                DECLARE cons_pc_av_acum double precision := 0;
                
                DECLARE temp_av_met_fin double precision := 0;
                DECLARE temp_acum_met_fin double precision := 0;
                DECLARE temp_goal_anio integer := 0;
                DECLARE temp_met_fin_anual double precision := 0;
                DECLARE temp_met_fin_total double precision := 0;
                DECLARE temp_pc_av_gest double precision := 0;
                DECLARE temp_pc_av_fin double precision := 0;
                DECLARE temp_pc_av_acum double precision := 0;
                
                DECLARE temp_pc_av_fis double precision := 0;
                DECLARE temp_pc_av_fis_rez double precision := 0;
                
                DECLARE prev_pc_av_fis double precision := 0;
                DECLARE prev_pc_av_fis_rez double precision := 0;
                
                DECLARE temp_pc_av_gest_obj double precision := 0;
                DECLARE temp_pc_av_gest_proy double precision := 0;
                DECLARE temp_pc_av_gest_prog double precision := 0;
                DECLARE temp_pc_av_gest_st double precision := 0;
                DECLARE temp_pc_av_gest_pai double precision := 0;
                
                DECLARE   id_lin_tmp   integer :=0;
                DECLARE   id_prod_tmp integer :=0;
                DECLARE   id_proy_tmp integer :=0;
                DECLARE   id_prog_tmp integer :=0;
                DECLARE   id_obj_tmp integer :=0;
                DECLARE   id_act_tmp integer :=0;
                DECLARE   obj_prod_tmp integer :=0;
                
                begin
                DROP TABLE IF EXISTS temp_table;
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
                CAST(0 as double precision) as ponderacion,
                CAST(NULL as character varying) as indicador,
                CAST(0 as integer) as unit_goal,
                CAST (NULL as character varying) as name_unit_goal,
                CAST(0 as double precision) as total_goal,
                CAST(0 as double precision) as goal_1,
                CAST(0 as double precision) as goal_2,
                CAST(0 as double precision) as goal_3,
                CAST(0 as double precision) as goal_4,
                CAST(0 as double precision) as repor_vigencia_1,
                CAST(0 as double precision) as repor_rezago_1,
                CAST (NULL as character varying) as desc_vig_1,
                CAST (NULL as character varying) as desc_rez_1,
                CAST(0 as double precision) as goal_anio,
                CAST(0 as double precision) as av_met_fin,
                CAST(0 as double precision) as met_fin_anual,
                CAST(0 as double precision) as met_fin_total,
                CAST(0 as double precision) as acum_met_fin,
                CAST(0 as double precision) as cuatrienio,
                CAST(0 as double precision) as pc_av_gest,
                CAST(0 as double precision) as pc_av_fin,
                CAST(0 as double precision) as pc_av_acum, 
                CAST(0 as double precision) as pc_av_fis,
                CAST(0 as double precision) as pc_av_fis_rez
                
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
                      fetch cur_codes into cons_id_source,cons_id_obj,cons_id_prod,cons_name,cons_total_goal,cons_goal_1,cons_goal_2,cons_goal_3,cons_goal_4,
                      cons_ponderacion,cons_product_id,cons_prod_name,cons_unit_goal,cons_name_unit_goal,cons_id_proy,cons_id_prog,cons_indicador,
                      
                      cons_id_lin_st,cons_prod_weigh,cons_st_name,cons_st_weigh,cons_car_program,cons_prog_weigh,cons_proy_name,cons_proy_weigh,
                      cons_obj_name,cons_obj_weigh,cons_goal_prod_1,cons_goal_prod_2,cons_goal_prod_3,cons_goal_prod_4
                      ;
                
                    -- exit when no more row to fetch
                      exit when not found;
                
                    --se agrega la línea estratégica
                    cons_index := cons_index+1;
                        
                    id_lin_tmp := (select count(temp_table.id) from temp_table where temp_table.id_lin=cons_id_lin_st and temp_table.level_t=1);
                    id_prod_tmp := (select count(temp_table.id) from temp_table where temp_table.id_prod=cons_id_prod  and temp_table.level_t=5);
                    id_obj_tmp := (select count(temp_table.id) from temp_table where temp_table.id_obj=cons_id_obj  and temp_table.level_t=4);
                    id_prog_tmp :=  (select count(temp_table.id) from temp_table where temp_table.id_prog=cons_id_prog  and temp_table.level_t=2);
                    id_proy_tmp :=  (select count(temp_table.id) from temp_table where temp_table.id_proy=cons_id_proy  and temp_table.level_t=3);
                    id_act_tmp := (select count(temp_table.id) from temp_table where temp_table.id_source=cons_id_source  and temp_table.level_t=6);
                    obj_prod_tmp := (select count(temp_table.id) from temp_table where temp_table.id_prod=cons_id_prod and temp_table.id_obj=cons_id_obj and temp_table.level_t=5);
                
                    IF cons_prod_name is NULL THEN
                        cons_prod_name:= (select cardinal.domains.domain FROM cardinal.domains where cardinal.domains.id=cons_id_prod);
                    END IF;
                    
                    IF cons_prod_weigh is NULL THEN
                    cons_prod_weigh:= (select  (CAST((objective_products.weighing) as double precision) / CAST(100 as double precision)) 
                                       from cardinal.objective_products where objective_products.product_id=cons_id_prod 
                                       and objective_products.objective_id=cons_id_obj );
                    END IF;
                    
                    -- se busca el nombre de la unidad de medida según el producto
                    cons_name_unit_goal:= (select domains.name from cardinal.domains 
                                           where domains.id = (select objective_products.unit_goal from cardinal.objective_products 
                                                               where objective_products.product_id = cons_id_prod
                                                               and objective_products.objective_id=cons_id_obj limit 1 ));
                
                     --obj,prod,onbj,proy,prog
                    
                    cons_evidence_total  := (select CAST(COALESCE(sum(value),0) as double precision)  
                                             from cardinal.evidence_advance where activity_id=cons_id_source);
                    cons_evidence  := (select CAST(COALESCE(sum(value),0) as double precision)  from cardinal.evidence_advance where activity_id=cons_id_source and year=p_year and rezago=false);
                    suma_cuatrienio:= (select CAST(COALESCE(sum(value),0) as double precision)    from cardinal.evidence_advance where activity_id=cons_id_source  and rezago=false);
                    cons_repor_rezago_1  := (select CAST(COALESCE(sum(value),0) as double precision)   from cardinal.evidence_advance where activity_id=cons_id_source and year=p_year and rezago=true);
                
                    cons_desc_vig_1  := (select string_agg(description, ', ') from cardinal.evidence_advance where activity_id=cons_id_source and rezago=true and year=p_year);
                    cons_desc_rez_1  := (select string_agg(description, ', ') from cardinal.evidence_advance where activity_id=cons_id_source and rezago=true and year=p_year);
                    
                
                    grupo:= grupo+1;
                    cons_met_fin_anual :=(select CAST(COALESCE(sum(value),0) as double precision)   
                                          from cardinal.activity_sources where activity_sources.activity_id=cons_id_source 
                                          and cardinal.activity_sources.age=p_year);
                                          
                    cons_av_met_fin := (SELECT CAST(COALESCE(sum(ef.value),0) as double precision)   FROM cardinal.evidence_financial ef
                                            INNER JOIN cardinal.evidence_advance ea ON ef.evidence_id = ea.id
                                            where ea.activity_id=cons_id_source   and ea.year=p_year);
                                          
                                          
                --	cons_av_met_fin:= (select CAST(COALESCE(sum(value),0) as double precision)   from evidence_financial e 
                --					  where e.activity_source_id in (select ac.id from activity_sources ac 
                --													 where ac.activity_id=cons_id_source and ac.age=p_year ));
                    
                --	cons_acum_met_fin := (select CAST(COALESCE(sum(value),0) as double precision)   from evidence_financial e 
                --					      where e.activity_source_id in (select ac.id from activity_sources ac 
                --													 where ac.activity_id=cons_id_source ));
                
                    cons_acum_met_fin := (SELECT CAST(COALESCE(sum(ef.value),0) as double precision)   FROM cardinal.evidence_financial ef
                                            INNER JOIN cardinal.evidence_advance ea ON ef.evidence_id = ea.id
                                            where ea.activity_id=cons_id_source);
                                                                          
                    cons_met_fin_total :=(select CAST(COALESCE(sum(value),0) as double precision)
                                          from cardinal.activity_sources where activity_sources.activity_id=cons_id_source);
                
                    IF cons_total_goal = 0 THEN cons_pc_av_gest:= 0;
                    ELSE 
                    cons_pc_av_gest:= (cons_evidence_total/cons_total_goal);
                    END IF ;
                    
                    IF cons_pc_av_gest >1 THEN  cons_pc_av_gest:=1; END IF;
                    
                    temp_pc_av_gest_obj := cons_pc_av_gest*cons_ponderacion;
                    IF temp_pc_av_gest_obj >1 THEN temp_pc_av_gest_obj :=1; END IF;
                    
                    temp_pc_av_gest_proy := temp_pc_av_gest_obj*cons_obj_weigh;
                    IF temp_pc_av_gest_proy >1 THEN temp_pc_av_gest_proy :=1; END IF;
                    temp_pc_av_gest_prog := temp_pc_av_gest_proy*cons_proy_weigh;
                    IF temp_pc_av_gest_prog >1 THEN temp_pc_av_gest_prog :=1; END IF;
                    temp_pc_av_gest_st := temp_pc_av_gest_prog*cons_prog_weigh;
                    IF temp_pc_av_gest_proy >1 THEN temp_pc_av_gest_proy :=1; END IF;
                    temp_pc_av_gest_pai := temp_pc_av_gest_st * cons_st_weigh;
                    
                
                    IF cons_evidence is NULL THEN  cons_evidence := 0; END IF; 
                    IF cons_met_fin_anual=0 THEN cons_pc_av_fin:=0; ELSE
                    cons_pc_av_fin:= (cons_av_met_fin/cons_met_fin_anual); END IF;
                    
                    IF cons_pc_av_fin >1 THEN  cons_pc_av_fin:=1; END IF;
                
                    IF cons_met_fin_total =0 THEN  cons_pc_av_acum:=0;	ELSE
                    cons_pc_av_acum:= cons_acum_met_fin/cons_met_fin_total; END IF;
                    
                    IF cons_pc_av_acum >1 THEN  cons_pc_av_acum:=1; END IF;
                
                    IF p_year=1 THEN cons_goal_anio:=cons_goal_1;
                    ELSEIF(p_year=2) THEN cons_goal_anio:=cons_goal_2;
                    ELSEIF(p_year=3)THEN cons_goal_anio:=cons_goal_3;
                    ELSEIF (p_year=4)THEN cons_goal_anio:=cons_goal_4;
                    END IF;
                    
                    IF cons_goal_anio =0 THEN 
                    temp_pc_av_fis := 0;
                    temp_pc_av_fis_rez := 0;
                    ELSE
                    temp_pc_av_fis := cons_evidence / cons_goal_anio;
                    temp_pc_av_fis_rez := cons_repor_rezago_1 /cons_goal_anio; 
                    END IF; 
                    
                    IF temp_pc_av_fis >1 THEN temp_pc_av_fis:=1; END IF;
                    IF temp_pc_av_fis_rez >1 THEN temp_pc_av_fis_rez:=1; END IF;
                    
                --- linea estratégica
                    IF id_lin_tmp=0 THEN
                    level:=1;
                        INSERT INTO temp_table(id_source,id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,
                                indicador,unit_goal,name_unit_goal,total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,desc_rez_1,
                                               goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin,pc_av_gest,pc_av_fin,pc_av_acum,pc_av_fis,pc_av_fis_rez)
                        VALUES (cons_id_source,cons_id_lin_st,cons_id_prod,cons_id_obj,cons_id_prog,cons_id_proy,level,grupo,cons_index,cons_st_name,cons_st_weigh,
                                '',0,'',0,0,0,0,0,0,0,'','',
                                cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,
                                cons_acum_met_fin, temp_pc_av_gest_st,
                                cons_pc_av_fin,cons_pc_av_acum,
                                (temp_pc_av_fis * cons_ponderacion* cons_obj_weigh * cons_proy_weigh * cons_prog_weigh),
                               (temp_pc_av_fis_rez * cons_ponderacion* cons_obj_weigh * cons_proy_weigh * cons_prog_weigh));
                
                    ELSE
                        temp_met_fin_anual:=(select temp_table.met_fin_anual from temp_table where temp_table.id_lin=cons_id_lin_st and temp_table.level_t=1 Limit 1); 
                        temp_av_met_fin:=(select temp_table.av_met_fin from temp_table where temp_table.id_lin=cons_id_lin_st and temp_table.level_t=1 Limit 1); 
                        temp_met_fin_total:=(select temp_table.met_fin_total from temp_table where temp_table.id_lin=cons_id_lin_st and temp_table.level_t=1 Limit 1); 
                        temp_acum_met_fin:=(select temp_table.acum_met_fin from temp_table where temp_table.id_lin=cons_id_lin_st and temp_table.level_t=1 Limit 1); 
                        temp_pc_av_gest :=(select temp_table.pc_av_gest from temp_table where temp_table.id_lin=cons_id_lin_st and temp_table.level_t=1 Limit 1);
                        temp_pc_av_fin := (select temp_table.pc_av_fin from temp_table where temp_table.id_lin=cons_id_lin_st and temp_table.level_t=1 Limit 1);
                        temp_pc_av_acum := (select temp_table.pc_av_acum from temp_table where temp_table.id_lin=cons_id_lin_st and temp_table.level_t=1 Limit 1);	
                        prev_pc_av_fis := (select temp_table.pc_av_fis from temp_table where temp_table.id_lin=cons_id_lin_st and temp_table.level_t=1 Limit 1);
                        prev_pc_av_fis_rez := (select temp_table.pc_av_fis_rez from temp_table where temp_table.id_lin=cons_id_lin_st and temp_table.level_t=1 Limit 1);
                
                        prev_pc_av_fis := prev_pc_av_fis + (temp_pc_av_fis * cons_ponderacion* cons_obj_weigh * cons_proy_weigh * cons_prog_weigh);
                        prev_pc_av_fis_rez := prev_pc_av_fis_rez + (temp_pc_av_fis_rez * cons_ponderacion* cons_obj_weigh * cons_proy_weigh * cons_prog_weigh);
                
                        temp_pc_av_gest:=temp_pc_av_gest_st + temp_pc_av_gest;
                        temp_pc_av_fin :=cons_pc_av_fin+temp_pc_av_fin;
                        temp_pc_av_acum:=cons_pc_av_acum+temp_pc_av_acum;
                
                        IF prev_pc_av_fis >1 THEN prev_pc_av_fis:=1; END IF;
                        IF prev_pc_av_fis_rez >1 THEN prev_pc_av_fis_rez:=1; END IF;
                        IF temp_pc_av_gest >1 THEN temp_pc_av_gest:=1; END IF;
                        IF temp_pc_av_fin >1 THEN temp_pc_av_fin:=1; END IF;
                        IF temp_pc_av_acum >1 THEN  temp_pc_av_acum:=1;END IF;
                                         
                        update temp_table set met_fin_anual=(cons_met_fin_anual+temp_met_fin_anual), av_met_fin=(cons_av_met_fin+temp_av_met_fin),
                                             met_fin_total=(cons_met_fin_total+temp_met_fin_total), acum_met_fin=(cons_acum_met_fin+temp_acum_met_fin),
                                             pc_av_gest=temp_pc_av_gest,pc_av_fin=temp_pc_av_fin,
                                             pc_av_acum=temp_pc_av_acum, pc_av_fis= prev_pc_av_fis,
                                             pc_av_fis_rez= prev_pc_av_fis_rez
                        where temp_table.id_lin=cons_id_lin_st and temp_table.level_t=1;
                                         
                    END IF;
                    
                    
                    -- programa
                    IF id_prog_tmp=0 THEN
                    -- se agrega el programa si no existe
                    
                    level:=2;
                    INSERT INTO temp_table(id_source,id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
                    total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
                    desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin,pc_av_gest,pc_av_fin,pc_av_acum, pc_av_fis,pc_av_fis_rez)
                    VALUES (cons_id_source,cons_id_lin_st,cons_id_prod,cons_id_obj,cons_id_prog,cons_id_proy,level,grupo,cons_index,cons_car_program,cons_prog_weigh,
                            '',0,'',0,0,0,0,0,0,0,'','',
                            cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,cons_acum_met_fin,
                            temp_pc_av_gest_proy
                            ,cons_pc_av_fin,
                            cons_pc_av_acum,(temp_pc_av_fis * cons_ponderacion* cons_obj_weigh * cons_proy_weigh),
                           (temp_pc_av_fis_rez * cons_ponderacion* cons_obj_weigh * cons_proy_weigh));
                            
                    ELSE
                        temp_met_fin_anual:=(select temp_table.met_fin_anual from temp_table where temp_table.id_prog=cons_id_prog and temp_table.level_t=2 Limit 1); 
                        temp_av_met_fin:=(select temp_table.av_met_fin from temp_table where temp_table.id_prog=cons_id_prog and temp_table.level_t=2 Limit 1); 
                        temp_met_fin_total:=(select temp_table.met_fin_total from temp_table where temp_table.id_prog=cons_id_prog and temp_table.level_t=2 Limit 1); 
                        temp_acum_met_fin:=(select temp_table.acum_met_fin from temp_table where temp_table.id_prog=cons_id_prog and temp_table.level_t=2 Limit 1); 
                        temp_pc_av_gest :=(select temp_table.pc_av_gest from temp_table where temp_table.id_prog=cons_id_prog and temp_table.level_t=2 Limit 1);
                        temp_pc_av_fin := (select temp_table.pc_av_fin from temp_table where temp_table.id_prog=cons_id_prog and temp_table.level_t=2 Limit 1);
                        temp_pc_av_acum := (select temp_table.pc_av_acum from temp_table where temp_table.id_prog=cons_id_prog and temp_table.level_t=2 Limit 1);				 
                        prev_pc_av_fis := (select temp_table.pc_av_fis from temp_table where temp_table.id_prog=cons_id_prog and temp_table.level_t=2 Limit 1);
                        prev_pc_av_fis_rez := (select temp_table.pc_av_fis_rez from temp_table where temp_table.id_prog=cons_id_prog and temp_table.level_t=2 Limit 1);
                
                        prev_pc_av_fis := prev_pc_av_fis + (temp_pc_av_fis * cons_ponderacion* cons_obj_weigh * cons_proy_weigh);
                        prev_pc_av_fis_rez := prev_pc_av_fis_rez + (temp_pc_av_fis_rez * cons_ponderacion* cons_obj_weigh * cons_proy_weigh);
                        temp_pc_av_gest:=temp_pc_av_gest_prog +temp_pc_av_gest;
                        temp_pc_av_fin :=cons_pc_av_fin+temp_pc_av_fin;
                        temp_pc_av_acum:=cons_pc_av_acum+temp_pc_av_acum;
                    
                        IF prev_pc_av_fis >1 THEN prev_pc_av_fis:=1; END IF;
                        IF prev_pc_av_fis_rez >1 THEN prev_pc_av_fis_rez:=1; END IF;
                        IF temp_pc_av_gest >1 THEN temp_pc_av_gest:=1; END IF;
                        IF temp_pc_av_fin >1 THEN temp_pc_av_fin:=1; END IF;
                        IF temp_pc_av_acum >1 THEN  temp_pc_av_acum:=1;END IF;
                                         
                    update temp_table set met_fin_anual=(cons_met_fin_anual+temp_met_fin_anual), av_met_fin=(cons_av_met_fin+temp_av_met_fin),
                                         met_fin_total=(cons_met_fin_total+temp_met_fin_total), acum_met_fin=(cons_acum_met_fin+temp_acum_met_fin),
                                         pc_av_gest=temp_pc_av_gest,pc_av_fin=temp_pc_av_fin,
                                         pc_av_acum=temp_pc_av_acum, 
                                         pc_av_fis= prev_pc_av_fis,
                                         pc_av_fis_rez= prev_pc_av_fis_rez
                    where temp_table.id_prog=cons_id_prog and temp_table.level_t=2 ;	
                    
                    end if;
                    
                    
                    -- proyecto
                    IF id_proy_tmp=0 THEN
                    level:=3;
                    
                        INSERT INTO temp_table(id_source,id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
                        total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
                        desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin,pc_av_gest,pc_av_fin,pc_av_acum, pc_av_fis,pc_av_fis_rez)
                        VALUES (cons_id_source,cons_id_lin_st,cons_id_prod,cons_id_obj,cons_id_prog,cons_id_proy,level,grupo,cons_index,cons_proy_name,cons_proy_weigh,
                                '',0,'',0,0,0,0,0,0,0,'','',
                                cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,cons_acum_met_fin,
                                temp_pc_av_gest_proy
                                ,cons_pc_av_fin,
                                cons_pc_av_acum, (temp_pc_av_fis * cons_ponderacion* cons_obj_weigh),
                                (temp_pc_av_fis_rez * cons_ponderacion* cons_obj_weigh));
                
                    ELSE
                        temp_met_fin_anual:=(select temp_table.met_fin_anual from temp_table where temp_table.id_proy=cons_id_proy  and temp_table.level_t=3 Limit 1); 
                        temp_av_met_fin:=(select temp_table.av_met_fin from temp_table where temp_table.id_proy=cons_id_proy  and temp_table.level_t=3 Limit 1); 
                        temp_met_fin_total:=(select temp_table.met_fin_total from temp_table where temp_table.id_proy=cons_id_proy  and temp_table.level_t=3 Limit 1); 
                        temp_acum_met_fin:=(select temp_table.acum_met_fin from temp_table where temp_table.id_proy=cons_id_proy  and temp_table.level_t=3 Limit 1); 
                        temp_pc_av_gest :=(select temp_table.pc_av_gest from temp_table where temp_table.id_proy=cons_id_proy  and temp_table.level_t=3 Limit 1);
                        temp_pc_av_fin := (select temp_table.pc_av_fin from temp_table where temp_table.id_proy=cons_id_proy  and temp_table.level_t=3 Limit 1);
                        temp_pc_av_acum := (select temp_table.pc_av_acum from temp_table where temp_table.id_proy=cons_id_proy and temp_table.level_t=3 Limit 1);				 
                        prev_pc_av_fis := (select temp_table.pc_av_fis from temp_table where temp_table.id_proy=cons_id_proy and temp_table.level_t=3 Limit 1);
                        prev_pc_av_fis_rez := (select temp_table.pc_av_fis_rez from temp_table where temp_table.id_proy=cons_id_proy and temp_table.level_t=3 Limit 1);
                
                        prev_pc_av_fis := prev_pc_av_fis + (temp_pc_av_fis * cons_ponderacion* cons_obj_weigh);
                        prev_pc_av_fis_rez := prev_pc_av_fis_rez + (temp_pc_av_fis_rez * cons_ponderacion* cons_obj_weigh); 
                        temp_pc_av_gest:= temp_pc_av_gest_proy +temp_pc_av_gest;
                        temp_pc_av_fin :=cons_pc_av_fin+temp_pc_av_fin;
                        temp_pc_av_acum:=cons_pc_av_acum+temp_pc_av_acum;
                    
                        IF prev_pc_av_fis >1 THEN prev_pc_av_fis:=1; END IF;
                        IF prev_pc_av_fis_rez >1 THEN prev_pc_av_fis_rez:=1; END IF;
                        IF temp_pc_av_gest >1 THEN temp_pc_av_gest:=1; END IF;
                        IF temp_pc_av_fin >1 THEN temp_pc_av_fin:=1; END IF;
                        IF temp_pc_av_acum >1 THEN  temp_pc_av_acum:=1;END IF;
                                         
                        update temp_table set met_fin_anual=(cons_met_fin_anual+temp_met_fin_anual), av_met_fin=(cons_av_met_fin+temp_av_met_fin),
                                             met_fin_total=(cons_met_fin_total+temp_met_fin_total), acum_met_fin=(cons_acum_met_fin+temp_acum_met_fin),
                                             pc_av_gest=temp_pc_av_gest,pc_av_fin=temp_pc_av_fin,
                                             pc_av_acum=temp_pc_av_acum, pc_av_fis= prev_pc_av_fis,
                                             pc_av_fis_rez= prev_pc_av_fis_rez
                        where temp_table.id_proy=cons_id_proy and temp_table.level_t=3 ;	
                
                    END IF;
                    -- objetivo
                    
                    
                
                    
                    
                    IF (id_obj_tmp=0) THEN
                    level:=4;
                    INSERT INTO temp_table(id_source,id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
                    total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
                    desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin,pc_av_gest,pc_av_fin,pc_av_acum,pc_av_fis,pc_av_fis_rez)
                    VALUES (cons_id_source,cons_id_lin_st,cons_id_prod,cons_id_obj,cons_id_prog,cons_id_proy,level,grupo,cons_index,cons_obj_name,cons_obj_weigh,
                            '',0,'',0,0,0,0,0,0,0,'','',
                            cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,cons_acum_met_fin,
                            temp_pc_av_gest_obj
                            ,cons_pc_av_fin,
                            cons_pc_av_acum,(temp_pc_av_fis * cons_ponderacion),(temp_pc_av_fis_rez * cons_ponderacion) ) ;
                            
                    ELSEIF  id_act_tmp = 0 THEN
                        temp_met_fin_anual:=(select temp_table.met_fin_anual from temp_table where temp_table.id_obj=cons_id_obj and temp_table.level_t=4 Limit 1); 
                        temp_av_met_fin:=(select temp_table.av_met_fin from temp_table where temp_table.id_obj=cons_id_obj and temp_table.level_t=4 Limit 1); 
                        temp_met_fin_total:=(select temp_table.met_fin_total from temp_table where temp_table.id_obj=cons_id_obj and temp_table.level_t=4 Limit 1); 
                        temp_acum_met_fin:=(select temp_table.acum_met_fin from temp_table where temp_table.id_obj=cons_id_obj and temp_table.level_t=4 Limit 1); 
                        temp_pc_av_gest :=(select temp_table.pc_av_gest from temp_table where temp_table.id_obj=cons_id_obj and temp_table.level_t=4 Limit 1);
                        temp_pc_av_fin := (select temp_table.pc_av_fin from temp_table where temp_table.id_obj=cons_id_obj and temp_table.level_t=4 Limit 1);
                        temp_pc_av_acum := (select temp_table.pc_av_acum from temp_table where temp_table.id_obj=cons_id_obj and temp_table.level_t=4 Limit 1);				 
                        prev_pc_av_fis := (select temp_table.pc_av_fis from temp_table where temp_table.id_obj=cons_id_obj and temp_table.level_t=4 Limit 1);
                        prev_pc_av_fis_rez := (select temp_table.pc_av_fis_rez from temp_table where temp_table.id_obj=cons_id_obj and temp_table.level_t=4 Limit 1);
                        
                        prev_pc_av_fis := prev_pc_av_fis + (temp_pc_av_fis * cons_ponderacion);
                        prev_pc_av_fis_rez := prev_pc_av_fis_rez + (temp_pc_av_fis_rez * cons_ponderacion);
                        
                        temp_pc_av_gest:= temp_pc_av_gest_obj + temp_pc_av_gest;
                        temp_pc_av_fin :=cons_pc_av_fin+temp_pc_av_fin;
                        temp_pc_av_acum:=cons_pc_av_acum+temp_pc_av_acum;
                    
                        IF prev_pc_av_fis >1 THEN prev_pc_av_fis:=1; END IF;
                        IF prev_pc_av_fis_rez >1 THEN prev_pc_av_fis_rez:=1; END IF;
                        IF temp_pc_av_gest >1 THEN temp_pc_av_gest:=1; END IF;
                        IF temp_pc_av_fin >1 THEN temp_pc_av_fin:=1; END IF;
                        IF temp_pc_av_acum >1 THEN  temp_pc_av_acum:=1;END IF;
                                         
                    update temp_table set met_fin_anual=(cons_met_fin_anual+temp_met_fin_anual), av_met_fin=(cons_av_met_fin+temp_av_met_fin),
                                         met_fin_total=(cons_met_fin_total+temp_met_fin_total), acum_met_fin=(cons_acum_met_fin+temp_acum_met_fin),
                                         pc_av_gest=temp_pc_av_gest,pc_av_fin=temp_pc_av_fin,
                                         pc_av_acum=temp_pc_av_acum, pc_av_fis= prev_pc_av_fis,
                                         pc_av_fis_rez =prev_pc_av_fis_rez 
                                         
                    where temp_table.id_obj=cons_id_obj and temp_table.level_t=4 ;	
                
                    
                    END IF;
                    
                    -- PRODUCTO
                    suma_vigencia := (select sum(value) from cardinal.evidence_advance where year=p_year and activity_id=cons_id_source);
                    cons_desc_vig_1  := (select string_agg(description, ', ')  from cardinal.evidence_advance where activity_id=cons_id_source and year=p_year limit 1);
                    cons_desc_rez_1  := (select string_agg(description, ', ')  from cardinal.evidence_advance where activity_id=cons_id_source and year=p_year limit 1);
                    
                IF id_prod_tmp=0 THEN
                    level:=5;
                    INSERT INTO temp_table(id_source,id_lin,id_prod,id_obj,id_prog,id_proy,level_t, grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
                        total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
                        desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin,pc_av_gest,pc_av_fin,pc_av_acum, pc_av_fis,pc_av_fis_rez)
                    VALUES (cons_id_source,cons_id_lin_st,cons_id_prod,cons_id_obj,cons_id_prog,cons_id_proy,level, grupo,cons_index,cons_prod_name,cons_prod_weigh,
                            'NA',cons_unit_goal,cons_name_unit_goal,0,cons_goal_prod_1,cons_goal_prod_2,cons_goal_prod_3,cons_goal_prod_4,
                            cons_evidence,0,'NA','NA',cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,
                           cons_acum_met_fin,NULL,cons_pc_av_fin,cons_pc_av_acum,NULL,NULL);
                    
                    ELSEIF obj_prod_tmp= 0  THEN
                    
                    level:=5;
                        INSERT INTO temp_table(id_source,id_lin,id_prod,id_obj,id_prog,id_proy,level_t, grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
                        total_goal,goal_1, goal_2,goal_3,goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
                        desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin, pc_av_fis)
                        VALUES (cons_id_source,cons_id_lin_st,cons_id_prod,cons_id_obj,cons_id_prog,cons_id_proy,level, grupo,cons_index,cons_prod_name,
                                cons_prod_weigh,
                                'NA',cons_unit_goal,cons_name_unit_goal,0,cons_goal_prod_1,cons_goal_prod_2,cons_goal_prod_3,cons_goal_prod_4,
                                cons_evidence,0,'NA','NA',cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,
                               cons_acum_met_fin,NULL);
                                --((temp_pc_av_fis * cons_ponderacion)))
                
                    ELSEIF  id_act_tmp = 0 THEN
                    temp_met_fin_anual:=(select temp_table.met_fin_anual from temp_table where temp_table.id_prod=cons_id_prod and temp_table.id_obj=cons_id_obj and temp_table.level_t=5 Limit 1); 
                    temp_av_met_fin:=(select temp_table.av_met_fin from temp_table where temp_table.id_prod=cons_id_prod and temp_table.id_obj=cons_id_obj and temp_table.level_t=5 Limit 1); 
                    temp_met_fin_total:=(select temp_table.met_fin_total from temp_table where temp_table.id_prod=cons_id_prod and temp_table.id_obj=cons_id_obj and temp_table.level_t=5 Limit 1); 
                    temp_acum_met_fin:=(select temp_table.acum_met_fin from temp_table where temp_table.id_prod=cons_id_prod and temp_table.id_obj=cons_id_obj and temp_table.level_t=5 Limit 1); 
                    temp_pc_av_gest :=(select temp_table.pc_av_gest from temp_table where temp_table.id_prod=cons_id_prod and temp_table.id_obj=cons_id_obj and temp_table.level_t=5 Limit 1);
                    temp_pc_av_fin := (select temp_table.pc_av_fin from temp_table where temp_table.id_prod=cons_id_prod and temp_table.id_obj=cons_id_obj and temp_table.level_t=5 Limit 1);
                    temp_pc_av_acum := (select temp_table.pc_av_acum from temp_table where temp_table.id_prod=cons_id_prod and temp_table.id_obj=cons_id_obj and temp_table.level_t=5 Limit 1);				 
                    prev_pc_av_fis := (select temp_table.pc_av_fis from temp_table where temp_table.id_prod=cons_id_prod and temp_table.id_obj=cons_id_obj and temp_table.level_t=5 Limit 1);
                    
                    temp_pc_av_fin :=cons_pc_av_fin+temp_pc_av_fin;
                    temp_pc_av_acum:=cons_pc_av_acum+temp_pc_av_acum;
                    
                        IF temp_pc_av_gest >1 THEN temp_pc_av_gest:=1; END IF;
                        IF temp_pc_av_fin >1 THEN temp_pc_av_fin:=1; END IF;
                        IF temp_pc_av_acum >1 THEN  temp_pc_av_acum:=1;END IF;
                                         
                    update temp_table set met_fin_anual=(cons_met_fin_anual+temp_met_fin_anual), av_met_fin=(cons_av_met_fin+temp_av_met_fin),
                                         met_fin_total=(cons_met_fin_total+temp_met_fin_total), acum_met_fin=(cons_acum_met_fin+temp_acum_met_fin),
                                         pc_av_fin=temp_pc_av_fin,
                                         pc_av_acum=temp_pc_av_acum
                                
                                        --pc_av_fis= prev_pc_av_fis + (temp_pc_av_fis * cons_ponderacion)
                
                    where temp_table.id_prod=cons_id_prod and temp_table.id_obj=cons_id_obj and temp_table.level_t=5;	
                
                    
                END IF;		   
                    -- actividad
                                                    
                
                    IF id_act_tmp= 0 THEN
                    level:=6;
                    INSERT INTO temp_table(id_source,id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
                    total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
                    desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin, cuatrienio,pc_av_gest,pc_av_fin,pc_av_acum, pc_av_fis,pc_av_fis_rez)
                    VALUES (cons_id_source,cons_id_lin_st,cons_id_prod,cons_id_obj,cons_id_prog,cons_id_proy,level,grupo,cons_index,cons_name,cons_ponderacion,
                            cons_indicador,cons_unit_goal,cons_name_unit_goal,cons_total_goal,cons_goal_1,cons_goal_2,cons_goal_3,cons_goal_4,
                            cons_evidence,cons_repor_rezago_1,cons_desc_vig_1,cons_desc_rez_1,
                            cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,cons_acum_met_fin,suma_cuatrienio,cons_pc_av_gest,
                            cons_pc_av_fin,cons_pc_av_acum, temp_pc_av_fis,temp_pc_av_fis_rez);
                
                    END IF;
                   end loop;
                  
                   -- close the cursor
                   close cur_codes;
                   
                RETURN QUERY 
                SELECT temp_table.id_lin, temp_table.level_t , temp_table.grupo_pai , temp_table.id , temp_table.name , 
                temp_table.ponderacion , temp_table.indicador, temp_table.unit_goal , temp_table.name_unit_goal ,
                temp_table.total_goal , temp_table.goal_1 , temp_table.goal_2 , temp_table.goal_3 , temp_table.goal_4 , 
                temp_table.repor_vigencia_1 , temp_table.repor_rezago_1 , temp_table.desc_vig_1 ,
                temp_table.desc_rez_1 , temp_table.goal_anio , temp_table.av_met_fin , temp_table.met_fin_anual , 
                temp_table.met_fin_total , temp_table.acum_met_fin , temp_table.cuatrienio, temp_table.pc_av_gest,
                temp_table.pc_av_fin,temp_table.pc_av_acum, temp_table.pc_av_fis,temp_table.pc_av_fis_rez
                from temp_table;
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
