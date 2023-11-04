<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedIedifaltante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.iedi_inversion(
            p_pai_id bigint,
            type_ind character varying)
            RETURNS TABLE(anio1 numeric, anio2 numeric, anio3 numeric, anio4 numeric, tot numeric) AS $$
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
                
                    IF type_ind = 'Presupuesto' THEN
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
