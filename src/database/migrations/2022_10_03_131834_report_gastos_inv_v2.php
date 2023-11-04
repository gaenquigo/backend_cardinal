<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReportGastosInvV2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION cardinal.report_full_gastos_inv_v2(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id_lin double precision, id_act double precision, id bigint, id_prod double precision, id_obj double precision, id_prog double precision, id_proy double precision, name character varying, grupo_pai bigint, level bigint, presupuestado double precision, comprometido double precision, obligaciones double precision, pagos double precision, pre_nation double precision, com_nation double precision, obl_nation double precision, pag_nation double precision, pre_roy double precision, com_roy double precision, obl_roy double precision, pag_roy double precision, pre_fca double precision, com_fca double precision, obl_fca double precision, pag_fca double precision) 
        AS $$
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
                COALESCE(sum(res.pres_prop),0) as pres_prop,--cons_22
                COALESCE(SUM(res.com_prop),0) AS com_prop,--cons_26
                CAST(0 as integer) as parent_id,
                CAST(0 as integer) as group_id,
                res.id_prod_obj,
                CAST(0 as integer) as objective_id,
                CAST(0 as integer) as obj_product_id,
                res.prod_name,
                COALESCE(sum(res.pres_nation) ,0) as pres_nation, 
                COALESCE(SUM(res.com_nation),0) AS com_nation,--cons_62
                COALESCE(sum(res.pres_roy) ,0) as pres_roy, 
                COALESCE(SUM(res.com_roy)  ,0) AS com_roy,--cons_64
                COALESCE(sum(res.pres_fca) ,0) as pres_fca, 
                COALESCE(SUM(res.com_fca) ,0) AS com_fca--cons_66
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
                CAST(0 as integer) as parent_id,
                CAST(0 as integer) as group_id,
                r.id_prod_obj,
                r.prod_name
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
                INNER JOIN cardinal.objectives ON cardinal.activities.objective_id = cardinal.objectives.id
                -- COLOCO OBJECTIVE PRODUCTS CON LEFT JOIN PARA TRAER TODO
                INNER JOIN cardinal.objective_products ON cardinal.objectives.id = cardinal.objective_products.objective_id
                AND (cardinal.activities.product_id = cardinal.objective_products.id 
                        OR cardinal.activities.product_id = cardinal.objective_products.product_id)
                INNER JOIN cardinal.projects ON cardinal.objectives.project_id = cardinal.projects.id
                INNER JOIN cardinal.programs ON cardinal.projects.program_id = cardinal.programs.id
                INNER JOIN cardinal.strategic_lines ON cardinal.programs.strategic_line_id = cardinal.strategic_lines.id
                LEFT JOIN cardinal.activity_sources ON cardinal.activities.id = cardinal.activity_sources.activity_id
                LEFT JOIN cardinal.evidence_financial on cardinal.activity_sources.id = cardinal.evidence_financial.activity_source_id
                LEFT JOIN cardinal.financial_plans ON cardinal.activity_sources.source_id=cardinal.financial_plans.id 
                LEFT JOIN cardinal.financing_sources ON cardinal.financial_plans.source_id = cardinal.financing_sources.id
                LEFT JOIN cardinal.domains ON cardinal.financing_sources.type_id = cardinal.domains.id		 
                WHERE cardinal.strategic_lines.p_a_i_id=p_paid 
                AND cardinal.financial_plans.year=p_year AND cardinal.domains.father_id = 21
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
                res.car_program, res.proj_id, res.program_id, res.proj_name , res.st_lin_id, res.strat_name, res.p_a_i_id, res.parent_id,res.group_id,res.id_prod_obj,res.prod_name
                order by res.st_lin_id,res.program_id,res.project_id,res.obj_id,res.id_prod_obj,res.act_id;
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
                DECLARE   grupo  bigint := 0;
                DECLARE cons_fid integer := 0;
                DECLARE cons_ffid integer := 0;
                DECLARE cons_fcode character varying;
                DECLARE cons_fgid integer := 0;
                DECLARE cons_fidfc integer := 0;
                DECLARE cons_fvalue_bugeted double precision DEFAULT 0;
                DECLARE cons_fvalue_comitted double precision DEFAULT 0;
                DECLARE cons_nation_bugeted double precision DEFAULT 0;
                DECLARE cons_nation_comitted double precision DEFAULT 0;
                DECLARE cons_nation_oblig double precision DEFAULT 0;
                DECLARE cons_nation_pagos double precision DEFAULT 0;
                DECLARE cons_roy_bugeted double precision DEFAULT 0;
                DECLARE cons_roy_comitted double precision DEFAULT 0;
                DECLARE cons_roy_oblig double precision DEFAULT 0;
                DECLARE cons_roy_pagos double precision DEFAULT 0;
                DECLARE cons_fca_bugeted double precision DEFAULT 0;
                DECLARE cons_fca_comitted double precision DEFAULT 0;
                DECLARE cons_fca_oblig double precision DEFAULT 0;
                DECLARE cons_fca_pagos double precision DEFAULT 0;
                DECLARE cons_fvalue_required double precision DEFAULT 0;
                DECLARE cons_fvalue_paid double precision DEFAULT 0;
                DECLARE cons_compromisos double precision DEFAULT 0;
                DECLARE cons_oblig_propio double precision DEFAULT 0;
                DECLARE cons_oblig_nacion double precision DEFAULT 0;
                DECLARE cons_oblig_regalias double precision DEFAULT 0;
                DECLARE cons_oblig_fca double precision DEFAULT 0;
                DECLARE cons_pagos_propio double precision DEFAULT 0;
                DECLARE cons_pagos_nacion double precision DEFAULT 0;
                DECLARE cons_pagos_regalias double precision DEFAULT 0;
                DECLARE cons_pagos_fca double precision DEFAULT 0;
                DECLARE cons_ffund_value double precision DEFAULT 0;
                DECLARE cons_frecaudo double precision DEFAULT 0;
                DECLARE len_code integer := 0;
                DECLARE up_code character varying;
                DECLARE id_code integer := 0;
                
                DECLARE cons2_id integer := 0;
                DECLARE cons2_value double precision DEFAULT 0;
                begin
                --DROP TABLE temp_table_inv;
                CREATE TEMP TABLE IF NOT EXISTS temp_table_inv AS
                select 
                CAST(0 as double precision) as id_lin,
                CAST(0 as double precision) as id_act,
                act.id as id,
                CAST(0 as double precision) as id_prod,
                CAST(0 as double precision) as id_obj,
                CAST(0 as double precision) as id_prog,
                CAST(0 as double precision) as id_proy,
                
                CAST(NULL as character varying) as name,
                CAST(0 as bigint) as grupo_pai,
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
                    fetch cur_codes into cons_1,cons_3,	cons_4,	cons_2,	cons_7,	cons_8,	cons_9,	cons_12,
                    cons_13,cons_14,cons_15,cons_16,cons_17,cons_18,cons_19,cons_20,cons_21,cons_67,cons_22,cons_26,
                    cons_53,cons_54,cons_69,cons_70,cons_73,cons_72,cons_61,cons_62,cons_63,cons_64,cons_65,cons_66;
                    -- exit when no more row to fetch
                    exit when not found;
                
                    --se agrega la línea estratégica
                --	id_evi_fin_tmp := (select count(temp_table_inv.id) from temp_table_inv where temp_table_inv.id_evi_fin=cons_25);
                    id_code := (select count(temp_table_inv.id) from temp_table_inv where temp_table_inv.id_lin=cons_16 and temp_table_inv.level=1);
                    id_prog_tmp :=(select count(temp_table_inv.id) from temp_table_inv where temp_table_inv.id_prog=cons_9 and temp_table_inv.level=2);
                    id_proy_tmp :=(select count(temp_table_inv.id) from temp_table_inv where temp_table_inv.id_proy=cons_13 and temp_table_inv.level=3);
                    id_obj_tmp := (select count(temp_table_inv.id) from temp_table_inv where temp_table_inv.id_obj=cons_2
                                --AND temp_table_inv.id_prod=cons_3
                                and temp_table_inv.level=4);
                    id_prod_tmp := (select count(temp_table_inv.id) from temp_table_inv where temp_table_inv.id_prod=cons_69--cons_3 
                                    and temp_table_inv.id_obj=cons_2   
                                    and temp_table_inv.level=5);
                    id_act_tmp := (select count(temp_table_inv.id) from temp_table_inv where temp_table_inv.id_act=cons_1 and temp_table_inv.level=6 );
                    
                    obj_prod_tmp := (select count(temp_table_inv.id) from temp_table_inv where temp_table_inv.id_prod=cons_3 
                                    and temp_table_inv.id_obj=cons_2   
                                    and temp_table_inv.level=5);
                    --se calculan las obligaciones para los recursos propios
                    cons_oblig_propio:=(SELECT sum(value)
                                    FROM  cardinal.payments
                                    WHERE evidence_id
                                    IN (SELECT distinct
                                    ea.id
                                    FROM
                                    cardinal.activities act
                                    INNER JOIN cardinal.activity_sources actsc ON act.id = actsc.activity_id
                                    INNER JOIN cardinal.financial_plans fp ON actsc.source_id = fp.id
                                    INNER JOIN cardinal.financing_sources fs ON fp.source_id = fs.id
                                    INNER JOIN cardinal.evidence_advance ea ON act.id = ea.activity_id
                                    INNER JOIN cardinal.evidence_financial ef ON ea.id = ef.evidence_id
                                    WHERE ea.activity_id = cons_1
                                    AND fs.type_id = 22--recursos propios
                                    AND ea.year=p_year)
                            );
                    IF cons_oblig_propio is NULL THEN
                        cons_oblig_propio:=0;
                    END IF;
                    --se calculan las obligaciones para los recursos nacion
                    cons_oblig_nacion:=(SELECT sum(value)
                                    FROM  cardinal.payments
                                    WHERE evidence_id
                                    IN (SELECT distinct
                                    ea.id
                                    FROM
                                    cardinal.activities act
                                    INNER JOIN cardinal.activity_sources actsc ON act.id = actsc.activity_id
                                    INNER JOIN cardinal.financial_plans fp ON actsc.source_id = fp.id
                                    INNER JOIN cardinal.financing_sources fs ON fp.source_id = fs.id
                                    INNER JOIN cardinal.evidence_advance ea ON act.id = ea.activity_id
                                    INNER JOIN cardinal.evidence_financial ef ON ea.id = ef.evidence_id
                                    WHERE ea.activity_id = cons_1
                                    AND fs.type_id = 23--recursos nacion
                                    AND ea.year=p_year)
                            );
                    IF cons_oblig_nacion is NULL THEN
                        cons_oblig_nacion:=0;
                    END IF;
                    --se calculan las obligaciones para los recursos regalías
                    cons_oblig_regalias:=(SELECT sum(value)
                                    FROM  cardinal.payments
                                    WHERE evidence_id
                                    IN (SELECT distinct
                                    ea.id
                                    FROM
                                    cardinal.activities act
                                    INNER JOIN cardinal.activity_sources actsc ON act.id = actsc.activity_id
                                    INNER JOIN cardinal.financial_plans fp ON actsc.source_id = fp.id
                                    INNER JOIN cardinal.financing_sources fs ON fp.source_id = fs.id
                                    INNER JOIN cardinal.evidence_advance ea ON act.id = ea.activity_id
                                    INNER JOIN cardinal.evidence_financial ef ON ea.id = ef.evidence_id
                                    WHERE ea.activity_id = cons_1
                                    AND fs.type_id = 24--recursos regalias
                                    AND ea.year=p_year)
                            );
                    IF cons_oblig_regalias is NULL THEN
                        cons_oblig_regalias:=0;
                    END IF;
                    --se calculan las obligaciones para los recursos fca
                    cons_oblig_fca:=(SELECT sum(value)
                                    FROM  cardinal.payments
                                    WHERE evidence_id
                                    IN (SELECT distinct
                                    ea.id
                                    FROM
                                    cardinal.activities act
                                    INNER JOIN cardinal.activity_sources actsc ON act.id = actsc.activity_id
                                    INNER JOIN cardinal.financial_plans fp ON actsc.source_id = fp.id
                                    INNER JOIN cardinal.financing_sources fs ON fp.source_id = fs.id
                                    INNER JOIN cardinal.evidence_advance ea ON act.id = ea.activity_id
                                    INNER JOIN cardinal.evidence_financial ef ON ea.id = ef.evidence_id
                                    WHERE ea.activity_id = cons_1
                                    AND fs.type_id = 25--recursos fca
                                    AND ea.year=p_year)
                            );
                    IF cons_oblig_fca is NULL THEN
                        cons_oblig_fca:=0;
                    END IF;
                    --se calculan los pagos para los recursos propios
                    cons_pagos_propio:=(SELECT sum(value)
                                    FROM  cardinal.payments
                                    WHERE evidence_id
                                    IN (SELECT distinct
                                    ea.id
                                    FROM
                                    cardinal.activities act
                                    INNER JOIN cardinal.activity_sources actsc ON act.id = actsc.activity_id
                                    INNER JOIN cardinal.financial_plans fp ON actsc.source_id = fp.id
                                    INNER JOIN cardinal.financing_sources fs ON fp.source_id = fs.id
                                    INNER JOIN cardinal.evidence_advance ea ON act.id = ea.activity_id
                                    INNER JOIN cardinal.evidence_financial ef ON ea.id = ef.evidence_id
                                    WHERE ea.activity_id = cons_1
                                    AND fs.type_id = 22--recursos propios
                                    AND ea.year=p_year)
                                    AND payment=True
                                    );
                    IF cons_pagos_propio is NULL THEN
                        cons_pagos_propio:=0;
                    END IF;
                    --se calculan los pagos para los recursos nacion
                    cons_pagos_nacion:=(SELECT sum(value)
                                    FROM  cardinal.payments
                                    WHERE evidence_id
                                    IN (SELECT distinct
                                    ea.id
                                    FROM
                                    cardinal.activities act
                                    INNER JOIN cardinal.activity_sources actsc ON act.id = actsc.activity_id
                                    INNER JOIN cardinal.financial_plans fp ON actsc.source_id = fp.id
                                    INNER JOIN cardinal.financing_sources fs ON fp.source_id = fs.id
                                    INNER JOIN cardinal.evidence_advance ea ON act.id = ea.activity_id
                                    INNER JOIN cardinal.evidence_financial ef ON ea.id = ef.evidence_id
                                    WHERE ea.activity_id = cons_1
                                    AND fs.type_id = 23--recursos nacion
                                    AND ea.year=p_year)
                                    AND payment=True
                                    );
                    IF cons_pagos_nacion is NULL THEN
                        cons_pagos_nacion:=0;
                    END IF;
                    --se calculan los pagos para los recursos regalias
                    cons_pagos_regalias:=(SELECT sum(value)
                                    FROM  cardinal.payments
                                    WHERE evidence_id
                                    IN (SELECT distinct
                                    ea.id
                                    FROM
                                    cardinal.activities act
                                    INNER JOIN cardinal.activity_sources actsc ON act.id = actsc.activity_id
                                    INNER JOIN cardinal.financial_plans fp ON actsc.source_id = fp.id
                                    INNER JOIN cardinal.financing_sources fs ON fp.source_id = fs.id
                                    INNER JOIN cardinal.evidence_advance ea ON act.id = ea.activity_id
                                    INNER JOIN cardinal.evidence_financial ef ON ea.id = ef.evidence_id
                                    WHERE ea.activity_id = cons_1
                                    AND fs.type_id = 24--recursos regalias
                                    AND ea.year=p_year)
                                    AND payment=True
                                    );
                    IF cons_pagos_regalias is NULL THEN
                        cons_pagos_regalias:=0;
                    END IF;
                    --se calculan los pagos para los recursos fca
                    cons_pagos_fca:=(SELECT sum(value)
                                    FROM  cardinal.payments
                                    WHERE evidence_id
                                    IN (SELECT distinct
                                    ea.id
                                    FROM
                                    cardinal.activities act
                                    INNER JOIN cardinal.activity_sources actsc ON act.id = actsc.activity_id
                                    INNER JOIN cardinal.financial_plans fp ON actsc.source_id = fp.id
                                    INNER JOIN cardinal.financing_sources fs ON fp.source_id = fs.id
                                    INNER JOIN cardinal.evidence_advance ea ON act.id = ea.activity_id
                                    INNER JOIN cardinal.evidence_financial ef ON ea.id = ef.evidence_id
                                    WHERE ea.activity_id = cons_1
                                    AND fs.type_id = 25--recursos fca
                                    AND ea.year=p_year)
                                    AND payment=True
                                    );
                    IF cons_pagos_fca is NULL THEN
                        cons_pagos_fca:=0;
                    END IF;
                    IF cons_26 is NULL THEN 
                    cons_26:= 0;
                    END IF; 
                    IF cons_66 is NULL THEN
                    cons_66:=0;
                    END IF;
                    
                    IF cons_72 is NULL THEN
                    cons_72:= (select cardinal.domains.name FROM cardinal.domains where cardinal.domains.id=cons_3);
                    END IF;
                    /*IF cons_38 THEN
                    cons_pago:=cons_37; 
                    cons_oblig:=0;
                    ELSE
                    cons_pago:=0; 
                    cons_oblig:=cons_37;
                    END IF;*/
                    --se establece el nivel del grupo
                    grupo := grupo +1;
                    -- se agrega la línea
                    /*IF id_code=0 THEN
                        index_tmp := index_tmp+1;
                        INSERT INTO temp_table_inv(id_lin,id_act,id,id_prod,id_obj,id_prog,id_proy, name, grupo_pai, level,
                                                    presupuestado, comprometido, obligaciones, pagos,pre_nation,com_nation,obl_nation,pag_nation,
                                                    pre_roy,com_roy,obl_roy,pag_roy,pre_fca,com_fca,obl_fca,pag_fca)
                        VALUES (cons_16,cons_1,index_tmp,cons_69,cons_2,cons_14,cons_13,cons_17,grupo,1,cons_22,cons_26,cons_oblig_propio,cons_pagos_propio,
                                cons_61,cons_62,cons_oblig_nacion,cons_pagos_nacion,
                                cons_63,cons_64,cons_oblig_regalias,cons_pagos_regalias,
                                cons_65,cons_66,cons_oblig_fca,cons_pagos_fca);
                    ELSEIF id_act_tmp= 0 THEN
                        select t.comprometido, t.presupuestado,t.obligaciones,t.pagos,t.com_nation,t.pre_nation,t.obl_nation,t.pag_nation,
                        t.com_roy,t.pre_roy,t.obl_roy,t.pag_roy,t.com_fca,t.pre_fca,t.obl_fca,t.pag_fca
                        into cons_fvalue_comitted, cons_fvalue_bugeted,cons_oblig,cons_pago,cons_nation_comitted,cons_nation_bugeted,cons_nation_oblig,cons_nation_pagos
                        cons_roy_comitted,cons_roy_bugeted,cons_roy_oblig,cons_roy_pagos,cons_fca_comitted,cons_fca_bugeted,cons_fca_oblig,cons_fca_pagos
                        from temp_table_inv t where t.id_lin=cons_16 and t.level=1 Limit 1;
                        --actualiza la tabla temporal
                        update temp_table_inv 
                        set presupuestado=(cons_fvalue_bugeted + cons_22), comprometido= (cons_fvalue_comitted+ cons_26),
                        pagos=(cons_pago+cons_pagos_propio), obligaciones=(cons_oblig + cons_oblig_propio),
                        pre_nation=(cons_nation_bugeted + cons_61), com_nation=(cons_nation_comitted + cons_62),
                        obl_nation=(cons_nation_oblig + cons_oblig_nacion), pag_nation=(cons_nation_pagos + cons_pagos_nacion),
                        pre_roy=(cons_roy_bugeted + cons_63),com_roy=(cons_roy_comitted  + cons_64),
                        obl_roy=(cons_roy_oblig + cons_oblig_regalias),pag_roy=(cons_roy_pagos  + cons_pagos_regalias),
                        pre_fca=(cons_fca_bugeted + cons_65),com_fca=(cons_fca_comitted  + cons_66),
                        obl_fca=(cons_fca_oblig + cons_oblig_fca),pag_fca=(cons_fca_pagos  + cons_pagos_fca)
                        where temp_table_inv.id_lin=cons_16 and temp_table_inv.level=1;
                    ELSE
                        cons_fvalue_comitted := (select temp_table_inv.comprometido from temp_table_inv where temp_table_inv.id_lin=cons_16 and temp_table_inv.level=1 Limit 1); 
                        cons_nation_comitted := (select temp_table_inv.com_nation from temp_table_inv where temp_table_inv.id_lin=cons_16 and temp_table_inv.level=1 Limit 1); 
                        cons_roy_comitted := (select temp_table_inv.com_roy from temp_table_inv where temp_table_inv.id_lin=cons_16 and temp_table_inv.level=1 Limit 1);	
                        cons_fca_comitted := (select temp_table_inv.com_fca from temp_table_inv where temp_table_inv.id_lin=cons_16 and temp_table_inv.level=1 Limit 1); 
                        cons_oblig:=(select temp_table_inv.obligaciones from temp_table_inv where temp_table_inv.id_lin=cons_16 and temp_table_inv.level=1 Limit 1); 
                        cons_nation_oblig:=(select temp_table_inv.obl_nation from temp_table_inv where temp_table_inv.id_lin=cons_16 and temp_table_inv.level=1 Limit 1);
                        cons_roy_oblig:=(select temp_table_inv.obl_roy from temp_table_inv where temp_table_inv.id_lin=cons_16 and temp_table_inv.level=1 Limit 1);
                        cons_fca_oblig:=(select temp_table_inv.obl_fca from temp_table_inv where temp_table_inv.id_lin=cons_16 and temp_table_inv.level=1 Limit 1);
                        cons_pago:= (select temp_table_inv.pagos from temp_table_inv where temp_table_inv.id_lin=cons_16 and temp_table_inv.level=1 Limit 1); 
                        cons_nation_pagos:= (select temp_table_inv.pag_nation from temp_table_inv where temp_table_inv.id_lin=cons_16 and temp_table_inv.level=1 Limit 1);
                        cons_roy_pagos:= (select temp_table_inv.pag_roy from temp_table_inv where temp_table_inv.id_lin=cons_16 and temp_table_inv.level=1 Limit 1);
                        cons_fca_pagos:= (select temp_table_inv.pag_fca from temp_table_inv where temp_table_inv.id_lin=cons_16 and temp_table_inv.level=1 Limit 1);
                        --se actualiza la tabla temporal con los nuevos valores de los compromisos, obligaciones y pagos
                        --para los recursos propios, nación, regalías y fca
                        update temp_table_inv 
                        set  comprometido= (cons_fvalue_comitted+ cons_26),com_nation=(cons_nation_comitted + cons_62),
                        com_roy=(cons_roy_comitted  + cons_64),com_fca=(cons_fca_comitted  + cons_66),
                        obligaciones=(cons_oblig + cons_oblig_propio),obl_nation=(cons_nation_oblig + cons_oblig_nacion),
                        obl_roy=(cons_roy_oblig + cons_oblig_regalias),obl_fca=(cons_fca_oblig + cons_oblig_fca),
                        pagos=(cons_pago+cons_pagos_propio),pag_nation=(cons_nation_pagos + cons_pagos_nacion),
                        pag_roy=(cons_roy_pagos  + cons_pagos_regalias),pag_fca=(cons_fca_pagos  + cons_pagos_fca)
                        where temp_table_inv.id_lin=cons_16 and temp_table_inv.level=1;
                    END IF; 
                    -- se agrega el programa
                    IF id_prog_tmp=0 THEN
                        index_tmp := index_tmp+1;
                        INSERT INTO temp_table_inv(id_lin,id_act,id,id_prod,id_obj,id_prog,id_proy,name,grupo_pai,level, presupuestado, comprometido, obligaciones, pagos,pre_nation,com_nation,pre_roy,com_roy,pre_fca,com_fca)VALUES 
                        (cons_16,cons_1,index_tmp,cons_69,cons_2,cons_14,cons_13, cons_12,grupo,2,cons_22,cons_26,cons_oblig_propio,cons_pagos_propio,cons_61,cons_62,cons_63,cons_64,cons_65,cons_66 );
                        ELSEIF id_act_tmp= 0 THEN
                        select t.comprometido, t.presupuestado, t.com_nation,t.pre_nation, t.com_roy, t.pre_roy, t.com_fca, t.pre_fca, t.pagos, t.obligaciones
                        into cons_fvalue_comitted, cons_fvalue_bugeted, cons_nation_comitted, cons_nation_bugeted, cons_roy_comitted,
                        cons_roy_bugeted, cons_fca_comitted, cons_fca_bugeted,cons_pago, cons_oblig
                        from temp_table_inv t where t.id_prog=cons_9 and t.level=2 Limit 1;

                        update temp_table_inv set presupuestado=(cons_fvalue_bugeted + cons_22), comprometido= ( cons_fvalue_comitted+ cons_26),
                        pagos=(cons_pago+cons_pagos_propio), obligaciones=(cons_oblig + cons_oblig_propio),
                        pre_nation=(cons_nation_bugeted + cons_61),com_nation=(cons_nation_comitted + cons_62),
                        pre_roy=(cons_roy_bugeted + cons_63),com_roy=(cons_roy_comitted  + cons_64),
                        pre_fca=(cons_fca_bugeted + cons_65),com_fca=(cons_fca_comitted  + cons_66)
                        where temp_table_inv.id_prog=cons_9 and temp_table_inv.level=2 ;
                    ELSE
                        cons_fvalue_comitted := (select temp_table_inv.comprometido from temp_table_inv where temp_table_inv.id_prog=cons_9 and temp_table_inv.level=2 Limit 1); 
                        cons_nation_comitted := (select temp_table_inv.com_nation from temp_table_inv where temp_table_inv.id_prog=cons_9 and temp_table_inv.level=2 Limit 1); 
                        cons_roy_comitted := (select temp_table_inv.com_roy from temp_table_inv where temp_table_inv.id_prog=cons_9 and temp_table_inv.level=2 Limit 1);
                        cons_fca_comitted := (select temp_table_inv.com_fca from temp_table_inv where temp_table_inv.id_prog=cons_9 and temp_table_inv.level=2 Limit 1); 
                        cons_pago:= (select temp_table_inv.pagos from temp_table_inv where temp_table_inv.id_prog=cons_9 and temp_table_inv.level=2 Limit 1); 
                        cons_oblig:=(select temp_table_inv.obligaciones from temp_table_inv where temp_table_inv.id_prog=cons_9 and temp_table_inv.level=2 Limit 1); 

                        update temp_table_inv set comprometido= ( cons_fvalue_comitted+ cons_26),com_nation=(cons_nation_comitted + cons_62),
                        pagos=(cons_pago+cons_pagos_propio), obligaciones=(cons_oblig + cons_oblig_propio),		
                        pre_roy=(cons_roy_bugeted + cons_63),com_roy=(cons_roy_comitted  + cons_64),
                        pre_fca=(cons_fca_bugeted + cons_65),com_fca=(cons_fca_comitted  + cons_66)
                        where temp_table_inv.id_prog=cons_9 and temp_table_inv.level=2 ;
                    END IF;
                    -- se agrega el proyecto
                    IF id_proy_tmp=0 THEN
                        index_tmp := index_tmp+1;
                        INSERT INTO temp_table_inv(id_lin,id_act,id,id_prod,id_obj,id_prog,id_proy, name,grupo_pai,level, presupuestado, comprometido, obligaciones, pagos,pre_nation,com_nation,pre_roy,com_roy,pre_fca,com_fca)VALUES 
                        (cons_16,cons_1,index_tmp,cons_69,cons_2,cons_14,cons_13, cons_15,grupo,3,cons_22,cons_26,cons_oblig_propio,cons_pagos_propio,cons_61,cons_62,cons_63,cons_64,cons_65,cons_66 );
                        ELSEIF id_act_tmp= 0 THEN
                        select t.comprometido, t.presupuestado, t.com_nation,t.pre_nation, t.com_roy, t.pre_roy, t.com_fca, t.pre_fca, t.pagos, t.obligaciones
                        into cons_fvalue_comitted, cons_fvalue_bugeted, cons_nation_comitted, cons_nation_bugeted, cons_roy_comitted,
                        cons_roy_bugeted, cons_fca_comitted, cons_fca_bugeted,cons_pago, cons_oblig
                        from temp_table_inv t where t.id_proy=cons_7 and t.level=3 Limit 1;

                        update temp_table_inv set presupuestado=(cons_fvalue_bugeted + cons_22), comprometido= (cons_fvalue_comitted+cons_26),
                        pagos=(cons_pago+cons_pagos_propio), obligaciones=(cons_oblig + cons_oblig_propio),
                        pre_nation=(cons_nation_bugeted + cons_61),com_nation=(cons_nation_comitted + cons_62),
                        pre_roy=(cons_roy_bugeted + cons_63),com_roy=(cons_roy_comitted  + cons_64),
                        pre_fca=(cons_fca_bugeted + cons_65),com_fca=(cons_fca_comitted  + cons_66)
                        where temp_table_inv.id_proy=cons_7 and temp_table_inv.level=3 ;
                    ELSE
                        cons_fvalue_comitted := (select temp_table_inv.comprometido from temp_table_inv where temp_table_inv.id_proy=cons_7 and temp_table_inv.level=3 Limit 1);
                        cons_nation_comitted := (select temp_table_inv.com_nation from temp_table_inv where temp_table_inv.id_proy=cons_7 and temp_table_inv.level=3 Limit 1); 
                        cons_roy_comitted := (select temp_table_inv.com_roy from temp_table_inv where temp_table_inv.id_proy=cons_7 and temp_table_inv.level=3 Limit 1); 
                        cons_fca_comitted := (select temp_table_inv.com_fca from temp_table_inv where temp_table_inv.id_proy=cons_7 and temp_table_inv.level=3 Limit 1); 
                        cons_pago:= (select temp_table_inv.pagos from temp_table_inv where temp_table_inv.id_proy=cons_7 and temp_table_inv.level=3 Limit 1); 
                        cons_oblig:=(select temp_table_inv.obligaciones from temp_table_inv where temp_table_inv.id_proy=cons_7 and temp_table_inv.level=3 Limit 1); 

                        update temp_table_inv set comprometido= (cons_fvalue_comitted+cons_26),com_nation=(cons_nation_comitted + cons_62),
                            pagos=(cons_pago+cons_pagos_propio), obligaciones=(cons_oblig + cons_oblig_propio),
                        pre_roy=(cons_roy_bugeted + cons_63),com_roy=(cons_roy_comitted  + cons_64),
                        pre_fca=(cons_fca_bugeted + cons_65),com_fca=(cons_fca_comitted  + cons_66)
                        where temp_table_inv.id_proy=cons_7 and temp_table_inv.level=3 ;
                    END IF;
                    -- se agrega el objetivo
                    IF id_obj_tmp=0 THEN
                        index_tmp := index_tmp+1;
                        INSERT INTO temp_table_inv(id_lin,id_act,id,id_prod,id_obj,id_prog,id_proy,name,grupo_pai,level,presupuestado, comprometido, obligaciones, pagos,pre_nation,com_nation,pre_roy,com_roy,pre_fca,com_fca)VALUES 
                        (cons_16,cons_1,index_tmp,cons_69,cons_2,cons_14,cons_13,'OBJETIVO: ' || cons_8,grupo,4,cons_22,cons_26,cons_oblig_propio,cons_pagos_propio,cons_61,cons_62,cons_63,cons_64,cons_65,cons_66);
                        ELSEIF id_act_tmp= 0 THEN
                        select t.comprometido, t.presupuestado, t.com_nation,t.pre_nation, t.com_roy, t.pre_roy, t.com_fca, t.pre_fca, t.pagos, t.obligaciones
                        into cons_fvalue_comitted, cons_fvalue_bugeted, cons_nation_comitted, cons_nation_bugeted, cons_roy_comitted,
                        cons_roy_bugeted, cons_fca_comitted, cons_fca_bugeted,cons_pago, cons_oblig
                        from temp_table_inv t where t.id_obj=cons_2 and t.level=4 Limit 1;

                        update temp_table_inv set presupuestado=(cons_fvalue_bugeted + cons_22), comprometido= (cons_fvalue_comitted + cons_26),
                        pagos=(cons_pago+cons_pagos_propio), obligaciones=(cons_oblig + cons_oblig_propio),
                        pre_nation=(cons_nation_bugeted + cons_61),com_nation=(cons_nation_comitted + cons_62),
                        pre_roy=(cons_roy_bugeted + cons_63),com_roy=(cons_roy_comitted  + cons_64),
                        pre_fca=(cons_fca_bugeted + cons_65),com_fca=(cons_fca_comitted  + cons_66)
                        where temp_table_inv.id_obj=cons_2  and temp_table_inv.level=4 ;
                    ELSE
                        cons_fvalue_comitted := (select temp_table_inv.comprometido from temp_table_inv where temp_table_inv.id_obj=cons_2  and temp_table_inv.level=4 Limit 1);
                        cons_nation_comitted := (select temp_table_inv.com_nation from temp_table_inv where temp_table_inv.id_obj=cons_2 and temp_table_inv.level=4 Limit 1); 
                        cons_roy_comitted := (select temp_table_inv.com_roy from temp_table_inv where temp_table_inv.id_obj=cons_2 and temp_table_inv.level=4 Limit 1); 
                        cons_fca_comitted := (select temp_table_inv.com_fca from temp_table_inv where temp_table_inv.id_obj=cons_2 and temp_table_inv.level=4 Limit 1); 
                        cons_pago:= (select temp_table_inv.pagos from temp_table_inv where temp_table_inv.id_obj=cons_2 and temp_table_inv.level=4 Limit 1); 
                        cons_oblig:=(select temp_table_inv.obligaciones from temp_table_inv where temp_table_inv.id_obj=cons_2 and temp_table_inv.level=4 Limit 1);  

                        update temp_table_inv set comprometido= (cons_fvalue_comitted + cons_26), comprometido= (cons_fvalue_comitted + cons_26),
                        pagos=(cons_pago+cons_pagos_propio), obligaciones=(cons_oblig + cons_oblig_propio),
                        pre_nation=(cons_nation_bugeted + cons_61),com_nation=(cons_nation_comitted + cons_62),
                        pre_roy=(cons_roy_bugeted + cons_63),com_roy=(cons_roy_comitted  + cons_64),
                        pre_fca=(cons_fca_bugeted + cons_65),com_fca=(cons_fca_comitted  + cons_66)
                        where temp_table_inv.id_obj=cons_2 and temp_table_inv.level=4 ;
                    END IF;
                    -- se agrega el producto
                    IF id_prod_tmp=0 THEN
                        index_tmp := index_tmp+1;
                        INSERT INTO temp_table_inv(id_lin,id_act,id,id_prod,id_obj,id_prog,id_proy,name,grupo_pai,level,presupuestado, comprometido, obligaciones, pagos,pre_nation,com_nation,pre_roy,com_roy,pre_fca,com_fca)
                        VALUES 
                        (cons_16,cons_1,index_tmp,cons_69,cons_2,cons_14,cons_13, 'PRODUCTO: ' || cons_72,grupo,5,cons_22,cons_26,cons_oblig_propio,cons_pagos_propio,cons_61,cons_62,cons_63,cons_64,cons_65,cons_66);
                    ELSEIF id_act_tmp=0 THEN
                        select t.comprometido, t.presupuestado, t.com_nation,t.pre_nation, t.com_roy, t.pre_roy, t.com_fca, t.pre_fca, t.pagos, t.obligaciones
                        into cons_fvalue_comitted, cons_fvalue_bugeted, cons_nation_comitted, cons_nation_bugeted, cons_roy_comitted,
                        cons_roy_bugeted, cons_fca_comitted, cons_fca_bugeted,cons_pago, cons_oblig
                        from temp_table_inv t where t.id_prod=cons_69 and t.level=5 Limit 1;
                        
                        update temp_table_inv set presupuestado=(cons_fvalue_bugeted + cons_22), comprometido= (cons_fvalue_comitted + cons_26),
                        pagos=(cons_pago+cons_pagos_propio), obligaciones=(cons_oblig + cons_oblig_propio),
                        pre_nation=(cons_nation_bugeted + cons_61),com_nation=(cons_nation_comitted + cons_62),
                        pre_roy=(cons_roy_bugeted + cons_63),com_roy=(cons_roy_comitted  + cons_64),
                        pre_fca=(cons_fca_bugeted + cons_65),com_fca=(cons_fca_comitted  + cons_66)
                        where temp_table_inv.id_prod=cons_69  and temp_table_inv.level=5 ;
                    ELSE
                        cons_fvalue_comitted := (select temp_table_inv.comprometido from temp_table_inv where temp_table_inv.id_prod=cons_3  and temp_table_inv.level=5 Limit 1);
                        cons_nation_comitted := (select temp_table_inv.com_nation from temp_table_inv  where temp_table_inv.id_prod=cons_3 and temp_table_inv.level=5 Limit 1); 
                        cons_roy_comitted := (select temp_table_inv.com_roy from temp_table_inv  where temp_table_inv.id_prod=cons_3 and temp_table_inv.level=5 Limit 1); 
                        cons_fca_comitted := (select temp_table_inv.com_fca from temp_table_inv  where temp_table_inv.id_prod=cons_3 and temp_table_inv.level=5 Limit 1); 
                        cons_pago:= (select temp_table_inv.pagos from temp_table_inv  where temp_table_inv.id_prod=cons_3 and temp_table_inv.level=5 Limit 1); 
                        cons_oblig:=(select temp_table_inv.obligaciones from temp_table_inv  where temp_table_inv.id_prod=cons_3 and temp_table_inv.level=5 Limit 1);  		

                        update temp_table_inv set comprometido= (cons_fvalue_comitted + cons_26) ,
                        pagos=(cons_pago+cons_pagos_propio), obligaciones=(cons_oblig + cons_oblig_propio),		
                        pre_nation=(cons_nation_bugeted + cons_61),com_nation=(cons_nation_comitted + cons_62),
                        pre_roy=(cons_roy_bugeted + cons_63),com_roy=(cons_roy_comitted  + cons_64),
                        pre_fca=(cons_fca_bugeted + cons_65),com_fca=(cons_fca_comitted  + cons_66)
                        where temp_table_inv.id_prod=cons_69 and temp_table_inv.id_obj=cons_2 and temp_table_inv.level=5 ;	
                    END IF;*/
                    -- se agrega la actividad
                    IF id_act_tmp= 0 THEN
                        index_tmp := index_tmp+1;
                        --INSERT INTO temp_table_inv(id_lin,id_act,id,id_prod,id_obj,id_prog,id_proy, name,grupo_pai,level, presupuestado, comprometido, obligaciones, pagos,pre_nation,com_nation,pre_roy,com_roy,pre_fca,com_fca)
                        INSERT INTO temp_table_inv(id_lin,id_act,id,id_prod,id_obj,id_prog,id_proy, name,grupo_pai,level,
                                                        presupuestado, comprometido, obligaciones, pagos,pre_nation,com_nation,obl_nation,pag_nation,
                                                        pre_roy,com_roy,obl_roy,pag_roy,pre_fca,com_fca,obl_fca,pag_fca)
                        VALUES (cons_16,cons_1,index_tmp,cons_69,cons_2,cons_14,cons_13,cons_4,grupo,6,cons_22,cons_26,cons_oblig_propio,cons_pagos_propio,
                                cons_61,cons_62,cons_oblig_nacion,cons_pagos_nacion,cons_63,cons_64,cons_oblig_regalias,cons_pagos_regalias,
                                cons_65,cons_66,cons_oblig_fca,cons_pagos_fca);
                        -- cons_22 comprometido
                    ELSE
                        /*select t.comprometido, t.presupuestado, t.com_nation,t.pre_nation, t.com_roy, t.pre_roy, t.com_fca, t.pre_fca, t.pagos, t.obligaciones
                        into cons_fvalue_comitted, cons_fvalue_bugeted, cons_nation_comitted, cons_nation_bugeted, cons_roy_comitted,
                        cons_roy_bugeted, cons_fca_comitted, cons_fca_bugeted,cons_pago, cons_oblig
                        from temp_table_inv t where t.id_prod=cons_69 and t.level=5 Limit 1;*/
                        select t.comprometido, t.presupuestado,t.obligaciones,t.pagos,t.com_nation,t.pre_nation,t.obl_nation,t.pag_nation,
                        t.com_roy,t.pre_roy,t.obl_roy,t.pag_roy,t.com_fca,t.pre_fca,t.obl_fca,t.pag_fca
                        into cons_fvalue_comitted, cons_fvalue_bugeted,cons_oblig,cons_pago,cons_nation_comitted,cons_nation_bugeted,cons_nation_oblig,cons_nation_pagos
                        cons_roy_comitted,cons_roy_bugeted,cons_roy_oblig,cons_roy_pagos,cons_fca_comitted,cons_fca_bugeted,cons_fca_oblig,cons_fca_pagos
                        from temp_table_inv t where t.id_prod=cons_69 and t.level=5 Limit 1;
                        
                        update temp_table_inv set presupuestado=(cons_fvalue_bugeted + cons_22),comprometido= (cons_fvalue_comitted + cons_26),
                        pagos=(cons_pago+cons_pagos_propio), obligaciones=(cons_oblig + cons_oblig_propio),
                        pre_nation=(cons_nation_bugeted + cons_61),com_nation=(cons_nation_comitted + cons_62),
                        obl_nation=(cons_nation_oblig + cons_oblig_nacion), pag_nation=(cons_nation_pagos + cons_pagos_nacion),
                        pre_roy=(cons_roy_bugeted + cons_63),com_roy=(cons_roy_comitted  + cons_64),
                        obl_roy=(cons_roy_oblig + cons_oblig_regalias),pag_roy=(cons_roy_pagos  + cons_pagos_regalias),
                        pre_fca=(cons_fca_bugeted + cons_65),com_fca=(cons_fca_comitted  + cons_66),
                        obl_fca=(cons_fca_oblig + cons_oblig_fca),pag_fca=(cons_fca_pagos  + cons_pagos_fca)
                        where temp_table_inv.id_act=cons_1 and temp_table_inv.level=6;
                    END IF;
                end loop;
                
                -- close the cursor
                close cur_codes;
                RETURN QUERY 
                SELECT *
                from temp_table_inv; --where temp_table_inv.father_id=5;
                --   return titles;
                DROP TABLE temp_table_inv;
            END;
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
