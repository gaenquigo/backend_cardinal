<?php

use Illuminate\Database\Seeder;

class DomainIndicatorDNPDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')->insert([
            'domain' => 'ProgramaDNP',
            'name' => 'Programas nacionales'
        ]);

        $idFatherProgram = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProgramaDNP',
            'name' => 'Fortalecimiento del desempeño ambiental de los sectores productivos', // Nombre programa
            'description' => 'Orientado a que los diferentes sectores económicos incorporen en sus procesos productivos la variable ambiental.', // Descripcion programa
            'father_id' => $idFatherProgram
        ]);

        $idNationalProgram = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de política para el fortalecimiento del desempeño ambiental de los sectores productivos', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de política realizados', // Nombre indicador
            'father_id' => $idproduct
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Documentos de política de pasivos ambientales formulados', // Nombre indicador
            'father_id' => $idproduct
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Documentos de política de pasivos ambientales implementados', // Nombre indicador
            'father_id' => $idproduct
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Documentos de política de calidad del aire actualizados', // Nombre indicador
            'father_id' => $idproduct
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Documentos de política de calidad del aire implementados', // Nombre indicador
            'father_id' => $idproduct
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Documentos de política de residuos peligrosos actualizados', // Nombre indicador
            'father_id' => $idproduct
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Documentos de política de residuos peligrosos implementados', // Nombre indicador
            'father_id' => $idproduct
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Documentos de política de calidad del suelo actualizados', // Nombre indicador
            'father_id' => $idproduct
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Documentos de política de calidad del suelo implementados', // Nombre indicador
            'father_id' => $idproduct
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Documentos de política de residuos de aparatos eléctricos y electrónicos diseñados', // Nombre indicador
            'father_id' => $idproduct
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Documentos de política de residuos de aparatos eléctricos y electrónicos implementados', // Nombre indicador
            'father_id' => $idproduct
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Documentos de política de producción y consumo sostenible implementados', // Nombre indicador
            'father_id' => $idproduct
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Documentos de política para la gestión del riesgo asociado a sustancias químicas implementados', // Nombre indicador
            'father_id' => $idproduct
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Documentos de política de salud ambiental diseñados', // Nombre indicador
            'father_id' => $idproduct
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Documentos de política de salud ambiental implementados', // Nombre indicador
            'father_id' => $idproduct
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de política implementados', // Nombre indicador
                'father_id' => $idproduct
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de lineamientos técnicos para el fortalecimiento del desempeño ambiental de los sectores productivos', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct2 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos realizados', // Nombre indicador
            'father_id' => $idproduct2
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos en el marco de incorporación de varibales ambientales en la planificación sectorial formulados', // Nombre indicador
            'father_id' => $idproduct2
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos en el marco de incorporación de varibales ambientales en la planificación sectorial implementados', // Nombre indicador
            'father_id' => $idproduct2
        ]);

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Programas de gestión ambiental sectorial diseñados', // Nombre indicador
            'father_id' => $idproduct2
        ]);		
                
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de asistencia técnica para la consolidación de negocios verdes', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct3 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Negocios verdes consolidados', // Nombre indicador
            'father_id' => $idproduct3
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de asistencia técnica en el marco de la formulación e implementación de proyectos demostrativos para la reducción de impactos ambientales de la minería', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct4 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Proyectos demostrativos para la reducción de impactos ambientales de la minería diseñados', // Nombre indicador
            'father_id' => $idproduct4
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de estudios técnicos para el fortalecimiento del desempeño ambiental de los sectores productivos', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct5 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Documentos de estudios técnicos con la evaluación ambiental estratégica realizados', // Nombre indicador
            'father_id' => $idproduct5
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos normativos para el fortalecimiento del desempeño ambiental de los sectores productivos', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct6 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos normativos en el marco de la incorporación de variables ambientales en la planificación sectorial expedidos', // Nombre indicador
            'father_id' => $idproduct6
        ]);
            
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de asistencia técnica para la incorporación de varibales ambientales en la planificación sectorial', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct7 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Entidades y sectores asistidos técnicamente para la incorporación de varibales ambientales en la planificación sectorial', // Nombre indicador
            'father_id' => $idproduct7
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de vigilancia de la calidad del aire', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct8 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estaciones para el monitoreo de la calidad del aire implementadas', // Nombre indicador
            'father_id' => $idproduct8
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con diagnóstico de la calidad de aire elaborado', // Nombre indicador
            'father_id' => $idproduct8
        ]);

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Inventarios de fuentes fijas o móviles realizados', // Nombre indicador
            'father_id' => $idproduct8
        ]);
                
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Informes de resultados del modelo de dispersión de contaminantes elaborados', // Nombre indicador
            'father_id' => $idproduct8
        ]);
                
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Visitas de seguimiento al cumplimiento de estándares de calidad del aire realizadas', // Nombre indicador
            'father_id' => $idproduct8
        ]);
                
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Campaña de monitoreo de calidad del aire realizadas', // Nombre indicador
            'father_id' => $idproduct8
        ]);
                
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de seguimiento y evaluación de los programas de recolección de residuos pos consumo', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct9 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Programas de recolección de residuos pos consumo evaluados', // Nombre indicador
            'father_id' => $idproduct9
        ]);

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Programas de recolección de residuos pos consumo con seguimiento', // Nombre indicador
            'father_id' => $idproduct9
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de divulgación de la incorporación de consideraciones ambientales en la planificación sectorial', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct10 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Campañas diseñadas', // Nombre indicador
            'father_id' => $idproduct10
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Campañas divulgadas', // Nombre indicador
            'father_id' => $idproduct10
        ]);

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Documentos con informes ambientales diseñados', // Nombre indicador
            'father_id' => $idproduct10
        ]);

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con informes ambientales publicados', // Nombre indicador
            'father_id' => $idproduct10
        ]);

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos divulgados', // Nombre indicador
            'father_id' => $idproduct10
        ]);		
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de política para mejorar la calidad', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct11 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de política para mejorar la calidad ambiental de las áreas urbanas elaborados', // Nombre indicador
            'father_id' => $idproduct11
        ]);


        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de lineamientos técnicos para mejorar la calidad ambiental de las áreas urbanas', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct12 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para para mejorar la calidad ambiental de las áreas urbanas elaborados', // Nombre indicador
            'father_id' => $idproduct12
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos normativos para promover la gestión sostenible del suelo', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct13 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos normativos para promover la gestión sostenible del suelo expedidos', // Nombre indicador
            'father_id' => $idproduct13
        ]);

        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de lineamientos técnicos parapromover la gestión sostenible del suelo', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct14 = DB::getPdo()->lastInsertId();


        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para  promover la gestión sostenible del suelo elaborados', // Nombre indicador
            'father_id' => $idproduct14
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de evaluación y seguimiento para el licenciamiento ambiental', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct15 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Actos administrativos de solicitudes elaborados', // Nombre indicador
            'father_id' => $idproduct15
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Actos administrativos de seguimiento elaborados', // Nombre indicador
            'father_id' => $idproduct15
        ]);

        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de evaluación y seguimiento de permisos y trámites ambientales', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct16 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Actos administrativos de solicitudes elaborados', // Nombre indicador
            'father_id' => $idproduct16
        ]);

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Actos administrativos de seguimiento elaborados', // Nombre indicador
            'father_id' => $idproduct16
        ]);		
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de modelación regional de medios biótico, abiótico y social', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct17 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos técnicos de modelación regional elaborados', // Nombre indicador
            'father_id' => $idproduct17
        ]);		
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de información ambiental georreferenciada del proceso de evaluación', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct18 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de revisión de información geográfica de evaluación elaborados', // Nombre indicador
            'father_id' => $idproduct18
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de información ambiental georreferenciada del proceso de seguimiento', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct19 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de revisión de información geográfica de seguimiento elaborados', // Nombre indicador
            'father_id' => $idproduct19
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de instrumentos técnicos de evaluación y seguimiento ambiental', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct20 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de instrumentos técnicos de evaluación y seguimiento ambiental realizados', // Nombre indicador
            'father_id' => $idproduct20
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Instrumentos técnicos de apoyo ambiental externo elaborados', // Nombre indicador
            'father_id' => $idproduct20
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio sancionatorio ambiental', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct21 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Conceptos técnicos acogidos para procesos', // Nombre indicador
            'father_id' => $idproduct21
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de apoyo financiero para proyectos de inversión ambiental', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct22 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Proyectos apoyados', // Nombre indicador
            'father_id' => $idproduct22
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de apoyo financiero a las entidades del sector ambiental en el marco de la compensación ambiental', // Nombre producto
            'father_id' => $idNationalProgram
        ]);

        $idproduct23 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Entidades apoyadas', // Nombre indicador
            'father_id' => $idproduct23
        ]);
        
        //**************************************************/
        // Instruccion para insertar un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProgramaDNP',
            'name' => 'Conservación de la biodiversidad y sus servicios ecosistémicos', // Nombre programa
            'description' => 'Orientado a conservar y promover el uso sostenible de la biodiversidad y sus servicios ecosistémicos.', // Descripcion programa
            'father_id' => $idFatherProgram
        ]);

        $idnationalProgram2 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        $idproduct24= DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de lineamientos técnicos para la conservación de la biodiversidad y sus servicios eco sistémicos', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct24 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documento de lineamientos técnicos para las administración del recurso hídrico', // Nombre indicador
            'father_id' => $idproduct24
        ]);

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos realizados', // Nombre indicador
            'father_id' => $idproduct24
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para compensaciones por perdida de biodiversidad realizados', // Nombre indicador
            'father_id' => $idproduct24
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos con esquemas de pagos por Servicio ambientales formulados', // Nombre indicador
            'father_id' => $idproduct24
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con lineamientos técnicos de zonificación formulados', // Nombre indicador
            'father_id' => $idproduct24
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos de restauración de ecosistemas a nivel nacional diseñados', // Nombre indicador
            'father_id' => $idproduct24
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para el manejo de especies invasoras elaborados', // Nombre indicador
            'father_id' => $idproduct24
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos con el manejo de especies de fauna y flora elaborados', // Nombre indicador
            'father_id' => $idproduct24
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos con acuerdos para uso y tenencia de parques elaborados', // Nombre indicador
            'father_id' => $idproduct24
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos con instrumentos económicos y financieros realizados', // Nombre indicador
            'father_id' => $idproduct24
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para el manejo de las áreas protegidas diseñados', // Nombre indicador
            'father_id' => $idproduct24
        ]);

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de política realizados', // Nombre indicador
            'father_id' => $idproduct24
        ]);

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos implementados', // Nombre indicador
            'father_id' => $idproduct24
        ]);

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de planeación para la conservación de la biodiversidad y sus servicios eco sistémicos', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct25 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de planeación realizados', // Nombre indicador
            'father_id' => $idproduct25
        ]);		

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de planeación de biodiversidad y sus servicios ecosistemicos formulados ', // Nombre indicador
            'father_id' => $idproduct25
        ]);	

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de planeación para el uso y manejo de reservas forestales protectoras formulados', // Nombre indicador
            'father_id' => $idproduct25
        ]);	

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Documentos de planeación para el uso sostenible de especies silvestres elaborados', // Nombre indicador
            'father_id' => $idproduct25
        ]);	

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Documentos de planeación para  la salvaguarda de recursos genéticos elaborados', // Nombre indicador
            'father_id' => $idproduct25
        ]);	

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de planeación con el programa de pagos de servicios ambientales implementados', // Nombre indicador
            'father_id' => $idproduct25
        ]);		

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de política para la conservación de la biodiversidad y sus servicios eco sistémicos', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct26 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de política realizados', // Nombre indicador
            'father_id' => $idproduct26
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de política sobre la conservación de la biodiversidad y los servicios ecosistémicos elaborados', // Nombre indicador
            'father_id' => $idproduct26
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de política en el marco del uso, manejo de la biodiversidad y los servicios ecosistémicos elaborados', // Nombre indicador
            'father_id' => $idproduct26
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de política para el manejo de las situaciones asociados a uso, ocupación y tenencia en áreas protegidas realizados', // Nombre indicador
            'father_id' => $idproduct26
        ]);	

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de investigación para la conservación de la biodiversidad y sus servicios eco sistémicos', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct27 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de investigación realizados', // Nombre indicador
            'father_id' => $idproduct27
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de investigación de especies elaborados', // Nombre indicador
            'father_id' => $idproduct27
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de investigación sobre el estado de poblaciones de fauna y flora elaborados', // Nombre indicador
            'father_id' => $idproduct27
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de restauración de ecosistemas', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct28 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Áreas en proceso de restauración', // Nombre indicador
            'father_id' => $idproduct28
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Áreas en proceso restauración aisladas', // Nombre indicador
            'father_id' => $idproduct28
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Áreas en proceso restauración en mantenimiento', // Nombre indicador
            'father_id' => $idproduct28
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Áreas en proceso de restauración con seguimiento', // Nombre indicador
            'father_id' => $idproduct28
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de reforestación de ecosistemas', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct29 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Plantaciones forestales realizadas', // Nombre indicador
            'father_id' => $idproduct29
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Plantaciones forestales aisladas', // Nombre indicador
            'father_id' => $idproduct29
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Plantaciones forestales mantenidas', // Nombre indicador
            'father_id' => $idproduct29
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Plantaciones forestales con seguimiento', // Nombre indicador
            'father_id' => $idproduct29
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de control y vigilancia al tráfico ilegal de especies', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct30 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Operativos de control y vigilancia realizados', // Nombre indicador
            'father_id' => $idproduct30
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Especies decomisadas', // Nombre indicador
            'father_id' => $idproduct30
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de administración y manejo de áreas protegidas', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct31 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Áreas administradas', // Nombre indicador
            'father_id' => $idproduct31
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Jornadas de vigilancia realizadas', // Nombre indicador
            'father_id' => $idproduct31
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Cartografía de las áreas protegidas', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct32 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Mapas elaborados', // Nombre indicador
            'father_id' => $idproduct32
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de ecoturismo en las áreas protegidas', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct33 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Visitantes que ingresan a las áreas protegidas nacionales', // Nombre indicador
            'father_id' => $idproduct33
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de registro de áreas protegidas', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct34 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Áreas protegidas registradas en el Registro Único Nacional de Áreas Protegidas', // Nombre indicador
            'father_id' => $idproduct34
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de protección de ecosistemas', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct35 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Áreas de ecosistemas protegidas', // Nombre indicador
            'father_id' => $idproduct35
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de autorización de comercio internacional de especies amenazadas de fauna y flora silvestres', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct36 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de autorización sobre Comercio Internacional de Especies Amenazadas de Fauna y Flora Silvestres elaborados', // Nombre indicador
            'father_id' => $idproduct36
        ]);    		
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de educación informal en el marco de la conservación de la biodiversidad y los servicios ecostémicos', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct37 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Personas capacitadas', // Nombre indicador
            'father_id' => $idproduct37
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documento con plan de educación ambiental elaborado', // Nombre indicador
            'father_id' => $idproduct37
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Talleres realizados', // Nombre indicador
            'father_id' => $idproduct37
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de erradicación de cultivos ilícitos', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct38 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Áreas saneadas de cultivos de uso ilícito', // Nombre indicador
            'father_id' => $idproduct38
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio apoyo financiero para la implementación de esquemas de pago por servicios ambientales', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct39 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Esquemas de Pago por Servicios ambientales implementados', // Nombre indicador
            'father_id' => $idproduct39
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio declaración de áreas protegidas', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct40 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Nuevas áreas declaradas protegidas', // Nombre indicador
            'father_id' => $idproduct40
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Áreas protegidas ampliadas', // Nombre indicador
            'father_id' => $idproduct40
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',            
            'name' => 'Centro de Atención y Valoración de fauna silvestre construido', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct41 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Centro de Atención y Valoración de fauna silvestre construido', // Nombre indicador
            'father_id' => $idproduct41
        ]);	

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',            
            'name' => 'Centro de Atención y Valoración de fauna silvestre construido y dotado', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct42 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Centro de Atención y Valoración de fauna silvestre construido y dotado', // Nombre indicador
            'father_id' => $idproduct42
        ]);		
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',            
            'name' => 'Centro de Atención y Valoración de fauna silvestre ampliado', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct43 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Centro de Atención y Valoración de fauna silvestre ampliado', // Nombre indicador
            'father_id' => $idproduct43
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',            
            'name' => 'Centro de Atención y Valoración de fauna silvestre adecuado', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct44 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Centro de Atención y Valoración de fauna silvestre adecuado', // Nombre indicador
            'father_id' => $idproduct44
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Centro de Atención y Valoración de fauna silvestre modificado', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct45 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Centro de Atención y Valoración de fauna silvestre modificado', // Nombre indicador
            'father_id' => $idproduct45
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Centro de Atención y Valoración de fauna silvestre con reforzamiento estructural', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct46 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Centro de Atención y Valoración de fauna silvestre con reforzamiento estructural', // Nombre indicador
            'father_id' => $idproduct46
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',            
            'name' => 'Centro de Atención y Valoración de flora silvestre construido', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct47 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',            
            'name' => 'Centro de Atención y Valoración de flora silvestre construido', // Nombre indicador
            'father_id' => $idproduct47
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Centro de Atención y Valoración de flora silvestre construido y dotado', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct48 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Centro de Atención y Valoración de flora silvestre construido y dotado', // Nombre indicador
            'father_id' => $idproduct48
        ]);

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Centro de atención e interpretación de la biodiversidad y sus servicios ecosistemicos construido', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct49 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Centro de atención e interpretación de la biodiversidad y sus servicios ecosistemicos construido', // Nombre indicador
            'father_id' => $idproduct49
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Centro de Atención e interpretación de la biodiversidad y sus servicios ecosistemicos adecuado', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct50 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Centro de Atención e interpretación de la biodiversidad y sus servicios ecosistemicos adecuado', // Nombre indicador
            'father_id' => $idproduct50
        ]);


        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        $product51= DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Centro de atención e interpretación de la biodiversidad y sus servicios ecosistemicos construido y dotado', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct51 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => '', // Nombre indicador
            'father_id' => $idproduct51
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Centros de atención de las áreas protegidas construidos', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct52 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Centros de atención de las áreas protegidas construidos', // Nombre indicador
            'father_id' => $idproduct52
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Predios saneados', // Nombre indicador
            'father_id' => $idproduct52
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        $product53= DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de lineamientos técnicos con acuerdos de uso, ocupación y tenencia en las áreas protegidas', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct53 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Acuerdos de uso con campesinos que ocupan las áreas protegidas suscritos', // Nombre indicador
            'father_id' => $idproduct53
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        $product54= DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de prevención, vigilancia y control de las áreas protegidas', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct54 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Áreas cubiertas con jornadas de vigilancia', // Nombre indicador
            'father_id' => $idproduct54
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Predios saneados', // Nombre indicador
            'father_id' => $idproduct54
        ]);

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Infraestructura ecoturística construida', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct55 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Infraestructura ecoturística construida', // Nombre indicador
            'father_id' => $idproduct55
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Infraestructura construida para la atención de visitantes de las áreas protegidas', // Nombre indicador
            'father_id' => $idproduct55
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Infraestructura construida para el desarrollo de experiencias de los visitantes en las áreas protegidas', // Nombre indicador
            'father_id' => $idproduct55
        ]);

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Infraestructura construida para la administración, la vigilancia y el control de las áreas protegidas', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct56 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Infraestructura construida para la administración, la vigilancia y el control de las áreas protegidas', // Nombre indicador
            'father_id' => $idproduct56
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sedes administrativas construida dentro del área protegida', // Nombre indicador
            'father_id' => $idproduct56
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Infraestructura de control y vigilancia construida para el área protegida', // Nombre indicador
            'father_id' => $idproduct56
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de recuperación de cuerpos de agua lénticos y lóticos', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct57 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Extensión de cuerpos de agua recuperados', // Nombre indicador
            'father_id' => $idproduct57
        ]);

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Material vegetal retirado', // Nombre indicador
            'father_id' => $idproduct57
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sedimentos removidos', // Nombre indicador
            'father_id' => $idproduct57
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Obras biomecánicas realizadas', // Nombre indicador
            'father_id' => $idproduct57
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Cuerpos de agua recuperados', // Nombre indicador
            'father_id' => $idproduct57
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estructura hidráulica construida', // Nombre indicador
            'father_id' => $idproduct57
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Bosque ripario recuperado', // Nombre indicador
            'father_id' => $idproduct57
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de producción de plántulas en viveros', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct58 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Plántulas producidas', // Nombre indicador
            'father_id' => $idproduct58
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',           
            'name' => 'Servicio de dragado', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct59 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Dragado realizado', // Nombre indicador
            'father_id' => $idproduct59
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de asistencia técnica para la protección de la fauna y flora silvestre', // Nombre producto
            'father_id' => $idnationalProgram2
        ]);

        $idproduct60 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Entidades asistidas', // Nombre indicador
            'father_id' => $idproduct60
        ]);

        //**************************************************/
        // Instruccion para insertar un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProgramaDNP',
            'name' => 'Gestión integral del recurso hídrico', // Nombre programa
            'description' => 'Orientado a mantener la oferta del recurso hídrico, la sostenibilidad del recurso hídrico y la conservación de los ecosistemas que regulan la oferta hídrica en el país, considerando el agua como factor de desarrollo económico y de bienestar social.', // Descripcion programa
            'father_id' => $idFatherProgram
        ]);

        $idnationalProgram3 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de lineamientos técnicos para la gestión integral del recurso hídrico', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct61 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos realizados', // Nombre indicador
            'father_id' => $idproduct61
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para la implementación de la Política Nacional de Gestión Integral del Recurso Hídrico adoptados', // Nombre indicador
            'father_id' => $idproduct61
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para el manejo y planificación de acuíferos formulados', // Nombre indicador
            'father_id' => $idproduct61
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos  de lineamientos técnicos para el manejo y planificación del recurso hídrico formulados', // Nombre indicador
            'father_id' => $idproduct61
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para el manejo y planificación de cuencas hidrográficas formulados', // Nombre indicador
            'father_id' => $idproduct61
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con lineamientos para el mejoramiento de la calidad del recurso hídrico elaborados', // Nombre indicador
            'father_id' => $idproduct61
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de planeación para la gestión integral del recurso hídrico', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct62 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de la fase de prospectiva y zonificación del plan de ordenación y manejo ambiental de cuenca hidrográfica elaborados', // Nombre indicador
            'father_id' => $idproduct62
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de la fase de formulación del plan de ordenación y manejo ambiental de cuenca hidrográfica elaborados', // Nombre indicador
            'father_id' => $idproduct62
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con el componente programático  del plan de ordenación y manejo ambiental de cuenca hidrográfica elaborados', // Nombre indicador
            'father_id' => $idproduct62
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de planeación del plan de ordenación y manejo ambiental de cuenca hidrográfica elaborados', // Nombre indicador
            'father_id' => $idproduct62
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de la fase de aprestamiento del Plan de manejo ambiental de acuífero elaborados', // Nombre indicador
            'father_id' => $idproduct62
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de la fase de diagnóstico del Plan de manejo ambiental de acuífero elaborados', // Nombre indicador
            'father_id' => $idproduct62
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con plan de manejo ambiental de acuíferos formulados', // Nombre indicador
            'father_id' => $idproduct62
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documento con plan de manejo de microcuencas formulados', // Nombre indicador
            'father_id' => $idproduct62
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de los planes estratégicos de macrocuencas elaborados', // Nombre indicador
            'father_id' => $idproduct62
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documento con plan ordenamiento del recurso hídrico formulados', // Nombre indicador
            'father_id' => $idproduct62
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Cuerpos de agua con plan de ordenamiento del recurso hídrico formulados', // Nombre indicador
            'father_id' => $idproduct62
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de planeación para el ordenamiento del recurso hídrico formulados', // Nombre indicador
            'father_id' => $idproduct62
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de planeación para el ordenamiento del recurso hídrico en formulación', // Nombre indicador
            'father_id' => $idproduct62
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de planeación realizados', // Nombre indicador
            'father_id' => $idproduct62
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de planeación para la ordenación y manejo ambiental de cuenca hidrográfica adoptados', // Nombre indicador
            'father_id' => $idproduct62
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de la fase de aprestamiento del plan de ordenación y manejo ambiental de cuenca hidrográfica elaborados', // Nombre indicador
            'father_id' => $idproduct62
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de la fase diagnóstico del plan de ordenación y manejo ambiental de cuenca hidrográfica elaborados', // Nombre indicador
            'father_id' => $idproduct62
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de política para la gestión integral del recurso hídrico', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct63 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de política realizados', // Nombre indicador
            'father_id' => $idproduct63
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de política relacionados con la calidad, uso y planificación del recurso hídrico  formulados', // Nombre indicador
            'father_id' => $idproduct63
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de política relacionados con la calidad, uso y planificación del recurso hídrico adoptados', // Nombre indicador
            'father_id' => $idproduct63
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos normativos para la gestión integral del recurso hídrico', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct64 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Resoluciones relacionadas con calidad, uso y planificación del recurso hídrico expedidas', // Nombre indicador
            'father_id' => $idproduct64
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([     
            'domain' => 'ProductoDNP',       
            'name' => 'Documentos de estudios técnicos regionales sobre recurso hídrico', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct65 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de estudios técnicos realizados', // Nombre indicador
            'father_id' => $idproduct65
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de estudios técnicos con determinación de objetivos de calidad para cuerpos de agua adoptados', // Nombre indicador
            'father_id' => $idproduct65
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de estudios técnicos  con determinación de metas de reducción de carga contaminante para cuerpos de agua publicados', // Nombre indicador
            'father_id' => $idproduct65
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de estudios técnicos con información consolidada de demanda de agua en cuerpos de agua publicados', // Nombre indicador
            'father_id' => $idproduct65
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de estudios técnicos con los resultados de la implementación del plan de ordenamiento del recurso hídrico publicados', // Nombre indicador
            'father_id' => $idproduct65
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de estudios técnicos de la evaluación Regional del Agua realizados', // Nombre indicador
            'father_id' => $idproduct65
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de asistencia técnica relacionado con calidad, uso y planificación del recurso hídrico', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct66 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Talleres realizados', // Nombre indicador
            'father_id' => $idproduct66
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de monitoreo hidrológico', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct67 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Visitas de monitoreo del recurso hídrico', // Nombre indicador
            'father_id' => $idproduct67
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Inventario de puntos de agua subterránea', // Nombre indicador
            'father_id' => $idproduct67
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con Informes de visitas de monitoreo realizados', // Nombre indicador
            'father_id' => $idproduct67
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de caracterización de la calidad del agua', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct68 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documento con análisis de la calidad del recurso hídrico', // Nombre indicador
            'father_id' => $idproduct68
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Parámetros físico químicos en cuerpos de agua analizados', // Nombre indicador
            'father_id' => $idproduct68
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Parámetros físico químicos en vertimientos analizados', // Nombre indicador
            'father_id' => $idproduct68
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Puntos de monitoreo de parámetros de calidad de agua in situ', // Nombre indicador
            'father_id' => $idproduct68
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de modelación hidráulica', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct69 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Modelos hidráulicos implementados', // Nombre indicador
            'father_id' => $idproduct69
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de modelación hidrológica', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct70 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Modelos hidrológicos implementados', // Nombre indicador
            'father_id' => $idproduct70
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de modelación de calidad del agua y de sedimentos', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct71 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Modelos de calidad del agua y de sedimentos implementados', // Nombre indicador
            'father_id' => $idproduct71
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Estaciones hidrológicas construidas', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct72 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estaciones hidrológicas construidas', // Nombre indicador
            'father_id' => $idproduct72
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estaciones hidrológicas construidas en operación', // Nombre indicador
            'father_id' => $idproduct72
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Estaciones hidrológicas mejoradas', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct73 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estaciones hidrológicas mejoradas', // Nombre indicador
            'father_id' => $idproduct73
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estaciones hidrológicas mejoradas en operación', // Nombre indicador
            'father_id' => $idproduct73
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Estaciones meteorológicas construidas', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct74 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estaciones meteorológicas construidas', // Nombre indicador
            'father_id' => $idproduct74
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estaciones meteorológicas en operación', // Nombre indicador
            'father_id' => $idproduct74
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Estaciones meteorológicas mejoradas', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct75 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estaciones meteorológicas mejoradas', // Nombre indicador
            'father_id' => $idproduct75
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estaciones meteorológicas mejoradas en operación', // Nombre indicador
            'father_id' => $idproduct75
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Estaciones de monitoreo de agua subterránea construidas', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct76 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estaciones de monitoreo de agua subterránea construidas', // Nombre indicador
            'father_id' => $idproduct76
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Cartografía ambiental temática', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct77 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Mapa ambientales temáticos realizados', // Nombre indicador
            'father_id' => $idproduct77
        ]);		

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Mapa de vulnerabilidad de acuíferos a la contaminación realizado', // Nombre indicador
            'father_id' => $idproduct77
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Mapa de usuarios del recurso hídrico realizado', // Nombre indicador
            'father_id' => $idproduct77
        ]);		

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Mapa de calidad del agua realizado', // Nombre indicador
            'father_id' => $idproduct77
        ]);		

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Mapa de oferta hídrica realizado', // Nombre indicador
            'father_id' => $idproduct77
        ]);			


        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de zonificación ambiental', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct78 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Mapa de zonificación ambiental del plan de ordenación y manejo ambiental de cuenca hidrográfica elaborado', // Nombre indicador
            'father_id' => $idproduct78
        ]);		
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de manejo de datos hidrometeorológicos y de calidad del agua', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct79 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistema de almacenamiento de datos hidrometeorológicos en funcionamiento', // Nombre indicador
            'father_id' => $idproduct79
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Serie de datos generada', // Nombre indicador
            'father_id' => $idproduct79
        ]);

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Laboratorios construidos', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct80 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Laboratorios construidos', // Nombre indicador
            'father_id' => $idproduct80
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Laboratorios construidos y dotados', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct81 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Laboratorios construidos y dotados', // Nombre indicador
            'father_id' => $idproduct81
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Laboratorios mejorados y dotados', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct82 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Laboratorios mejorados y dotados', // Nombre indicador
            'father_id' => $idproduct82
        ]);
        
    
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de asistencia técnica para la operación de las Mesas Técnicas en el marco de los Consejos Ambientales Regionales', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct83 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Jornadas de trabajo realizadas', // Nombre indicador
            'father_id' => $idproduct83
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de asistencia técnica para la implementación de lineamientos priorizados de los Planes Estratégicos de las Macrocuencas', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct84 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Proyectos de los Planes Estratégicos de las Macrocuencas incorporados en la planificación sectorial', // Nombre indicador
            'father_id' => $idproduct84
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de seguimiento a los procesos de ordenación y manejo de cuencas hidrográficas', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct85 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Reportes de avance de la formulación e implementación de los procesos de Ordenación y Manejo Cuencas', // Nombre indicador
            'father_id' => $idproduct85
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de asistencia técnica para la coordinación de las autoridades ambientales en la gestión de las aguas subterráneas', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct86 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Autoridades Ambientales competentes asistidas en la gestión de aguas subterráneas', // Nombre indicador
            'father_id' => $idproduct86
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de asistencia técnica para la implementación de lineamientos priorizados de las Aguas Subterráneas del País', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct87 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Proyectos para la gestión y evaluación integrada de las Aguas Subterráneas del País formulados', // Nombre indicador
            'father_id' => $idproduct87
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de asistencia técnica para la promoción del uso eficiente y ahorro del agua', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct88 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Proyectos para la promoción del uso eficiente y ahorro del agua formulados', // Nombre indicador
            'father_id' => $idproduct88
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de asistencia técnica para la implementación de lineamientos sobre el mejoramiento de la calidad del recurso hídrico', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct89 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Proyectos  para el mejoramiento de la calidad del recurso hídrico formulados', // Nombre indicador
            'father_id' => $idproduct89
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de implementación de mecanismos y herramientas de conocimiento y manejo de la información para la Gestión Integral del Recurso Hídrico', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct90 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Datos cargados en el sistema de información del recurso hídrico por las Autoridades Ambientales', // Nombre indicador
            'father_id' => $idproduct90
        ]);

        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de implementación de herramientas nacionales de comunicación, divulgación y cualificación de actores', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);


        $idproduct91 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Iniciativas nacionales de comunicación, divulgación y cualificación de actores implementadas', // Nombre indicador
            'father_id' => $idproduct91
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de asistencia técnica para el desarrollo de estrategias sobre la efectiva gobernanza del agua', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct92 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Asistencias técnicas a las  Autoridades Ambientales competentes en las estrategias de gobernanza del agua  realizadas', // Nombre indicador
            'father_id' => $idproduct92
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documento de la fase de aprestamiento del plan de ordenación y manejo de cuenca hidrográfica', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct93 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documento de la fase de aprestamiento del plan de ordenación y manejo de cuenca hidrográfica elaborado', // Nombre indicador
            'father_id' => $idproduct93
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documento de la fase de diagnóstico del plan de ordenación y manejo de cuenca hidrográfica', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct94 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documento de la fase de diagnóstico del plan de ordenación y manejo de cuenca hidrográfica elaborado', // Nombre indicador
            'father_id' => $idproduct94
        ]);    		

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documento de la fase de prospectiva y zonificación ambiental del plan de ordenación y manejo de cuenca hidrográfica', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct95 = DB::getPdo()->lastInsertId();


        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documento de la fase de prospectiva y zonificación ambiental del plan de ordenación y manejo de cuenca hidrográfica elaborado', // Nombre indicador
            'father_id' => $idproduct95
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documento de la fase de formulación del plan de ordenación y manejo de cuenca hidrográfica', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct96 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documento de la fase de formulación del plan de ordenación y manejo de cuenca hidrográfica elaborado', // Nombre indicador
            'father_id' => $idproduct96
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Mapas de zonificación ambiental del plan de ordenación y manejo de cuenca hidrográfica elaborados', // Nombre indicador
            'father_id' => $idproduct96
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Mapas ambientales temáticos elaborados', // Nombre indicador
            'father_id' => $idproduct96
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documento del plan de ordenación y manejo de cuenca hidrográfica', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct97 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documento del plan de ordenación y manejo de cuenca hidrográfica adoptado', // Nombre indicador
            'father_id' => $idproduct97
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Obras de recarga artificial de acuíferos', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct98 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Extensión de las obras de recarga de acuíferos construidas', // Nombre indicador
            'father_id' => $idproduct98
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Obras de recarga de acuíferos construidas', // Nombre indicador
            'father_id' => $idproduct98
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Obras de recarga de acuíferos con mantenimiento', // Nombre indicador
            'father_id' => $idproduct98
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de delimitación de rondas hídricas', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct99 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Rondas hídricas delimitadas', // Nombre indicador
            'father_id' => $idproduct99
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Mapas con delimitación de rondas hídricas', // Nombre indicador
            'father_id' => $idproduct99
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documento con la definición de usos del suelo en las rondas hídricas', // Nombre indicador
            'father_id' => $idproduct99
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de seguimiento y control a usuarios del recurso hídrico', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct100 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Usuarios del recurso hídrico registados', // Nombre indicador
            'father_id' => $idproduct100
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Visitas de seguimiento y control realizadas', // Nombre indicador
            'father_id' => $idproduct100
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de dragado', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct101 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Dragado realizado', // Nombre indicador
            'father_id' => $idproduct101
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Material de dragado dispuesto', // Nombre indicador
            'father_id' => $idproduct101
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Obras y medidas de adecuación hidráulica', // Nombre producto
            'father_id' => $idnationalProgram3
        ]);

        $idproduct102 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Obras hidráulicas construidas', // Nombre indicador
            'father_id' => $idproduct102
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Extensión de obras de adecuación hidráulica', // Nombre indicador
            'father_id' => $idproduct102
        ]);	
        

        //**************************************************/
        // Instruccion para insertar un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProgramaDNP',
            'name' => 'Gestión de la información y el conocimiento ambiental', // Nombre programa
            'description' => 'Orientado a incrementar la disponibilidad de información y conocimiento científico de la realidad biológica, socioeconómica y cultural de los diferentes ecosistemas de acuerdo con las competencias de las diferentes entidades del Sistema Nacional Ambiental.', // Descripcion programa
            'father_id' => $idFatherProgram
        ]);

        $idnationalProgram4 = DB::getPdo()->lastInsertId();
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de investigación para la gestión de la información y el conocimiento ambiental', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct103 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de investigación realizados', // Nombre indicador
            'father_id' => $idproduct103
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de investigación para consolidar el informe del estado de los recursos naturales en la Amazonía colombiana realizados', // Nombre indicador
            'father_id' => $idproduct103
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de investigación sobre biodiversidad, ecosistemas y sus Servicios elaborados', // Nombre indicador
            'father_id' => $idproduct103
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de investigación sobre biodiversidad, ecosistemas y sus Servicios publicados', // Nombre indicador
            'father_id' => $idproduct103
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de investigación sobre recursos forestales elaborados', // Nombre indicador
            'father_id' => $idproduct103
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de investigación sobre recursos forestales publicados', // Nombre indicador
            'father_id' => $idproduct103
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de investigación sobre conservación de suelos elaborados', // Nombre indicador
            'father_id' => $idproduct103
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de investigación sobre conservación de suelos publicados', // Nombre indicador
            'father_id' => $idproduct103
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de investigación sobre hidrología elaborados', // Nombre indicador
            'father_id' => $idproduct103
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de investigación sobre meteorología elaborados', // Nombre indicador
            'father_id' => $idproduct103
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de Investigación del Instituto Humboldt en el marco del Sistema Nacional de Innovación, Ciencia y Tecnología realizados', // Nombre indicador
            'father_id' => $idproduct103
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos diagnóstico para la gestión de la información y el conocimiento ambiental', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct104 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos diagnóstico realizados', // Nombre indicador
            'father_id' => $idproduct104
        ]);

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Informes de los ambientes y recursos marinos y costeros de Colombia elaborados', // Nombre indicador
            'father_id' => $idproduct104
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos diagnóstico sobre el estado de la biodiversidad elaborados', // Nombre indicador
            'father_id' => $idproduct104
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos diagnóstico sobre valoración integral de bienes y Servicio eco sistémicos elaborados', // Nombre indicador
            'father_id' => $idproduct104
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos diagnóstico sobre modelos y prácticas productivos sostenibles elaborados', // Nombre indicador
            'father_id' => $idproduct104
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos diagnóstico sobre dinámicas socioculturales, gobernanza y gobernabilidad étnica y conocimiento tradicional elaborados', // Nombre indicador
            'father_id' => $idproduct104
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documento de estudios técnicos para la gestión de la información y el conocimiento ambiental', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct105 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de estudios realizados', // Nombre indicador
            'father_id' => $idproduct105
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de estudios nacionales de aspectos climáticos de agua, suelo, aire, y bosques publicados', // Nombre indicador
            'father_id' => $idproduct105
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de lineamientos técnicospara la gestión de la información y el conocimiento ambiental', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct106 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos  para la evaluación de los recursos naturales elaborados', // Nombre indicador
            'father_id' => $idproduct106
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de información en tiempo real de pronósticos y alertas', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct107 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Informes de pronósticos y alertas generados', // Nombre indicador
            'father_id' => $idproduct107
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Reportes de pronósticos y alertas generados', // Nombre indicador
            'father_id' => $idproduct107
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Boletines de pronósticos y alertas generados', // Nombre indicador
            'father_id' => $idproduct107
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de acreditación de laboratorios y organizaciones', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct108 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Laboratorios y organizaciones acreditadas', // Nombre indicador
            'father_id' => $idproduct108
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Laboratorios acreditadas', // Nombre indicador
            'father_id' => $idproduct108
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Organizaciones acreditadas', // Nombre indicador
            'father_id' => $idproduct108
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Investigaciones realizadas', // Nombre indicador
            'father_id' => $idproduct108
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de información ambiental de la Amazonía colombiana', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct109 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Datos actualizados incorporados en las bases de datos', // Nombre indicador
            'father_id' => $idproduct109
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Mapas generados', // Nombre indicador
            'father_id' => $idproduct109
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Especímenes incorporados a las colecciones', // Nombre indicador
            'father_id' => $idproduct109
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de protección del conocimiento tradicional', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct110 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con los indicadores de bienestar para pueblos indígenas diseñados', // Nombre indicador
            'father_id' => $idproduct110
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con los indicadores de bienestar para pueblos indígenas poblados elaborados', // Nombre indicador
            'father_id' => $idproduct110
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de protección del conocimiento tradicional realizados', // Nombre indicador
            'father_id' => $idproduct110
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de educación formal en el marco de la información y el conocimiento ambiental', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct111 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Trabajadores formados en educación formal', // Nombre indicador
            'father_id' => $idproduct111
        ]);

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de educación para el trabajo en el marco de la información y el conocimiento ambiental', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct112 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Trabajadores formados en educación para el trabajo', // Nombre indicador
            'father_id' => $idproduct112
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Investigaciones realizadas', // Nombre indicador
            'father_id' => $idproduct112
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistemas productivos evaluados', // Nombre indicador
            'father_id' => $idproduct112
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Alianzas estratégicas ambientales realizadas', // Nombre indicador
            'father_id' => $idproduct112
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Familias beneficiadas', // Nombre indicador
            'father_id' => $idproduct112
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de apoyo financiero a emprendimientos', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct113 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Emprendimientos apoyados', // Nombre indicador
            'father_id' => $idproduct113
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Investigaciones realizadas', // Nombre indicador
            'father_id' => $idproduct113
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Iniciativas de desarrollo tecnológico e innovaciones formuladas', // Nombre indicador
            'father_id' => $idproduct113
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de modelamiento para la conservación de la biodiversidad', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct114 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Áreas monitoreadas', // Nombre indicador
            'father_id' => $idproduct114
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Alianzas estratégicas ambientales realizadas', // Nombre indicador
            'father_id' => $idproduct114
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Familias beneficiadas', // Nombre indicador
            'father_id' => $idproduct114
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Modelos para la conservación de la biodiversidad realizados', // Nombre indicador
            'father_id' => $idproduct114
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Investigaciones realizadas', // Nombre indicador
            'father_id' => $idproduct114
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistemas productivos evaluados', // Nombre indicador
            'father_id' => $idproduct114
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de monitoreo de la biodiversidad y los Servicios eco sistémicos', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct115 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con Informes de monitoreo elaborados', // Nombre indicador
            'father_id' => $idproduct115
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con Informes de visitas de monitoreo hidrometereológico realizados', // Nombre indicador
            'father_id' => $idproduct115
        ]);
                
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de monitoreo hidrológico', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct116 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estaciones de monitoreo operando de forma continua', // Nombre indicador
            'father_id' => $idproduct116
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Reporte actualizado de operación y mantenimiento de la red hidrológica', // Nombre indicador
            'father_id' => $idproduct116
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Reporte actualizado de los datos de monitoreo de aguas subterraneas registrados en el SIRH', // Nombre indicador
            'father_id' => $idproduct116
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Informe anual con resultados de la campaña de monitoreo de calidad del agua ', // Nombre indicador
            'father_id' => $idproduct116
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de monitoreo meteorológico', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct117 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estaciones de monitoreo operando de forma continua', // Nombre indicador
            'father_id' => $idproduct117
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Reporte actualizado de operación y mantenimiento de la red meteorológica', // Nombre indicador
            'father_id' => $idproduct117
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de monitoreo sobre meteorología aeronáutica', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct118 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Investigaciones sobre meteorología aeronáutica realizadas', // Nombre indicador
            'father_id' => $idproduct118
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistemas de información sobre deforestación operando', // Nombre indicador
            'father_id' => $idproduct118
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de información en biodiversidad', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct119 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Informes de biodiversidad anuales realizados', // Nombre indicador
            'father_id' => $idproduct119
        ]);
                
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Informes de biodiversidad anuales publicados', // Nombre indicador
            'father_id' => $idproduct119
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistemas de información en biodiversidad operando', // Nombre indicador
            'father_id' => $idproduct119
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de información sobre deforestación', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct120 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Boletines sobre deforestación publicados', // Nombre indicador
            'father_id' => $idproduct120
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistemas de información sobre deforestación operando', // Nombre indicador
            'father_id' => $idproduct120
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de información hidrológica', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct121 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Boletines hidrológicos publicados', // Nombre indicador
            'father_id' => $idproduct121
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistemas de información  hidrológica  operando', // Nombre indicador
            'father_id' => $idproduct121
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de información hidrogeológica', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct122 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Investigaciones hidrogeológicas realizadas', // Nombre indicador
            'father_id' => $idproduct122
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistemas de información hidrogeológica operando', // Nombre indicador
            'father_id' => $idproduct122
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de información meteorológica', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct123 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Pronósticos de estado del tiempo divulgados', // Nombre indicador
            'father_id' => $idproduct123
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistemas de información meteorológica operando', // Nombre indicador
            'father_id' => $idproduct123
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de educación para el trabajo en cultura y participación para la gestión ambiental y territorial', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct124 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Personas formadas  en cultura y participación para la gestión ambiental y territorial', // Nombre indicador
            'father_id' => $idproduct124
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de educación para el trabajo en ciencias marinas', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct125 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Personas formadas en ciencias marinas', // Nombre indicador
            'father_id' => $idproduct125
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Capacitaciones en ciencias marinas ofrecidas', // Nombre indicador
            'father_id' => $idproduct125
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de Información Ambiental Marina', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct126 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistemas de Información Ambiental Marina en funcionamiento', // Nombre indicador
            'father_id' => $idproduct126
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Informes publicados', // Nombre indicador
            'father_id' => $idproduct126
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Inventario de fauna', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct127 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Inventario de fauna realizado ', // Nombre indicador
            'father_id' => $idproduct127
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        $product128= DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Inventario de flora', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct128 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Inventario de flora realizado', // Nombre indicador
            'father_id' => $idproduct128
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Inventario forestal', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct129 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Inventario forestal realizado', // Nombre indicador
            'father_id' => $idproduct129
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Inventario de recursos naturales', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct130 = DB::getPdo()->lastInsertId(); 

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Inventario de recursos naturales', // Nombre indicador
            'father_id' => $idproduct130
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Colecciones biológicas', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct131 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Colecciones biológicas preservadas', // Nombre indicador
            'father_id' => $idproduct131
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Bases de datos de monitoreo ambiental', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct132 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Bases de datos de monitoreo ambiental actualizadas', // Nombre indicador
            'father_id' => $idproduct132
        ]);
        
                
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Estaciones de investigación mejoradas y dotadas', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct133 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estaciones de investigación adecuadas y dotadas para el desempeño de la investigación mejoradas y dotadas', // Nombre indicador
            'father_id' => $idproduct133
        ]);
        
                
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Laboratorios mejorados', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct134 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Laboratorios mejorados', // Nombre indicador
            'father_id' => $idproduct134
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Laboratorios mejorados y dotados', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct135 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Laboratorios mejorados y dotados', // Nombre indicador
            'father_id' => $idproduct135
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Laboratorios construidos', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct136 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Laboratorios construidos', // Nombre indicador
            'father_id' => $idproduct136
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Laboratorios construidos y dotados', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct137 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Laboratorios construidos y dotados', // Nombre indicador
            'father_id' => $idproduct137
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        $product138= DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Estaciones meteorológicas mejoradas', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct138 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estaciones meteorológicas mejoradas', // Nombre indicador
            'father_id' => $idproduct138
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Estaciones meteorológicas construidas', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct139 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estaciones meteorológicas construidas', // Nombre indicador
            'father_id' => $idproduct139
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Estaciones meteorológicas construidas y dotadas', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct140 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estaciones meteorológicas construidas y dotadas', // Nombre indicador
            'father_id' => $idproduct140
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Estaciones meteorológicas mejoradas y dotadas', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct141 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estaciones meteorológicas mejoradas y dotadas', // Nombre indicador
            'father_id' => $idproduct141
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de información de datos climáticos y monitoreo', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct142 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Boletines de datos climáticos elaborados', // Nombre indicador
            'father_id' => $idproduct142
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de estudios técnicos para la planificación sectorial y la gestión ambiental', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct143 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos técnicos para la planificación sectorial y la gestión ambiental formulado', // Nombre indicador
            'father_id' => $idproduct143
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Mapas elaborados', // Nombre indicador
            'father_id' => $idproduct143
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de administracion de los sistemas de información para los procesos de toma de decisiones', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct144 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistemas de información fortalecidos y actualizados', // Nombre indicador
            'father_id' => $idproduct144
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de divulgación deconocimiento generado para la Planificación sectorial y la gestión ambiental', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct145 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos divulgados', // Nombre indicador
            'father_id' => $idproduct145
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Campañas realizadas', // Nombre indicador
            'father_id' => $idproduct145
        ]);	


        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de modelación hidrodinámica', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct146 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Modelos integrados a la plataforma de pronosticos FEWS', // Nombre indicador
            'father_id' => $idproduct146
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Mapas de inundación', // Nombre indicador
            'father_id' => $idproduct146
        ]);		
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de monitoreo y seguimiento hidrometeorológico', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct147 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estaciones de monitoreo operando de forma continua ', // Nombre indicador
            'father_id' => $idproduct147
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Reporte actualizado de operación y mantenimiento de la red hidrometeorológica', // Nombre indicador
            'father_id' => $idproduct147
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Laboratorio de calidad ambiental acreditado', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct148 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Laboratorio de calidad ambiental acreditado', // Nombre indicador
            'father_id' => $idproduct148
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documento de buenas prácticas de laboratorio (BPL) implementado', // Nombre indicador
            'father_id' => $idproduct148
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de monitoreo y seguimiento de la biodiversidad y los servicios ecosistémicos', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct149 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Reporte de monitoreo,  seguimiento y evaluación de los ecosistemas Elaborado', // Nombre indicador
            'father_id' => $idproduct149
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documento de reporte de datos, información y aplicaciones  del Cubo de datos actualizado', // Nombre indicador
            'father_id' => $idproduct149
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Cubo de datos actualizado', // Nombre indicador
            'father_id' => $idproduct149
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Informe de Monitoreo de bosques y carbono Elaborado', // Nombre indicador
            'father_id' => $idproduct149
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Boletines de alertas tempranas de deforestación emitidos ', // Nombre indicador
            'father_id' => $idproduct149
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Informe de monitoreo de la dinámica de los glaciares de Colombia Elaborado', // Nombre indicador
            'father_id' => $idproduct149
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Informe del estado de la degradación de los suelos Elaborado', // Nombre indicador
            'father_id' => $idproduct149
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Informe del estado de la estabilidad  de las tierras Elaborado', // Nombre indicador
            'father_id' => $idproduct149
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de política para la gestión de  la información y el conocimiento  ambiental', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct150 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de Política elaborados', // Nombre indicador
            'father_id' => $idproduct150
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de información para la gestión del conocimiento  ambiental implementado', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct151 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistemas de información implementados', // Nombre indicador
            'father_id' => $idproduct151
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicios tecnológicos para el sistema de información ambiental', // Nombre producto
            'father_id' => $idnationalProgram4
        ]);

        $idproduct152 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Instrumentos tecnológicos implementados', // Nombre indicador
            'father_id' => $idproduct152
        ]);
        
        //**************************************************/
        // Instruccion para insertar un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProgramaDNP',
            'name' => 'Ordenamiento ambiental territorial', // Nombre programa
            'description' => 'Orientado a garantizar la sostenibilidad del crecimiento sectorial y del desarrollo territorial, por medio del fortalecimiento de los procesos de ordenamiento ambiental y la gobernanza del territorio.', // Descripcion programa
            'father_id' => $idFatherProgram
        ]);

        $idnationalProgram5 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de lineamientos técnicos para el ordenamiento ambiental territorial', // Nombre producto
            'father_id' => $idnationalProgram5
        ]);

        $idproduc153 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos realizados', // Nombre indicador
            'father_id' => $idproduc153
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos con directrices ambientales y de gestión del riesgo en la planificación ambiental territorial formulados', // Nombre indicador
            'father_id' => $idproduc153
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos con directrices ambientales y de gestión del riesgo en la planificación ambiental territorial divulgados', // Nombre indicador
            'father_id' => $idproduc153
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de divulgación y socialización ambiental en el marco del ordenamiento ambiental territorial', // Nombre producto
            'father_id' => $idnationalProgram5
        ]);

        $idproduc154 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Campañas realizadas', // Nombre indicador
            'father_id' => $idproduc154
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de estudios técnicos para el ordenamiento ambiental territorial', // Nombre producto
            'father_id' => $idnationalProgram5
        ]);

        $idproduc155 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de estudios técnicos para el conocimiento y reducción del riesgo de desastres elaborados', // Nombre indicador
            'father_id' => $idproduc155
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de generación de alertas tempranas para la gestión del riesgo de desastres', // Nombre producto
            'father_id' => $idnationalProgram5
        ]);

        $idproduc156 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistemas de alertas tempranas para la gestión del riesgo de desastres diseñados', // Nombre indicador
            'father_id' => $idproduc156
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistemas de alertas tempranas para la gestión del riesgo de desastres implementados', // Nombre indicador
            'father_id' => $idproduc156
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistemas de alertas tempranas para la gestión del riesgo de desastres fortalecidos', // Nombre indicador
            'father_id' => $idproduc156
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de dragado', // Nombre producto
            'father_id' => $idnationalProgram5
        ]);

        $idproduc157 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Dragado realizado', // Nombre indicador
            'father_id' => $idproduc157
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Barreras rompe vientos recuperadas', // Nombre producto
            'father_id' => $idnationalProgram5
        ]);

        $idproduc158 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Barreras rompe vientos', // Nombre indicador
            'father_id' => $idproduc158
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Obras para estabilización de taludes', // Nombre producto
            'father_id' => $idnationalProgram5
        ]);

        $idproduc159 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Obras para estabilización de taludes realizadas', // Nombre indicador
            'father_id' => $idproduc159
        ]);
        

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Obras para la prevención y control de inundaciones', // Nombre producto
            'father_id' => $idnationalProgram5
        ]);

        $idproduct160 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sección hidráulica construida y recuperada', // Nombre indicador
            'father_id' => $idproduct160
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Área estabilizada', // Nombre indicador
            'father_id' => $idproduct160
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Obras para el control de erosión', // Nombre producto
            'father_id' => $idnationalProgram5
        ]);

        $idproduct161 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Población directa beneficiada', // Nombre indicador
            'father_id' => $idproduct161
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estructura construida', // Nombre indicador
            'father_id' => $idproduct161
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Área reforestada', // Nombre indicador
            'father_id' => $idproduct161
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Área estabilizada', // Nombre indicador
            'father_id' => $idproduct161
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de estudios técnicos hidrológicos e hidrogeológicos', // Nombre producto
            'father_id' => $idnationalProgram5
        ]);

        $idproduct162 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de estudios técnicos hidrológicos e hidrogeológicos elaborados', // Nombre indicador
            'father_id' => $idproduct162
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de estudios técnicos geológicos y geotécnicos', // Nombre producto
            'father_id' => $idnationalProgram5
        ]);

        $idproduct163 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de estudios técnicos geológicos y geotécnicos elaborados', // Nombre indicador
            'father_id' => $idproduct163
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos con diseños de obra para la reducción y mitigación del riesgo de desastres', // Nombre producto
            'father_id' => $idnationalProgram5
        ]);

        $idproduct164 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con diseños de obra para la reducción y mitigación del riesgo de desastres elaborados', // Nombre indicador
            'father_id' => $idproduct164
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Obras para la prevención y control de movimientos en masa', // Nombre producto
            'father_id' => $idnationalProgram5
        ]);

        $idproduct165 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Área intervenida', // Nombre indicador
            'father_id' => $idproduct165
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Extensión de obras de para estabilización de taludes construidas', // Nombre indicador
            'father_id' => $idproduct165
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Extensión de obras para estabilización de taludes construidas', // Nombre indicador
            'father_id' => $idproduct165
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estructura construida', // Nombre indicador
            'father_id' => $idproduct165
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Extensión de obras para estabilización de taludes construidas', // Nombre indicador
            'father_id' => $idproduct165
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Área sembrada con cobertura vegetal', // Nombre indicador
            'father_id' => $idproduct165
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Obras para el control y reducción de la erosión', // Nombre producto
            'father_id' => $idnationalProgram5
       ]);

        $idproduct166 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Extensión de obras para el control y reducción de la erosión construidas', // Nombre indicador
            'father_id' => $idproduct166
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Área intervenida', // Nombre indicador
            'father_id' => $idproduct166
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Personas beneficiadas', // Nombre indicador
            'father_id' => $idproduct166
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estructura construida', // Nombre indicador
            'father_id' => $idproduct166
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Área reforestada', // Nombre indicador
            'father_id' => $idproduct166
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Obras para reducir el riesgo de avenidas torrenciales', // Nombre producto
            'father_id' => $idnationalProgram5
        ]);

        $idproduct167 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sección hidraulica conformada', // Nombre indicador
            'father_id' => $idproduct167
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Diques construidos', // Nombre indicador
            'father_id' => $idproduct167
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Obras de disipación de energía construidas', // Nombre indicador
            'father_id' => $idproduct167
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Obras para reducir el riesgo de avenidas torrenciales construidas', // Nombre indicador
            'father_id' => $idproduct167
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Área sembrada', // Nombre indicador
            'father_id' => $idproduct167
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Obras de infraestructura para mitigación y atención a desastres', // Nombre producto
            'father_id' => $idnationalProgram5
        ]);

        $idproduct168 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Obras de infraestructura para mitigación y atención a desastres realizadas', // Nombre indicador
            'father_id' => $idproduct168
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Hexápodos instalados', // Nombre indicador
            'father_id' => $idproduct168
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Espolones adecuados', // Nombre indicador
            'father_id' => $idproduct168
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Canalizaciones realizadas', // Nombre indicador
            'father_id' => $idproduct168
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Protecciones de Orilla realizadas', // Nombre indicador
            'father_id' => $idproduct168
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Destronques realizados', // Nombre indicador
            'father_id' => $idproduct168
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Diques construidos', // Nombre indicador
            'father_id' => $idproduct168
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Muros construidos', // Nombre indicador
            'father_id' => $idproduct168
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicios de asistencia técnica en planificación y gestión ambiental', // Nombre producto
            'father_id' => $idnationalProgram5
        ]);

        $idproduct169 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Entidades asistidas técnicamente', // Nombre indicador
            'father_id' => $idproduct169
        ]);
        
        //**************************************************/
        // Instruccion para insertar un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProgramaDNP',
            'name' => 'Gestión del cambio climático para un desarrollo bajo en carbono y resiliente al clima', // Nombre programa
            'description' => 'Orientado a llevar a cabo la mitigación de Gases de Efecto Invernadero y adaptación al cambio climático.', // Descripcion programa
            'father_id' => $idFatherProgram
        ]);

        $idnationalProgram6 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de planeación para la gestión del cambio climático y un desarrollo bajo en carbono y resiliente al clima', // Nombre producto
            'father_id' => $idnationalProgram6
        ]);

        $idproduct170 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de planeación con la propuesta de acciones de mitigación y adaptación al cambio climático diseñados', // Nombre indicador
            'father_id' => $idproduct170
        ]);
        
                
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de lineamientos técnicos para la gestión del cambio climático y un desarrollo bajo en carbono y resiliente al clima', // Nombre producto
            'father_id' => $idnationalProgram6
        ]);

        $idproduct171 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos realizados', // Nombre indicador
            'father_id' => $idproduct171
        ]);

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para la implementación de las acciones de mitigación y adaptación de los territorios diseñados', // Nombre indicador
            'father_id' => $idproduct171
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para la implementación de las acciones de mitigación y adaptación de los sectores diseñados', // Nombre indicador
            'father_id' => $idproduct171
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para la identificación de fuentes de financiamiento elaborados', // Nombre indicador
            'father_id' => $idproduct171
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos orientados a la definición instrumentos económicos y financieros para la adaptación y mitigación de Gases Efecto Invernadero elaborados', // Nombre indicador
            'father_id' => $idproduct171
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de seguimiento y evaluación de las estrategias de financiamiento formulados', // Nombre indicador
            'father_id' => $idproduct171
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para la instrumentalización de la política de cambio climático en lo referente ciencia y tecnología', // Nombre indicador
            'father_id' => $idproduct171
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de apoyo técnico para la implementación de acciones de mitigación y adaptación al cambio climático', // Nombre producto
            'father_id' => $idnationalProgram6
        ]);

        $idproduct172 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Pilotos con acciones de mitigación y adaptación al cambio climático desarrollados', // Nombre indicador
            'father_id' => $idproduct172
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con las acciones de mitigación y adaptación al cambio climático formulados', // Nombre indicador
            'father_id' => $idproduct172
        ]);
                
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos técnicos de propuestas de acciones de mitigación y adaptación al cambio climático en función del cumplimiento de metas y compromisos de mitigación y de adaptación diseñados', // Nombre indicador
            'father_id' => $idproduct172
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de educación informal en gestión del cambio climático para un desarrollo bajo en carbono y resiliente al clima', // Nombre producto
            'father_id' => $idnationalProgram6
        ]);

        $idproduct173 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Personas capacitadas en gestión del cambio climático', // Nombre indicador
            'father_id' => $idproduct173
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Entidades capacitadas en gestión del cambio climático', // Nombre indicador
            'father_id' => $idproduct173
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Cartillas de capacitación informal elaboradas', // Nombre indicador
            'father_id' => $idproduct173
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de divulgación de la información en gestión del cambio climático para un desarrollo bajo en carbono y resiliente al clima', // Nombre producto
            'father_id' => $idnationalProgram6
        ]);

        $idproduct174 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Campañas de información en gestión de cambio climático realizadas', // Nombre indicador
            'father_id' => $idproduct174
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Piezas de comunicación sobre gestión de cambio climático editadas', // Nombre indicador
            'father_id' => $idproduct174
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de articulación para la gestión del cambio climático en la toma de decisiones sectoriales y territoriales', // Nombre producto
            'father_id' => $idnationalProgram6
        ]);

        $idproduct175 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Espacios de articulación desarrollados en el marco del SISCLIMA', // Nombre indicador
            'father_id' => $idproduct175
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos generados en el marco del SISCLIMA', // Nombre indicador
            'father_id' => $idproduct175
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos orientadores para la incorporación de cambio climático formulados', // Nombre indicador
            'father_id' => $idproduct175
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos normativos de cambio climático formulados', // Nombre indicador
            'father_id' => $idproduct175
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicios de información para el seguimiento a los compromisos en cambio climático de Colombia', // Nombre producto
            'father_id' => $idnationalProgram6
        ]);

        $idproduct176 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con los resultados del monitoreo elaborados', // Nombre indicador
            'father_id' => $idproduct176
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con los resultados del monitoreo ex ante elaborados', // Nombre indicador
            'father_id' => $idproduct176
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estudios de vulnerabilidad ex ante elaborados ', // Nombre indicador
            'father_id' => $idproduct176
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estudios de vulnerabilidad  elaborados', // Nombre indicador
            'father_id' => $idproduct176
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estudios de línea base de emisiones de gases de efecto invernadero realizados', // Nombre indicador
            'father_id' => $idproduct176
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estudios de reducción de emisiones de gases de efecto invernadero realizados', // Nombre indicador
            'father_id' => $idproduct176
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistemas de Información fortalecidos', // Nombre indicador
            'father_id' => $idproduct176
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistemas de Información diseñados', // Nombre indicador
            'father_id' => $idproduct176
        ]);	


        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de educación formal en gestión del cambio climático para un desarrollo bajo en carbono y resiliente al clima', // Nombre producto
            'father_id' => $idnationalProgram6
        ]);

        $idproduct177 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Número de entidades orientadas', // Nombre indicador
            'father_id' => $idproduct177
        ]);		
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Número de programas formulados', // Nombre indicador
            'father_id' => $idproduct177
        ]);	
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de identificaciónde sitios generadores de gases efecto invernadero', // Nombre producto
            'father_id' => $idnationalProgram6
        ]);

        $idproduct178 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Inventario de fuentes fijas que presentan combustión incompleta realizado', // Nombre indicador
            'father_id' => $idproduct178
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de rehabilitación de ecosistemas con especies forestales dendroenergeticas', // Nombre producto
            'father_id' => $idnationalProgram6
        ]);

        $idproduct179 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Plantaciones forestales Dendroenergeticas establecidas', // Nombre indicador
            'father_id' => $idproduct179
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Estufas ecoeficientes', // Nombre producto
            'father_id' => $idnationalProgram6
        ]);

        $idproduct180 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estufas ecoeficientes instaladas y en operación', // Nombre indicador
            'father_id' => $idproduct180
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de producción de plántulas en viveros', // Nombre producto
            'father_id' => $idnationalProgram6
        ]);

        $idproduct181 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Plántulas producidas', // Nombre indicador
            'father_id' => $idproduct181
        ]);
                
        //**************************************************/
        // Instruccion para insertar un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProgramaDNP',
            'name' => 'Gestión integral de mares, costas y recursos acuáticos', // Nombre programa
             'description' => 'Orientado a asegurar la conservación y el aprovechamiento sostenible de los recursos naturales marino-costeros, oceánicos e insulares a través del reconocimiento de la biodiversidad y sus servicios ecosistémicos como base para el desarrollo del país.', // Descripcion programa
            'father_id' => $idFatherProgram
        ]);

        $idnationalProgram7 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de lineamientos técnicos para la gestión integral de mares, costas y recursos acuáticos', // Nombre producto
            'father_id' => $idnationalProgram7
        ]);

        $idproduct182 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos  de lineamientos técnicos para la gestión integral de prevención y reducción de riesgo asociado a perdida de biodiversidad en ecosistemas marino costeros e insulares elaborados', // Nombre indicador
            'father_id' => $idproduct182
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos realizados', // Nombre indicador
            'father_id' => $idproduct182
        ]);
                
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para el fortalecimiento de la gobernanza para la conservación y aprovechamiento sostenible de las zonas marinas, costeras e insulares elaborados', // Nombre indicador
            'father_id' => $idproduct182
        ]);
                
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para el manejo y control de especies invasoras elaborados', // Nombre indicador
            'father_id' => $idproduct182
        ]);
                
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para  la restauración ecológica de manglares elaborados', // Nombre indicador
            'father_id' => $idproduct182
        ]);
                
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para  la restauración ecológica de corales elaborados', // Nombre indicador
            'father_id' => $idproduct182
        ]);
                
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para  la restauración ecológica de pastos marinos elaborados', // Nombre indicador
            'father_id' => $idproduct182
        ]);
                
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para  la restauración ecológica otros ecosistemas de importancia en mares y litorales elaborados', // Nombre indicador
            'father_id' => $idproduct182
        ]);
                
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para  la restauración ecológica de playas marinos elaborados', // Nombre indicador
            'father_id' => $idproduct182
        ]);
                
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos para el plan de ordenamiento y manejo de la unidad ambiental costera  elaborados', // Nombre indicador
            'father_id' => $idproduct182
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para prevenir y gestionar la perdida de biodiversidad marina por especies invasoras elaborados ', // Nombre indicador
            'father_id' => $idproduct182
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos normativos para la gestión integral de mares, costas y recursos acuáticos', // Nombre producto
            'father_id' => $idnationalProgram7
        ]);

        $idproduct183 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos normativos realizados', // Nombre indicador
            'father_id' => $idproduct183
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos normativo  para el fortalecimiento de la gobernanza en el marco de la  conservación y aprovechamiento sostenible de las zonas marinas, costeras e insulares adoptados', // Nombre indicador
            'father_id' => $idproduct183
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Decretos expedidos', // Nombre indicador
            'father_id' => $idproduct183
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Leyes adoptadas', // Nombre indicador
            'father_id' => $idproduct183
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos normativos para el  mejoramiento de la calidad ambiental de los ecosistemas marino costeros y recursos acuáticos elaborados', // Nombre indicador
            'father_id' => $idproduct183
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de planeación para la gestión integral de mares, costas y recursos acuáticos', // Nombre producto
            'father_id' => $idnationalProgram7
        ]);

        $idproduct184 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de planeación realizados', // Nombre indicador
            'father_id' => $idproduct184
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de planeación para el ordenamiento y manejo de la unidad ambiental costera elaborados', // Nombre indicador
            'father_id' => $idproduct184
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con la fase de aprestamiento del plan de ordenamiento y manejo de la unidad ambiental costera elaborados', // Nombre indicador
            'father_id' => $idproduct184
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con la fase diagnóstico y caracterización del plan de ordenamiento y manejo de la unidad ambiental costera elaborados', // Nombre indicador
            'father_id' => $idproduct184
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con la fase de la zonificación del plan de ordenamiento y manejo de la unidad ambiental costera elaborados', // Nombre indicador
            'father_id' => $idproduct184
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de planeación para el manejo de recursos hidrobiológicos elaborados', // Nombre indicador
            'father_id' => $idproduct184
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con la fase de diagnóstico para el plan de manejo de recursos hidrobiológicos elaborados', // Nombre indicador
            'father_id' => $idproduct184
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con la fase de zonificación  para el plan de manejo de recursos hidrobiológicos elaborados', // Nombre indicador
            'father_id' => $idproduct184
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos con las acciones para el manejo de recursos hidrobiológicos  elaborados', // Nombre indicador
            'father_id' => $idproduct184
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de planeación para la protección de especies amenazadas formulados', // Nombre indicador
            'father_id' => $idproduct184
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de planeación para el manejo de la calidad del agua marina formulados', // Nombre indicador
            'father_id' => $idproduct184
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de investigación para la gestión integral de mares, costas y recursos acuáticos', // Nombre producto
            'father_id' => $idnationalProgram7
        ]);

        $idproduct185 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de investigación realizados ', // Nombre indicador
            'father_id' => $idproduct185
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de investigación de erosión costera realizados', // Nombre indicador
            'father_id' => $idproduct185
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de investigación de la dinámica litoral realizados', // Nombre indicador
            'father_id' => $idproduct185
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de investigación de ecosistemas marinos y costeros realizados', // Nombre indicador
            'father_id' => $idproduct185
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de investigación de cambio climático y mares realizados', // Nombre indicador
            'father_id' => $idproduct185
        ]);
    
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de investigación sociales y económicos de las zonas marinas y costeras', // Nombre indicador
            'father_id' => $idproduct185
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de investigación de tecnologías marinas realizados', // Nombre indicador
            'father_id' => $idproduct185
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Cartografía para la zonificación costera', // Nombre producto
            'father_id' => $idnationalProgram7
        ]);

        $idproduct186 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Mapas de zonas marino costeras elaborados', // Nombre indicador
            'father_id' => $idproduct186
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de restauración ecológica de ecosistemas marino costeros', // Nombre producto
            'father_id' => $idnationalProgram7
        ]);

        $idproduct187 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Ecosistemas marino costeros en proceso de restauración', // Nombre indicador
            'father_id' => $idproduct187
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Corales en proceso de restauración', // Nombre indicador
            'father_id' => $idproduct187
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Pastos marinos en proceso de restauración', // Nombre indicador
            'father_id' => $idproduct187
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Ecosistemas de importancia en mares y litorales en proceso de restauración', // Nombre indicador
            'father_id' => $idproduct187
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Playas marinas en proceso de restauración', // Nombre indicador
            'father_id' => $idproduct187
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de asistencia técnica para el ordenamiento ambiental de las zonas litorales', // Nombre producto
            'father_id' => $idnationalProgram7
        ]);

        $idproduct188 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Entidades asistidas para el ordenamiento ambiental de las zonas litorales', // Nombre indicador
            'father_id' => $idproduct188
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de asistencia técnica para la generación de cadenas productivas sostenibles', // Nombre producto
            'father_id' => $idnationalProgram7
        ]);

        $idproduct189 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Cadenas productivas generadas', // Nombre indicador
            'father_id' => $idproduct189
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Cadenas productivas fortalecidas', // Nombre indicador
            'father_id' => $idproduct189
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Cadenas productivas certificadas', // Nombre indicador
            'father_id' => $idproduct189
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Talleres realizados', // Nombre indicador
            'father_id' => $idproduct189
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Personas capacitadas', // Nombre indicador
            'father_id' => $idproduct189
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de control de especies invasoras y exóticas', // Nombre producto
            'father_id' => $idnationalProgram7
        ]);

        $idproduct190 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Instrumentos de planeación para el control de especies invasoras y exóticas realizados', // Nombre indicador
            'father_id' => $idproduct190
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Proyectos para el control de especies invasoras y exóticas formulados', // Nombre indicador
            'father_id' => $idproduct190
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Especies invasoras y exóticas controladas', // Nombre indicador
            'father_id' => $idproduct190
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Rellenos hidráulicos de arena', // Nombre producto
            'father_id' => $idnationalProgram7
        ]);

        $idproduct191 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Rellenos hidráulicos de arena', // Nombre indicador
            'father_id' => $idproduct191
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Gaviones construidos', // Nombre producto
            'father_id' => $idnationalProgram7
        ]);

        $idproduct192 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Gaviones construidos', // Nombre indicador
            'father_id' => $idproduct192
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Diques construidos', // Nombre producto
            'father_id' => $idnationalProgram7
        ]);

        $idproduct193 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Diques construidos', // Nombre indicador
            'father_id' => $idproduct193
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Espolones construidos', // Nombre producto
            'father_id' => $idnationalProgram7
        ]);

        $idproduct194 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Espolones construidos ', // Nombre indicador
            'father_id' => $idproduct194
        ]);
               
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Tajamares construidos', // Nombre producto
            'father_id' => $idnationalProgram7
        ]);

        $idproduct195 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Tajamares construidos', // Nombre indicador
            'father_id' => $idproduct195
        ]);
                
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de articulación institucional para el manejo marino, costero e insular colombiano', // Nombre producto
            'father_id' => $idnationalProgram7
        ]);

        $idproduct196 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de  gestión institucional para el manejo marino costero e insular colombiano elaborados', // Nombre indicador
            'father_id' => $idproduct196
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de educación informal en el marco de la conservación de la biodiversidad, el manejo y uso sostenible de los ecosistemas marino-costeros', // Nombre producto
            'father_id' => $idnationalProgram7
        ]);

        $idproduct197 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Personas capacitadas', // Nombre indicador
            'father_id' => $idproduct197
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Talleres realizados', // Nombre indicador
            'father_id' => $idproduct197
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Capacitaciones relizadas', // Nombre indicador
            'father_id' => $idproduct197
        ]);
        
        //**************************************************/
        // Instruccion para insertar un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProgramaDNP',
            'name' => 'Educación Ambiental', // Nombre programa
            'description' => 'Orientado a la articulación de los actores sociales, institucionales y sectoriales, que conforman el Sistema Nacional Ambiental (SINA) para la formación de una ciudadanía responsable, en donde la gobernanza ambiental se incorpore como eje central de las apuestas de desarrollo sostenible en Colombia.', // Descripcion programa
            'father_id' => $idFatherProgram
        ]);

        $idnationalProgram8 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de coordinación de alianzas nacionales para el desarrollo de la política nacional ambiental y la participación en la gestión ambiental', // Nombre producto
            'father_id' => $idnationalProgram8
        ]);

        $idproduct198 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Alianzas para el desarrollo de la política nacional ambiental y la participación en la gestión ambiental  suscritas', // Nombre indicador
            'father_id' => $idproduct198
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Alianzas para el desarrollo de la política nacional ambiental y la participación en la gestión ambiental  implementadas', // Nombre indicador
            'father_id' => $idproduct198
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de apoyo financiero para la calidad de la educación ambiental en la educación superior', // Nombre producto
            'father_id' => $idnationalProgram8
        ]);

        $idproduct199 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estímulos para la calidad de la educación ambiental entregados', // Nombre indicador
            'father_id' => $idproduct199
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de apoyo técnico para la internacionalización de la educación ambiental y la participación', // Nombre producto
            'father_id' => $idnationalProgram8
        ]);

        $idproduct200 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Convenios de cooperación internacional de conocimientos en materia de Educación Ambiental y Participación suscritos', // Nombre indicador
            'father_id' => $idproduct200
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Convenios de cooperación o intercambio  de conocimientos en materia de Educación Ambiental y Participación implementados', // Nombre indicador
            'father_id' => $idproduct200
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de lineamientos técnicos para el desarrollo de la política nacional ambiental y la participación en la gestión ambiental', // Nombre producto
            'father_id' => $idnationalProgram8
        ]);

        $idproduct201 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para la internacionalización del programa nacional de educación ambiental y participación elaborados', // Nombre indicador
            'father_id' => $idproduct201
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos para el desarrollo del programa nacional de educación ambiental y participación elaborados', // Nombre indicador
            'father_id' => $idproduct201
        ]);

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de asistencia técnica para la implementación de lasestrategias educativo ambientales y de participación', // Nombre producto
            'father_id' => $idnationalProgram8
        ]);

        $idproduct202 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Estrategias educativo ambientales y de participación implementadas', // Nombre indicador
            'father_id' => $idproduct202
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Comités Técnicos Interinstitucionales de Educación Ambiental asistidos técnicamente', // Nombre indicador
            'father_id' => $idproduct202
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Proyectos Ambientales Ciudadanos en Educación Ambiental implementados', // Nombre indicador
            'father_id' => $idproduct202
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Proyectos ambientales escolares asistidos  técnicamente', // Nombre indicador
            'father_id' => $idproduct202
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Entidades del Sistema Nacional Ambiental  asistidas técnicamente', // Nombre indicador
            'father_id' => $idproduct202
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Promotores ambientales capacitados', // Nombre indicador
            'father_id' => $idproduct202
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de apoyo técnico a proyectos de educación ambiental y participación con enfoque diferencial', // Nombre producto
            'father_id' => $idnationalProgram8
        ]);

        $idproduct203 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Proyectos de etnoeducación apoyados', // Nombre indicador
            'father_id' => $idproduct203
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Proyectos de protección y recuperación del conocimiento tradicional asociado a la biodiversidad', // Nombre indicador
            'father_id' => $idproduct203
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de divulgación de la información de la política nacional de educación ambiental y participación', // Nombre producto
            'father_id' => $idnationalProgram8
        ]);

        $idproduct204 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Campañas de educación ambiental y participación implementadas', // Nombre indicador
            'father_id' => $idproduct204
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Piezas de comunicación sobre educación ambiental y participación editadas', // Nombre indicador
            'father_id' => $idproduct204
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Eventos de educación y participación realizados', // Nombre indicador
            'father_id' => $idproduct204
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProgramaDNP',
            'name' => 'Fortalecimiento de la gestión y dirección del Sector Ambiente y Desarrollo Sostenible', // Nombre programa
            'description' => 'Orientado al apoyo y fortalecimiento de la gestión del sector, en los procesos gerenciales, administrativos, y de generación de capacidades en el talento humano.', // Descripcion programa
            'father_id' => $idFatherProgram
        ]);

        $idnationalProgram9 = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'domain' => 'ProgramaDNP',
            'name' => 'No aplica', // Nombre programa
            'description' => 'No aplica.', // Descripcion programa
            'father_id' => $idFatherProgram
        ]);

        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        $product205= DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Sedes construidas', // Nombre producto
            'father_id' => $idnationalProgram9
        ]);

        $idproduct205 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Área construida', // Nombre indicador
            'father_id' => $idproduct205
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sedes construidas', // Nombre indicador
            'father_id' => $idproduct205
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Sedes ampliadas', // Nombre producto
            'father_id' => $idnationalProgram9
        ]);

        $idproduct206 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Área construida', // Nombre indicador
            'father_id' => $idproduct206
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sedes ampliadas', // Nombre indicador
            'father_id' => $idproduct206
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Sedes adecuadas', // Nombre producto
            'father_id' => $idnationalProgram9
        ]);

        $idproduct207 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sedes adecuadas', // Nombre indicador
            'father_id' => $idproduct207
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Sedes modificadas', // Nombre producto
            'father_id' => $idnationalProgram9
        ]);

        $idproduct208 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sedes modificadas', // Nombre indicador
            'father_id' => $idproduct208
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Sedes restauradas', // Nombre producto
            'father_id' => $idnationalProgram9
        ]);

        $idproduct209 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sedes restauradas', // Nombre indicador
            'father_id' => $idproduct209
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Sedes con reforzamiento estructural', // Nombre producto
            'father_id' => $idnationalProgram9
        ]);

        $idproduct210 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sedes con reforzamiento estructural', // Nombre indicador
            'father_id' => $idproduct210
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Sedes adquiridas', // Nombre producto
            'father_id' => $idnationalProgram9
        ]);

        $idproduct211 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sedes adquiridas', // Nombre indicador
            'father_id' => $idproduct211
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Sedes mantenidas', // Nombre producto
            'father_id' => $idnationalProgram9
        ]);

        $idproduct212 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sedes mantenidas', // Nombre indicador
            'father_id' => $idproduct212
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Derecho de beneficio fiduciario', // Nombre producto
            'father_id' => $idnationalProgram9
        ]);

        $idproduct213 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Certificado de derechos de beneficio fiduciario', // Nombre indicador
            'father_id' => $idproduct213
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sede recibida y dotada', // Nombre indicador
            'father_id' => $idproduct213
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sede recibida', // Nombre indicador
            'father_id' => $idproduct213
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de Gestión Documental', // Nombre producto
            'father_id' => $idnationalProgram9
        ]);

        $idproduct214 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Esquemas para el manejo y organización de documentos e información diseñados', // Nombre indicador
            'father_id' => $idproduct214
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Esquemas para el manejo y organización de documentos e información implementados', // Nombre indicador
            'father_id' => $idproduct214
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Instrumentos archivísticos actualizados', // Nombre indicador
            'father_id' => $idproduct214
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Instrumentos archivísticos creados', // Nombre indicador
            'father_id' => $idproduct214
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Procesos implementados', // Nombre indicador
            'father_id' => $idproduct214
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistema de gestión documental implementado', // Nombre indicador
            'father_id' => $idproduct214
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Archivos gestionados', // Nombre indicador
            'father_id' => $idproduct214
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Capacitaciones en gestion documental y archivo realizadas', // Nombre indicador
            'father_id' => $idproduct214
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos archivados', // Nombre indicador
            'father_id' => $idproduct214
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos conservados', // Nombre indicador
            'father_id' => $idproduct214
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos consultados', // Nombre indicador
            'father_id' => $idproduct214
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos custodiados', // Nombre indicador
            'father_id' => $idproduct214
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos digitalizados', // Nombre indicador
            'father_id' => $idproduct214
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos históricos conservados', // Nombre indicador
            'father_id' => $idproduct214
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos inventariados', // Nombre indicador
            'father_id' => $idproduct214
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos tramitados', // Nombre indicador
            'father_id' => $idproduct214
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documentos de Planeación', // Nombre producto
            'father_id' => $idnationalProgram9
        ]);

        $idproduct215 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Planes estratégicos elaborados', // Nombre indicador
            'father_id' => $idproduct215
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de planeación con seguimiento realizado', // Nombre indicador
            'father_id' => $idproduct215
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de planeación realizados', // Nombre indicador
            'father_id' => $idproduct215
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',           
            'name' => 'Documentos normativos', // Nombre producto
            'father_id' => $idnationalProgram9
        ]);

        $idproduct216 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Proyectos de ley elaborados', // Nombre indicador
            'father_id' => $idproduct216
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos normativos realizados', // Nombre indicador
            'father_id' => $idproduct216
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Actos administrativos elaborados', // Nombre indicador
            'father_id' => $idproduct216
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',            
            'name' => 'Documentos de lineamientos técnicos', // Nombre producto
            'father_id' => $idnationalProgram9
        ]);

        $idproduct217 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de lineamientos técnicos realizados', // Nombre indicador
            'father_id' => $idproduct217
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos de estrategias de posicionamiento y articulación interinstitucional implementados', // Nombre indicador
            'father_id' => $idproduct217
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de educación informal para la gestión administrativa', // Nombre producto
            'father_id' => $idnationalProgram9
        ]);

        $idproduct218 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Personas capacitadas', // Nombre indicador
            'father_id' => $idproduct218
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Capacitaciones realizadas', // Nombre indicador
            'father_id' => $idproduct218
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicio de implementación sistemas de gestión', // Nombre producto
            'father_id' => $idnationalProgram9
        ]);

        $idproduct219 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistema de gestión implementado', // Nombre indicador
            'father_id' => $idproduct219
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([

            'domain' => 'IndicadorDNP',
            'name' => 'Metodologías aplicadas', // Nombre indicador
            'father_id' => $idproduct219
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Informe final de implementación', // Nombre indicador
            'father_id' => $idproduct219
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistema de Gestión certificado', // Nombre indicador
            'father_id' => $idproduct219
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Herramientas implementadas', // Nombre indicador
            'father_id' => $idproduct219
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Sede construida y dotada', // Nombre producto
            'father_id' => $idnationalProgram9
        ]);

        $idproduct220 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Área construida', // Nombre indicador
            'father_id' => $idproduct220
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sede dotada', // Nombre indicador
            'father_id' => $idproduct220
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sede construida y dotada', // Nombre indicador
            'father_id' => $idproduct220
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicios de información actualizados', // Nombre producto
            'father_id' => $idnationalProgram9
        ]);

        $idproduct221 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistemas de información para la gestión administrativa actualizados', // Nombre indicador
            'father_id' => $idproduct221
        ]);
        
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicios de información implementados', // Nombre producto
            'father_id' => $idnationalProgram9
        ]);

        $idproduct222 = DB::getPdo()->lastInsertId();

        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Sistemas de información implementados', // Nombre indicador
            'father_id' => $idproduct222
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Usuarios con soporte técnico', // Nombre indicador
            'father_id' => $idproduct222
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Usuarios con soporte funcional', // Nombre indicador
            'father_id' => $idproduct222
        ]);
        
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Disponibilidad del servicio', // Nombre indicador
            'father_id' => $idproduct222
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Documento para la planeación estratégica en TI', // Nombre producto
            'father_id' => $idnationalProgram9
        ]);

        $idproduct223 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Documentos para la planeación estratégica en TI', // Nombre indicador
            'father_id' => $idproduct223
        ]);
        
        //**************************************************/
        // Instruccion para insertar un producto a un programa nacional ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'ProductoDNP',
            'name' => 'Servicios tecnológicos', // Nombre producto
            'father_id' => $idnationalProgram9
        ]);

        $idproduct224 = DB::getPdo()->lastInsertId();
        //**************************************************/
        // Instruccion para insertar un indicador a un producto ***/
        //**************************************************/
        DB::table('domains')->insert([
            'domain' => 'IndicadorDNP',
            'name' => 'Índice de capacidad en la prestación de servicios de tecnología', // Nombre indicador
            'father_id' => $idproduct224
        ]);
    }
}
