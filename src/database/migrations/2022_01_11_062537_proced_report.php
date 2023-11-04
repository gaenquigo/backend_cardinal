<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedReport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.report_full_gastos_inv(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id_lin double precision, id_act double precision, id bigint, id_prod double precision, id_obj double precision, id_prog double precision, id_proy double precision, name character varying, level bigint, presupuestado double precision, comprometido double precision, obligaciones double precision, pagos double precision, pre_nation double precision, com_nation double precision, obl_nation double precision, pag_nation double precision, pre_roy double precision, com_roy double precision, obl_roy double precision, pag_roy double precision, pre_fca double precision, com_fca double precision, obl_fca double precision, pag_fca double precision) AS $$
        declare 
             --titles text default '';
             --rec_film  record;	 
            cur_codes cursor
                 for select 
        res.act_id, res.act_produ, res.act_name, res.obj_id, res.project_id,res.obj_name, res.pro_id,
        res.car_program, res.proj_id, res.program_id, res.proj_name , res.st_lin_id, res.strat_name, res.p_a_i_id,
        CAST(0 as integer) as id_act_sour,
        CAST(0 as integer) as act_id_from_sources,
        CAST(0 as integer) as source_id,
        CAST(0 as character varying) as name_dom,
        COALESCE(sum(res.pres_prop),0) as pres_prop, 
        COALESCE(SUM(res.com_prop),0) AS com_prop,
        --count(resultado.id) FILTER (WHERE year=4) AS con_year_4
        CAST(0 as integer) as parent_id,
        CAST(0 as integer) as group_id,
        CAST(0 as integer) as id_prod_obj,
        CAST(0 as integer) as objective_id,
        CAST(0 as integer) as obj_product_id,
        res.prod_name,
        COALESCE(sum(res.pres_nation) ,0) as pres_nation, 
        COALESCE(SUM(res.com_nation),0) AS com_nation,
        COALESCE(sum(res.pres_roy) ,0) as pres_roy, 
        COALESCE(SUM(res.com_roy)  ,0) AS com_roy,
        COALESCE(sum(res.pres_fca) ,0) as pres_fca, 
        COALESCE(SUM(res.com_fca) ,0) AS com_fca
        
        from (select  r.act_id, r.act_produ, r.act_name, r.obj_id, r.project_id,r.obj_name, r.pro_id,
        r.car_program, r.proj_id, r.program_id, r.proj_name , r.st_lin_id, r.strat_name, r.p_a_i_id,
        CAST(0 as integer) as id_act_sour,
        CAST(0 as integer) as act_id_from_sources,
        CAST(0 as integer) as source_id,
        case when r.dom_name = 'Propio' then r.pres_prop else 0 end as pres_prop,
        case when r.dom_name = 'Nación' then r.pres_nation else 0 end as pres_nation,
        case when r.dom_name = 'Regalías' then r.pres_roy else 0 end as pres_roy,
        case when r.dom_name = 'Fondo de Compensación' then r.pres_fca else 0 end as pres_fca,
        r.com_prop,
        r.com_nation,
        r.com_roy,
        r.com_fca,
        --COALESCE(sum(r.pres_prop),0) as pres_prop, 
        --COALESCE(SUM(r.com_prop),0) AS com_prop,
        --count(resultado.id) FILTER (WHERE year=4) AS con_year_4
        CAST(0 as integer) as parent_id,
        CAST(0 as integer) as group_id,
        CAST(0 as integer) as id_prod_obj,
        r.prod_name
        --COALESCE(sum(r.pres_nation) ,0) as pres_nation, 
        --COALESCE(SUM(r.com_nation),0) AS com_nation,
        --COALESCE(sum(r.pres_roy) ,0) as pres_roy, 
        --COALESCE(SUM(r.com_roy)  ,0) AS com_roy,
        --COALESCE(sum(r.pres_fca) ,0) as pres_fca, 
        --COALESCE(SUM(r.com_fca) ,0) AS com_fca  
        from (
        SELECT distinct
        --ROW_NUMBER () OVER (ORDER BY  public.activities.id),
        public.activities.id as act_id,
        public.activities.product_id as act_produ,
        public.activities.name as act_name,
        public.objectives.id as obj_id,
        public.objectives.project_id as project_id ,
        public.objectives.objective as obj_name,
        public.programs.id as pro_id,
        public.programs.car_program as car_program,
        public.projects.id as proj_id,
        public.projects.program_id as program_id ,
        public.projects.project as proj_name,
        public.strategic_lines.id as st_lin_id,
        public.strategic_lines.name as strat_name,
        public.strategic_lines.p_a_i_id as p_a_i_id ,
        public.activity_sources.id as id_act_sour,
        public.activity_sources.activity_id as act_id_from_sources,
        public.activity_sources.source_id as source_id,
        ---public.activity_sources.value as value_act_sourc,
        public.activity_sources.value as pres_prop, 
        public.activity_sources.value as pres_nation, 
        public.activity_sources.value as pres_roy, 
        public.activity_sources.value as pres_fca, 
        --COALESCE(sum(public.activity_sources.value) FILTER (WHERE public.domains.name='Propio'),0) as pres_prop, 
        --COALESCE(SUM(public.activity_sources.value) FILTER (WHERE public.domains.name='Nación'),0) AS pres_nation,
        --COALESCE(sum(public.activity_sources.value) FILTER (WHERE public.domains.name='Regalías'),0) as pres_roy, 
        --COALESCE(SUM(public.activity_sources.value) FILTER (WHERE public.domains.name='Fondo de Compensación'),0) AS pres_fca,
        COALESCE(sum(public.evidence_financial.value) FILTER (WHERE public.domains.name='Propio'),0) as com_prop, 
        COALESCE(SUM(public.evidence_financial.value) FILTER (WHERE public.domains.name='Nación'),0) AS com_nation,
        COALESCE(sum(public.evidence_financial.value) FILTER (WHERE public.domains.name='Regalías'),0) as com_roy, 
        COALESCE(SUM(public.evidence_financial.value) FILTER (WHERE public.domains.name='Fondo de Compensación'),0) AS com_fca,
        
        public.financing_sources.parent_id,
        public.financing_sources.group_id,
        public.objective_products.id as id_prod_obj,
        public.objective_products.objective_id as objective_id,
        public.objective_products.product_id as obj_product_id,
        public.objective_products.product_other as prod_name,
        public.domains.name as dom_name
        FROM
        public.activities 
        
        LEFT JOIN public.activity_sources ON public.activities.id = public.activity_sources.activity_id
        LEFT JOIN public.evidence_financial on public.activity_sources.id = public.evidence_financial.activity_source_id
        INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
        -- COLOCO OBJECTIVE PRODUCTS CON LEFT JOIN PARA TRAER TODO
        LEFT JOIN public.objective_products ON public.objectives.id = public.objective_products.objective_id
        AND public.activities.product_id = public.objective_products.id
        INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
        INNER JOIN public.programs ON public.projects.program_id = public.programs.id
        INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
        LEFT JOIN public.financial_plans ON public.activity_sources.source_id=public.financial_plans.id 
        LEFT JOIN public.financing_sources ON public.financial_plans.source_id = public.financing_sources.id
        LEFT JOIN public.domains ON public.financing_sources.type_id = public.domains.id		 
        where public.strategic_lines.p_a_i_id=p_paid 
        AND public.financial_plans.year=p_year and public.domains.father_id=21
        --and public.payments.evidence_id is not null
        group by public.activities.id ,
        public.activities.product_id,
        public.activities.name,
        public.objectives.id ,
        public.objectives.project_id,
        public.objectives.objective,
        public.programs.id ,
        public.programs.car_program,
        public.projects.id ,
        public.projects.program_id,
        public.projects.project ,
        public.strategic_lines.id ,
        public.strategic_lines.name ,
        public.strategic_lines.p_a_i_id,
        public.activity_sources.id ,
        public.activity_sources.activity_id,
        public.activity_sources.source_id,
        public.activity_sources.value,
        public.financing_sources.parent_id,
        public.financing_sources.group_id,
        public.objective_products.id ,
        public.objective_products.objective_id,
        public.objective_products.product_id,
        public.objective_products.product_other,
        public.domains.name
        ORDER BY public.activities.id
        ) as r
        group by r.act_id,r.dom_name,r.pres_prop,r.pres_nation,r.pres_roy,r.pres_fca,
        r.com_prop,
        r.com_nation,
        r.com_roy,
        r.com_fca,
        r.act_produ, r.act_name, r.obj_id, r.project_id,r.obj_name, r.pro_id,r.id_act_sour,r.act_id_from_sources,r.source_id,
        r.car_program, r.proj_id, r.program_id, r.proj_name , r.st_lin_id, r.strat_name, r.p_a_i_id, r.parent_id,r.group_id,r.id_prod_obj,r.prod_name
        ) as res
        
        group by res.act_id, res.act_produ, res.act_name, res.obj_id, res.project_id,res.obj_name, res.pro_id,res.id_act_sour,res.act_id_from_sources,res.source_id,
        res.car_program, res.proj_id, res.program_id, res.proj_name , res.st_lin_id, res.strat_name, res.p_a_i_id, res.parent_id,res.group_id,res.id_prod_obj,res.prod_name;
        
        DECLARE   cons_1  integer := 0;
        DECLARE   cons_2  integer := 0;
        DECLARE   cons_3  integer := 0;
        DECLARE   cons_4  character varying;
        DECLARE   cons_5  integer := 0;
        DECLARE   cons_6  integer := 0;
        DECLARE   cons_7  integer := 0;
        DECLARE   cons_8  character varying;
        DECLARE   cons_9  integer := 0;
        DECLARE   cons_10  integer := 0;
        DECLARE   cons_11  integer := 0;
        DECLARE   cons_12  character varying;
        DECLARE   cons_13  integer := 0;
        DECLARE   cons_14  integer := 0;
        DECLARE   cons_15  character varying;
        DECLARE   cons_16  integer := 0;
        DECLARE   cons_17  character varying;
        DECLARE   cons_18  integer := 0;
        DECLARE   cons_19  integer := 0;
        DECLARE   cons_20  integer := 0;
        DECLARE   cons_21  integer := 0;
        DECLARE   cons_22  double precision DEFAULT 0;
        DECLARE   cons_23  integer := 0;
        DECLARE   cons_24  integer := 0;
        DECLARE   cons_25  integer := 0;
        DECLARE   cons_26  double precision DEFAULT 0;
        DECLARE   cons_27  integer := 0;
        DECLARE   cons_28  integer := 0;
        DECLARE   cons_29  integer := 0;
        DECLARE   cons_30  integer := 0;
        DECLARE   cons_31  double precision DEFAULT 0;
        DECLARE   cons_32  integer := 0;
        DECLARE   cons_33  double precision DEFAULT 0;
        DECLARE   cons_34  integer := 0;
        DECLARE   cons_35  integer := 0;
        DECLARE   cons_36  integer := 0;
        DECLARE   cons_37  double precision DEFAULT 0;
        DECLARE   cons_38  boolean;--es payment true es pago, false es obligación
        DECLARE   cons_39  integer := 0;
        
        DECLARE   cons_40  integer := 0;
        DECLARE   cons_41  integer := 0;
        DECLARE   cons_42  integer := 0;
        DECLARE   cons_43  bigint := 0;
        DECLARE   cons_44  double precision := 0;
        DECLARE   cons_45  double precision := 0;
        DECLARE   cons_46  double precision := 0;
        DECLARE   cons_47  double precision := 0;
        DECLARE   cons_48  double precision := 0;
        DECLARE   cons_49  double precision := 0;
        DECLARE   cons_50  double precision := 0;
        DECLARE   cons_51  double precision := 0;
        DECLARE   cons_52  integer := 0;
        DECLARE   cons_53  integer := 0;
        DECLARE   cons_54  integer := 0;
        DECLARE   cons_55  character varying;
        DECLARE   cons_56  character varying;
        DECLARE   cons_57  character varying;
        DECLARE   cons_58  integer := 0;
        DECLARE   cons_59  boolean;
        DECLARE   cons_60  double precision := 0;
        DECLARE   cons_61  double precision := 0;
        DECLARE   cons_62  double precision := 0;
        DECLARE   cons_63  double precision := 0;
        DECLARE   cons_64   double precision := 0;
        DECLARE   cons_65   double precision := 0;
        DECLARE   cons_66   double precision := 0;
        DECLARE   cons_67  double precision := 0;
        DECLARE   cons_68  character varying;
        
        DECLARE   cons_69  integer := 0;
        DECLARE   cons_70  integer := 0;
        DECLARE   cons_71  bigint := 0;
        DECLARE   cons_72  character varying;
        DECLARE   cons_73  character varying;
        DECLARE   cons_74  double precision  := 0;
        DECLARE   cons_75  double precision  := 0;
        DECLARE   cons_76  double precision  := 0;
        DECLARE   cons_77  double precision := 0;
        DECLARE   cons_78  integer := 0;
        
        DECLARE   cons_pago double precision := 0;
        DECLARE   cons_oblig double precision := 0;
        DECLARE   id_prod_tmp integer :=0;
        DECLARE   id_proy_tmp integer :=0;
        DECLARE   id_prog_tmp integer :=0;
        DECLARE   id_obj_tmp integer :=0;
        DECLARE   id_act_tmp integer :=0;
        DECLARE   id_evi_fin_tmp integer :=0;
        DECLARE obj_prod_tmp integer :=0;
        
        DECLARE   index_tmp  integer := 0;
        DECLARE cons_fid integer := 0;
        DECLARE cons_ffid integer := 0;
        DECLARE cons_fcode character varying;
        DECLARE cons_fgid integer := 0;
        DECLARE cons_fidfc integer := 0;
        DECLARE cons_fvalue_bugeted double precision DEFAULT 0;
        DECLARE cons_fvalue_comitted double precision DEFAULT 0;
        DECLARE cons_nation_bugeted double precision DEFAULT 0;
        DECLARE cons_nation_comitted double precision DEFAULT 0;
        DECLARE cons_roy_bugeted double precision DEFAULT 0;
        DECLARE cons_roy_comitted double precision DEFAULT 0;
        DECLARE cons_fca_bugeted double precision DEFAULT 0;
        DECLARE cons_fca_comitted double precision DEFAULT 0;
        
        DECLARE cons_fvalue_required double precision DEFAULT 0;
        DECLARE cons_fvalue_paid double precision DEFAULT 0;
        DECLARE cons_compromisos double precision DEFAULT 0;
        DECLARE cons_obligaciones double precision DEFAULT 0;
        DECLARE cons_pagos double precision DEFAULT 0;
        
        DECLARE cons_ffund_value double precision DEFAULT 0;
        DECLARE cons_frecaudo double precision DEFAULT 0;
        DECLARE len_code integer := 0;
        DECLARE up_code character varying;
        DECLARE id_code integer := 0;
        
        DECLARE cons2_id integer := 0;
        DECLARE cons2_value double precision DEFAULT 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select 
        CAST(0 as double precision) as id_lin,
        CAST(0 as double precision) as id_act,
        act.id as id,
        CAST(0 as double precision) as id_prod,
        CAST(0 as double precision) as id_obj,
        CAST(0 as double precision) as id_prog,
        CAST(0 as double precision) as id_proy,
        
        CAST(NULL as character varying) as name, 
        CAST(0 as bigint) as level,
        --propios
        CAST(0 as double precision) as presupuestado,
        CAST(0 as double precision) as comprometido,
        CAST(0 as double precision) as obligaciones,
        CAST(0 as double precision) as pagos,
        
        --nation
        CAST(0 as double precision) as pre_nation,
        CAST(0 as double precision) as com_nation,
        CAST(0 as double precision) as obl_nation,
        CAST(0 as double precision) as pag_nation,
        --royalties
        CAST(0 as double precision) as pre_roy,
        CAST(0 as double precision) as com_roy,
        CAST(0 as double precision) as obl_roy,
        CAST(0 as double precision) as pag_roy,
        --funds
        CAST(0 as double precision) as pre_fca,
        CAST(0 as double precision) as com_fca,
        CAST(0 as double precision) as obl_fca,
        CAST(0 as double precision) as pag_fca
        
        from  public.activities act 
        order by act.id
        limit 0;
        
         -- open the cursor
           open cur_codes;
        
           loop
            -- fetch row into the film
              fetch cur_codes into cons_1,	cons_3,	cons_4,	cons_2,	cons_7,	cons_8,	cons_9,	cons_12,
              cons_13,cons_14,cons_15,cons_16,cons_17,cons_18,cons_19,cons_20,cons_21,cons_67,cons_22,cons_26,
              cons_53,cons_54,cons_69,cons_70,cons_73,cons_72,cons_61,cons_62,cons_63,cons_64,cons_65,cons_66;
        
            -- exit when no more row to fetch
              exit when not found;
        
            --se agrega la línea estratégica
        --	id_evi_fin_tmp := (select count(temp_table.id) from temp_table where temp_table.id_evi_fin=cons_25);
            id_code := (select count(temp_table.id) from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1);
            id_prog_tmp :=(select count(temp_table.id) from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2);
            id_proy_tmp :=(select count(temp_table.id) from temp_table where temp_table.id_proy=cons_13 and temp_table.level=3);
            id_obj_tmp := (select count(temp_table.id) from temp_table where temp_table.id_obj=cons_2
                           --AND temp_table.id_prod=cons_3
                           and temp_table.level=4);
            id_prod_tmp := (select count(temp_table.id) from temp_table where temp_table.id_prod=cons_3 
                            --and temp_table.id_obj=cons_2   
                            and temp_table.level=5);
            id_act_tmp := (select count(temp_table.id) from temp_table where temp_table.id_act=cons_1 and temp_table.level=6 );
            
            obj_prod_tmp := (select count(temp_table.id) from temp_table where temp_table.id_prod=cons_3 
                            and temp_table.id_obj=cons_2   
                            and temp_table.level=5);
            
            cons_pagos:=(SELECT sum(value)
                            FROM  payments
                            WHERE evidence_id
                            IN (SELECT distinct
                            evidence_advance.id
                            FROM
                            public.activities INNER JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
                            INNER JOIN public.evidence_financial ON public.evidence_advance.id = public.evidence_financial.evidence_id
                            --INNER JOIN public.indicator_activities ON public.evidence_advance.id = public.indicator_activities.evidence_id
                            --AND public.activities.id = public.indicator_activities.activities_id
                            where public.evidence_advance.activity_id=cons_1
                            AND public.evidence_advance.year=p_year)
                            AND payment=True
                            );
        IF cons_pagos is NULL THEN
        cons_pagos:=0;
        END IF;
                cons_obligaciones:=(SELECT sum(value)
                        FROM  payments
                        WHERE evidence_id
                        IN (SELECT distinct
                        evidence_advance.id
                        FROM
                        public.activities INNER JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
                        INNER JOIN public.evidence_financial ON public.evidence_advance.id = public.evidence_financial.evidence_id
                        --INNER JOIN public.indicator_activities ON public.evidence_advance.id = public.indicator_activities.evidence_id
                        --AND public.activities.id = public.indicator_activities.activities_id
                        where public.evidence_advance.activity_id=cons_1
                        AND public.evidence_advance.year=p_year)
                        );
        IF cons_obligaciones is NULL THEN
        cons_obligaciones:=0;
        END IF;
        
            IF cons_26 is NULL THEN 
            cons_26:= 0;
            END IF; 
            IF cons_66 is NULL THEN
            cons_66:=0;
            END IF;
            
            IF cons_72 is NULL THEN
            cons_72:= (select public.domains.domain FROM public.domains where public.domains.id=cons_3);
            END IF;
        
            IF cons_38 THEN
            cons_pago:=cons_37; 
            cons_oblig:=0;
            ELSE
            cons_pago:=0; 
            cons_oblig:=cons_37;
            END IF;
            
        
                IF id_code=0 THEN
                index_tmp := index_tmp+1;
                INSERT INTO temp_table(id_lin,id , name, level,presupuestado, comprometido, obligaciones, pagos,pre_nation,com_nation,pre_roy,com_roy,pre_fca,com_fca)
                VALUES (cons_16, index_tmp,cons_17,1,cons_22,cons_26,cons_obligaciones,cons_pagos,cons_61,cons_62,cons_63,cons_64,cons_65,cons_66);
                ELSEIF id_act_tmp= 0 THEN
        /*
                cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1 Limit 1); 
                cons_fvalue_bugeted := (select temp_table.presupuestado from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1 Limit 1); 
                cons_nation_comitted := (select temp_table.com_nation from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1 Limit 1); 
                cons_nation_bugeted := (select temp_table.pre_nation from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1 Limit 1); 
                cons_roy_comitted := (select temp_table.com_roy from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1 Limit 1); 
                cons_roy_bugeted := (select temp_table.pre_roy from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1 Limit 1); 
                cons_fca_comitted := (select temp_table.com_fca from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1 Limit 1); 
                cons_fca_bugeted := (select temp_table.pre_fca from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1 Limit 1); 
                cons_pago:= (select temp_table.pagos from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1 Limit 1); 
                cons_oblig:=(select temp_table.obligaciones from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1 Limit 1); 
                */
                
                select t.comprometido, t.presupuestado, t.com_nation,t.pre_nation, t.com_roy, t.pre_roy, t.com_fca, t.pre_fca, t.pagos, t.obligaciones
                into cons_fvalue_comitted, cons_fvalue_bugeted, cons_nation_comitted, cons_nation_bugeted, cons_roy_comitted,
                cons_roy_bugeted, cons_fca_comitted, cons_fca_bugeted,cons_pago, cons_oblig
                from temp_table t where t.id_lin=cons_16 and t.level=1 Limit 1;
                
                update temp_table set presupuestado=(cons_fvalue_bugeted + cons_22), comprometido= (cons_fvalue_comitted+ cons_26),
                pagos=(cons_pago+cons_pagos), obligaciones=(cons_oblig + cons_obligaciones),
                pre_nation=(cons_nation_bugeted + cons_61),com_nation=(cons_nation_comitted + cons_62),
                pre_roy=(cons_roy_bugeted + cons_63),com_roy=(cons_roy_comitted  + cons_64),
                pre_fca=(cons_fca_bugeted + cons_65),com_fca=(cons_fca_comitted  + cons_66)
                where temp_table.id_lin=cons_16 and temp_table.level=1;
                ELSE
                cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1 Limit 1); 
                cons_nation_comitted := (select temp_table.com_nation from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1 Limit 1); 
                cons_roy_comitted := (select temp_table.com_roy from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1 Limit 1);	
                cons_fca_comitted := (select temp_table.com_fca from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1 Limit 1); 
                cons_pago:= (select temp_table.pagos from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1 Limit 1); 
                cons_oblig:=(select temp_table.obligaciones from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1 Limit 1); 
                    
                update temp_table set  comprometido= (cons_fvalue_comitted+ cons_26),com_nation=(cons_nation_comitted + cons_62),
                pagos=(cons_pago+cons_pagos), obligaciones=(cons_oblig + cons_obligaciones),
                com_roy=(cons_roy_comitted  + cons_64),
                com_fca=(cons_fca_comitted  + cons_66)
                where temp_table.id_lin=cons_16 and temp_table.level=1;
                END IF; 
        
                IF id_prog_tmp=0 THEN
                -- se agrega el programa
                index_tmp := index_tmp+1;
                INSERT INTO temp_table(id_lin,id,id_prog,id_proy,name,level, presupuestado, comprometido, obligaciones, pagos,pre_nation,com_nation,pre_roy,com_roy,pre_fca,com_fca)VALUES 
                (cons_16,index_tmp,cons_14,cons_13, cons_12,2,cons_22,cons_26,cons_obligaciones,cons_pagos,cons_61,cons_62,cons_63,cons_64,cons_65,cons_66 );
                ELSEIF id_act_tmp= 0 THEN
                /*
                cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2 Limit 1); 
                cons_fvalue_bugeted := (select temp_table.presupuestado from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2 Limit 1); 
                cons_nation_comitted := (select temp_table.com_nation from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2 Limit 1); 
                cons_nation_bugeted := (select temp_table.pre_nation from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2 Limit 1);  
                cons_roy_comitted := (select temp_table.com_roy from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2 Limit 1); 
                cons_roy_bugeted := (select temp_table.pre_roy from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2 Limit 1); 
                cons_fca_comitted := (select temp_table.com_fca from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2 Limit 1); 
                cons_fca_bugeted := (select temp_table.pre_fca from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2 Limit 1); 
                cons_pago:= (select temp_table.pagos from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2 Limit 1); 
                cons_oblig:=(select temp_table.obligaciones from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2 Limit 1); 
                */
                
                select t.comprometido, t.presupuestado, t.com_nation,t.pre_nation, t.com_roy, t.pre_roy, t.com_fca, t.pre_fca, t.pagos, t.obligaciones
                into cons_fvalue_comitted, cons_fvalue_bugeted, cons_nation_comitted, cons_nation_bugeted, cons_roy_comitted,
                cons_roy_bugeted, cons_fca_comitted, cons_fca_bugeted,cons_pago, cons_oblig
                from temp_table t where t.id_prog=cons_9 and t.level=2 Limit 1;
                
                update temp_table set presupuestado=(cons_fvalue_bugeted + cons_22), comprometido= ( cons_fvalue_comitted+ cons_26),
                pagos=(cons_pago+cons_pagos), obligaciones=(cons_oblig + cons_obligaciones),
                pre_nation=(cons_nation_bugeted + cons_61),com_nation=(cons_nation_comitted + cons_62),
                pre_roy=(cons_roy_bugeted + cons_63),com_roy=(cons_roy_comitted  + cons_64),
                pre_fca=(cons_fca_bugeted + cons_65),com_fca=(cons_fca_comitted  + cons_66)
                where temp_table.id_prog=cons_9 and temp_table.level=2 ;
                ELSE
                cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2 Limit 1); 
                cons_nation_comitted := (select temp_table.com_nation from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2 Limit 1); 
                cons_roy_comitted := (select temp_table.com_roy from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2 Limit 1);
                cons_fca_comitted := (select temp_table.com_fca from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2 Limit 1); 
                cons_pago:= (select temp_table.pagos from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2 Limit 1); 
                cons_oblig:=(select temp_table.obligaciones from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2 Limit 1); 
            
            
                update temp_table set comprometido= ( cons_fvalue_comitted+ cons_26),com_nation=(cons_nation_comitted + cons_62),
                pagos=(cons_pago+cons_pagos), obligaciones=(cons_oblig + cons_obligaciones),		
                pre_roy=(cons_roy_bugeted + cons_63),com_roy=(cons_roy_comitted  + cons_64),
                pre_fca=(cons_fca_bugeted + cons_65),com_fca=(cons_fca_comitted  + cons_66)
                where temp_table.id_prog=cons_9 and temp_table.level=2 ;
                END IF;
        
                -- se agrega el proyecto
                IF id_proy_tmp=0 THEN
                index_tmp := index_tmp+1;
                INSERT INTO temp_table(id_lin,id,id_prog,id_proy, name,level, presupuestado, comprometido, obligaciones, pagos,pre_nation,com_nation,pre_roy,com_roy,pre_fca,com_fca)VALUES 
                (cons_16,index_tmp,cons_14,cons_13, cons_15,3,cons_22,cons_26,cons_obligaciones,cons_pagos,cons_61,cons_62,cons_63,cons_64,cons_65,cons_66 );
                ELSEIF id_act_tmp= 0 THEN
                /*
                cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_proy=cons_7 and temp_table.level=3 Limit 1);
                cons_fvalue_bugeted := (select temp_table.presupuestado from temp_table where temp_table.id_proy=cons_7 and temp_table.level=3 Limit 1); 
                cons_nation_comitted := (select temp_table.com_nation from temp_table where temp_table.id_proy=cons_7 and temp_table.level=3 Limit 1); 
                cons_nation_bugeted := (select temp_table.pre_nation from temp_table where temp_table.id_proy=cons_7 and temp_table.level=3 Limit 1); 
                cons_roy_comitted := (select temp_table.com_roy from temp_table where temp_table.id_proy=cons_7 and temp_table.level=3 Limit 1); 
                cons_roy_bugeted := (select temp_table.pre_roy from temp_table where temp_table.id_proy=cons_7 and temp_table.level=3 Limit 1); 
                cons_fca_comitted := (select temp_table.com_fca from temp_table where temp_table.id_proy=cons_7 and temp_table.level=3 Limit 1); 
                cons_fca_bugeted := (select temp_table.pre_fca from temp_table where temp_table.id_proy=cons_7 and temp_table.level=3 Limit 1); 
                cons_pago:= (select temp_table.pagos from temp_table where temp_table.id_proy=cons_7 and temp_table.level=3 Limit 1); 
                cons_oblig:=(select temp_table.obligaciones from temp_table where temp_table.id_proy=cons_7 and temp_table.level=3 Limit 1); 
            */
                select t.comprometido, t.presupuestado, t.com_nation,t.pre_nation, t.com_roy, t.pre_roy, t.com_fca, t.pre_fca, t.pagos, t.obligaciones
                into cons_fvalue_comitted, cons_fvalue_bugeted, cons_nation_comitted, cons_nation_bugeted, cons_roy_comitted,
                cons_roy_bugeted, cons_fca_comitted, cons_fca_bugeted,cons_pago, cons_oblig
                from temp_table t where t.id_proy=cons_7 and t.level=3 Limit 1;
                
        
                update temp_table set presupuestado=(cons_fvalue_bugeted + cons_22), comprometido= (cons_fvalue_comitted+cons_26),
                pagos=(cons_pago+cons_pagos), obligaciones=(cons_oblig + cons_obligaciones),
                pre_nation=(cons_nation_bugeted + cons_61),com_nation=(cons_nation_comitted + cons_62),
                pre_roy=(cons_roy_bugeted + cons_63),com_roy=(cons_roy_comitted  + cons_64),
                pre_fca=(cons_fca_bugeted + cons_65),com_fca=(cons_fca_comitted  + cons_66)
                
                where temp_table.id_proy=cons_7 and temp_table.level=3 ;
        
                ELSE
                cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_proy=cons_7 and temp_table.level=3 Limit 1);
                cons_nation_comitted := (select temp_table.com_nation from temp_table where temp_table.id_proy=cons_7 and temp_table.level=3 Limit 1); 
                cons_roy_comitted := (select temp_table.com_roy from temp_table where temp_table.id_proy=cons_7 and temp_table.level=3 Limit 1); 
                cons_fca_comitted := (select temp_table.com_fca from temp_table where temp_table.id_proy=cons_7 and temp_table.level=3 Limit 1); 
                cons_pago:= (select temp_table.pagos from temp_table where temp_table.id_proy=cons_7 and temp_table.level=3 Limit 1); 
                cons_oblig:=(select temp_table.obligaciones from temp_table where temp_table.id_proy=cons_7 and temp_table.level=3 Limit 1); 
            
                update temp_table set comprometido= (cons_fvalue_comitted+cons_26),com_nation=(cons_nation_comitted + cons_62),
                    pagos=(cons_pago+cons_pagos), obligaciones=(cons_oblig + cons_obligaciones),
                pre_roy=(cons_roy_bugeted + cons_63),com_roy=(cons_roy_comitted  + cons_64),
                pre_fca=(cons_fca_bugeted + cons_65),com_fca=(cons_fca_comitted  + cons_66)
                where temp_table.id_proy=cons_7 and temp_table.level=3 ;
                END IF;
        
            -- se agrega el objetivo
                IF id_obj_tmp=0 THEN
                index_tmp := index_tmp+1;
                INSERT INTO temp_table(id_lin,id,id_obj,id_prog,id_proy,name,level,presupuestado, comprometido, obligaciones, pagos,pre_nation,com_nation,pre_roy,com_roy,pre_fca,com_fca)VALUES 
                (cons_16,index_tmp,cons_2,cons_14,cons_13, cons_8,4,cons_22,cons_26,cons_obligaciones,cons_pagos,cons_61,cons_62,cons_63,cons_64,cons_65,cons_66);
                ELSEIF id_act_tmp= 0 THEN
                /*
                cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_obj=cons_2  and temp_table.level=4 Limit 1);
                cons_fvalue_bugeted := (select temp_table.presupuestado from temp_table where temp_table.id_obj=cons_2 and temp_table.level=4 Limit 1); 
                cons_nation_comitted := (select temp_table.com_nation from temp_table where temp_table.id_obj=cons_2 and temp_table.level=4 Limit 1); 
                cons_nation_bugeted := (select temp_table.pre_nation from temp_table where temp_table.id_obj=cons_2 and temp_table.level=4 Limit 1); 
                cons_roy_comitted := (select temp_table.com_roy from temp_table where temp_table.id_obj=cons_2 and temp_table.level=4 Limit 1); 
                cons_roy_bugeted := (select temp_table.pre_roy from temp_table where temp_table.id_obj=cons_2 and temp_table.level=4 Limit 1); 
                cons_fca_comitted := (select temp_table.com_fca from temp_table where temp_table.id_obj=cons_2 and temp_table.level=4 Limit 1); 
                cons_fca_bugeted := (select temp_table.pre_fca from temp_table where temp_table.id_obj=cons_2 and temp_table.level=4 Limit 1); 		
                cons_pago:= (select temp_table.pagos from temp_table where temp_table.id_obj=cons_2 and temp_table.level=4 Limit 1); 
                cons_oblig:=(select temp_table.obligaciones from temp_table where temp_table.id_obj=cons_2 and temp_table.level=4 Limit 1);  
            */
                select t.comprometido, t.presupuestado, t.com_nation,t.pre_nation, t.com_roy, t.pre_roy, t.com_fca, t.pre_fca, t.pagos, t.obligaciones
                into cons_fvalue_comitted, cons_fvalue_bugeted, cons_nation_comitted, cons_nation_bugeted, cons_roy_comitted,
                cons_roy_bugeted, cons_fca_comitted, cons_fca_bugeted,cons_pago, cons_oblig
                from temp_table t where t.id_obj=cons_2 and t.level=4 Limit 1;
                
            
                update temp_table set presupuestado=(cons_fvalue_bugeted + cons_22), comprometido= (cons_fvalue_comitted + cons_26),
                pagos=(cons_pago+cons_pagos), obligaciones=(cons_oblig + cons_obligaciones),
                pre_nation=(cons_nation_bugeted + cons_61),com_nation=(cons_nation_comitted + cons_62),
                pre_roy=(cons_roy_bugeted + cons_63),com_roy=(cons_roy_comitted  + cons_64),
                pre_fca=(cons_fca_bugeted + cons_65),com_fca=(cons_fca_comitted  + cons_66)
                
                where temp_table.id_obj=cons_2  and temp_table.level=4 ;
                ELSE
                cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_obj=cons_2  and temp_table.level=4 Limit 1);
                cons_nation_comitted := (select temp_table.com_nation from temp_table where temp_table.id_obj=cons_2 and temp_table.level=4 Limit 1); 
                cons_roy_comitted := (select temp_table.com_roy from temp_table where temp_table.id_obj=cons_2 and temp_table.level=4 Limit 1); 
                cons_fca_comitted := (select temp_table.com_fca from temp_table where temp_table.id_obj=cons_2 and temp_table.level=4 Limit 1); 
                cons_pago:= (select temp_table.pagos from temp_table where temp_table.id_obj=cons_2 and temp_table.level=4 Limit 1); 
                cons_oblig:=(select temp_table.obligaciones from temp_table where temp_table.id_obj=cons_2 and temp_table.level=4 Limit 1);  
            
                update temp_table set comprometido= (cons_fvalue_comitted + cons_26), comprometido= (cons_fvalue_comitted + cons_26),
                pagos=(cons_pago+cons_pagos), obligaciones=(cons_oblig + cons_obligaciones),
                pre_nation=(cons_nation_bugeted + cons_61),com_nation=(cons_nation_comitted + cons_62),
                pre_roy=(cons_roy_bugeted + cons_63),com_roy=(cons_roy_comitted  + cons_64),
                pre_fca=(cons_fca_bugeted + cons_65),com_fca=(cons_fca_comitted  + cons_66)
                where temp_table.id_obj=cons_2 and temp_table.level=4 ;
        
                END IF;
        
                IF id_prod_tmp=0 THEN
                -- se agrega el producto
                index_tmp := index_tmp+1;
                INSERT INTO temp_table(id_lin,id, id_prod,id_obj,id_prog,id_proy,name,level,presupuestado, comprometido, obligaciones, pagos,pre_nation,com_nation,pre_roy,com_roy,pre_fca,com_fca)VALUES 
                (cons_16,index_tmp,cons_3,cons_2,cons_14,cons_13, cons_72,5,cons_22,cons_26,cons_obligaciones,cons_pagos,cons_61,cons_62,cons_63,cons_64,cons_65,cons_66);
        
                ELSEIF obj_prod_tmp= 0  THEN
                index_tmp := index_tmp+1;
                INSERT INTO temp_table(id_lin,id, id_prod,id_obj,id_prog,id_proy,name,level,presupuestado, comprometido, obligaciones, pagos,pre_nation,com_nation,pre_roy,com_roy,pre_fca,com_fca)VALUES 
                (cons_16,index_tmp,cons_3,cons_2,cons_14,cons_13, cons_72,5,cons_22,cons_26,cons_obligaciones,cons_pagos,cons_61,cons_62,cons_63,cons_64,cons_65,cons_66);
        
                ELSEIF id_act_tmp=0 THEN
                /*
                cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_prod=cons_3  and temp_table.level=5 Limit 1);
                cons_fvalue_bugeted := (select temp_table.presupuestado from temp_table where temp_table.id_prod=cons_3 and temp_table.level=5 Limit 1); 
                cons_nation_comitted := (select temp_table.com_nation from temp_table  where temp_table.id_prod=cons_3 and temp_table.level=5 Limit 1); 
                cons_nation_bugeted := (select temp_table.pre_nation from temp_table  where temp_table.id_prod=cons_3 and temp_table.level=5 Limit 1); 
                cons_roy_comitted := (select temp_table.com_roy from temp_table  where temp_table.id_prod=cons_3 and temp_table.level=5 Limit 1); 
                cons_roy_bugeted := (select temp_table.pre_roy from temp_table  where temp_table.id_prod=cons_3 and temp_table.level=5 Limit 1); 
                cons_fca_comitted := (select temp_table.com_fca from temp_table  where temp_table.id_prod=cons_3 and temp_table.level=5 Limit 1); 
                cons_fca_bugeted := (select temp_table.pre_fca from temp_table  where temp_table.id_prod=cons_3 and temp_table.level=5 Limit 1); 		
                cons_pago:= (select temp_table.pagos from temp_table  where temp_table.id_prod=cons_3 and temp_table.level=5 Limit 1); 
                cons_oblig:=(select temp_table.obligaciones from temp_table  where temp_table.id_prod=cons_3 and temp_table.level=5 Limit 1);  		
                */
                select t.comprometido, t.presupuestado, t.com_nation,t.pre_nation, t.com_roy, t.pre_roy, t.com_fca, t.pre_fca, t.pagos, t.obligaciones
                into cons_fvalue_comitted, cons_fvalue_bugeted, cons_nation_comitted, cons_nation_bugeted, cons_roy_comitted,
                cons_roy_bugeted, cons_fca_comitted, cons_fca_bugeted,cons_pago, cons_oblig
                from temp_table t where t.id_prod=cons_3 and t.level=5 Limit 1;
                
                
                
                update temp_table set presupuestado=(cons_fvalue_bugeted + cons_22), comprometido= (cons_fvalue_comitted + cons_26),
                pagos=(cons_pago+cons_pagos), obligaciones=(cons_oblig + cons_obligaciones),
                pre_nation=(cons_nation_bugeted + cons_61),com_nation=(cons_nation_comitted + cons_62),
                pre_roy=(cons_roy_bugeted + cons_63),com_roy=(cons_roy_comitted  + cons_64),
                pre_fca=(cons_fca_bugeted + cons_65),com_fca=(cons_fca_comitted  + cons_66)
                where temp_table.id_prod=cons_3  and temp_table.level=5 ;
        
                ELSE
                cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_prod=cons_3  and temp_table.level=5 Limit 1);
                cons_nation_comitted := (select temp_table.com_nation from temp_table  where temp_table.id_prod=cons_3 and temp_table.level=5 Limit 1); 
                cons_roy_comitted := (select temp_table.com_roy from temp_table  where temp_table.id_prod=cons_3 and temp_table.level=5 Limit 1); 
                cons_fca_comitted := (select temp_table.com_fca from temp_table  where temp_table.id_prod=cons_3 and temp_table.level=5 Limit 1); 
                cons_pago:= (select temp_table.pagos from temp_table  where temp_table.id_prod=cons_3 and temp_table.level=5 Limit 1); 
                cons_oblig:=(select temp_table.obligaciones from temp_table  where temp_table.id_prod=cons_3 and temp_table.level=5 Limit 1);  		
        
                update temp_table set comprometido= (cons_fvalue_comitted + cons_26) ,
                pagos=(cons_pago+cons_pagos), obligaciones=(cons_oblig + cons_obligaciones),		
                pre_nation=(cons_nation_bugeted + cons_61),com_nation=(cons_nation_comitted + cons_62),
                pre_roy=(cons_roy_bugeted + cons_63),com_roy=(cons_roy_comitted  + cons_64),
                pre_fca=(cons_fca_bugeted + cons_65),com_fca=(cons_fca_comitted  + cons_66)
                where temp_table.id_prod=cons_3 and temp_table.id_obj=cons_2 and temp_table.level=5 ;	
        
                END IF;
        
                IF id_act_tmp= 0 THEN
                index_tmp := index_tmp+1;
                INSERT INTO temp_table(id_lin,id_act,id,id_prod,id_obj,id_prog,id_proy, name,level, presupuestado, comprometido, obligaciones, pagos,pre_nation,com_nation,pre_roy,com_roy,pre_fca,com_fca)VALUES 
                (cons_16,cons_1,index_tmp,cons_3,cons_2,cons_14,cons_13,cons_4,6,cons_22,cons_26,cons_obligaciones,cons_pagos,cons_61,cons_62,cons_63,cons_64,cons_65,cons_66);
                -- cons_22 comprometido
                ELSE
                /*
                cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_act=cons_1  and temp_table.level=6 Limit 1);
                cons_fvalue_bugeted := (select temp_table.presupuestado from temp_table where temp_table.id_act=cons_1 and temp_table.level=6 Limit 1); 
                cons_nation_comitted := (select temp_table.com_nation from temp_table where temp_table.id_act=cons_1 and temp_table.level=6 Limit 1); 
                cons_nation_bugeted := (select temp_table.pre_nation from temp_table  where temp_table.id_act=cons_1 and temp_table.level=6 Limit 1); 
                cons_roy_comitted := (select temp_table.com_roy from temp_table  where temp_table.id_act=cons_1 and temp_table.level=6 Limit 1); 
                cons_roy_bugeted := (select temp_table.pre_roy from temp_table  where temp_table.id_act=cons_1 and temp_table.level=6 Limit 1); 
                cons_fca_comitted := (select temp_table.com_fca from temp_table where temp_table.id_act=cons_1 and temp_table.level=6 Limit 1); 
                cons_fca_bugeted := (select temp_table.pre_fca from temp_table  where temp_table.id_act=cons_1 and temp_table.level=6 Limit 1); 
                cons_pago:= (select temp_table.pagos from temp_table  where temp_table.id_prod=cons_3 and temp_table.level=5 Limit 1); 
                cons_oblig:=(select temp_table.obligaciones from temp_table  where temp_table.id_prod=cons_3 and temp_table.level=5 Limit 1);  		
                */			
                select t.comprometido, t.presupuestado, t.com_nation,t.pre_nation, t.com_roy, t.pre_roy, t.com_fca, t.pre_fca, t.pagos, t.obligaciones
                into cons_fvalue_comitted, cons_fvalue_bugeted, cons_nation_comitted, cons_nation_bugeted, cons_roy_comitted,
                cons_roy_bugeted, cons_fca_comitted, cons_fca_bugeted,cons_pago, cons_oblig
                from temp_table t where t.id_prod=cons_3 and t.level=5 Limit 1;
                            
                update temp_table set  comprometido= (cons_fvalue_comitted + cons_26),
                pagos=(cons_pago+cons_pagos), obligaciones=(cons_oblig + cons_obligaciones),
                pre_nation=(cons_nation_bugeted + cons_61),com_nation=(cons_nation_comitted + cons_62),
                pre_roy=(cons_roy_bugeted + cons_63),com_roy=(cons_roy_comitted  + cons_64),
                pre_fca=(cons_fca_bugeted + cons_65),com_fca=(cons_fca_comitted  + cons_66)
                where temp_table.id_act=cons_1 and temp_table.level=6 ;
                END IF;
            --como el ide prod no se repite po grupo, lo que hago es sumar al presupuesot en cada uno
            --cons_fvalue_bugeted := (select temp_table.presupuestado from temp_table where temp_table.id_prod=cons_3 Limit 1); 
            --update temp_table set presupuestado=(cons_fvalue_bugeted + cons_43) where temp_table.id_prod=cons_3;
            -- se ingresa la actividad
        
           end loop;
          
           -- close the cursor
           close cur_codes;
           
         
           
        RETURN QUERY 
        SELECT *
        from temp_table; --where temp_table.father_id=5;
        --   return titles;
        DROP TABLE temp_table;
        end;
        
        $$ language plpgsql;");

        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.report_gastos(
            p_year integer,
            p_paid integer,
            p_own boolean,
            p_nation boolean,
            p_royalties boolean,
            p_fund boolean)
            RETURNS TABLE(id bigint, father_id integer, codigo character varying, name character varying, presupuestado double precision, comprometido double precision, obligaciones double precision, pagos double precision) AS $$
        declare 
             --titles text default '';
             --rec_film  record;	 
            cur_codes cursor
                 for SELECT crcs.id as cost_sources_id, crcs.father_id, crcs.code,
                     crcs.group_id, crfc.id as fin_cost, crfc.value_bugeted,
                     crfc.value_comitted, crfc.value_required, crfc.value_paid, crfc.own,
                     crfc.nation, crfc.royalties, crfc.funds, crfc.p_a_i_id
                FROM
                     public.cost_sources as crcs
                     INNER JOIN public.financial_costs  as crfc ON crcs.id = crfc.cost_sources_id
                     where crfc.own=p_own  and  crfc.nation=p_nation and 
                     crfc.royalties=p_royalties and crfc.funds=p_fund and 
                     crfc.p_a_i_id=p_paid and crfc.year=p_year;
        
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
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select distinct cs.id, cs.father_id, cs.code,cs.name, 
        CAST(0 as double precision) as presupuestado,
        CAST(0 as double precision) as comprometido,
        CAST(0 as double precision) as obligaciones,
        CAST(0 as double precision) as pagos
        from  public.cost_sources as cs 
        order by cs.code;
        
           -- open the cursor
           open cur_codes;
        
           loop
            -- fetch row into the film
              fetch cur_codes into cons_fid,cons_ffid,cons_fcode,cons_fgid,cons_fidfc,cons_fvalue_bugeted,cons_fvalue_comitted,cons_fvalue_required,cons_fvalue_paid;
            -- exit when no more row to fetch
              exit when not found;
        
            -- build the output
                   len_code := CAST(char_length(REPLACE(cons_fcode,'.', '')) as integer);
                 --up_code := substring(cons_fcode, 1 , @len_code -2 );
                 update temp_table set 
                 presupuestado=cons_fvalue_bugeted, 
                 comprometido=cons_fvalue_comitted,
                  obligaciones=cons_fvalue_required,
                  pagos=cons_fvalue_paid
                 where temp_table.id=cons_fid and temp_table.code=cons_fcode;
                 up_code :=cons_fcode;
                 
                LOOP
                  id_code := (select distinct cssb.father_id from cost_sources as cssb where code=up_code and final_level=false);
                  update temp_table set presupuestado=(temp_table.presupuestado + cons_fvalue_bugeted),
                  comprometido=(temp_table.comprometido + cons_fvalue_comitted),
                  obligaciones=(temp_table.obligaciones + cons_fvalue_required),
                  pagos=(temp_table.pagos + cons_fvalue_paid)
                  where  temp_table.code=(select code from cost_sources  where cost_sources.id=(select distinct cssb.father_id from cost_sources as cssb where code=up_code and final_level=false));
                  len_code := len_code-1;
                  up_code := (select code from cost_sources where cost_sources.id=id_code);
                  EXIT WHEN len_code =0;
                END LOOP;
           end loop;
          
           -- close the cursor
           close cur_codes;
           
         
           
        RETURN QUERY 
        SELECT *
        from temp_table; --where temp_table.father_id=5;
        --   return titles;
        DROP TABLE temp_table;
        end; 
        
        $$ language plpgsql;");

        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.report_gastos_total(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id bigint, father_id integer, codigo character varying, name character varying, presupuestado double precision, comprometido double precision, obligaciones double precision, pagos double precision, pre_nation double precision, com_nation double precision, obl_nation double precision, pag_nation double precision, pre_roy double precision, com_roy double precision, obl_roy double precision, pag_roy double precision, pre_fca double precision, com_fca double precision, obl_fca double precision, pag_fca double precision) AS $$
        declare 
             --titles text default '';
             --rec_film  record;	 
            cur_codes cursor
                 for SELECT crcs.id as cost_sources_id, crcs.father_id, crcs.code,
                     crcs.group_id, crfc.id as fin_cost, crfc.value_bugeted,
                     crfc.value_comitted, crfc.value_required,
                     crfc.value_paid, crfc.own,
                     crfc.nation, crfc.royalties, crfc.funds, crfc.p_a_i_id
                FROM
                     public.cost_sources as crcs
                     INNER JOIN public.financial_costs  as crfc ON crcs.id = crfc.cost_sources_id
                     where crfc.p_a_i_id=p_paid and crfc.year=p_year;
        
        DECLARE cons_fid integer := 0;
        DECLARE cons_ffid integer := 0;
        DECLARE cons_fcode character varying;
        DECLARE cons_fgid integer := 0;
        DECLARE cons_fidfc integer := 0;
        DECLARE cons_fvalue_bugeted double precision DEFAULT 0;
        DECLARE cons_fvalue_comitted double precision DEFAULT 0;
        DECLARE cons_fvalue_required double precision DEFAULT 0;
        DECLARE cons_fvalue_paid double precision DEFAULT 0;
        DECLARE cons_own boolean;
        DECLARE cons_nation boolean; 
        DECLARE cons_royalties boolean; 
        DECLARE cons_funds boolean; 
        
        DECLARE cons_ffund_value double precision DEFAULT 0;
        DECLARE cons_frecaudo double precision DEFAULT 0;
        DECLARE len_code integer := 0;
        DECLARE up_code character varying;
        DECLARE id_code integer := 0;
        
        DECLARE cons2_id integer := 0;
        DECLARE cons2_value double precision DEFAULT 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select distinct cs.id, cs.father_id, cs.code,cs.name, 
        --propios
        CAST(0 as double precision) as presupuestado,
        CAST(0 as double precision) as comprometido,
        CAST(0 as double precision) as obligaciones,
        CAST(0 as double precision) as pagos,
        --nation
        CAST(0 as double precision) as pre_nation,
        CAST(0 as double precision) as com_nation,
        CAST(0 as double precision) as obl_nation,
        CAST(0 as double precision) as pag_nation,
        --royalties
        CAST(0 as double precision) as pre_roy,
        CAST(0 as double precision) as com_roy,
        CAST(0 as double precision) as obl_roy,
        CAST(0 as double precision) as pag_roy,
        --funds
        CAST(0 as double precision) as pre_fca,
        CAST(0 as double precision) as com_fca,
        CAST(0 as double precision) as obl_fca,
        CAST(0 as double precision) as pag_fca
        
        from  public.cost_sources as cs 
        order by cs.code;
        
           -- open the cursor
           open cur_codes;
        
           loop
            -- fetch row into the film
              fetch cur_codes into cons_fid,cons_ffid,cons_fcode,cons_fgid,cons_fidfc,cons_fvalue_bugeted,
              cons_fvalue_comitted,cons_fvalue_required,cons_fvalue_paid,cons_own, cons_nation,cons_royalties,cons_funds ;
            -- exit when no more row to fetch
              exit when not found;
        
            -- build the output
                   len_code := CAST(char_length(REPLACE(cons_fcode,'.', '')) as integer);
                 --up_code := substring(cons_fcode, 1 , @len_code -2 );
                IF cons_own is True THEN
                update temp_table set 
                    presupuestado=cons_fvalue_bugeted, 
                    comprometido=cons_fvalue_comitted,
                    obligaciones=cons_fvalue_required,
                    pagos=cons_fvalue_paid
                 where temp_table.id=cons_fid and temp_table.code=cons_fcode;
                 up_code :=cons_fcode;
                 ELSEIF cons_nation is True THEN
                     update temp_table set 
                    pre_nation=cons_fvalue_bugeted, 
                    com_nation=cons_fvalue_comitted,
                    obl_nation=cons_fvalue_required,
                    pag_nation=cons_fvalue_paid
                 where temp_table.id=cons_fid and temp_table.code=cons_fcode;
                 up_code :=cons_fcode;
                 ELSEIF cons_royalties is True THEN
                     update temp_table set 
                    pre_roy=cons_fvalue_bugeted, 
                    com_roy=cons_fvalue_comitted,
                    obl_roy=cons_fvalue_required,
                    pag_roy=cons_fvalue_paid
                 where temp_table.id=cons_fid and temp_table.code=cons_fcode;
                 up_code :=cons_fcode;
                 ELSEIF cons_funds is True THEN
                     update temp_table set 
                    pre_fca=cons_fvalue_bugeted, 
                    com_fca=cons_fvalue_comitted,
                    obl_fca=cons_fvalue_required,
                    pag_fca=cons_fvalue_paid
                 where temp_table.id=cons_fid and temp_table.code=cons_fcode;
                 up_code :=cons_fcode;
                 
                 END IF;
                 
                LOOP
                  id_code := (select distinct cssb.father_id from cost_sources as cssb where code=up_code and final_level=false);
                  IF cons_own is True THEN
                  update temp_table set presupuestado=(temp_table.presupuestado + cons_fvalue_bugeted),
                  comprometido=(temp_table.comprometido + cons_fvalue_comitted),
                  obligaciones=(temp_table.obligaciones + cons_fvalue_required),
                  pagos=(temp_table.pagos + cons_fvalue_paid)
                  where  temp_table.code=(select code from cost_sources  where 
                  cost_sources.id=(select distinct cssb.father_id from cost_sources as cssb where code=up_code and final_level=false));
                  
                  ELSEIF cons_nation is True THEN
                  update temp_table set pre_nation=(temp_table.pre_nation + cons_fvalue_bugeted),
                  com_nation=(temp_table.com_nation + cons_fvalue_comitted),
                  obl_nation=(temp_table.obl_nation + cons_fvalue_required),
                  pag_nation=(temp_table.pag_nation + cons_fvalue_paid)
                  where  temp_table.code=(select code from cost_sources  where 
                  cost_sources.id=(select distinct cssb.father_id from cost_sources as cssb where code=up_code and final_level=false));		  
                  
                  ELSEIF cons_royalties is True THEN
                  update temp_table set pre_roy=(temp_table.pre_roy + cons_fvalue_bugeted),
                  com_roy=(temp_table.com_roy + cons_fvalue_comitted),
                  obl_roy=(temp_table.obl_roy + cons_fvalue_required),
                  pag_roy=(temp_table.pag_roy + cons_fvalue_paid)
                  where  temp_table.code=(select code from cost_sources  where 
                  cost_sources.id=(select distinct cssb.father_id from cost_sources as cssb where code=up_code and final_level=false));
                  
                  ELSEIF cons_funds is True THEN
                  update temp_table set pre_fca=(temp_table.pre_fca + cons_fvalue_bugeted),
                  com_fca=(temp_table.com_fca + cons_fvalue_comitted),
                  obl_fca=(temp_table.obl_fca + cons_fvalue_required),
                  pag_fca=(temp_table.pag_fca + cons_fvalue_paid)
                  where  temp_table.code=(select code from cost_sources  where 
                  cost_sources.id=(select distinct cssb.father_id from cost_sources as cssb where code=up_code and final_level=false));  
                  
                  END IF;
                  
                  
                  
                  len_code := len_code-1;
                  up_code := (select code from cost_sources where cost_sources.id=id_code);
                  EXIT WHEN len_code =0;
                END LOOP;
           end loop;
          
           -- close the cursor
           close cur_codes;
           
         
           
        RETURN QUERY 
        SELECT *
        from temp_table; --where temp_table.father_id=5;
        --   return titles;
        DROP TABLE temp_table;
        end;
        
        $$ language plpgsql;");

        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.report_pai_year(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(level bigint, grupo_pai bigint, id bigint, name character varying, ponderacion integer, indicador character varying, unit_goal integer, name_unit_goal character varying, total_goal double precision, goal_1 integer, goal_2 integer, goal_3 integer, goal_4 integer, repor_vigencia integer, repor_rezago_1 integer, desc_vig_1 character varying, desc_rez_1 character varying, repor_vigencia_2 integer, repor_rezago_2 integer, desc_vig_2 character varying, desc_rez_2 character varying, repor_vigencia_3 integer, repor_rezago_3 integer, desc_vig_3 character varying, desc_rez_3 character varying, repor_vigencia_4 integer, repor_rezago_4 integer, desc_vig_4 character varying, desc_rez_4 character varying, goal_anio double precision, av_met_fin double precision, met_fin_anual double precision, met_fin_total double precision, acum_met_fin double precision) AS $$
        declare 
             --titles text default '';
             --rec_film  record;	 
            cur_codes cursor
                 for select 
              ROW_NUMBER () OVER (PARTITION BY public.activities.objective_id 
                                  ORDER BY  public.programs.id),
             public.activities.id as act_id,
             public.activities.objective_id,
             public.activities.product_id,
             public.activities.name as act_name,
             public.activities.goal,
             public.activities.goal_1,
             public.activities.goal_2,
             public.activities.goal_3,
             public.activities.goal_4,
             public.activities.weighing as act_weighing,
             public.objective_products.id as act_prod,
             public.objective_products.objective_id,
             public.objective_products.product_id,
             public.objective_products.product_other as prod_name,
             public.objective_products.goal_1,
             public.objective_products.goal_2,
             public.objective_products.goal_3,
             public.objective_products.goal_4,
             public.objective_products.total_goal,
             public.objective_products.unit_goal,
             public.domains.name as name_unit_goal,
             public.objective_products.weighing as prod_weighing,
             public.objectives.id as obj_id,
             public.objectives.project_id,
             public.objectives.objective as obj_name,
             public.objectives.weighing as obj_weighing,
             public.programs.id as id_prog,
             public.programs.car_program,
             public.programs.weighing as prog_weighing,
              public.projects.id as proy_id,
             public.projects.program_id,
             public.projects.project,
             public.projects.weighing as proy_weighing,
             public.strategic_lines.id as st_lin_id,
             public.strategic_lines.name as st_lin_name,
             public.strategic_lines.weighing as st_lin_weighing ,
             public.strategic_lines.p_a_i_id,
             public.pais.id,
             public.pais.name,
             public.activity_sources.id,
             public.activity_sources.activity_id,
             public.activity_sources.source_id,
             public.activity_sources.age,
             public.activity_sources.value,
             public.activity_sources.goal,
             public.indicator_activities.id,
             public.indicator_activities.numerator,
             public.indicator_activities.denominator,
             public.indicator_activities.weighing,
             public.indicator_activities.result,
             public.indicator_activities.result_completed,
             public.indicator_activities.year,
             public.indicator_activities.variable_in,
             public.indicator_activities.indicator_id,
             public.indicator_activities.activities_id,
             public.indicator_activities.variable_id,
             public.indicator_activities.evidence_id,	
             public.objective_products.weighing,
             public.indicators.abbreviated_name	
             
        
        FROM
             public.objectives INNER JOIN public.activities ON public.objectives.id = public.activities.objective_id
             INNER JOIN public.objective_products ON public.objectives.id = public.objective_products.objective_id
             AND public.activities.product_id = public.objective_products.id
             INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
             INNER JOIN public.programs ON public.projects.program_id = public.programs.id
             INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
             INNER JOIN public.pais ON public.strategic_lines.p_a_i_id = public.pais.id
             LEFT JOIN public.activity_sources ON public.activities.id = public.activity_sources.activity_id
             LEFT JOIN public.indicator_activities ON public.activities.id = public.indicator_activities.activities_id
             LEFT JOIN public.indicators on public.indicator_activities.indicator_id= public.indicators.id
             --SELECT * FROM indicator_activities
             INNER JOIN public.domains on public.objective_products.unit_goal=public.domains.id
             where public.pais.id=p_paid --and public.indicator_activities.year=p_year
             ORDER BY public.programs.id,public.projects.id,public.objectives.id,
             public.objective_products.id,public.activities.id;
             
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
        DECLARE cons_acum_met_fin integer := 0;
        DECLARE cons_goal_anio integer := 0;
        DECLARE cons_met_fin_anual double precision := 0;
        DECLARE cons_met_fin_total double precision := 0;
        
        DECLARE   id_lin_tmp   integer :=0;
        DECLARE   id_prod_tmp integer :=0;
        DECLARE   id_proy_tmp integer :=0;
        DECLARE   id_prog_tmp integer :=0;
        DECLARE   id_obj_tmp integer :=0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select 
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
        CAST(0 as double precision) as acum_met_fin
        --CAST(0 as integer) as goal_anio,
        --CAST(0 as integer) as goal_anio,
        --CAST(0 as integer) as goal_anio,
        
        from  public.activities act 
        order by act.id
        limit 0;
           -- open the cursor
           open cur_codes;
        
           loop
            -- fetch row into the film
              fetch cur_codes into cons_index,
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
            id_code:=cons_34;
            id_lin_tmp := (select count(temp_table.id) from temp_table where temp_table.id_lin=cons_34);
            id_prod_tmp := (select count(temp_table.id) from temp_table where temp_table.id_prod=cons_3);
            id_obj_tmp := (select count(temp_table.id) from temp_table where temp_table.id_obj=cons_2);
            id_prog_tmp :=  (select count(temp_table.id) from temp_table where temp_table.id_prog=cons_27);
            id_proy_tmp :=  (select count(temp_table.id) from temp_table where temp_table.id_proy=cons_24);
        
            --	 3,4,24,25,28
             --obj,prod,onbj,proy,prog
            
            cons_evidence  := (select value from evidence_advance where activity_id=cons_5 and year=1);
            cons_repor_rezago_1  := (select value from evidence_advance where activity_id=cons_5 and year=1);
            cons_desc_vig_1  := (select description from evidence_advance where activity_id=cons_5 and year=1);
            cons_desc_rez_1  := (select description from evidence_advance where activity_id=cons_5 and year=1);
            
            cons_repor_vigencia_2  := (select sum(value) from evidence_advance where activity_id=cons_5 and year=2);
            cons_repor_rezago_2  := (select sum(value) from evidence_advance where activity_id=cons_5 and year=2);
            cons_desc_vig_2  := (select description from evidence_advance where activity_id=cons_5 and year=2 limit 1);
            cons_desc_rez_2  := (select description from evidence_advance where activity_id=cons_5 and year=2 limit 1);
            cons_repor_vigencia_3  := (select  sum(value) from evidence_advance where activity_id=cons_5 and year=3);
            cons_repor_rezago_3  := (select  sum(value) from evidence_advance where activity_id=cons_5 and year=3);
            cons_desc_vig_3  := (select description from evidence_advance where activity_id=cons_5 and year=3 limit 1);
            cons_desc_rez_3  := (select description from evidence_advance where activity_id=cons_5 and year=3 limit 1);
            cons_repor_vigencia_4  := (select  sum(value) from evidence_advance where activity_id=cons_5 and year=4);
            cons_repor_rezago_4  := (select  sum(value) from evidence_advance where activity_id=cons_5 and year=4);
            cons_desc_vig_4  := (select description from evidence_advance where activity_id=cons_5 and year=4 limit 1);
            cons_desc_rez_4  := (select description from evidence_advance where activity_id=cons_5 and year=4 limit 1);
        
            grupo:= grupo+1;
            cons_av_met_fin:= (select sum(value) from evidence_financial where activity_source_id=cons_40);
            cons_acum_met_fin:=(select sum(value) from activity_sources where activity_sources.activity_id=cons_1);
            cons_met_fin_anual:=(SELECT value FROM financial_plans where financial_plans.id=cons_42 and financial_plans.year=p_year);
            cons_met_fin_total:=(SELECT sum(value) FROM financial_plans where financial_plans.id=cons_42 );
        
        IF p_year=1 THEN
        cons_goal_anio=cons_15;
        ELSEIF(p_year=2) THEN
        cons_goal_anio=cons_16;
        ELSEIF(p_year=3)THEN
        cons_goal_anio=cons_17;
        ELSEIF (p_year=4)THEN
        cons_goal_anio=cons_18;
        END IF;
        
        --- linea estratégica
            IF id_lin_tmp=0 THEN
            level:=1;
            INSERT INTO temp_table(id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
            total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
            desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin)
            VALUES (id_code,cons_3,cons_2,cons_27,cons_24,level,grupo,cons_index,cons_35,cons_36,'NA',0,'NA',0,0,0,0,0,0,0,'NA','NA',
                    cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,cons_acum_met_fin);
            
            END IF;
            -- programa
            IF id_prog_tmp=0 THEN
            -- se agrega el programa si no existe
            
            level:=2;
            INSERT INTO temp_table(id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
            total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
            desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin)
            VALUES (id_code,cons_3,cons_2,cons_27,cons_24,level,grupo,cons_index,cons_28,cons_29,'NA',0,'NA',0,0,0,0,0,0,0,'NA','NA',
                    cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,cons_acum_met_fin);
            end if;
            -- proyecto
            IF id_proy_tmp=0 THEN
            level:=3;
            INSERT INTO temp_table(id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
            total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
            desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin)
            VALUES (id_code,cons_3,cons_2,cons_27,cons_24,level,grupo,cons_index,cons_32,cons_33,'NA',0,'NA',0,0,0,0,0,0,0,'NA','NA',
                    cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,cons_acum_met_fin);
            END IF;
            -- objetivo
            IF id_obj_tmp=0 THEN
            level:=4;
            INSERT INTO temp_table(id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
            total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
            desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin)
            VALUES (id_code,cons_3,cons_2,cons_27,cons_24,level,grupo,cons_index,cons_25,cons_26,'NA',0,'NA',0,0,0,0,0,0,0,'NA','NA',
                    cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,cons_acum_met_fin);
                    
        
            END IF;
            
            IF p_year=1 THEN
            -- PRODUCTO
            IF id_prod_tmp=0 THEN
            level:=5;
            suma_vigencia := (select sum(value) from evidence_advance where year=1 and activity_id=cons_1);
            cons_desc_vig_1  := (select description from evidence_advance where activity_id=cons_1 and year=p_year limit 1);
            cons_desc_rez_1  := (select description from evidence_advance where activity_id=cons_1 and year=p_year limit 1);
            
            INSERT INTO temp_table(id_lin,id_prod,id_obj,id_prog,id_proy,level_t, grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
            total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
            desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin)
            VALUES (id_code,cons_3,cons_2,cons_27,cons_24,level, grupo,cons_index,cons_14,cons_58,'NA',cons_20,cons_21,0,cons_15,cons_16,cons_17,cons_18,
                    suma_vigencia,0,'NA','NA',cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,
                   cons_acum_met_fin);
            END IF;
            -- actividad
            level:=6;
            INSERT INTO temp_table(id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
            total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
            desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin)
            VALUES (id_code,cons_3,cons_2,cons_27,cons_24,level,grupo,cons_index,cons_4,cons_10,cons_59,cons_49,cons_21,cons_5,cons_6,cons_7,cons_8,cons_9,
                    suma_vigencia,0,'NA','NA',cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,cons_acum_met_fin);
         
            ELSEIF (p_year=2) THEN
            -- PRODUCTO
            IF id_prod_tmp=0 THEN
            level:=5;
            suma_vigencia := (select sum(value) from evidence_advance where year=1 and activity_id=cons_1);
            cons_desc_vig_1  := (select description from evidence_advance where activity_id=cons_1 and year=p_year limit 1);
            cons_desc_rez_1  := (select description from evidence_advance where activity_id=cons_1 and year=p_year limit 1);
            INSERT INTO temp_table(id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
            total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
            desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin)
            VALUES (id_code,cons_3,cons_2,cons_27,cons_24,level,grupo,cons_index,cons_14,cons_58,'NA',cons_20,cons_21,0,cons_15,cons_16,cons_17,cons_18,
                    suma_vigencia,0,'NA','NA',cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,cons_acum_met_fin);
            END IF;
        -- actividad
            level:=6;
            INSERT INTO temp_table(id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
            total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
            desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin)
            VALUES (id_code,cons_3,cons_2,cons_27,cons_24,level,grupo,cons_index,cons_4,cons_10,cons_59,cons_49,cons_21,cons_5,cons_6,cons_7,cons_8,cons_9,
                    suma_vigencia,0,'NA','NA',cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,cons_acum_met_fin);
        
        ELSEIF (p_year=3) THEN
            
            -- PRODUCTO
            IF id_prod_tmp=0 THEN
            level:=5;
            suma_vigencia := (select sum(value) from evidence_advance where year=1 and activity_id=cons_1);
            cons_desc_vig_1  := (select description from evidence_advance where activity_id=cons_1 and year=p_year limit 1);
            cons_desc_rez_1  := (select description from evidence_advance where activity_id=cons_1 and year=p_year limit 1);
            
            INSERT INTO temp_table(id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
            total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
            desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin)
            VALUES (id_code,cons_3,cons_2,cons_27,cons_24,level,grupo,cons_index,cons_14,cons_58,'NA',cons_20,cons_21,0,cons_15,cons_16,cons_17,cons_18,
                    suma_vigencia,0,'NA','NA',cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,cons_acum_met_fin);
            END IF;
        
            level:=6;
        INSERT INTO temp_table(id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
            total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
            desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin)
            VALUES (id_code,cons_3,cons_2,cons_27,cons_24,level,grupo,cons_index,cons_4,cons_10,cons_59,cons_49,cons_21,cons_5,cons_6,cons_7,cons_8,cons_9,
                    suma_vigencia,0,'NA','NA',cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,cons_acum_met_fin);
        ELSEIF (p_year=4) THEN
                
                -- PRODUCTO //cons_19 total_goal
            IF id_prod_tmp=0 THEN
            
            suma_vigencia := (select sum(value) from evidence_advance where year=1 and activity_id=cons_1);
            cons_desc_vig_1  := (select description from evidence_advance where activity_id=cons_1 and year=p_year limit 1);
            cons_desc_rez_1  := (select description from evidence_advance where activity_id=cons_1 and year=p_year limit 1);
        
            level:=5;
            INSERT INTO temp_table(id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
            total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
            desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin)
            VALUES (id_code,cons_3,cons_2,cons_27,cons_24,level,grupo,cons_index,cons_14,cons_58,'NA',cons_20,cons_21,0,cons_15,cons_16,cons_17,cons_18,suma_vigencia,
                    0,'NA','NA',cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,cons_acum_met_fin);
                    
            END IF;
            level:=6;
                    INSERT INTO temp_table(id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
            total_goal,goal_1, goal_2,goal_3, goal_4, repor_vigencia_1,repor_rezago_1,desc_vig_1,
            desc_rez_1,goal_anio,av_met_fin,met_fin_anual,met_fin_total,acum_met_fin)
            VALUES (id_code,cons_3,cons_2,cons_27,cons_24,level, grupo,cons_index,cons_4,cons_10,cons_59,cons_49,cons_21,cons_5,cons_6,cons_7,cons_8,cons_9,
                    suma_vigencia,0,'NA','NA',cons_goal_anio,cons_av_met_fin,cons_met_fin_anual,cons_met_fin_total,acum_met_fin);
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
        temp_table.met_fin_total , temp_table.acum_met_fin 
        from temp_table; --where temp_table.father_id=5;
        --   return titles;
        DROP TABLE temp_table;
        end; 
        
        $$ language plpgsql;");
        
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.report_pai_year_2(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(level bigint, grupo_pai bigint, id bigint, name character varying, ponderacion integer, indicador character varying, unit_goal integer, name_unit_goal character varying, total_goal double precision, goal_1 integer, goal_2 integer, goal_3 integer, goal_4 integer, repor_vigencia integer, repor_rezago_1 integer, desc_vig_1 character varying, desc_rez_1 character varying, repor_vigencia_2 integer, repor_rezago_2 integer, desc_vig_2 character varying, desc_rez_2 character varying, repor_vigencia_3 integer, repor_rezago_3 integer, desc_vig_3 character varying, desc_rez_3 character varying, repor_vigencia_4 integer, repor_rezago_4 integer, desc_vig_4 character varying, desc_rez_4 character varying, goal_anio double precision, av_met_fin double precision, met_fin_anual double precision, met_fin_total double precision, acum_met_fin double precision, cuatrienio integer, pc_av_gest double precision, pc_av_fin double precision, pc_av_acum double precision) AS $$
        declare 
             --titles text default '';
             --rec_film  record;	 
            cur_codes cursor
                 for select 
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
        public.activities.weighing as act_weighing,
        public.objective_products.id as act_prod,
        public.objective_products.objective_id,
        public.objective_products.product_id,
        public.objective_products.product_other as prod_name,
        public.objective_products.goal_1,
        public.objective_products.goal_2,
        public.objective_products.goal_3,
        public.objective_products.goal_4,
        public.objective_products.total_goal,
        public.objective_products.unit_goal,
        CAST (NULL as character varying) as name_unit_goal,
        --public.domains.name as name_unit_goal,
        public.objective_products.weighing as prod_weighing,
        public.objectives.id as obj_id,
        public.objectives.project_id,
        public.objectives.objective as obj_name,
        public.objectives.weighing as obj_weighing,
        public.programs.id as id_prog,
        public.programs.car_program,
        public.programs.weighing as prog_weighing,
        public.projects.id as proy_id,
        public.projects.program_id,
        public.projects.project,
        public.projects.weighing as proy_weighing,
        public.strategic_lines.id as st_lin_id,
        public.strategic_lines.name as st_lin_name,
        public.strategic_lines.weighing as st_lin_weighing ,
        public.strategic_lines.p_a_i_id,
        --public.pais.id,
        public.objective_products.indicator_ods_id,
        --CAST(0 as integer) as id_paid,
        --
        --public.pais.name,
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
        public.indicator_activities.result,
        public.indicator_activities.result_completed,
        public.indicator_activities.result_completed,
        public.indicator_activities.result_completed,
        public.indicator_activities.indicator_id,
        public.indicator_activities.activities_id,
        public.indicator_activities.activities_id,
        public.indicator_activities.activities_id,
        public.objective_products.weighing,
        public.indicators.abbreviated_name	
        
        FROM
        public.activities 
        
        INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
        -- COLOCO OBJECTIVE PRODUCTS CON LEFT JOIN PARA TRAER TODO
        LEFT JOIN public.objective_products ON public.objectives.id = public.objective_products.objective_id
        --AND public.activities.product_id = public.objective_products.id
        INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
        INNER JOIN public.programs ON public.projects.program_id = public.programs.id
        INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
        INNER JOIN public.indicator_activities ON public.activities.id = public.indicator_activities.activities_id
        INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
        INNER JOIN public.domains ON public.indicator_activities.variable_in = public.domains.id
        LEFT JOIN public.activity_sources ON public.activities.id = public.activity_sources.activity_id
        
        where public.strategic_lines.p_a_i_id=p_paid -- public.indicator_activities.year=1
        ORDER BY public.programs.id,public.projects.id,public.objectives.id,
        public.objective_products.id,public.activities.id;
        
             
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
        from  public.activities act 
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
            cons_14:= (select public.domains.domain FROM public.domains where public.domains.id=cons_3);
            END IF;
            
            IF cons_58 is NULL THEN
            cons_58:= (select  weighing from objective_products where objective_products.id=cons_3 and objective_products.objective_id=cons_2 );
            END IF;
            
            -- se busca el nombre de la unidad de medida según el producto
            cons_21:= (select domains.name from domains where domains.id = (select objective_products.unit_goal from objective_products where objective_products.product_id = cons_3 and objective_products.objective_id=cons_2));
        
            --	 3,4,24,25,28
             --obj,prod,onbj,proy,prog
            
            cons_evidence  := (select sum(value) from evidence_advance where activity_id=cons_1 and year=p_year and rezago=false);
            suma_cuatrienio:= (select sum(value) from evidence_advance where activity_id=cons_1  and rezago=false);
            cons_repor_rezago_1  := (select sum(value) from evidence_advance where activity_id=cons_1 and year=p_year and rezago=true);
        
            IF cons_repor_rezago_1 IS NULL THEN
            cons_repor_rezago_1:=0;
            END IF;
        
            cons_desc_vig_1  := (select string_agg(description, ', ') from evidence_advance where activity_id=cons_1 and rezago=true and year=p_year);
            cons_desc_rez_1  := (select string_agg(description, ', ') from evidence_advance where activity_id=cons_1 and rezago=true and year=p_year);
            
            cons_repor_vigencia_2  := (select sum(value) from evidence_advance where activity_id=cons_1 and year=2);
            cons_repor_rezago_2  := (select sum(value) from evidence_advance where activity_id=cons_1 and year=2);
            cons_desc_vig_2  := (select string_agg(description, ', ') from evidence_advance where activity_id=cons_1 and year=2);
            cons_desc_rez_2  := (select string_agg(description, ', ') from evidence_advance where activity_id=cons_1 and year=2);
            cons_repor_vigencia_3  := (select  sum(value) from evidence_advance where activity_id=cons_1 and year=3);
            cons_repor_rezago_3  := (select string_agg(description, ', ') from evidence_advance where activity_id=cons_1 and year=3);
            cons_desc_rez_3  := (select string_agg(description, ', ') from evidence_advance where activity_id=cons_1 and year=3);
            cons_repor_vigencia_4  := (select  sum(value) from evidence_advance where activity_id=cons_1 and year=4);
            cons_repor_rezago_4  := (select  sum(value) from evidence_advance where activity_id=cons_1 and year=4);
            cons_desc_vig_4  := (select string_agg(description, ', ') from evidence_advance where activity_id=cons_1 and year=4);
            cons_desc_rez_4  :=(select  sum(value) from evidence_advance where activity_id=cons_1 and year=3);
            cons_desc_vig_3  := (select string_agg(description, ', ') from evidence_advance where activity_id=cons_1 and year=4);
        
            grupo:= grupo+1;
        --	cons_av_met_fin:= (select sum(value) from evidence_financial where activity_source_id=cons_40);
        cons_met_fin_anual:=(select sum(value) from activity_sources where activity_sources.activity_id=cons_1 and activity_sources.age=p_year);
        cons_av_met_fin:=(select sum(value) from evidence_financial e where e.activity_source_id in (select ac.id from activity_sources ac where ac.activity_id=cons_1 and ac.age=p_year));
        cons_met_fin_total:= (select sum(value) from financial_plans f where f.id in (select source_id from activity_sources where activity_id=cons_1 and f.p_a_i_id=p_paid));
        cons_acum_met_fin:=(select sum(value) from activity_sources where activity_sources.activity_id=cons_1);
        
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
            suma_vigencia := (select sum(value) from evidence_advance where year=p_year and activity_id=cons_1);
            cons_desc_vig_1  := (select string_agg(description, ', ')  from evidence_advance where activity_id=cons_1 and year=p_year limit 1);
            cons_desc_rez_1  := (select string_agg(description, ', ')  from evidence_advance where activity_id=cons_1 and year=p_year limit 1);
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
        DB::unprepared("  
        DROP FUNCTION public.report_pai_year_gral(integer, integer);
        ");
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.report_pai_year_gral(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id_lin double precision, level bigint, grupo_pai bigint, id bigint, name character varying, ponderacion double precision, indicador character varying, unit_goal integer, name_unit_goal character varying, total_goal double precision, goal_1 double precision, goal_2 double precision, goal_3 double precision, goal_4 double precision, repor_vigencia double precision, repor_rezago_1 double precision, desc_vig_1 character varying, desc_rez_1 character varying, goal_anio double precision, av_met_fin double precision, met_fin_anual double precision, met_fin_total double precision, acum_met_fin double precision, cuatrienio double precision, pc_av_gest double precision, pc_av_fin double precision, pc_av_acum double precision, pc_av_fis double precision, pc_av_fis_rez double precision) AS $$
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
        
            cons_desc_vig_1  := (select string_agg(description, ', ') from evidence_advance where activity_id=cons_id_source and rezago=true and year=p_year);
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
            suma_vigencia := (select sum(value) from evidence_advance where year=p_year and activity_id=cons_id_source);
            cons_desc_vig_1  := (select string_agg(description, ', ')  from evidence_advance where activity_id=cons_id_source and year=p_year limit 1);
            cons_desc_rez_1  := (select string_agg(description, ', ')  from evidence_advance where activity_id=cons_id_source and year=p_year limit 1);
            
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
        from temp_table; --where temp_table.father_id=5;
        --   return titles;
        DROP TABLE temp_table;
        end;
        
        $$ language plpgsql;");

        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.report_total_gastos_inv(
            p_year integer,
            p_paid integer,
            p_type integer)
            RETURNS TABLE(id_lin double precision, id_act double precision, id bigint, id_prod double precision, id_obj double precision, id_prog double precision, id_proy double precision, name character varying, level bigint, presupuestado double precision, comprometido double precision, obligaciones double precision, pagos double precision) AS $$
        declare 
             --titles text default '';
             --rec_film  record;	 
            cur_codes cursor
                 for select r.act_id, r.act_produ, r.act_name, r.obj_id, r.project_id,r.obj_name, r.pro_id,
        r.car_program, r.proj_id, r.program_id, r.proj_name , r.st_lin_id, r.strat_name, r.p_a_i_id,
        CAST(0 as integer) as id_act_sour,
        CAST(0 as integer) as act_id_from_sources,
        CAST(0 as integer) as source_id,
        sum(r.value_act_sourc) as value_act_sourc, SUM(r.value_evi_fin) AS value_evi_fin,
        CAST(0 as integer) as parent_id,
        CAST(0 as integer) as group_id,
        CAST(0 as integer) as id_prod_obj,
         r.objective_id, r.obj_product_id, r.prod_name
        from (SELECT distinct
        --ROW_NUMBER () OVER (ORDER BY  public.activities.id),
        public.activities.id as act_id,
        public.activities.product_id as act_produ,
        public.activities.name as act_name,
        public.objectives.id as obj_id,
        public.objectives.project_id as project_id ,
        public.objectives.objective as obj_name,
        public.programs.id as pro_id,
        public.programs.car_program as car_program,
        public.projects.id as proj_id,
        public.projects.program_id as program_id ,
        public.projects.project as proj_name,
        public.strategic_lines.id as st_lin_id,
        public.strategic_lines.name as strat_name,
        public.strategic_lines.p_a_i_id as p_a_i_id ,
        public.activity_sources.id as id_act_sour,
        public.activity_sources.activity_id as act_id_from_sources,
        public.activity_sources.source_id as source_id,
        public.activity_sources.value as value_act_sourc,
        sum(public.evidence_financial.value )as value_evi_fin,
        public.financing_sources.parent_id,
        public.financing_sources.group_id,
        public.objective_products.id as id_prod_obj,
        public.objective_products.objective_id as objective_id,
        public.objective_products.product_id as obj_product_id,
        public.objective_products.product_other as prod_name
        
        FROM
        public.activities 
        
        LEFT JOIN public.activity_sources ON public.activities.id = public.activity_sources.activity_id
        LEFT JOIN public.evidence_financial on public.activity_sources.id = public.evidence_financial.activity_source_id
        INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
        -- COLOCO OBJECTIVE PRODUCTS CON LEFT JOIN PARA TRAER TODO
        LEFT JOIN public.objective_products ON public.objectives.id = public.objective_products.objective_id
        AND public.activities.product_id = public.objective_products.id
        INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
        INNER JOIN public.programs ON public.projects.program_id = public.programs.id
        INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
        LEFT JOIN public.financial_plans ON public.activity_sources.source_id=public.financial_plans.id 
        LEFT JOIN public.financing_sources ON public.financial_plans.source_id = public.financing_sources.id
        LEFT JOIN public.domains ON public.financing_sources.type_id = public.domains.id		 
        where public.strategic_lines.p_a_i_id=p_paid and public.domains.id=p_type
        AND public.financial_plans.year=p_year
        --and public.payments.evidence_id is not null
        group by public.activities.id ,
        public.activities.product_id,
        public.activities.name,
        public.objectives.id ,
        public.objectives.project_id,
        public.objectives.objective,
        public.programs.id ,
        public.programs.car_program,
        public.projects.id ,
        public.projects.program_id,
        public.projects.project ,
        public.strategic_lines.id ,
        public.strategic_lines.name ,
        public.strategic_lines.p_a_i_id,
        public.activity_sources.id ,
        public.activity_sources.activity_id,
        public.activity_sources.source_id,
        public.activity_sources.value,
        public.financing_sources.parent_id,
        public.financing_sources.group_id,
        public.objective_products.id ,
        public.objective_products.objective_id,
        public.objective_products.product_id,
        public.objective_products.product_other 
        ORDER BY public.activities.id) as r 
        
        group by r.act_id, r.act_produ, r.act_name, r.obj_id, r.project_id,r.obj_name, r.pro_id,
        r.car_program, r.proj_id, r.program_id, r.proj_name , r.st_lin_id, r.strat_name, r.p_a_i_id, r.objective_id, r.obj_product_id, r.prod_name;
        
        DECLARE   cons_1  integer := 0;
        DECLARE   cons_2  integer := 0;
        DECLARE   cons_3  integer := 0;
        DECLARE   cons_4  character varying;
        DECLARE   cons_5  integer := 0;
        DECLARE   cons_6  integer := 0;
        DECLARE   cons_7  integer := 0;
        DECLARE   cons_8  character varying;
        DECLARE   cons_9  integer := 0;
        DECLARE   cons_10  integer := 0;
        DECLARE   cons_11  integer := 0;
        DECLARE   cons_12  character varying;
        DECLARE   cons_13  integer := 0;
        DECLARE   cons_14  integer := 0;
        DECLARE   cons_15  character varying;
        DECLARE   cons_16  integer := 0;
        DECLARE   cons_17  character varying;
        DECLARE   cons_18  integer := 0;
        DECLARE   cons_19  integer := 0;
        DECLARE   cons_20  integer := 0;
        DECLARE   cons_21  integer := 0;
        DECLARE   cons_22  double precision DEFAULT 0;
        DECLARE   cons_23  integer := 0;
        DECLARE   cons_24  integer := 0;
        DECLARE   cons_25  integer := 0;
        DECLARE   cons_26  double precision DEFAULT 0;
        DECLARE   cons_27  integer := 0;
        DECLARE   cons_28  integer := 0;
        DECLARE   cons_29  integer := 0;
        DECLARE   cons_30  integer := 0;
        DECLARE   cons_31  double precision DEFAULT 0;
        DECLARE   cons_32  integer := 0;
        DECLARE   cons_33  double precision DEFAULT 0;
        DECLARE   cons_34  integer := 0;
        DECLARE   cons_35  integer := 0;
        DECLARE   cons_36  integer := 0;
        DECLARE   cons_37  double precision DEFAULT 0;
        DECLARE   cons_38  boolean;--es payment true es pago, false es obligación
        DECLARE   cons_39  integer := 0;
        
        DECLARE   cons_40  integer := 0;
        DECLARE   cons_41  integer := 0;
        DECLARE   cons_42  integer := 0;
        DECLARE   cons_43  bigint := 0;
        DECLARE   cons_44  double precision := 0;
        DECLARE   cons_45  double precision := 0;
        DECLARE   cons_46  double precision := 0;
        DECLARE   cons_47  double precision := 0;
        DECLARE   cons_48  double precision := 0;
        DECLARE   cons_49  double precision := 0;
        DECLARE   cons_50  double precision := 0;
        DECLARE   cons_51  double precision := 0;
        DECLARE   cons_52  integer := 0;
        DECLARE   cons_53  integer := 0;
        DECLARE   cons_54  integer := 0;
        DECLARE   cons_55  character varying;
        DECLARE   cons_56  character varying;
        DECLARE   cons_57  character varying;
        DECLARE   cons_58  integer := 0;
        DECLARE   cons_59  boolean;
        DECLARE   cons_60  double precision := 0;
        DECLARE   cons_61  double precision := 0;
        DECLARE   cons_62  double precision := 0;
        DECLARE   cons_63  double precision := 0;
        DECLARE   cons_64  integer := 0;
        DECLARE   cons_65  integer := 0;
        DECLARE   cons_66  integer := 0;
        DECLARE   cons_67  integer := 0;
        DECLARE   cons_68  character varying;
        
        DECLARE   cons_69  integer := 0;
        DECLARE   cons_70  integer := 0;
        DECLARE   cons_71  bigint := 0;
        DECLARE   cons_72  character varying;
        DECLARE   cons_73  double precision  := 0;
        DECLARE   cons_74  double precision  := 0;
        DECLARE   cons_75  double precision  := 0;
        DECLARE   cons_76  double precision  := 0;
        DECLARE   cons_77  double precision := 0;
        DECLARE   cons_78  integer := 0;
        
        DECLARE   cons_pago double precision := 0;
        DECLARE   cons_oblig double precision := 0;
        DECLARE   id_prod_tmp integer :=0;
        DECLARE   id_proy_tmp integer :=0;
        DECLARE   id_prog_tmp integer :=0;
        DECLARE   id_obj_tmp integer :=0;
        DECLARE   id_act_tmp integer :=0;
        DECLARE   id_evi_fin_tmp integer :=0;
        DECLARE obj_prod_tmp integer :=0;
        
        DECLARE   index_tmp  integer := 0;
        DECLARE cons_fid integer := 0;
        DECLARE cons_ffid integer := 0;
        DECLARE cons_fcode character varying;
        DECLARE cons_fgid integer := 0;
        DECLARE cons_fidfc integer := 0;
        DECLARE cons_fvalue_bugeted double precision DEFAULT 0;
        DECLARE cons_fvalue_comitted double precision DEFAULT 0;
        DECLARE cons_fvalue_required double precision DEFAULT 0;
        DECLARE cons_fvalue_paid double precision DEFAULT 0;
        DECLARE cons_compromisos double precision DEFAULT 0;
        
        DECLARE cons_ffund_value double precision DEFAULT 0;
        DECLARE cons_frecaudo double precision DEFAULT 0;
        DECLARE len_code integer := 0;
        DECLARE up_code character varying;
        DECLARE id_code integer := 0;
        
        DECLARE cons2_id integer := 0;
        DECLARE cons2_value double precision DEFAULT 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select 
        CAST(0 as double precision) as id_lin,
        CAST(0 as double precision) as id_act,
        act.id as id,
        CAST(0 as double precision) as id_prod,
        CAST(0 as double precision) as id_obj,
        CAST(0 as double precision) as id_prog,
        CAST(0 as double precision) as id_proy,
        
        CAST(NULL as character varying) as name, 
        CAST(0 as bigint) as level,
        CAST(0 as double precision) as presupuestado,
        CAST(0 as double precision) as comprometido,
        CAST(0 as double precision) as obligaciones,
        CAST(0 as double precision) as pagos
        from  public.activities act 
        order by act.id
        limit 0;
        
         -- open the cursor
           open cur_codes;
        
           loop
            -- fetch row into the film
              fetch cur_codes into cons_1,	cons_3,	cons_4,	cons_2,	cons_7,	cons_8,	cons_9,	cons_12,
              cons_13,cons_14,cons_15,cons_16,cons_17,cons_18,cons_19,cons_20,cons_21,cons_22,cons_26,
              cons_53,cons_54,cons_69,cons_70,cons_71,cons_72;
        
            -- exit when no more row to fetch
              exit when not found;
        
            --se agrega la línea estratégica
        --	id_evi_fin_tmp := (select count(temp_table.id) from temp_table where temp_table.id_evi_fin=cons_25);
            id_code := (select count(temp_table.id) from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1);
            id_prog_tmp :=(select count(temp_table.id) from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2);
            id_proy_tmp :=(select count(temp_table.id) from temp_table where temp_table.id_proy=cons_13 and temp_table.level=3);
            id_obj_tmp := (select count(temp_table.id) from temp_table where temp_table.id_obj=cons_2
                           --AND temp_table.id_prod=cons_3
                           and temp_table.level=4);
            id_prod_tmp := (select count(temp_table.id) from temp_table where temp_table.id_prod=cons_3 
                            --and temp_table.id_obj=cons_2   
                            and temp_table.level=5);
            id_act_tmp := (select count(temp_table.id) from temp_table where temp_table.id_act=cons_1 and temp_table.level=6 );
            
            obj_prod_tmp := (select count(temp_table.id) from temp_table where temp_table.id_prod=cons_3 
                            and temp_table.id_obj=cons_2   
                            and temp_table.level=5);
            
            IF cons_26 is NULL THEN 
            cons_26:= 0;
            END IF; 
            
            IF cons_72 is NULL THEN
            cons_72:= (select public.domains.domain FROM public.domains where public.domains.id=cons_3);
            END IF;
        
            IF cons_38 THEN
            cons_pago:=cons_37; 
            cons_oblig:=0;
            ELSE
            cons_pago:=0; 
            cons_oblig:=cons_37;
            END IF;
            
        
            IF id_code=0 THEN
            index_tmp := index_tmp+1;
            INSERT INTO temp_table(id_lin,id , name, level,presupuestado, comprometido, obligaciones, pagos)
            VALUES (cons_16, index_tmp,cons_17,1,cons_22,cons_26,0,0 );
            ELSEIF id_act_tmp= 0 THEN
            cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1 Limit 1); 
            cons_fvalue_bugeted := (select temp_table.presupuestado from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1 Limit 1); 
            update temp_table set presupuestado=(cons_fvalue_bugeted + cons_22), comprometido= (cons_fvalue_comitted+ cons_26)
            where temp_table.id_lin=cons_16 and temp_table.level=1;
            ELSE
            cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_lin=cons_16 and temp_table.level=1 Limit 1); 
            update temp_table set  comprometido= (cons_fvalue_comitted+ cons_26)
            where temp_table.id_lin=cons_16 and temp_table.level=1;
            END IF; 
        
            IF id_prog_tmp=0 THEN
            -- se agrega el programa
            index_tmp := index_tmp+1;
            INSERT INTO temp_table(id_lin,id,id_prog,id_proy,name,level, presupuestado, comprometido, obligaciones, pagos)VALUES 
            (cons_16,index_tmp,cons_14,cons_13, cons_12,2,cons_22,cons_26,0,0 );
            ELSEIF id_act_tmp= 0 THEN
            cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2 Limit 1); 
            cons_fvalue_bugeted := (select temp_table.presupuestado from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2 Limit 1); 
            update temp_table set presupuestado=(cons_fvalue_bugeted + cons_22), comprometido= ( cons_fvalue_comitted+ cons_26) 
            where temp_table.id_prog=cons_9 and temp_table.level=2 ;
            ELSE
            cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_prog=cons_9 and temp_table.level=2 Limit 1); 
            update temp_table set comprometido= ( cons_fvalue_comitted+ cons_26) 
            where temp_table.id_prog=cons_9 and temp_table.level=2 ;
            END IF;
        
            -- se agrega el proyecto
            IF id_proy_tmp=0 THEN
            index_tmp := index_tmp+1;
            INSERT INTO temp_table(id_lin,id,id_prog,id_proy, name,level, presupuestado, comprometido, obligaciones, pagos)VALUES 
            (cons_16,index_tmp,cons_14,cons_13, cons_15,3,cons_22,cons_26,0,0 );
            ELSEIF id_act_tmp= 0 THEN
            cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_proy=cons_7 and temp_table.level=3 Limit 1);
            cons_fvalue_bugeted := (select temp_table.presupuestado from temp_table where temp_table.id_proy=cons_7 and temp_table.level=3 Limit 1); 
            update temp_table set presupuestado=(cons_fvalue_bugeted + cons_22), comprometido= (cons_fvalue_comitted+cons_26) 
            where temp_table.id_proy=cons_7 and temp_table.level=3 ;
            
            ELSE
            cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_proy=cons_7 and temp_table.level=3 Limit 1);
            update temp_table set comprometido= (cons_fvalue_comitted+cons_26) 
            where temp_table.id_proy=cons_7 and temp_table.level=3 ;
            END IF;
        
        -- se agrega el objetivo
            IF id_obj_tmp=0 THEN
            index_tmp := index_tmp+1;
            INSERT INTO temp_table(id_lin,id,id_obj,id_prog,id_proy,name,level,presupuestado, comprometido, obligaciones, pagos)VALUES 
            (cons_16,index_tmp,cons_2,cons_14,cons_13, cons_8,4,cons_22,cons_26,0,0);
            ELSEIF id_act_tmp= 0 THEN
            cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_obj=cons_2  and temp_table.level=4 Limit 1);
            cons_fvalue_bugeted := (select temp_table.presupuestado from temp_table where temp_table.id_obj=cons_2 and temp_table.level=4 Limit 1); 
            update temp_table set presupuestado=(cons_fvalue_bugeted + cons_22), comprometido= (cons_fvalue_comitted + cons_26) 
            where temp_table.id_obj=cons_2  and temp_table.level=4 ;
            ELSE
            cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_obj=cons_2  and temp_table.level=4 Limit 1);
            update temp_table set comprometido= (cons_fvalue_comitted + cons_26) 
            where temp_table.id_obj=cons_2 and temp_table.level=4 ;
            
            END IF;
        
            IF id_prod_tmp=0 THEN
            -- se agrega el producto
            index_tmp := index_tmp+1;
            INSERT INTO temp_table(id_lin,id, id_prod,id_obj,id_prog,id_proy,name,level,presupuestado, comprometido, obligaciones, pagos)VALUES 
            (cons_16,index_tmp,cons_3,cons_2,cons_14,cons_13, cons_72,5,cons_22,cons_26,0,0);
            
            ELSEIF obj_prod_tmp= 0  THEN
            index_tmp := index_tmp+1;
            INSERT INTO temp_table(id_lin,id, id_prod,id_obj,id_prog,id_proy,name,level,presupuestado, comprometido, obligaciones, pagos)VALUES 
            (cons_16,index_tmp,cons_3,cons_2,cons_14,cons_13, cons_72,5,cons_22,cons_26,0,0);
            
            ELSEIF id_act_tmp=0 THEN
            cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_prod=cons_3  and temp_table.level=5 Limit 1);
            cons_fvalue_bugeted := (select temp_table.presupuestado from temp_table where temp_table.id_prod=cons_3 and temp_table.level=5 Limit 1); 
            update temp_table set presupuestado=(cons_fvalue_bugeted + cons_22), comprometido= (cons_fvalue_comitted + cons_26) 
            where temp_table.id_prod=cons_3  and temp_table.level=5 ;
            
            ELSE
            cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_prod=cons_3  and temp_table.level=5 Limit 1);
            update temp_table set comprometido= (cons_fvalue_comitted + cons_26) 
            where temp_table.id_prod=cons_3 and temp_table.id_obj=cons_2 and temp_table.level=5 ;	
            
            END IF;
        
            IF id_act_tmp= 0 THEN
            index_tmp := index_tmp+1;
            INSERT INTO temp_table(id_lin,id_act,id,id_prod,id_obj,id_prog,id_proy, name,level, presupuestado, comprometido, obligaciones, pagos)VALUES 
            (cons_16,cons_1,index_tmp,cons_3,cons_2,cons_14,cons_13,cons_4,6,cons_22,cons_26,cons_oblig,cons_37);
            -- cons_22 comprometido
            ELSE	
            cons_fvalue_comitted := (select temp_table.comprometido from temp_table where temp_table.id_act=cons_1  and temp_table.level=6 Limit 1);
            cons_fvalue_bugeted := (select temp_table.presupuestado from temp_table where temp_table.id_act=cons_1 and temp_table.level=6 Limit 1); 
            update temp_table set  comprometido= (cons_fvalue_comitted + cons_26)
            where temp_table.id_act=cons_1 and temp_table.level=6 ;
            END IF;
        
            --como el ide prod no se repite po grupo, lo que hago es sumar al presupuesot en cada uno
            --cons_fvalue_bugeted := (select temp_table.presupuestado from temp_table where temp_table.id_prod=cons_3 Limit 1); 
            --update temp_table set presupuestado=(cons_fvalue_bugeted + cons_43) where temp_table.id_prod=cons_3;
            -- se ingresa la actividad
            
        
           end loop;
          
           -- close the cursor
           close cur_codes;
           
         
           
        RETURN QUERY 
        SELECT *
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
