<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedIedi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.iedi_den(
            p_pai_id bigint,
            abbreviated_ind character varying,
            abbreviated_den character varying)
            RETURNS TABLE(id character varying, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision, tot double precision) as $$
        declare
            reg Record;
            id integer;
            anio1 numeric;
            anio2 numeric;
            anio3 numeric;
            anio4 numeric;
            tot numeric = 0;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS iedi_den (
                id character varying,
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision,
                tot double precision
            );
        
            anio1 = (select
                        sum(denominator_table.denominator) as denominator
                    from (select 
                        activities.id as id,
                        activities.name as name,
                        variables.category_name as category,
                        variables.abbreviated_denominator,
                        a1.denominator as denominator
                    from activities
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join pais on pais.id = strategic_lines.p_a_i_id
                    inner join indicator_activities a1 on a1.activities_id = activities.id
                    inner join indicators on indicators.id = a1.indicator_id
                    inner join variables on variables.id = a1.variable_id
                    where
                        indicators.abbreviated_name like abbreviated_ind
                        and variables.abbreviated_numerator like abbreviated_den
                        and a1.year = 1
                        and strategic_lines.p_a_i_id = p_pai_id) as denominator_table);
            anio2 = (select
                        sum(denominator_table.denominator) as denominator
                    from (select 
                        activities.id as id,
                        activities.name as name,
                        variables.category_name as category,
                        variables.abbreviated_denominator,
                        a1.denominator as denominator
                    from activities
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join pais on pais.id = strategic_lines.p_a_i_id
                    inner join indicator_activities a1 on a1.activities_id = activities.id
                    inner join indicators on indicators.id = a1.indicator_id
                    inner join variables on variables.id = a1.variable_id
                    where
                        indicators.abbreviated_name like abbreviated_ind
                        and variables.abbreviated_numerator like abbreviated_den
                        and a1.year = 2
                        and strategic_lines.p_a_i_id = p_pai_id) as denominator_table);
            anio3 = (select
                        sum(denominator_table.denominator) as denominator
                    from (select 
                        activities.id as id,
                        activities.name as name,
                        variables.category_name as category,
                        variables.abbreviated_denominator,
                        a1.denominator as denominator
                    from activities
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join pais on pais.id = strategic_lines.p_a_i_id
                    inner join indicator_activities a1 on a1.activities_id = activities.id
                    inner join indicators on indicators.id = a1.indicator_id
                    inner join variables on variables.id = a1.variable_id
                    where
                        indicators.abbreviated_name like abbreviated_ind
                        and variables.abbreviated_numerator like abbreviated_den
                        and a1.year = 3
                        and strategic_lines.p_a_i_id = p_pai_id) as denominator_table);
            anio4 = (select
                        sum(denominator_table.denominator) as denominator
                    from (select 
                        activities.id as id,
                        activities.name as name,
                        variables.category_name as category,
                        variables.abbreviated_denominator,
                        a1.denominator as denominator
                    from activities
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join pais on pais.id = strategic_lines.p_a_i_id
                    inner join indicator_activities a1 on a1.activities_id = activities.id
                    inner join indicators on indicators.id = a1.indicator_id
                    inner join variables on variables.id = a1.variable_id
                    where
                        indicators.abbreviated_name like abbreviated_ind
                        and variables.abbreviated_numerator like abbreviated_den
                        and a1.year = 4
                        and strategic_lines.p_a_i_id = p_pai_id) as denominator_table);
            IF anio1 is null THEN
                anio1 = 0;
            END IF;
            IF anio2 is null THEN
                anio2 = 0;
            END IF;
            IF anio3 is null THEN
                anio3 = 0;
            END IF;
            IF anio4 is null THEN
                anio4 = 0;
            END IF;
            tot = anio1 + anio2 + anio3 + anio4;
            insert into iedi_den (
                id,
                anio1,
                anio2,
                anio3,
                anio4,
                tot
            ) VALUES (
                abbreviated_den,
                anio1,
                anio2,
                anio3,
                anio4,
                tot
            );
                
        RETURN QUERY 
        SELECT *
        from iedi_den; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE iedi_den;
        
        end;
        $$ language plpgsql;");
		
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.iedi_ingresos(
            p_pai_id bigint,
            type_ind character varying)
            RETURNS TABLE(anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision, tot double precision) as $$
        declare
            _anio1 double precision;
            _anio2 double precision;
            _anio3 double precision;
            _anio4 double precision;
            tot double precision;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS iedi_ingresos (
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision,
                tot double precision
            );
        
            _anio1 = (SELECT 
                            subtotal
                        from public.cursor_test(CAST(1 as integer),CAST(p_pai_id as integer)) 
                        WHERE
                            proyectado<>0
                            and name like type_ind
                        order by codigo);
            _anio2 = (SELECT 
                            subtotal
                        from public.cursor_test(CAST(2 as integer),CAST(p_pai_id as integer)) 
                        WHERE
                            proyectado<>0
                            and name like type_ind
                        order by codigo);
            _anio3 = (SELECT 
                            subtotal
                        from public.cursor_test(CAST(3 as integer),CAST(p_pai_id as integer)) 
                        WHERE
                            proyectado<>0
                            and name like type_ind
                        order by codigo);
            _anio4 = (SELECT 
                            subtotal
                        from public.cursor_test(CAST(4 as integer),CAST(p_pai_id as integer)) 
                        WHERE
                            proyectado<>0
                            and name like type_ind
                        order by codigo);
            IF _anio1 is null THEN
                _anio1 = 0;
            END IF;
            IF _anio2 is null THEN
                _anio2 = 0;
            END IF;
            IF _anio3 is null THEN
                _anio3 = 0;
            END IF;
            IF _anio4 is null THEN
                _anio4 = 0;
            END IF;
            tot = _anio1 + _anio2 + _anio3 + _anio4;
            insert into iedi_ingresos (
                anio1,
                anio2,
                anio3,
                anio4,
                tot
            ) VALUES (
                _anio1,
                _anio2,
                _anio3,
                _anio4,
                tot
            );
                
        RETURN QUERY 
        SELECT *
        from iedi_ingresos; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE iedi_ingresos;
        
        end;
        $$ language plpgsql;");
		
		
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.iedi_inversion(
            p_pai_id bigint,
            type_ind character varying)
            RETURNS TABLE(anio1 numeric, anio2 numeric, anio3 numeric, anio4 numeric, tot numeric) as $$
        declare
            _anio1 numeric;
            _anio2 numeric;
            _anio3 numeric;
            _anio4 numeric;
            tot numeric;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS iedi_inversion (
                anio1 numeric,
                anio2 numeric,
                anio3 numeric,
                anio4 numeric,
                tot numeric
            );
        
            IF type_ind = Presupuesto THEN
                _anio1 = (select
                                table_iedi_inversion.presupuestado + table_iedi_inversion.pre_nation + table_iedi_inversion.pre_roy + table_iedi_inversion.pre_fca as presupuesto
                            from (select sum(res.presupuestado) as presupuestado, sum(res.comprometido) as comprometido, sum(res.pre_nation) as pre_nation,
                            sum(res.com_nation) as com_nation, sum(res.pre_roy) as pre_roy, sum(res.com_roy) as com_roy, sum(res.pre_fca) as pre_fca, 
                            sum(res.com_fca) as com_fca,sum(res.pagos) as pagos,sum(res.obligaciones) as obligaciones
                            from (
                            SELECT  
                            presupuestado, comprometido, pre_nation,com_nation,pre_roy,com_roy,pre_fca,com_fca,pagos,obligaciones
                            from public.report_full_gastos_inv(CAST(1 as integer),CAST(p_pai_id as integer)
                            )
                            where level=1
                            ) as res) as table_iedi_inversion);
                _anio2 = (select
                                table_iedi_inversion.presupuestado + table_iedi_inversion.pre_nation + table_iedi_inversion.pre_roy + table_iedi_inversion.pre_fca as presupuesto
                            from (select sum(res.presupuestado) as presupuestado, sum(res.comprometido) as comprometido, sum(res.pre_nation) as pre_nation,
                            sum(res.com_nation) as com_nation, sum(res.pre_roy) as pre_roy, sum(res.com_roy) as com_roy, sum(res.pre_fca) as pre_fca, 
                            sum(res.com_fca) as com_fca,sum(res.pagos) as pagos,sum(res.obligaciones) as obligaciones
                            from (
                            SELECT  
                            presupuestado, comprometido, pre_nation,com_nation,pre_roy,com_roy,pre_fca,com_fca,pagos,obligaciones
                            from public.report_full_gastos_inv(CAST(2 as integer),CAST(p_pai_id as integer)
                            )
                            where level=1
                            ) as res) as table_iedi_inversion);
                _anio3 = (select
                                table_iedi_inversion.presupuestado + table_iedi_inversion.pre_nation + table_iedi_inversion.pre_roy + table_iedi_inversion.pre_fca as presupuesto
                            from (select sum(res.presupuestado) as presupuestado, sum(res.comprometido) as comprometido, sum(res.pre_nation) as pre_nation,
                            sum(res.com_nation) as com_nation, sum(res.pre_roy) as pre_roy, sum(res.com_roy) as com_roy, sum(res.pre_fca) as pre_fca, 
                            sum(res.com_fca) as com_fca,sum(res.pagos) as pagos,sum(res.obligaciones) as obligaciones
                            from (
                            SELECT  
                            presupuestado, comprometido, pre_nation,com_nation,pre_roy,com_roy,pre_fca,com_fca,pagos,obligaciones
                            from public.report_full_gastos_inv(CAST(3 as integer),CAST(p_pai_id as integer)
                            )
                            where level=1
                            ) as res) as table_iedi_inversion);
                _anio4 = (select
                                table_iedi_inversion.presupuestado + table_iedi_inversion.pre_nation + table_iedi_inversion.pre_roy + table_iedi_inversion.pre_fca as presupuesto
                            from (select sum(res.presupuestado) as presupuestado, sum(res.comprometido) as comprometido, sum(res.pre_nation) as pre_nation,
                            sum(res.com_nation) as com_nation, sum(res.pre_roy) as pre_roy, sum(res.com_roy) as com_roy, sum(res.pre_fca) as pre_fca, 
                            sum(res.com_fca) as com_fca,sum(res.pagos) as pagos,sum(res.obligaciones) as obligaciones
                            from (
                            SELECT  
                            presupuestado, comprometido, pre_nation,com_nation,pre_roy,com_roy,pre_fca,com_fca,pagos,obligaciones
                            from public.report_full_gastos_inv(CAST(4 as integer),CAST(p_pai_id as integer)
                            )
                            where level=1
                            ) as res) as table_iedi_inversion);
            ELSE
                _anio1 = (select
                                table_iedi_inversion.obligaciones as obligaciones
                            from (select sum(res.presupuestado) as presupuestado, sum(res.comprometido) as comprometido, sum(res.pre_nation) as pre_nation,
                            sum(res.com_nation) as com_nation, sum(res.pre_roy) as pre_roy, sum(res.com_roy) as com_roy, sum(res.pre_fca) as pre_fca, 
                            sum(res.com_fca) as com_fca,sum(res.pagos) as pagos,sum(res.obligaciones) as obligaciones
                            from (
                            SELECT  
                            presupuestado, comprometido, pre_nation,com_nation,pre_roy,com_roy,pre_fca,com_fca,pagos,obligaciones
                            from public.report_full_gastos_inv(CAST(1 as integer),CAST(p_pai_id as integer)
                            )
                            where level=1
                            ) as res) as table_iedi_inversion);
                _anio2 = (select
                                table_iedi_inversion.obligaciones as obligaciones
                            from (select sum(res.presupuestado) as presupuestado, sum(res.comprometido) as comprometido, sum(res.pre_nation) as pre_nation,
                            sum(res.com_nation) as com_nation, sum(res.pre_roy) as pre_roy, sum(res.com_roy) as com_roy, sum(res.pre_fca) as pre_fca, 
                            sum(res.com_fca) as com_fca,sum(res.pagos) as pagos,sum(res.obligaciones) as obligaciones
                            from (
                            SELECT  
                            presupuestado, comprometido, pre_nation,com_nation,pre_roy,com_roy,pre_fca,com_fca,pagos,obligaciones
                            from public.report_full_gastos_inv(CAST(2 as integer),CAST(p_pai_id as integer)
                            )
                            where level=1
                            ) as res) as table_iedi_inversion);
                _anio3 = (select
                                table_iedi_inversion.obligaciones as obligaciones
                            from (select sum(res.presupuestado) as presupuestado, sum(res.comprometido) as comprometido, sum(res.pre_nation) as pre_nation,
                            sum(res.com_nation) as com_nation, sum(res.pre_roy) as pre_roy, sum(res.com_roy) as com_roy, sum(res.pre_fca) as pre_fca, 
                            sum(res.com_fca) as com_fca,sum(res.pagos) as pagos,sum(res.obligaciones) as obligaciones
                            from (
                            SELECT  
                            presupuestado, comprometido, pre_nation,com_nation,pre_roy,com_roy,pre_fca,com_fca,pagos,obligaciones
                            from public.report_full_gastos_inv(CAST(3 as integer),CAST(p_pai_id as integer)
                            )
                            where level=1
                            ) as res) as table_iedi_inversion);
                _anio4 = (select
                                table_iedi_inversion.obligaciones as obligaciones
                            from (select sum(res.presupuestado) as presupuestado, sum(res.comprometido) as comprometido, sum(res.pre_nation) as pre_nation,
                            sum(res.com_nation) as com_nation, sum(res.pre_roy) as pre_roy, sum(res.com_roy) as com_roy, sum(res.pre_fca) as pre_fca, 
                            sum(res.com_fca) as com_fca,sum(res.pagos) as pagos,sum(res.obligaciones) as obligaciones
                            from (
                            SELECT  
                            presupuestado, comprometido, pre_nation,com_nation,pre_roy,com_roy,pre_fca,com_fca,pagos,obligaciones
                            from public.report_full_gastos_inv(CAST(4 as integer),CAST(p_pai_id as integer)
                            )
                            where level=1
                            ) as res) as table_iedi_inversion);
            END IF;
            IF _anio1 is null THEN
                _anio1 = 0;
            END IF;
            IF _anio2 is null THEN
                _anio2 = 0;
            END IF;
            IF _anio3 is null THEN
                _anio3 = 0;
            END IF;
            IF _anio4 is null THEN
                _anio4 = 0;
            END IF;
            tot = _anio1 + _anio2 + _anio3 + _anio4;
            insert into iedi_inversion (
                anio1,
                anio2,
                anio3,
                anio4,
                tot
            ) VALUES (
                _anio1,
                _anio2,
                _anio3,
                _anio4,
                tot
            );
                
        RETURN QUERY 
        SELECT *
        from iedi_inversion; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE iedi_inversion;
        
        end;
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.iedi_num(
            p_pai_id bigint,
            abbreviated_ind character varying,
            abbreviated_den character varying)
            RETURNS TABLE(id character varying, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision, tot double precision) as $$
        declare
            reg Record;
            id integer;
            anio1 numeric;
            anio2 numeric;
            anio3 numeric;
            anio4 numeric;
            tot numeric = 0;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS iedi_num (
                id character varying,
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision,
                tot double precision
            );
        
            anio1 = (select
                        sum(denominator_table.numerator) as numerator
                    from (select 
                        activities.id as id,
                        activities.name as name,
                        variables.category_name as category,
                        variables.abbreviated_denominator,
                        a1.numerator as numerator
                    from activities
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join pais on pais.id = strategic_lines.p_a_i_id
                    inner join indicator_activities a1 on a1.activities_id = activities.id
                    inner join indicators on indicators.id = a1.indicator_id
                    inner join variables on variables.id = a1.variable_id
                    where
                        indicators.abbreviated_name like abbreviated_ind
                        and variables.abbreviated_numerator like abbreviated_den
                        and a1.year = 1
                        and strategic_lines.p_a_i_id = p_pai_id) as denominator_table);
            anio2 = (select
                        sum(denominator_table.numerator) as numerator
                    from (select 
                        activities.id as id,
                        activities.name as name,
                        variables.category_name as category,
                        variables.abbreviated_denominator,
                        a1.numerator as numerator
                    from activities
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join pais on pais.id = strategic_lines.p_a_i_id
                    inner join indicator_activities a1 on a1.activities_id = activities.id
                    inner join indicators on indicators.id = a1.indicator_id
                    inner join variables on variables.id = a1.variable_id
                    where
                        indicators.abbreviated_name like abbreviated_ind
                        and variables.abbreviated_numerator like abbreviated_den
                        and a1.year = 2
                        and strategic_lines.p_a_i_id = p_pai_id) as denominator_table);
            anio3 = (select
                        sum(denominator_table.numerator) as numerator
                    from (select 
                        activities.id as id,
                        activities.name as name,
                        variables.category_name as category,
                        variables.abbreviated_denominator,
                        a1.numerator as numerator
                    from activities
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join pais on pais.id = strategic_lines.p_a_i_id
                    inner join indicator_activities a1 on a1.activities_id = activities.id
                    inner join indicators on indicators.id = a1.indicator_id
                    inner join variables on variables.id = a1.variable_id
                    where
                        indicators.abbreviated_name like abbreviated_ind
                        and variables.abbreviated_numerator like abbreviated_den
                        and a1.year = 3
                        and strategic_lines.p_a_i_id = p_pai_id) as denominator_table);
            anio4 = (select
                        sum(denominator_table.numerator) as numerator
                    from (select 
                        activities.id as id,
                        activities.name as name,
                        variables.category_name as category,
                        variables.abbreviated_denominator,
                        a1.numerator as numerator
                    from activities
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join pais on pais.id = strategic_lines.p_a_i_id
                    inner join indicator_activities a1 on a1.activities_id = activities.id
                    inner join indicators on indicators.id = a1.indicator_id
                    inner join variables on variables.id = a1.variable_id
                    where
                        indicators.abbreviated_name like abbreviated_ind
                        and variables.abbreviated_numerator like abbreviated_den
                        and a1.year = 4
                        and strategic_lines.p_a_i_id = p_pai_id) as denominator_table);
            IF anio1 is null THEN
                anio1 = 0;
            END IF;
            IF anio2 is null THEN
                anio2 = 0;
            END IF;
            IF anio3 is null THEN
                anio3 = 0;
            END IF;
            IF anio4 is null THEN
                anio4 = 0;
            END IF;
            tot = anio1 + anio2 + anio3 + anio4;
            insert into iedi_num (
                id,
                anio1,
                anio2,
                anio3,
                anio4,
                tot
            ) VALUES (
                abbreviated_den,
                anio1,
                anio2,
                anio3,
                anio4,
                tot
            );
                
        RETURN QUERY 
        SELECT *
        from iedi_num; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE iedi_num;
        
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.iedi_recursos(
            p_pai_id bigint)
            RETURNS TABLE(anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision, tot double precision) as $$
        declare
            _anio1 double precision;
            _anio2 double precision;
            _anio3 double precision;
            _anio4 double precision;
            tot double precision;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS iedi_recursos (
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision,
                tot double precision
            );
        
            _anio1 = (select
                        COALESCE(sum(t.propios),0) as propios
                        from (SELECT
                        public.financial_plans.p_a_i_id,
                         public.financial_plans.year,
                         public.pais.name as paid_name,
                         public.groups.name as name_corp,
                        sum(public.financial_plans.value)  filter (where public.financing_sources.type_id= 22) as propios,
                        sum(public.financial_plans.value)  filter (where public.financing_sources.type_id= 23) as nacion,
                        sum(public.financial_plans.value)  filter (where public.financing_sources.type_id= 25) as fca,
                        sum(public.financial_plans.value)  filter (where public.financing_sources.type_id= 24) as regalias,
                        sum(public.financial_plans.value)  filter (where public.financing_sources.corporation= True) as cooperacion
                        FROM
                             public.pais INNER JOIN public.financial_plans ON public.pais.id = public.financial_plans.p_a_i_id
                             INNER JOIN public.groups ON public.pais.group_id = public.groups.id
                             INNER JOIN public.financing_sources ON public.groups.id = public.financing_sources.group_id
                             AND public.financing_sources.id = public.financial_plans.source_id
                             INNER JOIN public.domains ON public.financing_sources.type_id = public.domains.id
                             where public.financial_plans.year=CAST(1 as integer)
                             and  public.pais.id=CAST(p_pai_id as integer)
                             group by  public.financial_plans.p_a_i_id,
                                  public.financial_plans.year,
                             public.pais.name,
                             public.pais.group_id,
                             public.groups.id,
                             public.groups.name,
                             public.financing_sources.type_id,
                             public.domains.id,
                             public.domains.domain,
                             public.domains.name) as t 
                             group by t.p_a_i_id, t.year,t.paid_name, t.name_corp);
            _anio2 = (select
                        COALESCE(sum(t.propios),0) as propios
                        from (SELECT
                        public.financial_plans.p_a_i_id,
                         public.financial_plans.year,
                         public.pais.name as paid_name,
                         public.groups.name as name_corp,
                        sum(public.financial_plans.value)  filter (where public.financing_sources.type_id= 22) as propios,
                        sum(public.financial_plans.value)  filter (where public.financing_sources.type_id= 23) as nacion,
                        sum(public.financial_plans.value)  filter (where public.financing_sources.type_id= 25) as fca,
                        sum(public.financial_plans.value)  filter (where public.financing_sources.type_id= 24) as regalias,
                        sum(public.financial_plans.value)  filter (where public.financing_sources.corporation= True) as cooperacion
                        FROM
                             public.pais INNER JOIN public.financial_plans ON public.pais.id = public.financial_plans.p_a_i_id
                             INNER JOIN public.groups ON public.pais.group_id = public.groups.id
                             INNER JOIN public.financing_sources ON public.groups.id = public.financing_sources.group_id
                             AND public.financing_sources.id = public.financial_plans.source_id
                             INNER JOIN public.domains ON public.financing_sources.type_id = public.domains.id
                             where public.financial_plans.year=CAST(2 as integer)
                             and  public.pais.id=CAST(p_pai_id as integer)
                             group by  public.financial_plans.p_a_i_id,
                                  public.financial_plans.year,
                             public.pais.name,
                             public.pais.group_id,
                             public.groups.id,
                             public.groups.name,
                             public.financing_sources.type_id,
                             public.domains.id,
                             public.domains.domain,
                             public.domains.name) as t 
                             group by t.p_a_i_id, t.year,t.paid_name, t.name_corp);
            _anio3 = (select
                        COALESCE(sum(t.propios),0) as propios
                        from (SELECT
                        public.financial_plans.p_a_i_id,
                         public.financial_plans.year,
                         public.pais.name as paid_name,
                         public.groups.name as name_corp,
                        sum(public.financial_plans.value)  filter (where public.financing_sources.type_id= 22) as propios,
                        sum(public.financial_plans.value)  filter (where public.financing_sources.type_id= 23) as nacion,
                        sum(public.financial_plans.value)  filter (where public.financing_sources.type_id= 25) as fca,
                        sum(public.financial_plans.value)  filter (where public.financing_sources.type_id= 24) as regalias,
                        sum(public.financial_plans.value)  filter (where public.financing_sources.corporation= True) as cooperacion
                        FROM
                             public.pais INNER JOIN public.financial_plans ON public.pais.id = public.financial_plans.p_a_i_id
                             INNER JOIN public.groups ON public.pais.group_id = public.groups.id
                             INNER JOIN public.financing_sources ON public.groups.id = public.financing_sources.group_id
                             AND public.financing_sources.id = public.financial_plans.source_id
                             INNER JOIN public.domains ON public.financing_sources.type_id = public.domains.id
                             where public.financial_plans.year=CAST(3 as integer)
                             and  public.pais.id=CAST(p_pai_id as integer)
                             group by  public.financial_plans.p_a_i_id,
                                  public.financial_plans.year,
                             public.pais.name,
                             public.pais.group_id,
                             public.groups.id,
                             public.groups.name,
                             public.financing_sources.type_id,
                             public.domains.id,
                             public.domains.domain,
                             public.domains.name) as t 
                             group by t.p_a_i_id, t.year,t.paid_name, t.name_corp);
            _anio4 = (select
                        COALESCE(sum(t.propios),0) as propios
                        from (SELECT
                        public.financial_plans.p_a_i_id,
                         public.financial_plans.year,
                         public.pais.name as paid_name,
                         public.groups.name as name_corp,
                        sum(public.financial_plans.value)  filter (where public.financing_sources.type_id= 22) as propios,
                        sum(public.financial_plans.value)  filter (where public.financing_sources.type_id= 23) as nacion,
                        sum(public.financial_plans.value)  filter (where public.financing_sources.type_id= 25) as fca,
                        sum(public.financial_plans.value)  filter (where public.financing_sources.type_id= 24) as regalias,
                        sum(public.financial_plans.value)  filter (where public.financing_sources.corporation= True) as cooperacion
                        FROM
                             public.pais INNER JOIN public.financial_plans ON public.pais.id = public.financial_plans.p_a_i_id
                             INNER JOIN public.groups ON public.pais.group_id = public.groups.id
                             INNER JOIN public.financing_sources ON public.groups.id = public.financing_sources.group_id
                             AND public.financing_sources.id = public.financial_plans.source_id
                             INNER JOIN public.domains ON public.financing_sources.type_id = public.domains.id
                             where public.financial_plans.year=CAST(4 as integer)
                             and  public.pais.id=CAST(p_pai_id as integer)
                             group by  public.financial_plans.p_a_i_id,
                                  public.financial_plans.year,
                             public.pais.name,
                             public.pais.group_id,
                             public.groups.id,
                             public.groups.name,
                             public.financing_sources.type_id,
                             public.domains.id,
                             public.domains.domain,
                             public.domains.name) as t 
                             group by t.p_a_i_id, t.year,t.paid_name, t.name_corp);
            IF _anio1 is null THEN
                _anio1 = 0;
            END IF;
            IF _anio2 is null THEN
                _anio2 = 0;
            END IF;
            IF _anio3 is null THEN
                _anio3 = 0;
            END IF;
            IF _anio4 is null THEN
                _anio4 = 0;
            END IF;
            tot = _anio1 + _anio2 + _anio3 + _anio4;
            insert into iedi_recursos (
                anio1,
                anio2,
                anio3,
                anio4,
                tot
            ) VALUES (
                _anio1,
                _anio2,
                _anio3,
                _anio4,
                tot
            );
                
        RETURN QUERY 
        SELECT *
        from iedi_recursos; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE iedi_recursos;
        
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.iedi_tot(
            p_pai_id bigint,
            abbreviated_ind character varying,
            abbreviated_den character varying)
            RETURNS TABLE(id character varying, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision, tot double precision) as $$
        declare
            reg Record;
            id integer;
            anio1 numeric;
            anio2 numeric;
            anio3 numeric;
            anio4 numeric;
            tot numeric = 0;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS iedi_tot (
                id character varying,
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision,
                tot double precision
            );
        
            for reg in
                (SELECT * from public.iedi_den(
                    p_pai_id, 
                    abbreviated_ind,
                    abbreviated_den
                ))
                loop
                    IF reg.anio1 = 0 THEN
                        anio1 = 0;
                    ELSE
                        anio1 = (SELECT iedi_num.anio1 from public.iedi_num(
                            p_pai_id, 
                            abbreviated_ind,
                            abbreviated_den
                        )) / reg.anio1;
                    END IF;
                    IF reg.anio2 = 0 THEN
                        anio2 = 0;
                    ELSE
                        anio2 = (SELECT iedi_num.anio2 from public.iedi_num(
                            p_pai_id, 
                            abbreviated_ind,
                            abbreviated_den
                        )) / reg.anio2;
                    END IF;
                    IF reg.anio3 = 0 THEN
                        anio3 = 0;
                    ELSE
                        anio3 = (SELECT iedi_num.anio3 from public.iedi_num(
                            p_pai_id, 
                            abbreviated_ind,
                            abbreviated_den
                        )) / reg.anio3;
                    END IF;
                    IF reg.anio4 = 0 THEN
                        anio4 = 0;
                    ELSE
                        anio4 = (SELECT iedi_num.anio4 from public.iedi_num(
                            p_pai_id, 
                            abbreviated_ind,
                            abbreviated_den
                        )) / reg.anio4;
                    END IF;
                    IF reg.tot = 0 THEN
                        tot = 0;
                    ELSE
                        tot = (SELECT iedi_num.tot from public.iedi_num(
                            p_pai_id, 
                            abbreviated_ind,
                            abbreviated_den
                        )) / reg.tot;
                    END IF;
                end loop;
            insert into iedi_tot (
                id,
                anio1,
                anio2,
                anio3,
                anio4,
                tot
            ) VALUES (
                abbreviated_den,
                anio1,
                anio2,
                anio3,
                anio4,
                tot
            );
                
        RETURN QUERY 
        SELECT *
        from iedi_tot; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE iedi_tot;
        
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.iedi_variables(
            p_pai_id bigint,
            type_ind character varying)
            RETURNS TABLE(anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision, tot double precision) as $$
        declare
            _anio1 double precision;
            _anio2 double precision;
            _anio3 double precision;
            _anio4 double precision;
            tot double precision;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS iedi_variables (
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision,
                tot double precision
            );
        
            _anio1 = (select
                            indicator_iedi_values.value
                        from indicators
                        inner join indicator_iedi_variables on indicator_iedi_variables.indicator_id = indicators.id
                        inner join indicator_iedi_values on indicator_iedi_values.id_iedi_variable = indicator_iedi_variables.id
                        where
                            indicators.abbreviated_name like type_ind
                            and indicator_iedi_values.p_a_i_id = p_pai_id
                             and indicator_iedi_values.year = 1);
            _anio2 = (select
                            indicator_iedi_values.value
                        from indicators
                        inner join indicator_iedi_variables on indicator_iedi_variables.indicator_id = indicators.id
                        inner join indicator_iedi_values on indicator_iedi_values.id_iedi_variable = indicator_iedi_variables.id
                        where
                            indicators.abbreviated_name like type_ind
                            and indicator_iedi_values.p_a_i_id = p_pai_id
                             and indicator_iedi_values.year = 2);
            _anio3 = (select
                            indicator_iedi_values.value
                        from indicators
                        inner join indicator_iedi_variables on indicator_iedi_variables.indicator_id = indicators.id
                        inner join indicator_iedi_values on indicator_iedi_values.id_iedi_variable = indicator_iedi_variables.id
                        where
                            indicators.abbreviated_name like type_ind
                            and indicator_iedi_values.p_a_i_id = p_pai_id
                             and indicator_iedi_values.year = 3);
            _anio4 = (select
                            indicator_iedi_values.value
                        from indicators
                        inner join indicator_iedi_variables on indicator_iedi_variables.indicator_id = indicators.id
                        inner join indicator_iedi_values on indicator_iedi_values.id_iedi_variable = indicator_iedi_variables.id
                        where
                            indicators.abbreviated_name like type_ind
                            and indicator_iedi_values.p_a_i_id = p_pai_id
                             and indicator_iedi_values.year = 4);
            IF _anio1 is null THEN
                _anio1 = 0;
            END IF;
            IF _anio2 is null THEN
                _anio2 = 0;
            END IF;
            IF _anio3 is null THEN
                _anio3 = 0;
            END IF;
            IF _anio4 is null THEN
                _anio4 = 0;
            END IF;
            tot = _anio1 + _anio2 + _anio3 + _anio4;
            insert into iedi_variables (
                anio1,
                anio2,
                anio3,
                anio4,
                tot
            ) VALUES (
                _anio1,
                _anio2,
                _anio3,
                _anio4,
                tot
            );
                
        RETURN QUERY 
        SELECT *
        from iedi_variables; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE iedi_variables;
        
        end;
        
        $$ language plpgsql;");

        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.iedi_variables_by_name(
            p_pai_id bigint,
            type_ind character varying)
            RETURNS TABLE(anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision, tot double precision) as $$
        declare
            _anio1 double precision;
            _anio2 double precision;
            _anio3 double precision;
            _anio4 double precision;
            tot double precision;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS iedi_variables_by_name (
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision,
                tot double precision
            );
        
            _anio1 = (select
                            sum(table_iedi.value)
                        from (select
                            indicator_iedi_values.value
                        from indicators
                        inner join indicator_iedi_variables on indicator_iedi_variables.indicator_id = indicators.id
                        inner join indicator_iedi_values on indicator_iedi_values.id_iedi_variable = indicator_iedi_variables.id
                        where
                            indicator_iedi_variables.name like type_ind
                            and indicator_iedi_values.p_a_i_id = p_pai_id
                             and indicator_iedi_values.year = 1) as table_iedi);
            _anio2 = (select
                            sum(table_iedi.value)
                        from (select
                            indicator_iedi_values.value
                        from indicators
                        inner join indicator_iedi_variables on indicator_iedi_variables.indicator_id = indicators.id
                        inner join indicator_iedi_values on indicator_iedi_values.id_iedi_variable = indicator_iedi_variables.id
                        where
                            indicator_iedi_variables.name like type_ind
                            and indicator_iedi_values.p_a_i_id = p_pai_id
                             and indicator_iedi_values.year = 2) as table_iedi);
            _anio3 = (select
                            sum(table_iedi.value)
                        from (select
                            indicator_iedi_values.value
                        from indicators
                        inner join indicator_iedi_variables on indicator_iedi_variables.indicator_id = indicators.id
                        inner join indicator_iedi_values on indicator_iedi_values.id_iedi_variable = indicator_iedi_variables.id
                        where
                            indicator_iedi_variables.name like type_ind
                            and indicator_iedi_values.p_a_i_id = p_pai_id
                             and indicator_iedi_values.year = 3) as table_iedi);
            _anio4 = (select
                            sum(table_iedi.value)
                        from (select
                            indicator_iedi_values.value
                        from indicators
                        inner join indicator_iedi_variables on indicator_iedi_variables.indicator_id = indicators.id
                        inner join indicator_iedi_values on indicator_iedi_values.id_iedi_variable = indicator_iedi_variables.id
                        where
                            indicator_iedi_variables.name like type_ind
                            and indicator_iedi_values.p_a_i_id = p_pai_id
                             and indicator_iedi_values.year = 4) as table_iedi);
            IF _anio1 is null THEN
                _anio1 = 0;
            END IF;
            IF _anio2 is null THEN
                _anio2 = 0;
            END IF;
            IF _anio3 is null THEN
                _anio3 = 0;
            END IF;
            IF _anio4 is null THEN
                _anio4 = 0;
            END IF;
            tot = _anio1 + _anio2 + _anio3 + _anio4;
            insert into iedi_variables_by_name (
                anio1,
                anio2,
                anio3,
                anio4,
                tot
            ) VALUES (
                _anio1,
                _anio2,
                _anio3,
                _anio4,
                tot
            );
                
        RETURN QUERY 
        SELECT *
        from iedi_variables_by_name; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE iedi_variables_by_name;
        
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
