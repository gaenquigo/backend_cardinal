<?php

namespace Tests;

use App\Models\Activity;
use App\Models\ActivitySource;
use App\Models\ApprovePAI;
use App\Models\Cost_Source;
use App\Models\Date;
use App\Models\Domain;
use App\Models\EvidenceAdvance;
use App\Models\EvidenceFinancial;
use App\Models\Financial_cost;
use App\Models\Financial_Plan;
use App\Models\Financing_Source;
use App\Models\Group;
use App\Models\Implementation;
use App\Models\Indicator;
use App\Models\Objective;
use App\Models\ObjectiveProduct;
use App\Models\PAI;
use App\Models\Payment;
use App\Models\Program;
use App\Models\Project;
use App\Models\Rol;
use App\Models\StrategicLine;
use App\Models\User;
use App\Models\InformesFca; 
use App\Models\File; 
use App\Models\Phase;
use App\Models\Master_Geodata; 
use App\Models\Variable;  
use App\Models\Indicador_Geodata;  
use App\Suggestion; 
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Nuwave\Lighthouse\Testing\MakesGraphQLRequests;
use Illuminate\Foundation\Testing\DatabaseTransactions;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use MakesGraphQLRequests;
    use WithFaker;
    use DatabaseTransactions;

    /**
     * El método setUp se ejecuta antes de cada prueba.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->login(); // Esto sirve para que cada prueba inicie sesión antes de ejecutarse
    }

    protected function createRol()
    {
        $data = [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
        ];

        return Rol::create($data);
    }

    protected function createGrupo()
    {
        $data = [
            'name' => "Grupo {$this->faker->name}",
            'city_id' => $this->faker->numberBetween(1, 200),
            'state_id' => $this->faker->randomElement([5, 8, 11, 13, 15, 17]),
            'acronym' => $this->faker->lexify('???'),
            'address' => $this->faker->streetAddress,
        ];

        return Group::create($data);
    }

    protected function createDomain()
    {

        $data = [
            'name' => "nombre {$this->faker->name}",
            'description' => $this->faker->text,
            'state' => $this->faker->boolean,
            'domain' => "domain {$this->faker->name}",
        ];

        return Domain::create($data);

    }

    protected function createIndicator()
    {

        $domain = $this->createDomain();
        $pIdomain = $domain->id;
        $grupo = $this->createGrupo();

        $data = [
            'type' => $pIdomain,
            'calcule_type' => 1,
            'category_type' => 1,
            'name' => "Indicador {$this->faker->name}",
            'abbreviated_name' => "abbreviated_name  {$this->faker->lexify('???')}",
            'definition' => $this->faker->text,
            'url' => "URL {$this->faker->name}",
            'unit_id' => $pIdomain,
            'result_name' => "Result {$this->faker->name}",
            'complementary_result' => "complementary_result {$this->faker->name}",
            'complementary_in' => $this->faker->boolean,
            'calcule_in' => $this->faker->boolean,
            'parent_id' => 1,
            'group_id' => $grupo->id,
        ];

        return Indicator::create($data);

    }

    protected function createUser()
    {
        $grupo = $this->createGrupo();

        $data = [
            'name' => $this->faker->name,
            'last_name' => $this->faker->lastName,
            'type_document' => $this->faker->randomElement(['CEDULA']),
            'document' => "{$this->faker->numberBetween(1000000, 9000000)}",
            'email' => $this->faker->email,
            'end_date' => now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
            'group_id' => $grupo->id,
            'password' => Hash::make('SIPGA2020'),
        ];

        return User::create($data);
    }

    protected function login()
    {
        return $this->graphQL('{login(email: "admin@test.com", password: "admin123")
            {user {id, email} token{access_token}}}');
    }

    protected function createPAI()
    {
        $grupo = $this->createGrupo();

        $data = [
            'group_id' => $grupo->id,
            'name' => "PAI {$this->faker->name}",
            'start_date' => now()->toDateString(),
            'end_date' => now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
            'director_name' => $this->faker->name,
            'approved' => false,
        ];

        return PAI::create($data);
    }

    protected function createEstrategia()
    {
        $pai = $this->createPAI();
        $pIdPAI = $pai->id;
        $data = [
            'p_a_i_id' => $pIdPAI,
            'name' => "Linea Estrategia {$this->faker->name}",
            'weighing' => $this->faker->numberBetween(10, 100),
        ];

        return StrategicLine::create($data);
    }

    protected function createPrograma()
    {
        $estrategia = $this->createEstrategia();
        $pIdEstrategia = $estrategia->id;

        $data = [
            'strategic_line_id' => $pIdEstrategia,
            'car_program' => "Programa {$this->faker->name}",
            'national_program_id' => 15,
            'weighing' => $this->faker->numberBetween(10, 100),
        ];

        return Program::create($data);
    }

    protected function createProject()
    {

        $programa = $this->createPrograma();
        $pIdprograma = $programa->id;
        $data = [
            'program_id' => $pIdprograma,
            'project' => "Proyecto {$this->faker->name}",
            'weighing' => $this->faker->numberBetween(10, 100),
        ];

        return Project::create($data);
    }
    protected function createObjetivo()
    {

        $project = $this->createProject();
        $pIdproject = $project->id;
        $data = [
            'project_id' => $pIdproject,
            'objective' => "Objetivo {$this->faker->name}",
            'weighing' => $this->faker->numberBetween(10, 100),
        ];

        return Objective::create($data);
    }

    protected function createFuenteFinanciacion()
    {

        $data = [
            'father_id' => 1,
            'code' => $this->faker->bothify('###'),
            'name' => "Fuente de financiación {$this->faker->name}",
            'description' => $this->faker->text,
            'final_level' => $this->faker->boolean,
        ];

        return Financing_Source::create($data);
    }

    protected function createFinancialPlan()
    {

        $pai = $this->createPAI();
        $pIdPAI = $pai->id;
        $fuente = $this->createFuenteFinanciacion();
        $fuenteID = $fuente->id;
        $data = [
            'p_a_i_id' => $pIdPAI,
            'source_id' => $fuenteID,
            'value' => $this->faker->numberBetween(500000, 9000000),
            'investment_percentage' => $this->faker->numberBetween(10, 100),
            'investment' => $this->faker->numberBetween(500000, 9000000),
            'investment_balance' => $this->faker->numberBetween(10000, 1000000),
            'functioning_percentage' => $this->faker->numberBetween(10, 100),
            'functioning' => $this->faker->numberBetween(100000, 9000000),
            'functioning_balance' => $this->faker->numberBetween(10000, 1000000),
            'debt_service_percentage' => $this->faker->numberBetween(10, 100),
            'debt_service' => $this->faker->numberBetween(100000, 9000000),
            'debt_service_balance' => $this->faker->numberBetween(20000, 2000000),
            'fund_percentage' => $this->faker->numberBetween(10, 100),
            'fund' => $this->faker->numberBetween(100000, 3000000),
            'fund_balance' => $this->faker->numberBetween(100000, 3000000),
            'year' => $this->faker->randomElement([1, 2, 3, 4]),
        ];
        return Financial_Plan::create($data);
    }

    protected function createObjetivoProducto()
    {

        $objetivo = $this->createObjetivo();
        $pIdobjetivo = $objetivo->id;
        $domain = $this->createDomain();
        $pIdProducto = $domain->id;
        $domainNational = $this->createDomain();
        $pIdNational = $domainNational->id;
        $indicador = $this->createIndicator();
        $pIdicador = $indicador->id;
        $data = [
            'objective_id' => $pIdobjetivo,
            'product_id' => $pIdProducto,
            'product_other' => "Otro producto {$this->faker->name}",
            'goal_1' => $this->faker->numberBetween(10, 100),
            'goal_1_balance' => $this->faker->numberBetween(500000, 9000000),
            'goal_2' => $this->faker->numberBetween(10000, 1000000),
            'goal_2_balance' => $this->faker->numberBetween(10, 100),
            'goal_3' => $this->faker->numberBetween(100000, 9000000),
            'goal_3_balance' => $this->faker->numberBetween(10000, 1000000),
            'goal_4' => $this->faker->numberBetween(10, 100),
            'goal_4_balance' => $this->faker->numberBetween(100000, 9000000),
            'total_goal' => $this->faker->numberBetween(20000, 2000000),
            'weighing' => $this->faker->numberBetween(1, 100),
            'unit_goal' => $this->faker->numberBetween(100000, 3000000),
            'indicator_national_id' => $pIdicador,
            'indicator_ods_id' => $pIdicador,
            'national_policy_id' => $pIdNational,

        ];

        return ObjectiveProduct::create($data);
    }

    protected function createActivity()
    {

        $objetivoProducto = $this->createObjetivoProducto();
        $IdObjetivo = $objetivoProducto->objective_id;
        $IdProducto = $objetivoProducto->product_id;

        $ocdeCategory = $this->createDomain();
        $IdocdeCategory = $ocdeCategory->id;

        $ocdeIndicator = $this->createDomain();
        $IdocdeIndicator = $ocdeIndicator->id;

        $data = [
            'objective_id' => $IdObjetivo,
            'product_id' => $IdProducto,
            'name' => "Activity {$this->faker->name}",
            'goal' => $this->faker->numberBetween(10, 100),
            'goal_1' => $this->faker->numberBetween(10, 100),
            'goal_2' => $this->faker->numberBetween(10, 100),
            'goal_3' => $this->faker->numberBetween(10, 100),
            'goal_4' => $this->faker->numberBetween(10, 100),
            'weighing' => $this->faker->numberBetween(10, 100),
            'ocde_category_id' => $IdocdeCategory,
            'ocde_indicator_id' => $IdocdeIndicator,
            'answer_sentence' => "answer_sentence {$this->faker->name}",
            'geometry' => $this->faker->numberBetween(1, 10),

        ];
        return Activity::create($data);

    }

    protected function createActivitySource()
    {
        $activity = $this->createActivity();
        $idActivity = $activity->id;
        $fuente = $this->createFinancialPlan();
        $idFunete = $fuente->id;

        $data = [
            'activity_id' => $idActivity,
            'source_id' => $idFunete,
            'goal' => $this->faker->numberBetween(10, 100),
            'value' => $this->faker->numberBetween(100000, 99999999),
            'evidence_balance' => $this->faker->numberBetween(100000, 99999999),
            'age' => $this->faker->numberBetween(1, 4),

        ];
        $params = ['query' => "
        mutation {createActivitySource(input:{" . '
            activity_id: ' . $data['activity_id'] . ',
            source_id: ' . $data['source_id'] . ',
            goal: ' . $data['goal'] . ',
            value: ' . $data['value'] . ',
            evidence_balance: ' . $data['evidence_balance'] . ',
            age: ' . $data['age'] . ',
            }) {
            id
            }}
        ', ];

        return ActivitySource::create($data);

    }

    protected function createEvidence()
    {

        $activity = $this->createActivity();
        $idActivity = $activity->id;
        $domain = $this->createDomain();
        $pIdomain = $domain->id;
        $data = [
            'year' => $this->faker->numberBetween(1, 4),
            'value' => $this->faker->numberBetween(100000, 99999999),
            'date_report' => now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
            'type' => "type {$this->faker->name}",
            'how_is_done' => "Descripcion {$this->faker->name}",
            'contract_number' => "Contract {$this->faker->name}",
            'description' => "description {$this->faker->name}",
            'state_id' => $pIdomain,
            'value_state' => $this->faker->numberBetween(1, 5),
            'activity_id' => $idActivity,
            'rezago' => $this->faker->boolean,
            'evidence_advance_id' => null,
        ];

        return EvidenceAdvance::create($data);

    }

    protected function createRezago()
    {

        $activity = $this->createActivity();
        $idActivity = $activity->id;
        $domain = $this->createDomain();
        $pIdomain = $domain->id;
        $data = [
            'year' => $this->faker->numberBetween(1, 4),
            'value' => $this->faker->numberBetween(100000, 99999999),
            'date_report' => now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
            'type' => "type {$this->faker->name}",
            'how_is_done' => "Rezago Descripcion {$this->faker->name}",
            'contract_number' => "Contract {$this->faker->name}",
            'description' => "Rezago description {$this->faker->name}",
            'state_id' => $pIdomain,
            'value_state' => $this->faker->numberBetween(1, 5),
            'activity_id' => $idActivity,
            'rezago' => true,
            'evidence_advance_id' => null,
        ];

        return EvidenceAdvance::create($data);

    }

    protected function createPayment()
    {

        $evidence = $this->createEvidence();
        $idEvidencia = $evidence->id;

        $data = [

            'value' => $this->faker->numberBetween(100000, 99999999),
            'payment' => $this->faker->boolean,
            'payment_date' => now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
            'evidence_id' => $idEvidencia,
        ];

        return Payment::create($data);

    }

    protected function CreateApprovePAI()
    {

        $pai = $this->createPAI();
        $pIdPAI = $pai->id;
        $data = [
            'file' => $this->faker->text,
            'date' => now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
            'resolution_number' => $this->faker->text,
            'pai_id' => $pIdPAI,
        ];

        return ApprovePAI::create($data);

    }

    protected function CreateEvidenceFinancial()
    {

        $activitySource = $this->createActivitySource();
        $idActivitySource = $activitySource->id;
        $evidence = $this->createEvidence();
        $idEvidencia = $evidence->id;
        $data = [
            'value' => $this->faker->numberBetween(100000, 99999999),
            'activity_source_id' => $idActivitySource,
            'evidence_id' => $idEvidencia,
        ];
        return EvidenceFinancial::create($data);

    }

    protected function CreateImplementation()
    {$pai = $this->createPAI();
        $pIdPAI = $pai->id;
        $data = [
            'p_a_i_s_id' => $pIdPAI,
        ];

        return Implementation::create($data);

    }

    protected function createDate()
    {
        $data = [
            'start_date' => now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
            'end_date' => now()->add(60, 'day')->isoFormat('YYYY-MM-DD'),
            'semester' => $this->faker->numberBetween(1, 10),
        ];
        return Date::create($data);

    }

    protected function CreateCostSource()
    {
        $grupo = $this->createGrupo();
        $idGrupo = $grupo->id;
        $data = [
            'father_id' => 1,
            'code' => $this->faker->numberBetween(1, 1000),
            'name' => "Nombre {$this->faker->name}",
            'description' => $this->faker->text,
            'final_level' => $this->faker->boolean,
            'functioning' => $this->faker->boolean,
            'compensation' => $this->faker->boolean,
            'debt_service' => $this->faker->boolean,
            'parent_id' => 1,
            'group_id' => $idGrupo,

        ];
        return Cost_Source::create($data);
    }

    protected function CreateFinancialCost()
    {
        $grupo = $this->createGrupo();
        $idGrupo = $grupo->id;
        $pai = $this->createPAI();
        $pIdPAI = $pai->id;
        $costSource = $this->CreateCostSource();
        $idCostSource = $costSource->id;
        $data = [
            'year' => $this->faker->numberBetween(1, 4),
            'value_bugeted' => $this->faker->numberBetween(1000, 9999999),
            'value_comitted' => $this->faker->numberBetween(1000, 999999),
            'value_required' => $this->faker->numberBetween(1000, 999999),
            'value_paid' => $this->faker->numberBetween(1000, 999999),
            'p_a_i_id' => $pIdPAI,
            'cost_sources_id' => $idCostSource,
            'own' => $this->faker->boolean,
            'nation' => $this->faker->boolean,
            'royalties' => $this->faker->boolean,
            'functioning' => $this->faker->boolean,
            'compensation' => $this->faker->boolean,
            'debt_service' => $this->faker->boolean,
            'debt_service' => $this->faker->boolean,
            'debt_service' => $this->faker->boolean,
            'debt_service' => $this->faker->boolean,
            'complete' => $this->faker->boolean,
            'version' => $this->faker->numberBetween(1, 100),
            'group_id' => $idGrupo,

        ];
        return Financial_cost::create($data);
    }

    protected function CreateInformesFca()
    {
        $pai = $this->createPAI();
        $pIdPAI = $pai->id;
        $grupo = $this->createGrupo();
        $pIdGrupo= $grupo->id;
        $data = [
            'file' => $this->faker->text,
            'filePago' => $this->faker->text,
            'date' =>  now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
            'archivoPago' => $this->faker->boolean,
            'status' => $this->faker->boolean,
            'pai_id' => $pIdPAI,
            'group_id' => $pIdGrupo,
        ];

        return InformesFca::create($data);
    }

    protected function CreateFile()
    {
        $pai = $this->createPAI();
        $pIdPAI = $pai->id;
        $approvePai = $this->CreateApprovePAI();
        $pIdApprovePai = $approvePai->id;
        $informesFca = $this->CreateInformesFca();
        $pIiformesFCA =  $informesFca->id;
        $indicador = $this->createIndicator();
        $pIdIndicador = $indicador->id;

        $data = [
            'file_url' => $this->faker->text,
            'name' => $this->faker->text,
            'type' => $this->faker->text,
            'size' => $this->faker->text,
            'indicator_id' => $pIdIndicador,
            'p_a_i_id' => $pIdPAI,
            'approve_p_a_i_id' => $pIdApprovePai,
            'informesfca_id' => $pIiformesFCA,
        ];

        return File::create($data);
    }

    protected function CreatePhase()
    {
        $data = [
            'name' => $this->faker->name,
            'percentage' =>  $this->faker->numberBetween(10, 100),
            'value' => $this->faker->numberBetween(10000, 9999999),
            'variable_id' => $this->faker->numberBetween(1, 10),
        
        ];

        return Phase::create($data);
    }
    
    protected function CreateMasterGeodata()
    {
         $domain = $this->createDomain();
        $IdDomain = $domain->id;
        $data = [
            'nombre_capa' => $this->faker->name,
            'url' => $this->faker->text,
            'url_metadata' => $this->faker->text,
            'descripcion' => $this->faker->text,
            'categoria' => $IdDomain,
            'tipo' => $IdDomain,
            'capa_wms' => $this->faker->text,
            'posicion' => $this->faker->numberBetween(1, 10),
            'propietario' => $this->faker->numberBetween(1, 10),
            'frecuencia_actualizacion' => $this->faker->numberBetween(1, 20),
            'es_visible' => $this->faker->boolean,
            'es_deprecada' => $this->faker->boolean,
            'anio' => $this->faker->numberBetween(1, 4),

        ];

        return Master_Geodata::create($data);
    }  
   
    protected function CreateVariable()
    { 
        $domain = $this->createDomain();
        $IdDomain = $domain->id;
        $indicator = $this->createIndicator();
        $IdIndicator = $indicator->id;
        $MasterGeodata = $this->CreateMasterGeodata();
        $idMasterGeodata =  $MasterGeodata->id;
        $data = [

            'category_name' => $this->faker->name,
            'phase_have' => $this->faker->boolean,
            'category_weighing' => $this->faker->text,
            'numerator_name' => $this->faker->text,
            'abbreviated_numerator' => $this->faker->text,
            'numerator_in' => $IdDomain,
            'denominator_in' => $IdDomain,
            'denominator_name' => $this->faker->text,
            'abbreviated_denominator' => $this->faker->text,
            'denominator_in' => $IdDomain,
            'name_weighing' => $this->faker->text,
            'abbreviated_weighing' => $this->faker->text,
            'weighing_in' => $IdDomain,
            'indicator_id' =>  $IdIndicator,
            'phases'  =>  [[
                'name' =>  $this->faker->name,
                'percentage'=> $this->faker->numberBetween(10, 100),
                'value' => $this->faker->numberBetween(1000, 2000000)
            ]],

            'indicador_geodata' => [[
                'master_geodata_id' => $idMasterGeodata,
            ]]
            
        ];

        return Variable::create($data);
    }

    protected function CreateIndicadorGeodata()
    {
        $MasterGeodata = $this->CreateMasterGeodata();
        $idMasterGeodata = $MasterGeodata->id;
        $data = [
            'master_geodata_id' => $idMasterGeodata,
        ];

        return Indicador_Geodata::create($data);
    }  

  
    protected function CreateSuggestion()
    {
        $pai = $this->createPAI();
        $pIdPAI = $pai->id;
        $grupo = $this->createGrupo();
        $pIdGrupo = $grupo->id;
        $user = $this->createUser();
        $userID = $user->id;
        $domain = $this->createDomain();
        $IdDomain = $domain->id;

        $data = [
            'user_id' => $userID,
            'domain_id' =>  $IdDomain,
            'p_a_i_id' => $pIdPAI,
            'group_id' =>  $pIdGrupo,
            'suggestion' => $this->faker->text,
         
        ];

        return Suggestion::create($data);
    }  

}
