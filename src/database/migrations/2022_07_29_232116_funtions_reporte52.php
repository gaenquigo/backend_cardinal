<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FuntionsReporte52 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::unprepared("
            CREATE OR REPLACE FUNCTION cardinal.report_gastos_total(
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
                            cardinal.cost_sources as crcs
                            INNER JOIN cardinal.financial_costs  as crfc ON crcs.id = crfc.cost_sources_id
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
                
                from  cardinal.cost_sources as cs 
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
                        id_code := (select distinct cssb.father_id from cardinal.cost_sources as cssb where code=up_code and final_level=false);
                        IF cons_own is True THEN
                        update temp_table set presupuestado=(temp_table.presupuestado + cons_fvalue_bugeted),
                        comprometido=(temp_table.comprometido + cons_fvalue_comitted),
                        obligaciones=(temp_table.obligaciones + cons_fvalue_required),
                        pagos=(temp_table.pagos + cons_fvalue_paid)
                        where  temp_table.code=(select code from cardinal.cost_sources  where 
                        cost_sources.id=(select distinct cssb.father_id from cardinal.cost_sources as cssb where code=up_code and final_level=false));
                        
                        ELSEIF cons_nation is True THEN
                        update temp_table set pre_nation=(temp_table.pre_nation + cons_fvalue_bugeted),
                        com_nation=(temp_table.com_nation + cons_fvalue_comitted),
                        obl_nation=(temp_table.obl_nation + cons_fvalue_required),
                        pag_nation=(temp_table.pag_nation + cons_fvalue_paid)
                        where  temp_table.code=(select code from cardinal.cost_sources  where 
                        cost_sources.id=(select distinct cssb.father_id from cardinal.cost_sources as cssb where code=up_code and final_level=false));		  
                        
                        ELSEIF cons_royalties is True THEN
                        update temp_table set pre_roy=(temp_table.pre_roy + cons_fvalue_bugeted),
                        com_roy=(temp_table.com_roy + cons_fvalue_comitted),
                        obl_roy=(temp_table.obl_roy + cons_fvalue_required),
                        pag_roy=(temp_table.pag_roy + cons_fvalue_paid)
                        where  temp_table.code=(select code from cardinal.cost_sources  where 
                        cost_sources.id=(select distinct cssb.father_id from cardinal.cost_sources as cssb where code=up_code and final_level=false));
                        
                        ELSEIF cons_funds is True THEN
                        update temp_table set pre_fca=(temp_table.pre_fca + cons_fvalue_bugeted),
                        com_fca=(temp_table.com_fca + cons_fvalue_comitted),
                        obl_fca=(temp_table.obl_fca + cons_fvalue_required),
                        pag_fca=(temp_table.pag_fca + cons_fvalue_paid)
                        where  temp_table.code=(select code from cardinal.cost_sources  where 
                        cost_sources.id=(select distinct cssb.father_id from cardinal.cost_sources as cssb where code=up_code and final_level=false));  
                        
                        END IF;
                        
                        
                        
                        len_code := len_code-1;
                        up_code := (select code from cardinal.cost_sources where cost_sources.id=id_code);
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
            CREATE OR REPLACE FUNCTION cardinal.report_full_gastos_inv(
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
                --ROW_NUMBER () OVER (ORDER BY  cardinal.activities.id),
                cardinal.activities.id as act_id,
                cardinal.activities.product_id as act_produ,
                cardinal.activities.name as act_name,
                cardinal.objectives.id as obj_id,
                cardinal.objectives.project_id as project_id ,
                cardinal.objectives.objective as obj_name,
                cardinal.programs.id as pro_id,
                cardinal.programs.car_program as car_program,
                cardinal.projects.id as proj_id,
                cardinal.projects.program_id as program_id ,
                cardinal.projects.project as proj_name,
                cardinal.strategic_lines.id as st_lin_id,
                cardinal.strategic_lines.name as strat_name,
                cardinal.strategic_lines.p_a_i_id as p_a_i_id ,
                cardinal.activity_sources.id as id_act_sour,
                cardinal.activity_sources.activity_id as act_id_from_sources,
                cardinal.activity_sources.source_id as source_id,
                ---cardinal.activity_sources.value as value_act_sourc,
                cardinal.activity_sources.value as pres_prop, 
                cardinal.activity_sources.value as pres_nation, 
                cardinal.activity_sources.value as pres_roy, 
                cardinal.activity_sources.value as pres_fca, 
                --COALESCE(sum(cardinal.activity_sources.value) FILTER (WHERE cardinal.domains.name='Propio'),0) as pres_prop, 
                --COALESCE(SUM(cardinal.activity_sources.value) FILTER (WHERE cardinal.domains.name='Nación'),0) AS pres_nation,
                --COALESCE(sum(cardinal.activity_sources.value) FILTER (WHERE cardinal.domains.name='Regalías'),0) as pres_roy, 
                --COALESCE(SUM(cardinal.activity_sources.value) FILTER (WHERE cardinal.domains.name='Fondo de Compensación'),0) AS pres_fca,
                COALESCE(sum(cardinal.evidence_financial.value) FILTER (WHERE cardinal.domains.name='Propio'),0) as com_prop, 
                COALESCE(SUM(cardinal.evidence_financial.value) FILTER (WHERE cardinal.domains.name='Nación'),0) AS com_nation,
                COALESCE(sum(cardinal.evidence_financial.value) FILTER (WHERE cardinal.domains.name='Regalías'),0) as com_roy, 
                COALESCE(SUM(cardinal.evidence_financial.value) FILTER (WHERE cardinal.domains.name='Fondo de Compensación'),0) AS com_fca,
                
                cardinal.financing_sources.parent_id,
                cardinal.financing_sources.group_id,
                cardinal.objective_products.id as id_prod_obj,
                cardinal.objective_products.objective_id as objective_id,
                cardinal.objective_products.product_id as obj_product_id,
                cardinal.objective_products.product_other as prod_name,
                cardinal.domains.name as dom_name
                FROM
                cardinal.activities 
                
                LEFT JOIN cardinal.activity_sources ON cardinal.activities.id = cardinal.activity_sources.activity_id
                LEFT JOIN cardinal.evidence_financial on cardinal.activity_sources.id = cardinal.evidence_financial.activity_source_id
                INNER JOIN cardinal.objectives ON cardinal.activities.objective_id = cardinal.objectives.id
                -- COLOCO OBJECTIVE PRODUCTS CON LEFT JOIN PARA TRAER TODO
                LEFT JOIN cardinal.objective_products ON cardinal.objectives.id = cardinal.objective_products.objective_id
                AND cardinal.activities.product_id = cardinal.objective_products.id
                INNER JOIN cardinal.projects ON cardinal.objectives.project_id = cardinal.projects.id
                INNER JOIN cardinal.programs ON cardinal.projects.program_id = cardinal.programs.id
                INNER JOIN cardinal.strategic_lines ON cardinal.programs.strategic_line_id = cardinal.strategic_lines.id
                LEFT JOIN cardinal.financial_plans ON cardinal.activity_sources.source_id=cardinal.financial_plans.id 
                LEFT JOIN cardinal.financing_sources ON cardinal.financial_plans.source_id = cardinal.financing_sources.id
                LEFT JOIN cardinal.domains ON cardinal.financing_sources.type_id = cardinal.domains.id		 
                where cardinal.strategic_lines.p_a_i_id=p_paid 
                AND cardinal.financial_plans.year=p_year and cardinal.domains.father_id=21
                --and cardinal.payments.evidence_id is not null
                group by cardinal.activities.id ,
                cardinal.activities.product_id,
                cardinal.activities.name,
                cardinal.objectives.id ,
                cardinal.objectives.project_id,
                cardinal.objectives.objective,
                cardinal.programs.id ,
                cardinal.programs.car_program,
                cardinal.projects.id ,
                cardinal.projects.program_id,
                cardinal.projects.project ,
                cardinal.strategic_lines.id ,
                cardinal.strategic_lines.name ,
                cardinal.strategic_lines.p_a_i_id,
                cardinal.activity_sources.id ,
                cardinal.activity_sources.activity_id,
                cardinal.activity_sources.source_id,
                cardinal.activity_sources.value,
                cardinal.financing_sources.parent_id,
                cardinal.financing_sources.group_id,
                cardinal.objective_products.id ,
                cardinal.objective_products.objective_id,
                cardinal.objective_products.product_id,
                cardinal.objective_products.product_other,
                cardinal.domains.name
                ORDER BY cardinal.activities.id
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
                
                from  cardinal.activities act 
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
                                    FROM  cardinal.payments
                                    WHERE evidence_id
                                    IN (SELECT distinct
                                    evidence_advance.id
                                    FROM
                                    cardinal.activities INNER JOIN cardinal.evidence_advance ON cardinal.activities.id = cardinal.evidence_advance.activity_id
                                    INNER JOIN cardinal.evidence_financial ON cardinal.evidence_advance.id = cardinal.evidence_financial.evidence_id
                                    --INNER JOIN cardinal.indicator_activities ON cardinal.evidence_advance.id = cardinal.indicator_activities.evidence_id
                                    --AND cardinal.activities.id = cardinal.indicator_activities.activities_id
                                    where cardinal.evidence_advance.activity_id=cons_1
                                    AND cardinal.evidence_advance.year=p_year)
                                    AND payment=True
                                    );
                IF cons_pagos is NULL THEN
                cons_pagos:=0;
                END IF;
                        cons_obligaciones:=(SELECT sum(value)
                                FROM  cardinal.payments
                                WHERE evidence_id
                                IN (SELECT distinct
                                evidence_advance.id
                                FROM
                                cardinal.activities INNER JOIN cardinal.evidence_advance ON cardinal.activities.id = cardinal.evidence_advance.activity_id
                                INNER JOIN cardinal.evidence_financial ON cardinal.evidence_advance.id = cardinal.evidence_financial.evidence_id
                                --INNER JOIN cardinal.indicator_activities ON cardinal.evidence_advance.id = cardinal.indicator_activities.evidence_id
                                --AND cardinal.activities.id = cardinal.indicator_activities.activities_id
                                where cardinal.evidence_advance.activity_id=cons_1
                                AND cardinal.evidence_advance.year=p_year)
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
                    cons_72:= (select cardinal.domains.domain FROM cardinal.domains where cardinal.domains.id=cons_3);
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
