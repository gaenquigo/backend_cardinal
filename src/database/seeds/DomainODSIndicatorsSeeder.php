<?php

use Illuminate\Database\Seeder;

class DomainODSIndicatorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')->insert([
            'domain' => 'IndicadorODS',
            'name' => 'Indicadores ODS'
        ]);

        $fatherID = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'No aplica'
        ]);        

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Acidez media del mar (pH) medida en un conjunto convenido de estaciones de muestreo representativas'
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Asignación presupuestaria a la investigación en el campo de la tecnología marina como porcentaje del presupuesto total de la investigación'
           
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Asistencia oficial para el desarrollo neta, total y para los países menos adelantados, como porcentaje de los ingresos nacionales brutos de los donantes del Comité de Asistencia para el Desarrollo de la OCDE'
           
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Asistencia oficial para el desarrollo y gasto público en la conservación y el uso sostenible de la biodiversidad y de los ecosistemas'
         
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Aumento en el cumplimiento nacional de los derechos laborales (libertad de asociación y negociación colectiva) sobre la base de fuentes textuales de la OIT y la legislación nacional, por sexo y la condición de migrante'
            
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Avance de los países en el grado de aplicación de los instrumentos internacionales con el objetivo de luchar contra la pesca ilegal, no declarada y no reglamentada'
            
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Ayuda para los compromisos y desembolsos comerciales'
           
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Cambio en la eficiencia del uso del agua con el tiempo'
           
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Casos incidentes de malaria por cada 1.000 personas al año'
          
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Cobertura de las intervenciones con trazadores (por ejemplo, inmunización completa de los niños, terapia antirretroviral, tratamiento de la tuberculosis, tratamiento de la hipertensión, parto a cargo de personal sanitario especializado, etc.)'
          
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Cobertura de las intervenciones de tratamiento (farmacológico, psicosocial y servicios de rehabilitación y postratamiento) por trastornos de uso indebido de drogas'
           
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Cobertura de las zonas protegidas en relación con las zonas marinas'
        
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Cobertura por zonas protegidas de lugares importantes para la diversidad biológica de las montañas'
            
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Cociente entre la tasa de consumo de tierras y la tasa de crecimiento de la población'
          
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Consumo de materiales domésticos, percápita y por PIB'
           
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Consumo nocivo de alcohol, definido según el contexto nacional como el consumo per cápita de alcohol (15 años y mayores) en un año civil en litros de alcohol puro'
          
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Corriente total de recursos para el desarrollo, desglosada por país receptor y país donante y el tipo de corriente (por ejemplo, asistencia oficial para el desarrollo, inversión extranjera directa y otras corrientes)'
          
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Costo de la contratación por cuenta del empleado como porcentaje de los ingresos anuales percibidos en el país de destino'
           
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Costo de las remesas como porcentaje del monto remitido'
            
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Cuantía de los subsidios a los combustibles fósiles por unidad de PIB (producción y consumo) y como proporción del total de los gastos nacionales en combustibles fósiles'
       
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Densidad y distribución de los trabajadores sanitarios'
            
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Detenidos que no han sido sentenciados como porcentaje de la población carcelaria total'
         
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Determinar si existen o no marcos jurídicos para promover, hacer cumplir y supervisar la igualdad y la no discriminación por motivos de sexo'
         
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Emisiones de CO2 por unidad de valor agregado'
         
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Empleo en la manufactura como porcentaje del empleo total'
          
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Estimación de Ayuda al Productor'
           
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Existencia de instituciones nacionales de derechos humanos independientes de conformidad con los Principios de París'
           
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Flujos totales de la asistencia oficial al desarrollo para el sector agrícola (asistencia oficial para el desarrollo, además de otros flujos oficiales)'
           
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Gasto total (público y privado) per cápita dedicado a la preservación, protección y conservación de todo el patrimonio cultural y natural. por tipo de patrimonio (cultural, natural, mixto, designación del Centro del Patrimonio Mundial), nivel de gobierno (nacional, regional y local / municipal), el tipo de gastos: gastos de funcionamiento / de inversión y tipo de financiación privada (donaciones en especie, privado sector sin fines de lucro, patrocinio)'
         
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Gasto total de fondos públicos en programas de protección social y de empleo como porcentaje de los presupuestos nacionales y del PIB'
           
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Gastos en investigación y desarrollo como porcentaje del PIB'
            
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Gastos en servicios esenciales (educación, salud y protección social) como porcentaje del gasto total del gobierno'
          
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Gastos primarios del gobierno como porcentaje del presupuesto aprobado original, desglosados por sector (o por códigos presupuestarios o elementos similares)'
         
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Grado de aplicación de la ordenación integrada de los recursos hídricos (0-100)'
           
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Grado de utilización de los marcos de resultados de los propios países y herramientas de planificación por los proveedores de cooperación para el desarrollo'
       
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Grado en el que (i) la educación para la ciudadanía global y (ii) la educación para el desarrollo sostenible (incluyendo educación sobre el cambio climático) son establecidos en (a) las políticas nacionales de educación (b) los planes de estudio (c) la formación del profesorado y (d) evaluación de los alumnos '
          
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Grado en el que (i) la educación para la ciudadanía global y (ii) la educación para el desarrollo sostenible, incluida la igualdad de género y los derechos humanos, son integrados en todos los niveles en (a) las políticas nacionales de educación (b) los planes de estudio (c) la formación del profesorado y (d) evaluación de los alumnos'

        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Hacia la ordenación forestal sostenible'
          
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Huella material, Huella material percápita y por PIB'
     
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Huella material, per cápita y por PIB'
        
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Incidencia de la tuberculosis por cada 1.000 personas al año'
         
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Indicador de anomalías en los precios (de los alimentos)'
            
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Indicadores de solidez financiera'
        
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Índice de cobertura verde de las montañas'
        
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Índice de eutrofización Costero (ICEP) y densidad de desechos plásticos flotantes'
     
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Índice de la Lista Roja'
        
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Índice de la pérdida mundial de alimentos'
   
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Índice de orientación agrícola para los gastos públicos'
           
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Índices de paridad (mujeres/hombres, zonas rurales y urbanas, quintil superior/inferior de recursos económicos, y otras características, como la situación en materia de discapacidad, los pueblos indígenas y los efectos de conflictos, a medida que se disponga de datos) para todos los indicadores de esta lista que puedan desglosarse'
       
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Ingreso medio por hora de mujeres y hombres empleados, por ocupación, grupo de edad y personas con discapacidad'
       
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Ingreso promedio de los productores de alimentos a pequeña escala, por sexo y condición indígena'
          
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Intensidad energética medida en función de la energía primaria y el producto interno bruto (PIB)',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Inversiones en eficiencia energética como porcentaje del PIB y el importe de la inversión extranjera directa en la transferencia financiera para la infraestructura y la tecnología a los servicios de desarrollo sostenible',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Inversiones extranjeras directas (IED), asistencia oficial para el desarrollo y cooperación sur-sur como proporción del presupuesto nacional total',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Investigadores (valor equivalente a tiempo completo) por millón de habitantes',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'La asistencia oficial para el desarrollo y el gasto público en la conservación y el uso sostenible de la diversidad biológica y los ecosistemas',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'La pesca sostenible como porcentaje del PIB en los Pequeños Estados Insulares, los menos adelantados y todos los países',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Monto de apoyo a los países en desarrollo en I + D para el consumo y la producción sostenibles (CPS) y las tecnologías ecológicamente racionales',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Monto total de fondos aprobados con destino a los países en desarrollo para promover el desarrollo, la transferencia y la difusión de tecnologías ecológicamente racionales',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Mortalidad de las enfermedades cardiovasculares, el cáncer, la diabetes y las enfermedades respiratorias crónicas',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Muertes causadas por conflictos por cada 100.000 habitantes (desglosadas por grupo de edad, sexo y causa)',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Muertes maternas por cada 100.000 nacidos vivos',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Nivel de estrés hídrico: extracción de agua dulce como proporción de los recursos de agua dulce disponibles',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Niveles medios anuales de partículas finas (por ejemplo, PM2.5 y PM10) en las ciudades (ponderados según la población)',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de acuerdos y programas de cooperación entre países en ciencia y / o tecnología, por tipo de cooperación',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de casos verificados de homicidio, secuestro, desaparición forzada, detención arbitraria y tortura de periodistas, miembros asociados de los medios de comunicación, sindicalistas y defensores de los derechos humanos, en los 12 meses anteriores',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de empleos en las industrias del turismo (como porcentaje del número total de puestos de trabajo y la tasa de crecimiento del empleo, por sexo)',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de empresas que publican informes sobre sostenibilidad',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de estrategias sostenibles de turismo o políticas y planes de acción implementados, con un seguimiento acordado, y herramientas de evaluación.',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de muertes en accidentes fatales de tráfico en un plazo de 30 días, por cada 100.000 habitantes (normalizado por edad)',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de muertos, desaparecidos, heridos, reubicados o evacuados debido a desastres por cada 100.000 personas',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de nuevas infecciones de la hepatitis B por cada 100.000 habitantes en un año determinado',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de nuevas infecciones por el VIH por cada 1.000 habitantes no infectados (por grupo de edad, sexo y sectores clave de la población)',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de países con estrategias nacionales y locales para la reducción del riesgo de desastres',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de países con leyes y reglamentos que garantizan a las mujeres de 15 a 49 años de edad el acceso a servicios de salud sexual y reproductiva y a información y educación en la materia',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de países con mecanismos para mejorar la coherencia de las políticas de desarrollo sostenible',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de países con planes de acción nacionales de consumo y producción sostenibles incorporados como prioridad o meta en las políticas nacionales',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de países con un Plan Nacional de Estadísticas que está totalmente financiado y en curso de ejecución, por fuentes de financiación',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de países menos adelantados y pequeños Estados insulares en desarrollo que están recibiendo apoyo especializado para los mecanismos encaminados a aumentar la capacidad de planificación y gestión eficaces en relación con el cambio climático, incluidos los centrados en las mujeres, los jóvenes y las comunidades locales y marginadas',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de países que adoptan y aplican garantías constitucionales, legales y / o de política para el acceso público a la información',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de países que adoptan y aplican regímenes de promoción de inversiónes para los países menos desarrollados',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de países que aplican políticas de adquisiciones públicas y planes de acción sostenibles',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de países que avanzan en ratificar, aceptar e implementar mediante mecanismos legales, normativos e institucionales, instrumentos relacionados con los océanos que implementan el derecho internacional, como se refleja en la Convención, para la conservación y el uso sostenible de los océanos y sus recursos',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de países que comunican avances en la efectividad del desarrollo de marcos de seguimiento de múltiples partes interesadas que apoyan el logro de objetivos de desarrollo sostenible',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de países que cuentan con legislación nacional sobre las estadísticas acorde con los Principios Fundamentales de las Estadísticas Oficiales',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de países que han adoptado marcos legislativos, administrativos y de políticas para asegurar la distribución justa y equitativa de los beneficios',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de países que han comunicado el establecimiento o la puesta en funcionamiento de una estrategia/plan/política integrada que aumenta su capacidad para adaptarse a los efectos adversos del cambio climático y fomenta la resiliencia al cambio climático de bajas emisiones de gases efecto invernadero de una manera que no amenace la producción de comida (incluyendo un plan nacional de adaptación, contribución determinada a nivel nacional, comunicación nacional, informe bienal de actualización, u otros) .',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de países que han comunicado el fortalecimiento de la capacidad institucional, sistémica e individual para implementar la adaptación, la mitigación y la transferencia de tecnología, y acciones desarrolladas',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de países que han implementado políticas de migración bien gestionada',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de partes en los acuerdos ambientales multilaterales internacionales relacionados con los productos químicos peligrosos y de otro tipo, y los desechos, que cumplen sus compromisos y obligaciones de transmitir información como lo exige cada acuerdo pertinente',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de personas cubiertas por el seguro de salud o un sistema de salud pública por cada 1000 habitantes',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de personas que requieren intervenciones contra enfermedades tropicales desatendidas',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de recursos genéticos de plantas y animales para la alimentación y la agricultura garantizados ya sea en las instalaciones de conservación a mediano o largo plazo',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de sucursales de bancos comerciales y cajeros automáticos por cada 100.000 adultos',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de víctimas de homicidios dolosos por cada 100.000 habitantes, por grupo de edad y sexo',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Número de víctimas de la trata de personas por cada 100.000 habitantes, por sexo, grupo de edad y tipo de explotación',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Participación de los países en desarrollo y los países menos adelantados en las exportaciones mundiales',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Pérdidas económicas directas por desastre en relación con el PIB mundial',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Pérdidas económicas directas por desastre en relación con el PIB mundial, incluyendo los daños por desastre a la infraestructura crítica y la interrupción de los servicios básicos',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje correspondiente a las industrias a pequeña escala del valor agregado total del sector',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de adultos (de 15 años o más) con una cuenta en un banco u otra institución financiera o con un proveedor móvil de servicios monetarios',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de aguas residuales tratadas de manera segura',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de armas pequeñas y armas ligeras incautadas que se registran y localizan, de conformidad con las normas internacionales y los instrumentos jurídicos',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de ciudades con una estructura de participación directa de la sociedad civil en la planificación y la gestión urbanas que opera regular y democráticamente',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de cultivos y razas locales y sus variedades silvestres, clasificados según su situación de riesgo, ausencia de riesgo o un nivel de riesgo de extinción desconocido',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de dependencias administrativas locales con políticas y procedimientos operacionales establecidos para la participación de las comunidades locales en la ordenación del agua y el saneamiento',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de escuelas con acceso a: a) electricidad; b) Internet con fines pedagógicos; c) computadoras con fines pedagógicos; d) infraestructura y materiales adaptados a los estudiantes con discapacidad; e) instalaciones de saneamiento básicas segregadas por sexo; y f) instalaciones básicas para lavarse las manos (según las definiciones de Agua, Saneamiento e Higiene para Todos (WASH))',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de jóvenes (15 a 24 años) que no estudian, no tienen empleo ni reciben capacitación',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de jóvenes y adultos con conocimientos de tecnología de la información y las comunicaciones (TIC) por tipo de conocimiento técnico',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de la población abarcado por una red móvil, desglosado por tecnología',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de la población con derechos de propiedad o derechos seguros sobre las tierras agrícolas (entre la población agrícola total), por sexo; y b) proporción de mujeres entre los propietarios de tierras agrícolas, o titulares de derechos sobre',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de la población cubierta por niveles mínimos o sistemas de protección social, desglosado por sexo, y distinguiendo entre los niños, los desempleados, los ancianos, las personas con discapacidad, las mujeres embarazadas y los recién nacidos, las víctimas de accidentes de trabajo, los pobres y los grupos vulnerables',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de la población cuya fuente primaria de energía consiste en combustibles y tecnología limpios',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de la población que declara haberse sentido personalmente víctima de discriminación o acoso en los últimos 12 meses por motivos de discriminación prohibidos por el derecho internacional de los derechos humanos',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de la población que declara haberse sentido personalmente víctima de discriminación o acoso en los últimos 12 meses por motivos de discriminación prohibidos por el derecho internacional de los derechos humanos, desglosado por grupo de edad y sexo',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de la población que dispone de servicios de suministro de agua potable gestionados de manera segura',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de la población que tiene acceso a la electricidad',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de la población que utiliza servicios de saneamiento gestionados de manera segura, incluida una instalación para lavarse las manos con agua y jabón',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de la población sometida a violencia física, psicológica o sexual en los últimos 12 meses',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de la superficie agrícola cultivada siguiendo prácticas agrícolas sostenibles',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de las industrias a pequeña escala que han obtenido un préstamo o una línea de crédito',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de las personas que han tenido por lo menos un contacto con un funcionario público, pagaron un soborno a un funcionario público, o tuvieron la experiencia de que un funcionario público les pidiera que lo pagaran, en los 12 meses anteriores, desglosados por grupo de edad, sexo, región y grupo de población',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de las víctimas de violencia en los 12 meses anteriores que notificaron su victimización a las autoridades competentes u otros mecanismos de resolución de conflictos reconocidos oficialmente (también denominada tasa de denuncias de delitos)',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de maestros en la enseñanza: a) preescolar; b) primaria; c) secundaria inferior y d) secundaria superior que han recibido al menos el mínimo de formación docente organizada (por ejemplo, formación pedagógica); requisitos de práctica previa a la docencia o durante su ejercicio para la enseñanza a un nivel dado en un país determinado.Desglose: por sexo (y otras características, donde se disponga de datos)',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de masas de agua de buena calidad',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de miembros y derechos de voto de los países en desarrollo en las organizaciones internacionales',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de miembros y derechos de voto de los países en desarrollo en las organizaciones internacionales',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de mujeres de entre 20 y 24 años que estaban casadas o mantenían una unión estable antes de cumplir los 15 años y antes de cumplir los 18 años',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de mujeres en edad de procrear (de 15 a 49 años de edad) que practican la planificación familiar con métodos modernos',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de mujeres y hombres jóvenes de 18 a 24 años de edad que habían sufrido violencia sexual antes de cumplir los 18 años',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de niñas y mujeres de entre 15 y 49 años que han sufrido mutilación/ablación genital, por grupo de edad',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de niños de 1 a 17 años que sufrieron algún castigo físico o agresión psicológica por los cuidadores en el mes anterior',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de niños menores de 5 años cuyo desarrollo se encuentra bien encauzado en cuanto a la salud, el aprendizaje y el bienestar psicosocial.Desglose: por sexo, ubicación, recursos económicos (y otras características, donde se disponga de datos)',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de niños menores de 5 años cuyo nacimiento se ha registrado ante una autoridad civil, desglosado por edad',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de niños/jóvenes: a) en los grados 2/3; b) al final de la enseñanza primaria; y c) al final de la enseñanza secundaria inferior, que han alcanzado al menos un nivel mínimo de competencia en: i) lectura y ii) matemáticas. Desglose: por sexo, ubicación, recursos económicos (y otras características,',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de países en que el ordenamiento jurídico (incluido el derecho consuetudinario) garantiza la igualdad de derechos de la mujer a la propiedad y/o el control de la tierra',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de países que cuentan con sistemas para dar seguimiento a la igualdad de género y el empoderamiento de la mujer y asignar fondos públicos para ese fin',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de población en un grupo de edad determinado que alcanza por lo menos un nivel fijo de competencia funcional en a) alfabetización y b) aritmética elemental. Desglose: por sexo, ubicación, recursos económicos (y otras características, donde se disponga de datos)',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de recursos asignados por el gobierno directamente a programas de reducción de la pobreza',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de residuos sólidos urbanos recolectados periódicamente con descarga final adecuada con respecto al total de los desechos generados por la ciudad',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de tiempo dedicado a quehaceres domésticos y cuidados no remunerados, por sexo, grupo de edad y ubicación',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje de tierras degradadas en comparación con la superficie total',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje del cambio en la extensión de los ecosistemas relacionados con el agua a lo largo del tiempo',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje del valor agregado por la industria de tecnología mediana y alta del valor agregado total',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Porcentaje y número de niños de entre 5 y 17 años que realizan trabajo infantil, por sexo y grupo de edad',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Prevalencia de la inseguridad alimentaria moderada o grave en la población, según la Escala de Experiencia de Inseguridad Alimentaria',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Prevalencia de la malnutrición (peso para la estatura, desviación típica > +2 o < -2 de la mediana de los patrones de crecimiento infantil de la OMS) entre los niños menores de 5 años, desglosada por tipo (emaciación y peso excesivo)',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Prevalencia de la subalimentación',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Prevalencia del retraso en el crecimiento (estatura para la edad, desviación típica < -2 de la mediana de los patrones de crecimiento infantil de la Organización Mundial de la Salud (OMS)) entre los niños menores de 5 años',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Prevalencia normalizada para la edad del consumo actual de tabaco entre las personas de 15 o más años de edad',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Progreso hacia los objetivos nacionales establecidos de conformidad con Aichi Objetivo 2 del Plan Estratégico para la Diversidad Biológica 2011-2020',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Progresos realizados por los países en la adopción y aplicación de un marco jurídico/reglamentario/normativo/institucional que reconozca y proteja los derechos de acceso de la pesca en pequeña escala',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Promedio arancelario ponderado en todo el mundo',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Promedio de los aranceles que enfrentan los países en desarrollo, los países menos adelantados y los pequeños Estados insulares en desarrollo',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de apoyo financiero para los Países Menos Adelantados que se asigna a la construcción y rehabilitación de edificios sostenibles, flexibles y eficientes en recursos que utilizan materiales locales',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de empresas que tuvieron al menos un contacto con un funcionario público y que pagó un soborno a un funcionario público, o les propusieron un soborno por estos funcionarios públicos, durante los 12 meses anteriores',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de escaños ocupados por mujeres en los parlamentos nacionales y los gobiernos locales',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de hombres, mujeres y niños de todas las edades que viven en la pobreza, en todas sus dimensiones, con arreglo a las definiciones nacionales',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de indicadores de desarrollo sostenible producidos a nivel nacional, con pleno desglose cuando sea pertinente a la meta, de conformidad con los Principios Fundamentales de las Estadísticas Oficiales',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de la energía renovable en el consumo final total de energía',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de la población con acceso sostenible a medicamentos y vacunas esenciales a precios asequibles',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de la población que cree que la toma de decisiones es inclusiva y sensible, por sexo, edad, discapacidad y grupo de población',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de la población que se siente satisfecha con su última experiencia de los servicios públicos',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de la población que tiene acceso conveniente al transporte público, desglosada por grupo de edad, sexo y personas con discapacidad',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de la población que vive en ciudades que implementan planes de desarrollo urbano y regional integrando las proyecciones de población y las necesidades de recursos, por tamaño de la ciudad',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de la población que vive en hogares con acceso a servicios básicos',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de la población que vive por debajo del umbral internacional de la pobreza, desglosada por sexo, grupo de edad, situación laboral y ubicación geográfica (urbana o rural)',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de la población que vive por debajo del umbral nacional de la pobreza, desglosada por sexo y grupo de edad',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de la población rural que vive a menos de 2 km de una carretera transitable todo el año',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de la población total adulta con derechos de tenencia segura sobre la tierra, con documentación legalmente reconocida y que percibe que sus derechos sobre la tierra son seguros, por sexo y tipo de tenencia',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de la población urbana que vive en barrios marginales, asentamientos improvisados o viviendas inadecuadas',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de la superficie de la cuenca transfronteriza con arreglos operacionales para cooperación relacionada con el agua',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de la vida silvestre que fue cazado furtivamente u objeto de tráfico ilícito',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de las zonas económicas exclusivas nacionales gestiona utilizando enfoques basados en los ecosistemas',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de líneas arancelarias que se aplican a las importaciones de los países menos adelantados y los países en desarrollo con arancel cero',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de los gobiernos locales que adoptan e implementan estrategias locales para la reducción del riesgo de desastres en consonancia con el Marco de Sendai para la Reducción del Riesgo de Desastres 2015-2030',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de mujeres de 15 a 49 años de edad que toman sus propias decisiones informadas con respecto a las relaciones sexuales, el uso de anticonceptivos y la atención de la salud reproductiva',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de mujeres en cargos directivos',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de mujeres víctimas de violencia física o acoso sexual, por perpetrador y lugar del hecho (últimos 12 meses)',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de mujeres y niñas de 15 años de edad o más que han sufrido en los 12 últimos meses violencia física, sexual o psicológica infligida por un compañero íntimo actual o anterior, por la forma de violencia y por grupo de edad',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de mujeres y niñas de 15 años de edad o más que han sufrido en los últimos 12 meses violencia sexual infligida por otra persona que no sea un compañero íntimo, por grupo de edad y lugar del hecho',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de países que a) se han llevado a cabo al menos un censo de población y vivienda en los últimos diez años, y b) han alcanzado el 100 por ciento de registro de nacimientos y el 80 por ciento de registro de defunciones',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de países que adoptan legislación nacional relevante y adecuadamente dotan de recursos a la prevención o control de especies exóticas invasoras',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de partos con asistencia de personal sanitario especializado',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de personas que no tienen miedo de caminar solas cerca de donde viven',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de personas que usan Internet',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de personas que utilizan teléfonos móviles, por sexo',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de personas que viven por debajo del 50% de la mediana de los ingresos, desglosada por grupo de edad, sexo y personas con discapacidad',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de poblaciones de peces que están dentro de niveles biológicamente sostenibles',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción de sitios importantes para la biodiversidad terrestre y de agua dulce que están cubiertos por las áreas protegidas, por tipo de ecosistema',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción del comercio detectado en fauna y flora silvestres, y sus productos, que es ilegal',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción del empleo informal en el empleo no agrícola, por sexo',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción del gasto recurrente y gasto de capital del gobierno que va a sectores que benefician de manera desproporcionada a las mujeres, los pobres y los grupos vulnerables',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción del presupuesto nacional financiado por impuestos internos',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción directa del turismo en el PIB (como porcentaje del PIB total y en la tasa de crecimiento);',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción laboral del PIB, que comprende los salarios y las transferencias de protección social',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporción media de la superficie edificada de las ciudades correspondiente a espacios abiertos para el uso público de todos, desglosada por grupo de edad, sexo y personas con discapacidad',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Proporciones de posiciones (por grupo de edad, sexo, personas con discapacidad y grupos de población) en las instituciones públicas (asambleas legislativas nacionales y locales, administración pública, poder judicial), en comparación con las distribuciones nacionales',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Reglamento Sanitario Internacional de capacidad y preparación para emergencias de salud (RSI)',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Residuos peligrosos generados per cápita, proporción de residuos peligrosos tratados y por tipo de tratamiento',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Servicio de la deuda como porcentaje de las exportaciones de bienes y servicios',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Subsidios a la exportación de productos agropecuarios',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Suma en dólares de los Estados Unidos comprometida para asociaciones público-privadas y asociaciones con la sociedad civil',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Suma en dólares de los Estados Unidos movilizada por año a partir de 2020 como parte del compromiso de los 100.000 millones de dólares',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Suma en dólares de los Estados Unidos movilizada por año a partir de 2020 como parte del compromiso de los 100.000 millones de dólares',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Superficie forestal como porcentaje de la superficie total',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Suscripciones a Internet de banda ancha fija, por velocidad',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Tablero macroeconómico',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Tasa de crecimiento anual del PIB real per cápita',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Tasa de crecimiento anual del PIB real por persona empleada',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Tasa de desempleo, por sexo, grupo de edad y personas con discapacidad',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Tasa de mortalidad atribuida a la contaminación atmosférica en los hogares y el ambiente',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Tasa de mortalidad atribuida a la insalubridad del agua, el saneamiento inseguro y la falta de higiene',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Tasa de mortalidad atribuida a la intoxicación no intencional',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Tasa de mortalidad de niños menores de 5 años (muertes por cada 1.000 nacidos vivos)',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Tasa de mortalidad neonatal (muertes por cada 1.000 nacidos vivos).',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Tasa de mortalidad por suicidio',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Tasa de natalidad entre las adolescentes (de 10 a 14 años; de 15 a 19 años) por cada 1.000 mujeres de ese grupo de edad',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Tasa de participación de los jóvenes y adultos en la enseñanza académica y no académica, y en la capacitación en los últimos 12 meses',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Tasa de participación en la enseñanza organizada (un año antes de la edad oficial de ingreso en la enseñanza primaria)',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Tasa nacional de reciclado, toneladas de material reciclado',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Tasas de crecimiento de los gastos o ingresos de los hogares per cápita entre el 40% más pobre de la población y la población total',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Tasas de frecuencia de lesiones ocupacionales mortales y no mortales, por sexo y situación migratoria',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Total de apoyo internacional oficial (asistencia oficial para el desarrollo más otras corrientes oficiales) a la infraestructura',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Total de la asistencia oficial para el desarrollo neta destinada a los sectores de la investigación médica y la salud básica',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Total de los ingresos del gobierno (por fuente) como porcentaje del PIB',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Valor agregado por manufactura como porcentaje del PIB y per cápita',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Valor en dólares de la asistencia financiera y técnica, incluso mediante la cooperación Norte-Sur, Sur-Sur y triangular, prometida a los países en desarrollo para elaborar y poner en práctica una combinación normativa holística encaminada a lograr el desarrollo sostenible en tres dimensiones (incluidos elementos tales como la reducción de la desigualdad dentro de un país y la gobernanza)',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Valor en dólares de todos los recursos proporcionados para fortalecer la capacidad estadística de los países en desarrollo',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Valor total de las corrientes financieras ilícitas de entrada y salida (en dólares corrientes de los Estados Unidos)',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Volumen de la asistencia oficial para el desarrollo destinada a becas por sector y por tipo de estudio',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Volumen de la asistencia oficial para el desarrollo destinada al agua y el saneamiento que forma parte de un plan de gastos coordinados del gobierno',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Volumen de las remesas (en dólares de los Estados Unidos) como porcentaje del PIB total',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Volumen de producción por unidad de trabajo según el tamaño de la empresa agropecuaria/pastoral/silvícola',
        ]);

        DB::table('domains')->insert([
            'father_id' => $fatherID,
            'name' => 'Volumen de transporte de pasajeros y carga, por medio de transporte',
        ]);
    }
}
