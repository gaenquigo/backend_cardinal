<?php

use Illuminate\Database\Seeder;
use App\Models\Master_Geodata;

class MasterGeodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Master_Geodata::truncate();
        Master_Geodata::unguard();

        // ********************************************
        // ******** Tipo Capa *************************
        // ********************************************

        DB::table('domains')->insert([
            'domain' => 'TipoCapa',
            'name' => 'Tipo Capa'
        ]);

        $idTipoCapasGeograficas = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idTipoCapasGeograficas,
            'domain' => 'MapServer',
            'name' => 'MapServer'
        ]);

        $idTipoMapServer = DB::getPdo()->lastInsertId();


        DB::table('domains')->insert([
            'father_id' => $idTipoCapasGeograficas,
            'domain' => 'WmsServer',
            'name' => 'WmsServer'
        ]);

        $idTipoWmsServer = DB::getPdo()->lastInsertId();
        //////////// Dominio que aplica para el servicio rest SIRH /////////////////
        /*DB::table('domains')->insert([
            'father_id' => $idTipoCapasGeograficas,
            'domain' => 'Rest_NoGeogra',
            'name' => 'Rest No Geografico'
        ]);

        $idTipoRestNoGeo = DB::getPdo()->lastInsertId();
        */
        // ********************************************
        // ********* Frecuencía ***********************
        // ********************************************

        DB::table('domains')->insert([
            'domain' => 'Frecuencia',
            'name' => 'Frecuencia'
        ]);

        $idFrecuenciaCapasGeograficas = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idFrecuenciaCapasGeograficas,
            'name' => 'Días'
        ]);

        $idFrecuenciaDias = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idFrecuenciaCapasGeograficas,
            'name' => 'Semanas'
        ]);

        $idFrecuenciaSemanas = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idFrecuenciaCapasGeograficas,
            'name' => 'Meses'
        ]);

        $idFrecuenciaMeses = DB::getPdo()->lastInsertId();

        // ********************************************
        // ******** Categorias ************************
        // ********************************************

        DB::table('domains')->insert([
            'domain' => 'Categoria',
            'name' => 'Categorías'
        ]);

        $idCategoriasCapasGeograficas = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idCategoriasCapasGeograficas,
            'name' => 'SipgaCAR'
        ]);

        $idCategoriasSipgaCAR = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idCategoriasCapasGeograficas,
            'name' => 'Base'
        ]);

        $idCategoriasBase = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idCategoriasCapasGeograficas,
            'name' => 'SIRH'
        ]);

        $idCategoriasSIRH = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idCategoriasCapasGeograficas,
            'name' => 'POMCAS'
        ]);

        $idCategoriasPOMCAS = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idCategoriasCapasGeograficas,
            'name' => 'Areas Protegidas'
        ]);

        $idCatAreasProtegidas = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idCategoriasCapasGeograficas,
            'name' => 'Negocios Verdes'
        ]);

        $idCategoriasNV = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idCategoriasCapasGeograficas,
            'name' => 'Hidrografia'
        ]);

        $idCatHidrografia = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idCategoriasCapasGeograficas,
            'name' => 'Deforestación'
        ]);

        $idCatDeforestacion = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idCategoriasCapasGeograficas,
            'name' => 'Indicadores Ambientales'
        ]);

        $idCatIndAmbientales = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idCategoriasCapasGeograficas,
            'name' => 'Acompañamiento Seguimiento'
        ]);

        $idCategoriasAcomp = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idCategoriasCapasGeograficas,
            'name' => 'Especies'
        ]);

        $idCategoriasEspecies = DB::getPdo()->lastInsertId();
        
        // ********************************************
        // ********** Capas Master Geodata ************
        // ********************************************
/// 1
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Jurisdicción CAR',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/JurisdiccionCAR/FeatureServer/0',
            'categoria' => $idCategoriasBase,
            'tipo' => $idTipoMapServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true
        ]);
/// 2
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Lim. Municipal',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/CapasBaseSipgaCAR/FeatureServer/9',
            'categoria' => $idCategoriasBase,
            'tipo' => $idTipoMapServer,
            'posicion' => 2,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,
            'es_visible' => true
        ]);
/// 3
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Centros Poblados',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/CapasBaseSipgaCAR/FeatureServer/10',
            'categoria' => $idCategoriasBase,
            'tipo' => $idTipoMapServer,
            'posicion' => 3,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,
            'es_visible' => true
        ]);
/// 4
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Zonas Hidrográficas',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/CapasBaseSipgaCAR/FeatureServer/8',
            'categoria' => $idCategoriasBase,
            'tipo' => $idTipoMapServer,
            'posicion' => 4,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true
        ]);
/// 5
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'SIRH Concesiones',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/CapasBaseSipgaCAR/FeatureServer/0',
            'categoria' => $idCategoriasSIRH,
            'tipo' => $idTipoMapServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true
        ]);
/// 6
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'SIRH Puntos Monitoreo',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/CapasBaseSipgaCAR/FeatureServer/1',
            'categoria' => $idCategoriasSIRH,
            'tipo' => $idTipoMapServer,
            'posicion' => 2,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true
        ]);
/// 7
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'SIRH Vertimientos',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/CapasBaseSipgaCAR/FeatureServer/3',
            'categoria' => $idCategoriasSIRH,
            'tipo' => $idTipoMapServer,
            'posicion' => 3,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true
        ]);
/// 8
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'POMCAS',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/CapasBaseSipgaCAR/FeatureServer/6',
            'categoria' => $idCategoriasPOMCAS,
            'tipo' => $idTipoMapServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true
        ]);
/// 9
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'RUNAP',
            'url' => 'https://mapas.parquesnacionales.gov.co/arcgis/rest/services/pnn/runap/MapServer/0',
            'categoria' => $idCatAreasProtegidas,
            'tipo' => $idTipoMapServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true
        ]);
/// 10
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Negocios Verdes',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/CapasBaseSipgaCAR/FeatureServer/2',
            'categoria' => $idCategoriasNV,
            'tipo' => $idTipoMapServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true
        ]);
/// 11
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Drenajes 100K',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/CapasBaseSipgaCAR/FeatureServer/4',
            'categoria' => $idCatHidrografia,
            'tipo' => $idTipoMapServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true
        ]);
/// 12
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Paramos',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/CapasBaseSipgaCAR/FeatureServer/7',
            'categoria' => $idCatAreasProtegidas,
            'tipo' => $idTipoMapServer,
            'posicion' => 2,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true
        ]);

        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Acompañamiento Sistemas de Reconversión',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/CapasDummySipgaCAR/FeatureServer/0',
            'categoria' => $idCategoriasAcomp,
            'tipo' => $idTipoMapServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true
        ]);

        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Especies Invasoras',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/CapasDummySipgaCAR/FeatureServer/1',
            'categoria' => $idCategoriasEspecies,
            'tipo' => $idTipoMapServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true
        ]);

        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Especies Amenazadas',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/CapasDummySipgaCAR/FeatureServer/2',
            'categoria' => $idCategoriasEspecies,
            'tipo' => $idTipoMapServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true
        ]);

        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Redes y/o Estaciones de Monitoreo en Operacion',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/CapasDummySipgaCAR/FeatureServer/3',
            'categoria' => $idCategoriasAcomp,
            'tipo' => $idTipoMapServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true
        ]);

        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Autorizaciones Ambientales con Seguimiento',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/CapasDummySipgaCAR/FeatureServer/4',
            'categoria' => $idCategoriasAcomp,
            'tipo' => $idTipoMapServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true
        ]);

        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Areas de Ecosistemas',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/CapasDummySipgaCAR/FeatureServer/5',
            'categoria' => $idCategoriasAcomp,
            'tipo' => $idTipoMapServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true
        ]);

        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Plan de Ordenación Forestal',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/CapasDummySipgaCAR/FeatureServer/6',
            'categoria' => $idCategoriasAcomp,
            'tipo' => $idTipoMapServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true
        ]);

        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Acuiferos',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/CapasDummySipgaCAR/FeatureServer/7',
            'categoria' => $idCatHidrografia,
            'tipo' => $idTipoMapServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true
        ]);

        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Microcuencas',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/CapasDummySipgaCAR/FeatureServer/8',
            'categoria' => $idCategoriasPOMCAS,
            'tipo' => $idTipoMapServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true
        ]);

        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Salinizacion 100K',
            'url' => 'https://services5.arcgis.com/QMDRhiG7NdW8OZJm/arcgis/rest/services/CapasDummySipgaCAR/FeatureServer/9',
            'categoria' => $idCategoriasAcomp,
            'tipo' => $idTipoMapServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true
        ]);

        //////////// DEFORESTACION  WMS ////////////////

        /*DB::table('master_geodata')->insert([
            'nombre_capa' => 'Capa WMS CAR',
            'url' => 'https://mapas.parquesnacionales.gov.co/services/pnn/wms',
            'capa_wms' => 'pnn:car',
            'categoria' => $idCatDeforestacion,
            'tipo' => $idTipoWmsServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => false,
            'anio' => 2010
        ]);*/
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Bosque No Bosque 2010',
            'url' => 'http://geoapps.ideam.gov.co/geoserver/Dinamica_Cobertura_Bosque/wms',
            'capa_wms' => 'GDBIDEAM.DCCB_SMBYC_CBBQ_V5_2005_2010',
            'categoria' => $idCatDeforestacion,
            'tipo' => $idTipoWmsServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => false,
            'anio' => 2010
        ]);

        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Bosque No Bosque 2012',
            'url' => 'http://geoapps.ideam.gov.co/geoserver/Dinamica_Cobertura_Bosque/wms',
            'capa_wms' => 'GDBIDEAM.DCCB_SMBYC_CBBQ_V5_2010_2012',
            'categoria' => $idCatDeforestacion,
            'tipo' => $idTipoWmsServer,
            'posicion' => 2,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => false,
            'anio' => 2012
        ]);

        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Bosque No Bosque 2013',
            'url' => 'http://geoapps.ideam.gov.co/geoserver/Dinamica_Cobertura_Bosque/wms',
            'capa_wms' => 'GDBIDEAM.DCCB_SMBYC_CBBQ_V5_2012_2013',
            'categoria' => $idCatDeforestacion,
            'tipo' => $idTipoWmsServer,
            'posicion' => 3,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => false,
            'anio' => 2013
        ]);

        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Bosque No Bosque 2014',
            'url' => 'http://geoapps.ideam.gov.co/geoserver/Dinamica_Cobertura_Bosque/wms',
            'capa_wms' => 'GDBIDEAM.DCCB_SMBYC_CBBQ_V6_2013_2014',
            'categoria' => $idCatDeforestacion,
            'tipo' => $idTipoWmsServer,
            'posicion' => 4,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => false,
            'anio' => 2014
        ]);

        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Bosque No Bosque 2015',
            'url' => 'http://geoapps.ideam.gov.co/geoserver/Dinamica_Cobertura_Bosque/wms',
            'capa_wms' => 'GDBIDEAM.DCCB_SMBYC_CBBQ_V7_2014_2015',
            'categoria' => $idCatDeforestacion,
            'tipo' => $idTipoWmsServer,
            'posicion' => 5,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => false,
            'anio' => 2015
        ]);


        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Bosque No Bosque 2016',
            'url' => 'http://geoapps.ideam.gov.co/geoserver/Dinamica_Cobertura_Bosque/wms',
            'capa_wms' => 'GDBIDEAM.DCCB_SMBYC_CBBQ_V7_2015_2016',
            'categoria' => $idCatDeforestacion,
            'tipo' => $idTipoWmsServer,
            'posicion' => 6,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => false,
            'anio' => 2016
        ]);

        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Bosque No Bosque 2017',
            'url' => 'http://geoapps.ideam.gov.co/geoserver/Dinamica_Cobertura_Bosque/wms',
            'capa_wms' => 'GDBIDEAM.DCCB_SMBYC_CBBQ_V7_2016_2017',
            'categoria' => $idCatDeforestacion,
            'tipo' => $idTipoWmsServer,
            'posicion' => 7,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => false,
            'anio' => 2017
        ]);
        //////////// IND CALIDAD AGUA  WMS ////////////////
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Indice de Alteracion Potencial de la Calidad del Agua Año Medio ENA 2010',
            'url' => 'http://geoapps.ideam.gov.co/geoserver/Calidad_Agua/wms',
            'capa_wms' => 'GDBIDEAM.ENA_IACAL_AM_SZH_2010',
            'categoria' => $idCatIndAmbientales,
            'tipo' => $idTipoWmsServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => false,
            'anio' => 2010
        ]);
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Indice de Alteracion Potencial de la Calidad del Agua Año Medio ENA 2014',
            'url' => 'http://geoapps.ideam.gov.co/geoserver/Calidad_Agua/wms',
            'capa_wms' => 'GDBIDEAM.ENA2014_IACAL_AA_MED',
            'categoria' => $idCatIndAmbientales,
            'tipo' => $idTipoWmsServer,
            'posicion' => 7,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => false,
            'anio' => 2014
        ]);

        //////////// IND USO AGUA  WMS ////////////////
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Indice de Uso del Agua Año Medio SZH ENA 2010',
            'url' => 'http://geoapps.ideam.gov.co/geoserver/indicadores_hidricos/wms',
            'capa_wms' => 'GDBIDEAM.ENA_IUA_AA_ME_SZH_2010',
            'categoria' => $idCatIndAmbientales,
            'tipo' => $idTipoWmsServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => false,
            'anio' => 2010
        ]);
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Indice de Uso del Agua Año Medio SZH ENA 2014',
            'url' => 'http://geoapps.ideam.gov.co/geoserver/indicadores_hidricos/wms',
            'capa_wms' => 'GDBIDEAM.ENA_IUA_AA_MED_SZH_2014',
            'categoria' => $idCatIndAmbientales,
            'tipo' => $idTipoWmsServer,
            'posicion' => 2,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => false,
            'anio' => 2014
        ]);

        //////////// IND OFERTA AGUA SUPERFICIAL WMS ////////////////
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Escorrentía Promedio Anual de Colombia. ENA 2010',
            'url' => 'http://geoapps.ideam.gov.co/geoserver/Oferta_Agua_Superficial_Subterranea/wms',
            'capa_wms' => 'GDBIDEAM.ENA_ESCRRNT_AA_PRO_2010',
            'categoria' => $idCatIndAmbientales,
            'tipo' => $idTipoWmsServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => false,
            'anio' => 2010
        ]);
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Escorrentía Media Anual año medio. ENA 2014',
            'url' => 'http://geoapps.ideam.gov.co/geoserver/Oferta_Agua_Superficial_Subterranea/wms',
            'capa_wms' => 'GDBIDEAM.ASS_ENA2014_ESME_AA_MED',
            'categoria' => $idCatIndAmbientales,
            'tipo' => $idTipoWmsServer,
            'posicion' => 2,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => false,
            'anio' => 2014
        ]);
        /////////// Capas propias del SIPGACAR  /////////////////////
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Indicador Poligono',
            'url' => 'https://services5.arcgis.com/zmxoERNErYOfUTXe/arcgis/rest/services/MapSIPGACAR_ReportesInd/FeatureServer/0',
            'categoria' => $idCategoriasSipgaCAR,
            'tipo' => $idTipoMapServer,
            'posicion' => 7,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true,
            'anio' => 2020
        ]);
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Actividad Punto',
            
            'url' => 'https://services5.arcgis.com/zmxoERNErYOfUTXe/arcgis/rest/services/MapSIPGACAR_ReportesInd/FeatureServer/1',
            'categoria' => $idCategoriasSipgaCAR,
            'tipo' => $idTipoMapServer,
            'posicion' => 6,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true,
            'anio' => 2020
        ]);
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Actividad Linea',
            'url' => 'https://services5.arcgis.com/zmxoERNErYOfUTXe/arcgis/rest/services/MapSIPGACAR_ReportesInd/FeatureServer/2',
            'categoria' => $idCategoriasSipgaCAR,
            'tipo' => $idTipoMapServer,
            'posicion' => 5,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true,
            'anio' => 2020
        ]);
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Actividad Poligono',
            'url' => 'https://services5.arcgis.com/zmxoERNErYOfUTXe/arcgis/rest/services/MapSIPGACAR_ReportesInd/FeatureServer/3',
            'categoria' => $idCategoriasSipgaCAR,
            'tipo' => $idTipoMapServer,
            'posicion' => 4,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true,
            'anio' => 2020
        ]);
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Avance Punto',
            'url' => 'https://services5.arcgis.com/zmxoERNErYOfUTXe/arcgis/rest/services/MapSIPGACAR_ReportesInd/FeatureServer/4',
            'categoria' => $idCategoriasSipgaCAR,
            'tipo' => $idTipoMapServer,
            'posicion' => 3,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true,
            'anio' => 2020
        ]);
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Avance Linea',
            'url' => 'https://services5.arcgis.com/zmxoERNErYOfUTXe/arcgis/rest/services/MapSIPGACAR_ReportesInd/FeatureServer/5',
            'categoria' => $idCategoriasSipgaCAR,
            'tipo' => $idTipoMapServer,
            'posicion' => 2,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true,
            'anio' => 2020
        ]);
        DB::table('master_geodata')->insert([
            'nombre_capa' => 'Avance Poligono',
            'url' => 'https://services5.arcgis.com/zmxoERNErYOfUTXe/arcgis/rest/services/MapSIPGACAR_ReportesInd/FeatureServer/6',
            'categoria' => $idCategoriasSipgaCAR,
            'tipo' => $idTipoMapServer,
            'posicion' => 1,
            'propietario' => 1,
            'frecuencia_actualizacion' => $idFrecuenciaMeses,            
            'es_visible' => true,
            'anio' => 2020
        ]);
        
    }
}
