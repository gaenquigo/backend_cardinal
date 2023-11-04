<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjustePaiYear extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("  
        DROP FUNCTION public.report_pai_year_gral(integer, integer);
        ");

        DB::unprepared("        
        CREATE OR REPLACE FUNCTION public.report_pai_year_gral(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id_lin bigint, level integer, grupo_pai bigint, id bigint, name character varying, ponderacion double precision,
                          indicador character varying, unit_goal integer, name_unit_goal character varying, total_goal double precision,
                          goal_1 double precision, goal_2 double precision, goal_3 double precision, goal_4 double precision,
                          repor_vigencia double precision, repor_rezago_1 double precision, desc_vig_1 text, desc_rez_1 text,
                          goal_anio double precision, av_met_fin double precision, met_fin_anual double precision, met_fin_total double precision,
                          acum_met_fin double precision, cuatrienio double precision, pc_av_gest double precision, pc_av_fin double precision, 
                          pc_av_acum double precision, pc_av_fis double precision, pc_av_fis_rez double precision) AS $$
        declare 
                     --titles text default '';
                     --rec_film  record;	 
                    cur_codes cursor
                         for SELECT
                                distinct 
                                public.activities.id as act_id,
                                public.activities.objective_id,
                                public.activities.product_id,
                                public.activities.name as act_name,
                                public.activities.goal,
                                public.activities.goal_1,
                                public.activities.goal_2,
                                public.activities.goal_3,
                                public.activities.goal_4,
                                (CAST((public.activities.weighing) as double precision) / CAST(100 as double precision))as act_weighing,
                                public.objective_products.product_id,
                                public.objective_products.product_other as prod_name,
                
                                public.objective_products.unit_goal,
                                CAST (NULL as character varying) as name_unit_goal,
                                public.objectives.project_id,
                                public.programs.id as id_prog,
                                public.indicators.abbreviated_name,
                                
                                public.strategic_lines.id as st_lin_id,
                                (CAST((public.objective_products.weighing) as double precision) / CAST(100 as double precision)),
                                public.strategic_lines.name as st_lin_name,
                                (CAST((public.strategic_lines.weighing) as double precision) / CAST(100 as double precision)),
                                public.programs.car_program,
                                (CAST((public.programs.weighing) as double precision) / CAST(100 as double precision)),
                                public.projects.project,
                                (CAST((public.projects.weighing) as double precision) / CAST(100 as double precision)),
                                public.objectives.objective as obj_name,
                                (CAST((public.objectives.weighing) as double precision) / CAST(100 as double precision)),
                                public.objective_products.goal_1,
                                public.objective_products.goal_2,
                                public.objective_products.goal_3,
                                public.objective_products.goal_4,
                                public.objective_products.id 
                
                                FROM
                                public.activities 
                
                                INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                                -- COLOCO OBJECTIVE PRODUCTS CON LEFT JOIN PARA TRAER TODO
                                LEFT JOIN public.objective_products ON public.objectives.id = public.objective_products.objective_id
                                AND public.activities.product_id = public.objective_products.id
                                INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                                INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                                INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
                                LEFT JOIN public.indicator_activities ON public.activities.id = public.indicator_activities.activities_id
                                LEFT JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                                LEFT JOIN public.domains ON public.indicator_activities.variable_in = public.domains.id
                                LEFT JOIN public.activity_sources ON public.activities.id = public.activity_sources.activity_id
                
                                where public.strategic_lines.p_a_i_id=p_paid; -- public.indicator_activities.year=1
                                --ORDER BY public.programs.id,public.objective_products.id,public.activities.id;
                
                ------------------------Declaración de constantes para la consulta--------------------------------------
                DECLARE cons_id_source bigint := 0;
                DECLARE cons_id_obj bigint := 0;
                DECLARE cons_id_prod bigint := 0;
                DECLARE cons_name character varying;
                DECLARE cons_total_goal double precision;
                DECLARE cons_goal_1 double precision := 0;
                DECLARE cons_goal_2 double precision := 0;
                DECLARE cons_goal_3 double precision := 0;
                DECLARE cons_goal_4 double precision := 0;
                DECLARE cons_ponderacion double precision := 0;
                DECLARE cons_product_id bigint := 0;
                DECLARE cons_prod_name character varying;
                DECLARE cons_unit_goal integer := 0;
                DECLARE cons_name_unit_goal character varying;
                DECLARE cons_id_proy bigint := 0;
                DECLARE cons_id_prog bigint := 0;
                DECLARE cons_indicador character varying;
                ----
                DECLARE cons_id_lin_st bigint := 0;
                DECLARE cons_prod_weigh double precision := 0;
                DECLARE cons_st_name character varying;
                DECLARE cons_st_weigh double precision := 0;
                DECLARE cons_car_program character varying;
                DECLARE cons_prog_weigh double precision := 0;
                DECLARE cons_proy_name character varying;
                DECLARE cons_proy_weigh double precision := 0;
                DECLARE cons_obj_name character varying;
                DECLARE cons_obj_weigh double precision := 0;
                
                DECLARE cons_goal_prod_1 double precision := 0;
                DECLARE cons_goal_prod_2 double precision := 0;
                DECLARE cons_goal_prod_3 double precision := 0;
                DECLARE cons_goal_prod_4 double precision := 0;
                
                DECLARE cons_id_prod_tbl bigint := 0;
                
                ----------------------------------------------------------------------------------------------------------
                DECLARE   cons_index  bigint := 0;
                
                DECLARE level integer := 0;
                DECLARE   suma_vigencia  integer := 0;
                DECLARE   suma_cuatrienio  double precision := 0;
                DECLARE   index_tmp  bigint := 0;
                DECLARE cons_evidence double precision := 0;
                DECLARE cons_evidence_total double precision := 0;
                
                DECLARE cons_repor_vigencia_1 integer := 0;
                DECLARE cons_repor_rezago_1 integer := 0;
                DECLARE   cons_desc_vig_1 text;
                DECLARE   cons_desc_rez_1  text;
                
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
                
                DECLARE   id_lin_tmp   bigint :=0;
                DECLARE   id_prod_tmp bigint :=0;
                DECLARE   id_proy_tmp bigint :=0;
                DECLARE   id_prog_tmp bigint :=0;
                DECLARE   id_obj_tmp bigint :=0;
                DECLARE   id_act_tmp bigint :=0;
                DECLARE   obj_prod_tmp bigint :=0;
                
                begin
                 
                --DROP TABLE temp_table;
                CREATE TEMP TABLE IF NOT EXISTS temp_table AS
                select 
                CAST(0 as bigint) as id_source,
                CAST(0 as bigint) as id_lin,
                CAST(0 as bigint) as id_prod,
                CAST(0 as bigint) as id_obj,
                CAST(0 as bigint) as id_prog,
                CAST(0 as bigint) as id_proy,
                
                CAST(0 as integer) as level_t,
                CAST(0 as bigint) as grupo_pai,
                CAST(act.id as bigint) as id,
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
                CAST (NULL as text) as desc_vig_1,
                CAST (NULL as text) as desc_rez_1,
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
                from  public.activities act 
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
                        cons_prod_name:= (select public.domains.domain FROM public.domains where public.domains.id=cons_id_prod);
                    END IF;
                    
                    IF cons_prod_weigh is NULL THEN
                    cons_prod_weigh:= (select  (CAST((objective_products.weighing) as double precision) / CAST(100 as double precision)) 
                                       from objective_products where objective_products.product_id=cons_id_prod 
                                       and objective_products.objective_id=cons_id_obj );
                    END IF;
                    
                    -- se busca el nombre de la unidad de medida según el producto
                    cons_name_unit_goal:= (select domains.name from domains 
                                           where domains.id = (select objective_products.unit_goal from objective_products 
                                                               where objective_products.product_id = cons_id_prod
                                                               and objective_products.objective_id=cons_id_obj limit 1 ));
                
                     --obj,prod,onbj,proy,prog
                    
                    cons_evidence_total  := (select CAST(COALESCE(sum(value),0) as double precision)  
                                             from evidence_advance where activity_id=cons_id_source);
                    cons_evidence  := (select CAST(COALESCE(sum(value),0) as double precision)  from evidence_advance where activity_id=cons_id_source and year=p_year and rezago=false);
                    suma_cuatrienio:= (select CAST(COALESCE(sum(value),0) as double precision)    from evidence_advance where activity_id=cons_id_source  and rezago=false);
                    cons_repor_rezago_1  := (select CAST(COALESCE(sum(value),0) as double precision)   from evidence_advance where activity_id=cons_id_source and year=p_year and rezago=true);
                
                    cons_desc_vig_1  := (select CAST(string_agg(SUBSTRING(description,0,2000), ', ') as TEXT) from evidence_advance where activity_id=cons_id_source and rezago=true and year=p_year limit 1);
                    cons_desc_rez_1  := (select string_agg(description, ', ') from evidence_advance where activity_id=cons_id_source and rezago=true and year=p_year);
                            
                    grupo:= grupo+1;
                    cons_met_fin_anual :=(select CAST(COALESCE(sum(value),0) as double precision)   
                                          from activity_sources where activity_sources.activity_id=cons_id_source 
                                          and activity_sources.age=p_year);
                                          
                    cons_av_met_fin := (SELECT CAST(COALESCE(sum(ef.value),0) as double precision)   FROM public.evidence_financial ef
                                            INNER JOIN public.evidence_advance ea ON ef.evidence_id = ea.id
                                            where ea.activity_id=cons_id_source   and ea.year=p_year);
                                          
                                          
                --	cons_av_met_fin:= (select CAST(COALESCE(sum(value),0) as double precision)   from evidence_financial e 
                --					  where e.activity_source_id in (select ac.id from activity_sources ac 
                --													 where ac.activity_id=cons_id_source and ac.age=p_year ));
                    
                --	cons_acum_met_fin := (select CAST(COALESCE(sum(value),0) as double precision)   from evidence_financial e 
                --					      where e.activity_source_id in (select ac.id from activity_sources ac 
                --													 where ac.activity_id=cons_id_source ));
                
                    cons_acum_met_fin := (SELECT CAST(COALESCE(sum(ef.value),0) as double precision)   FROM public.evidence_financial ef
                                            INNER JOIN public.evidence_advance ea ON ef.evidence_id = ea.id
                                            where ea.activity_id=cons_id_source);
                                                                          
                    cons_met_fin_total :=(select CAST(COALESCE(sum(value),0) as double precision)
                                          from activity_sources where activity_sources.activity_id=cons_id_source);
                
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
                        SELECT t.met_fin_anual, t.av_met_fin, t.met_fin_total, t.acum_met_fin, t.pc_av_gest,  t.pc_av_fin, t.pc_av_acum, t.pc_av_fis,
                        t.pc_av_fis_rez from temp_table t where t.id_lin=cons_id_lin_st and t.level_t=1 Limit 1
                        into temp_met_fin_anual, temp_av_met_fin,temp_met_fin_total,temp_acum_met_fin,temp_pc_av_gest,
                        temp_pc_av_fin,temp_pc_av_acum,prev_pc_av_fis, prev_pc_av_fis_rez;
                            
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
                        SELECT t.met_fin_anual, t.av_met_fin, t.met_fin_total, t.acum_met_fin, t.pc_av_gest,  t.pc_av_fin, t.pc_av_acum, t.pc_av_fis,
                        t.pc_av_fis_rez from temp_table t where t.id_prog=cons_id_prog and t.level_t=2 Limit 1
                        into temp_met_fin_anual, temp_av_met_fin,temp_met_fin_total,temp_acum_met_fin,temp_pc_av_gest,
                        temp_pc_av_fin,temp_pc_av_acum,prev_pc_av_fis, prev_pc_av_fis_rez;
                
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
        
                        SELECT t.met_fin_anual, t.av_met_fin, t.met_fin_total, t.acum_met_fin, t.pc_av_gest,  t.pc_av_fin, t.pc_av_acum, t.pc_av_fis,
                        t.pc_av_fis_rez from temp_table t where t.id_proy=cons_id_proy and t.level_t=3 Limit 1
                        into temp_met_fin_anual, temp_av_met_fin,temp_met_fin_total,temp_acum_met_fin,temp_pc_av_gest,
                        temp_pc_av_fin,temp_pc_av_acum,prev_pc_av_fis, prev_pc_av_fis_rez;
                
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
                        SELECT t.met_fin_anual, t.av_met_fin, t.met_fin_total, t.acum_met_fin, t.pc_av_gest,  t.pc_av_fin, t.pc_av_acum, t.pc_av_fis,
                        t.pc_av_fis_rez from temp_table t where t.id_obj=cons_id_obj and t.level_t=4 Limit 1
                        into temp_met_fin_anual, temp_av_met_fin,temp_met_fin_total,temp_acum_met_fin,temp_pc_av_gest,
                        temp_pc_av_fin,temp_pc_av_acum,prev_pc_av_fis, prev_pc_av_fis_rez;
                        
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
                    suma_vigencia := (select sum(value) from evidence_advance where year=p_year and activity_id=cons_id_source);
                    cons_desc_vig_1  := (select CAST(string_agg(SUBSTRING(description,0,2000), ', ') as TEXT)  from evidence_advance where activity_id=cons_id_source and year=p_year limit 1);
                    cons_desc_rez_1  := (select string_agg(description, ', ')  from evidence_advance where activity_id=cons_id_source and year=p_year);
                    
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
                    SELECT t.met_fin_anual, t.av_met_fin, t.met_fin_total, t.acum_met_fin, t.pc_av_gest,  t.pc_av_fin, t.pc_av_acum, t.pc_av_fis
                    from temp_table t where t.id_prod=cons_id_prod and t.id_obj=cons_id_obj and t.level_t=5 Limit 1
                    into temp_met_fin_anual, temp_av_met_fin,temp_met_fin_total,temp_acum_met_fin,temp_pc_av_gest,
                    temp_pc_av_fin,temp_pc_av_acum,prev_pc_av_fis;
               
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
                    INSERT INTO temp_table(id_source,id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,
                                          ponderacion,	indicador,	unit_goal,	name_unit_goal,	total_goal,
                                          goal_1,	 goal_2,	goal_3,	 goal_4,	 repor_vigencia_1,	repor_rezago_1, desc_vig_1,
                                           goal_anio,	av_met_fin,	met_fin_anual,	met_fin_total,acum_met_fin,	 cuatrienio, pc_av_gest,	pc_av_fin,
                                           pc_av_acum,	 pc_av_fis,	pc_av_fis_rez
        
        )
                    VALUES (cons_id_source,cons_id_lin_st,cons_id_prod,cons_id_obj,cons_id_prog,cons_id_proy,level,grupo,cons_index,cons_name,
                           cons_ponderacion,	cons_indicador,	cons_unit_goal,	cons_name_unit_goal,	cons_total_goal,
                           cons_goal_1,	cons_goal_2,	cons_goal_3,	cons_goal_4,	cons_evidence,	cons_repor_rezago_1,	cons_desc_vig_1,
                            cons_goal_anio,	cons_av_met_fin,	cons_met_fin_anual,	cons_met_fin_total,cons_acum_met_fin,	suma_cuatrienio,
                            cons_pc_av_gest, cons_pc_av_fin,cons_pc_av_acum,	 temp_pc_av_fis,	temp_pc_av_fis_rez);
                
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
