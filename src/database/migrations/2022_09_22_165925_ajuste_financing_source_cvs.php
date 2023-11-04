<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteFinancingSourceCvs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        --creación fuente ingresos padre Certificaciones y constancias sin grupo
        insert into cardinal.financing_sources
        (father_id,code,name,description,final_level,corporation)
        values(57, '1.1.2.2.2.10','Certificaciones y constancias','Recursos recibidos como contraprestación por la expedición del respectivo documento que certifique o haga constar por verdadera los hechos que sean solicitados ante la entidad. Las entidades del orden territorial en virtud del Art. 16 de la Ley 3725 2005 no pueden realizar este tipo de cobros.',false,false);
        --actualización fuente ingresos Certificaciones y constancias- Vigencia Actual al padre Certificaciones y constancias
        update cardinal.financing_sources
        set father_id = 4006
        where id = 3506;
        --elminación fuente ingresos padre Certificaciones y constancias con grupo
        delete from cardinal.financing_sources where id = 3505;
        --creación fuente ingresos padre Superávit fiscal sin grupo
        insert into cardinal.financing_sources
        (father_id,code,name,description,final_level,corporation)
        values(250, '1.2.7.5','Superávit fiscal','Corresponde a los recursos que anualmente resultan de la diferencia positiva entre los recaudos y  la ejecución del presupuesto de gastos.',false,false);
        --actualización fuente ingresos Superávit - Sobretasa Ambiental al padre Superávit fiscal
        update cardinal.financing_sources
        set father_id = 4007
        where id in(
        3017,
        3018,
        3019,
        3020,
        3021,
        3022,
        3023,
        3523,
        3524,
        3525);
        --elminación fuente ingresos padre Superávit fiscal con grupo
        delete from cardinal.financing_sources where id = 3016;
        --creación fuente ingresos padre Reintegros y otros recursos no apropiados sin grupo
        insert into cardinal.financing_sources
        (father_id,code,name,description,final_level,corporation)
        values(135, '1.2.8','Reintegros y otros recursos no apropiados','Corresponde a los montos que las entidades financiadas con recursos públicos reintegran a la DGCPTN o a la tesorería de la entidad territorial, empresa pública, órgano autónomo o particular, como saldos de recursos no ejecutados o valores superiores no previstos. También incluye la devolución de dinero a la entidad originada, entre otros, por la liquidación de contratos y/o convenios interadministrativos o pagos de más por bienes o servicios recibidos por la administración.',false,false);
        --actualización fuente ingresos Superávit - Sobretasa Ambiental al padre Superávit fiscal
        update cardinal.financing_sources
        set father_id = 4008
        where id in(
        3509);
        --elminación fuente ingresos padre Superávit fiscal con grupo
        delete from cardinal.financing_sources where id = 3508;
        --creación fuente ingresos padre Reintegros y otros recursos no apropiados sin grupo
        insert into cardinal.financing_sources
        (father_id,code,name,description,final_level,corporation)
        values(26, '1.1.2.1.1.1.6','Contribución sector eléctrico - Generadores de energía convencional','Son los recursos por contribución del sector eléctrico a las que se refiere el artículo 45 de la Ley 99 de 1993. De acuerdo con este artículo, las empresas generadoras de energía hidroeléctrica cuya potencia nominal supera los 10.000 kilovatios, deben transferir el 6% de las ventas brutas de energía por generación propia de acuerdo con las distribuciones establecidas por la ley. En el caso de centrales térmicas el porcentaje de los recursos a transferir es del 4%. Los destinatarios de estos recursos son: las Corporaciones Autonómas Regionales o los Parques Nacionales Naturales que tengan jurisdicción en el área donde se encuentra localizada la cuenca hidrográfica y del área de influencia del proyecto o el área donde este ubicada la central térmica; y los municipios y distritos localizados de la cuenca que surte el embalse de las generadoras de energía hidroeléctrica o el municipio donde este ubicada la central térmica.',false,false);
        --actualización fuente ingresos Superávit - Sobretasa Ambiental al padre Superávit fiscal
        update cardinal.financing_sources
        set father_id = 4009
        where id in(
        3738,
        3739,
        3511,
        3740,
        3741);
        --elminación fuente ingresos padre Superávit fiscal con grupo
        delete from cardinal.financing_sources where id = 3510;
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
