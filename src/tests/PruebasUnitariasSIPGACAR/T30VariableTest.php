<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T30VariableTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_CreateVariable()
    {

        $domain = $this->createDomain();
        $IdDomain = $domain->id;
        $indicator = $this->createIndicator();
        $IdIndicator = $indicator->id;
        $MasterGeodata = $this->CreateMasterGeodata();
        $idMasterGeodata = $MasterGeodata->id;
       
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
            'name_weighing' => $this->faker->text,
            'abbreviated_weighing' => $this->faker->text,
            'weighing_in' => $IdDomain,
            'indicator_id' => $IdIndicator,
            'phases' => [[
                'name' => $this->faker->name,
                'percentage' => $this->faker->numberBetween(10, 100),
                'value' => $this->faker->numberBetween(1000, 2000000),
            ]],

            'indicador_geodata' => [[
                'master_geodata_id' => $idMasterGeodata,
            ]],

        ];

        $params = ['query' => "
    mutation {createVariable(input:{" . '

        category_name: "' . $data['category_name'] . '",
        phase_have:  ' . json_encode($data['phase_have']) . ',
        category_weighing: "' . $data['category_weighing'] . '",
        numerator_name: "' . $data['numerator_name'] . '",
        abbreviated_numerator: "' . $data['abbreviated_numerator'] . '",
        numerator_in: ' . $data['numerator_in'] . ',
        denominator_name: "' . $data['denominator_name'] . '",
        abbreviated_denominator: "' . $data['abbreviated_denominator'] . '",
        denominator_in: ' . $data['denominator_in'] . ',
        name_weighing: "' . $data['name_weighing'] . '",
        abbreviated_weighing: "' . $data['abbreviated_weighing'] . '",
        weighing_in: ' . $data['weighing_in'] . ',
        indicator_id: ' . $data['indicator_id'] . ',
        phases: { create: [{
            name: "' . $data['phases'][0]['name'] . '",
            percentage: ' . $data['phases'][0]['percentage'] . ',
            value: ' . $data['phases'][0]['value'] . ',
        }]},
        indicador_geodata: {create: [{
            master_geodata_id: ' . $data['indicador_geodata'][0]['master_geodata_id'] . ',

        }]},

        }) {
            id,  phases {id, name, percentage, value},  indicador_geodata {id, master_geodata_id}
        }}
    '];

        $response = $this->postGraphQL($params);
        $response

            ->assertSuccessful();

        $VariableId = $response->json('data.createVariable.id');

        $this->assertDatabaseHas('variables', [
            'id' => $VariableId,
            'denominator_in' => $IdDomain,
            'indicator_id' => $IdIndicator,
        ]);

    }

    public function test_deleteVariable()
    {   
        $variable = $this->CreateVariable();
        $idVarible = $variable->id;
        $response = $this->graphQL("mutation {deleteVariable(input:[{id:$idVarible,}]){id} }");
        $response
        ->assertSuccessful();
        $idPhase = $response->json('data.deleteVariable.id');
    }

    
    public function test_deleteAllVariable()
    {   
        $variable = $this->CreateVariable();
        $idVarible = $variable->id;
        $response = $this->graphQL("mutation {deleteAllVariable(input:[{[id:$idVarible,]}]){id} }");
        $response
        ->assertSuccessful();
        $idPhase = $response->json('data.deleteAllVariable.id');
    }

 

}
