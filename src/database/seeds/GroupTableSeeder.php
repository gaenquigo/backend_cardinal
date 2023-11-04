<?php

use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Group::truncate();
        Group::unguard();

        Group::create([
            'name' => 'Administración del sistema',
            'state_id' => 11,
            'city_id' => 1082,            
            'acronym' => 'G-ADMIN',
            'address' => 'Dirección 1',
        ]);        

        Group::create([
            'name' => 'Corporación Autónoma Regional del Alto Magdalena',
            'state_id' => '41',
            'city_id' => '575',
            'acronym' => 'CAM',
            'address' => 'Carrera 1 No. 60-79',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional de Cundinamarca',
            'state_id' => '11',
            'city_id' => '1082',
            'acronym' => 'CAR',
            'address' => 'Av. Esperanza # 62-49 Costado Esfera Pisos 6 y 7',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional de Risaralda',
            'state_id' => '66',
            'city_id' => '696',
            'acronym' => 'CARDER',
            'address' => 'Avenida de Las Américas # 46-40',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional del Canal del Dique',
            'state_id' => '13',
            'city_id' => '389',
            'acronym' => 'CARDIQUE',
            'address' => 'Transv. 52 # 16 - 190',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional de Sucre',
            'state_id' => '70',
            'city_id' => '161',
            'acronym' => 'CARSUCRE',
            'address' => 'Carrera 25 N° 25 - 101 Av. Okala',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional de Santander',
            'state_id' => '68',
            'city_id' => '667',
            'acronym' => 'CAS',
            'address' => 'Cra 12 No. 9-06',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Para el Desarrollo Sostenible del Norte y el Oriente Amazónico',
            'state_id' => '94',
            'city_id' => '380',
            'acronym' => 'CDA',
            'address' => 'Calle 26 No. 11-131',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma regional para la Defensa de la Meseta',
            'state_id' => '68',
            'city_id' => '100',
            'acronym' => 'CDMB',
            'address' => 'Carrera 23 # 37 - 63',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional para el Desarrollo Sostenible del Chocó',
            'state_id' => '27',
            'city_id' => '869',
            'acronym' => 'CODECHOCO',
            'address' => 'Cra 1 N° 22 – 96',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Para el Desarrollo Sostenible de San Andrés, Providencia y Santa Catalina',
            'state_id' => '88',
            'city_id' => '120',
            'acronym' => 'CORALINA',
            'address' => 'Vía San Luis, Bigth, Km 26',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional del Centro de Antioquia',
            'state_id' => '5',
            'city_id' => '1054',
            'acronym' => 'CORANTIOQUIA',
            'address' => 'Carrera 65 No. 44 A 32',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación para el Desarrollo Sostenible del Área de Manejo Especial de La Macarena',
            'state_id' => '50',
            'city_id' => '1028',
            'acronym' => 'CORMACARENA',
            'address' => 'Cra 35 No 25-57',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional de las Cuencas de los Ríos Negro y Nare',
            'state_id' => '5',
            'city_id' => '856',
            'acronym' => 'CORNARE',
            'address' => 'Carrera 59 44-48, Kilómetro 54 El Santuario',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional del Magdalena',
            'state_id' => '47',
            'city_id' => '435',
            'acronym' => 'CORPAMAG',
            'address' => 'Av. del Libertador # 32-201',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación por el Desarrollo Sostenible del Sur de la Amazonía',
            'state_id' => '86',
            'city_id' => '127',
            'acronym' => 'CORPOAMAZONIA',
            'address' => 'Cra. 17 14-85',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional de Boyacá',
            'state_id' => '15',
            'city_id' => '1073',
            'acronym' => 'CORPOBOYACÁ',
            'address' => 'Antigua vía a Paipa # 53-70',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional de Caldas',
            'state_id' => '17',
            'city_id' => '273',
            'acronym' => 'CORPOCALDAS',
            'address' => 'Calle 21 23-22 Edificio Atlas Pisos 12-13-14- 15-16-20 y 22',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional del Cesar',
            'state_id' => '20',
            'city_id' => '413',
            'acronym' => 'CORPOCESAR',
            'address' => 'Km 2 vía La Paz. Lote 1 U.I.C Casa e´ Campo. Frente a la feria ganadera',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional de Chivor',
            'state_id' => '15',
            'city_id' => '305',
            'acronym' => 'CORPOCHIVOR',
            'address' => 'Carrera 5 No. 10-125',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional de La Guajira',
            'state_id' => '44',
            'city_id' => '179',
            'acronym' => 'CORPOGUAJIRA',
            'address' => 'Cra. 7A #12-15',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional del Guavio',
            'state_id' => '25',
            'city_id' => '364',
            'acronym' => 'CORPOGUAVIO',
            'address' => 'Carrera 7 No. 1A-52',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación para el Desarrollo Sostenible de la Mojana y el San Jorge',
            'state_id' => '70',
            'city_id' => '582',
            'acronym' => 'CORPOMOJANA',
            'address' => 'Cra 21 # 21A - 44',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional de Nariño',
            'state_id' => '52',
            'city_id' => '767',
            'acronym' => 'CORPONARIÑO',
            'address' => 'Calle 25 7 Este – 84 Finca Lope Via La Carolina',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional de la Frontera Nororiental',
            'state_id' => '54',
            'city_id' => '753',
            'acronym' => 'CORPONOR',
            'address' => 'Calle 13 Av. El Bosque No. 3E-278',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional de la Orinoquía',
            'state_id' => '85',
            'city_id' => '786',
            'acronym' => 'CORPOORINOQUIA',
            'address' => 'Cra 23 N° 18-31',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación para el Desarrollo Sostenible del Urabá',
            'state_id' => '5',
            'city_id' => '746',
            'acronym' => 'CORPOURABA',
            'address' => 'Cll 92 No. 98-39 ',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional del Tolima',
            'state_id' => '73',
            'city_id' => '825',
            'acronym' => 'CORTOLIMA',
            'address' => 'Av. Ferrocarril con 44',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional del Atlántico',
            'state_id' => '8',
            'city_id' => '4',
            'acronym' => 'CRA',
            'address' => 'Calle 66 No. 54 -43',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional del Cauca',
            'state_id' => '19',
            'city_id' => '60',
            'acronym' => 'CRC',
            'address' => 'Carrera 7 # 1N-28',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional del Quindío',
            'state_id' => '63',
            'city_id' => '974',
            'acronym' => 'CRQ',
            'address' => 'Calle 19 Norte # 19 - 55 B',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional del Sur de Bolívar',
            'state_id' => '13',
            'city_id' => '458',
            'acronym' => 'CSB',
            'address' => 'Calle 16 N° 10-27',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional del Valle del Cauca',
            'state_id' => '76',
            'city_id' => '167',
            'acronym' => 'CVC',
            'address' => 'Carrera 57 No. 11 – 73',
            'active' => '1',
        ]);
		
		Group::create([
            'name' => 'Corporación Autónoma Regional de los Valles del Sinú y del San Jorge',
            'state_id' => '23',
            'city_id' => '403',
            'acronym' => 'CVS',
            'address' => 'Carrera 6 N° 61-25',
            'active' => '1',
        ]);       
        
        Group::create([
            'name' => 'Grupo SINA',
            'state_id' => '11',
            'city_id' => '1082',
            'acronym' => 'Grupo SINA',
            'address' => 'Cl. 37 #No. 8-40',
            'active' => '1',
        ]);

        Group::create([
            'name' => 'Oficina de planeación',
            'state_id' => '11',
            'city_id' => '1082',
            'acronym' => 'OP',
            'address' => 'Cl. 37 #No. 8-40',
            'active' => '1',
        ]);

        Group::create([
            'name' => 'Subdirección de Administración Financiera',
            'state_id' => '11',
            'city_id' => '1082',
            'acronym' => 'SAF',
            'address' => 'Cl. 37 #No. 8-40',
            'active' => '1',
        ]);
    }
}
