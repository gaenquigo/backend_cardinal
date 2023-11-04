<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T27PhaseTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */
    public function test_CreatePhase()
    {
       
        $data = [
            'name' => $this->faker->name,
            'percentage' =>  $this->faker->numberBetween(10, 100),
            'value' => $this->faker->numberBetween(10000, 9999999),
            'variable_id' => $this->faker->numberBetween(1, 10),
        
        ];

        $params = ['query' => "
    mutation {createPhase(input:{" . '
        name: "' . $data['name'] . '",
        percentage: ' . $data['percentage'] . ',
        value: ' . $data['value'] . ',
        variable_id: ' . $data['variable_id'] . ',
        
        }) {
        id, name, percentage, value, variable_id
        }}
    ', ];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createPhase' => [
                'id',
            ]]]);

    }

    
    public function test_DeletePhase()
    {   
        $phase = $this->CreatePhase();   
        $idPhase =  $phase->id;
        $response = $this->graphQL("mutation {deletePhase(input:[{id:$idPhase,}]){id} }");
        $response
        ->assertSuccessful();
        $idPhase = $response->json('data.deletePhase.id');
    }

}
