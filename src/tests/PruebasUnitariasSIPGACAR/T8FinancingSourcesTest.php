<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T8FinancingSourcesTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_CreateFinancingSources()
    {
        $data = [
            'father_id' => 1,
            'code' => $this->faker->bothify('###'),
            'name' => "Fuente de financiación {$this->faker->name}",
            'description' => $this->faker->text,
            'final_level' => $this->faker->boolean,
        ];
 
        $params = ['query' => "
        mutation {createFinancingSources(input:{" . '
            father_id: ' . $data['father_id'] . ',
            code: "' . $data['code'] . '",
            name: "' . $data['name'] . '",
            description: "' . $data['description'] . '",
            final_level: ' . json_encode($data['final_level']) . ',
            }) {
            id, father_id, code, name, description, final_level
            }}
        ', ];
       
        $response = $this->postGraphQL($params);
        
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createFinancingSources' => [
                'id'
            ]]])
            ->assertJsonFragment($data);
    }
   
    public function test_UpDateFinancingSources()
    {   
        $fuente = $this->createFuenteFinanciacion();
        $fuenteID =   $fuente->id;
        $data = [
            'id' =>  $fuenteID,
            'code' =>  "codigo update {$this->faker->name}",
            'name' => "Fuente de financiación {$this->faker->bothify('###')}",
            'description' => " update {$this->faker->text}",
            'final_level' => $this->faker->boolean,
        ];
        
        $params = ['query' => "
        mutation {updateFinancingSources(input:{" . '
            id: ' . $data['id'] . ',
            code: "' . $data['code'] . '",
            name: "' . $data['name'] . '",
            description: "' . $data['description'] . '",
            final_level: ' . json_encode($data['final_level']) . ',
            }) {
            id,  code, name, description, final_level
            }}
        ', ];
       
        $response = $this->postGraphQL($params);
        
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updateFinancingSources' => [
                'id'
            ]]]); 
       
    }
    
    public function test_DeleteFinancingSources()
    {  $fuente = $this->createFuenteFinanciacion();
        $fuenteID =   $fuente->id;
        $response = $this->graphQL("mutation {deleteFinancingSources(input:{id:$fuenteID,}){id} }");
        $response
        ->assertSuccessful()
        ->assertJsonStructure(['data' => ['deleteFinancingSources' => [
            'id',
        ]]]);
    }
    


}
