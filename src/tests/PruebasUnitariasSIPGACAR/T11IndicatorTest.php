<?php
namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T11IndicatorTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_CreateIndicator()
    {

        $domain = $this->createDomain();
        $pIdomain = $domain->id;
        $grupo = $this->createGrupo();
        $domain = $this->createDomain();
        $IdDomain = $domain->id;

        $MasterGeodata = $this->CreateMasterGeodata();
        $idMasterGeodata = $MasterGeodata->id;
        $data = [
            'type' => $pIdomain,
            'calcule_type' => $pIdomain,
            'category_type' => $pIdomain,
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
            "variables" => [[

                'category_name' => $this->faker->name,
                'phase_have' => $this->faker->boolean,
                'category_weighing' => $this->faker->text,
                'numerator_name' => $this->faker->text,
                'abbreviated_numerator' => $this->faker->text,
                'numerator_in' => $IdDomain,
                'denominator_in' => $IdDomain,
                'denominator_name' => $this->faker->text,
                'abbreviated_denominator' => $this->faker->text,
                'name_weighing' => $this->faker->text,
                'abbreviated_weighing' => $this->faker->text,
                'weighing_in' => $IdDomain,

                'phases' => [[
                    'name' => $this->faker->name,
                    'percentage' => $this->faker->numberBetween(10, 100),
                    'value' => $this->faker->numberBetween(1000, 2000000),
                ]],

                'indicador_geodata' => [[
                    'master_geodata_id' => $idMasterGeodata,
                ]],

            ]],
        ];

        $params = ['query' => "
        mutation {createIndicators(input:{" . '
            type: ' . $data['type'] . ',
            calcule_type: ' . $data['calcule_type'] . ',
            category_type: ' . $data['category_type'] . ',
            name: "' . $data['name'] . '",
            abbreviated_name: "' . $data['abbreviated_name'] . '",
            definition: "' . $data['definition'] . '",
            url: "' . $data['url'] . '",
            unit_id: ' . $data['unit_id'] . ',
            result_name: "' . $data['result_name'] . '",
            complementary_result: "' . $data['complementary_result'] . '",
            complementary_in: ' . json_encode($data['complementary_in']) . ',
            calcule_in: ' . json_encode($data['calcule_in']) . ',
            parent_id: ' . $data['parent_id'] . ',
            group_id: ' . $data['group_id'] . ',
            variables: { create: [{

                category_name: "' . $data['variables'][0]['category_name'] . '",
                phase_have:  ' . json_encode($data['variables'][0]['phase_have']) . ',
                category_weighing: "' . $data['variables'][0]['category_weighing'] . '",
                numerator_name: "' . $data['variables'][0]['numerator_name'] . '",
                abbreviated_numerator: "' . $data['variables'][0]['abbreviated_numerator'] . '",
                numerator_in: ' . $data['variables'][0]['numerator_in'] . ',
                denominator_name: "' . $data['variables'][0]['denominator_name'] . '",
                abbreviated_denominator: "' . $data['variables'][0]['abbreviated_denominator'] . '",
                denominator_in: ' . $data['variables'][0]['denominator_in'] . ',
                name_weighing: "' . $data['variables'][0]['name_weighing'] . '",
                abbreviated_weighing: "' . $data['variables'][0]['abbreviated_weighing'] . '",
                weighing_in: ' . $data['variables'][0]['weighing_in'] . ',

                phases: { create: [{
                    name: "' . $data['variables'][0]['phases'][0]['name'] . '",
                    percentage: ' . $data['variables'][0]['phases'][0]['percentage'] . ',
                    value: ' . $data['variables'][0]['phases'][0]['value'] . ',
                }]},
                indicador_geodata: {create: [{
                    master_geodata_id: ' . $data['variables'][0]['indicador_geodata'][0]['master_geodata_id'] . ',

                }]},
                }]},


            }) {
              id
            }}
        ', ];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful();

        $Indicatord = $response->json('data.createIndicators.id');

        $this->assertDatabaseHas('indicators', [
            'id' => $Indicatord,
            'calcule_type' => $pIdomain,
            'unit_id' => $pIdomain,
        ]);
    }

    public function test_UpdateIndicator()
    {
        $indicator = $this->createIndicator();
        $IdIndicator = $indicator->id;
        $IdDomain = $indicator->type;
        $grupo = $this->createGrupo();
        $MasterGeodata = $this->CreateMasterGeodata();
        $idMasterGeodata = $MasterGeodata->id;
        $phase = $this->CreatePhase();   
        $idPhase =  $phase->id;
        $MasterGeodata = $this->CreateMasterGeodata();
        $idMasterGeodata =  $MasterGeodata->id;
        $variable = $this->CreateVariable();
        $idVarible = $variable->id;
        $data = [
            'id' => "{$IdIndicator}",
            'type' => $IdDomain,
            'calcule_type' => $IdDomain,
            'category_type' => $IdDomain,
            'name' => "Indicador  update {$this->faker->name}",
            'abbreviated_name' => "abbreviated_name  {$this->faker->lexify('???')}",
            'definition' => $this->faker->text,
            'url' => "URL {$this->faker->name}",
            'unit_id' => $IdDomain,
            'result_name' => "Result {$this->faker->name}",
            'complementary_result' => "complementary_result {$this->faker->name}",
            'complementary_in' => $this->faker->boolean,
            'calcule_in' => $this->faker->boolean,
            'parent_id' => 1,
            'group_id' => $grupo->id,
            "variables" => [[
                'id' => $idVarible,
                'category_name' => $this->faker->name,
                'phase_have' => $this->faker->boolean,
                'category_weighing' => $this->faker->text,
                'numerator_name' => $this->faker->text,
                'abbreviated_numerator' => $this->faker->text,
                'numerator_in' => $IdDomain,
                'denominator_in' => $IdDomain,
                'denominator_name' => $this->faker->text,
                'abbreviated_denominator' => $this->faker->text,
                'name_weighing' => $this->faker->text,
                'abbreviated_weighing' => $this->faker->text,
                'weighing_in' => $IdDomain 
            ]],
        ];
    
        $params = ['query' => "
        mutation {updateIndicators(input:{" . '
            id: ' . $data['id'] . ',
            type: ' . $data['type'] . ',
            calcule_type: ' . $data['calcule_type'] . ',
            category_type: ' . $data['category_type'] . ',
            name: "' . $data['name'] . '",
            abbreviated_name: "' . $data['abbreviated_name'] . '",
            definition: "' . $data['definition'] . '",
            url: "' . $data['url'] . '",
            unit_id: ' . $data['unit_id'] . ',
            result_name: "' . $data['result_name'] . '",
            complementary_result: "' . $data['complementary_result'] . '",
            complementary_in: ' . json_encode($data['complementary_in']) . ',
            calcule_in: ' . json_encode($data['calcule_in']) . ',
            parent_id: ' . $data['parent_id'] . ',
            group_id: ' . $data['group_id'] . ',
            variables: { update: [{
                id: ' . $data['variables'][0]['id'] . ',
                category_name: "' . $data['variables'][0]['category_name'] . '",
                phase_have:  ' . json_encode($data['variables'][0]['phase_have']) . ',
                category_weighing: "' . $data['variables'][0]['category_weighing'] . '",
                numerator_name: "' . $data['variables'][0]['numerator_name'] . '",
                abbreviated_numerator: "' . $data['variables'][0]['abbreviated_numerator'] . '",
                numerator_in: ' . $data['variables'][0]['numerator_in'] . ',
                denominator_in: ' . $data['variables'][0]['denominator_in'] . ',
                denominator_name: "' . $data['variables'][0]['denominator_name'] . '",
                abbreviated_denominator: "' . $data['variables'][0]['abbreviated_denominator'] . '",
                name_weighing: "' . $data['variables'][0]['name_weighing'] . '",
                abbreviated_weighing: "' . $data['variables'][0]['abbreviated_weighing'] . '",
                weighing_in: ' . $data['variables'][0]['weighing_in'] . ',

                }]},
             }) {
              id
            }}
        ', ];

        $response = $this->postGraphQL($params);
        $response

            ->assertSuccessful();

        $VariableId = $response->json('data.updateIndicators.id');

        $this->assertDatabaseHas('indicators', [
            'id' => $VariableId,
            'category_type' => $IdDomain,
            'calcule_type' =>  $IdDomain,
        ]);
    }

    public function test_deleteIndicator()
    {
        $indicator = $this->createIndicator();
        $IdIndicator = $indicator->id;
        $response = $this->graphQL("mutation {deleteIndicators(input:{id:  $IdIndicator,}){id} }");
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['deleteIndicators' => [
                'id',
            ]]]);
    }

}
