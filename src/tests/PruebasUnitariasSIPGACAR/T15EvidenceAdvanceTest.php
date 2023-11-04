<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T15EvidenceAdvanceTest extends TestCase
{
   
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_CreateEvidenceAdvance()
    {
        $activity = $this->createActivity();
        $idActivity = $activity->id;
        $domain = $this->createDomain();
        $pIdomain = $domain->id;
        $data = [
            'year' =>$this->faker->numberBetween(1, 4),
            'value' =>$this->faker->numberBetween(100000, 99999999),
            'date_report' => now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
            'type' => "type {$this->faker->name}",
            'how_is_done' => "Descripcion {$this->faker->name}",
            'contract_number' => "Contract {$this->faker->name}",
            'description' => "description {$this->faker->name}",
            'state_id' =>  $pIdomain,
            'value_state' => $this->faker->numberBetween(1, 5),
            'activity_id' => $idActivity,
            'rezago' =>  $this->faker->boolean,
            'evidence_advance_id' => null
        ];

     
        $params = ['query' => "
        mutation {createEvidenceAdvance(input:{" . '
            year: ' . $data['year'] . ',
            value: ' . $data['value'] . ',
            date_report: "' . $data['date_report'] . '",
            type: "' . $data['type'] . '",
            how_is_done: "' . $data['how_is_done'] . '",
            contract_number: "' . $data['contract_number'] . '",
            description: "' . $data['description'] . '",
            state_id: ' . $data['state_id'] . ',
            value_state: "' . $data['value_state'] . '",
            activity_id: ' . $data['activity_id'] . ',
            rezago: '. json_encode($data['rezago']) . ',   
            evidence_advance_id: null
            }) {
            id, year, value, date_report,type, how_is_done,contract_number, description,
            state_id,value_state,activity_id, rezago
            }}
        '];
  
        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createEvidenceAdvance' => [
                'id',
            ]]]);

    }

    public function test_UpdateEvidenceAdvance()
    {
        
        $activity = $this->createActivity();
        $idActivity = $activity->id;
        $domain = $this->createDomain();
        $pIdomain = $domain->id;
        $evidence = $this->createEvidence();
        $idEvidencia = $evidence->id;
      
        $data = [
            'id' =>$idEvidencia,
            'year' =>$this->faker->numberBetween(1, 4),
            'value' =>$this->faker->numberBetween(100000, 99999999),
            'date_report' => now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
            'type' => "type {$this->faker->name}",
            'how_is_done' => "Descripcion {$this->faker->name}",
            'contract_number' => "Contract {$this->faker->name}",
            'description' => "description {$this->faker->name}",
            'state_id' =>  $pIdomain,
            'value_state' => $this->faker->numberBetween(1, 5),
            'activity_id' => $idActivity,
            'rezago' =>  $this->faker->boolean,
            'evidence_advance_id' => null
        ];
     
        $params = ['query' => "
        mutation {updateEvidenceAdvance(input:{" . '
            id: ' . $data['id'] . ',
            year: ' . $data['year'] . ',
            value: ' . $data['value'] . ',
            date_report: "' . $data['date_report'] . '",
            type: "' . $data['type'] . '",
            how_is_done: "' . $data['how_is_done'] . '",
            contract_number: "' . $data['contract_number'] . '",
            description: "' . $data['description'] . '",
            state_id: ' . $data['state_id'] . ',
            value_state: "' . $data['value_state'] . '",
            activity_id: ' . $data['activity_id'] . ',
            rezago: '. json_encode($data['rezago']) . ',   
            evidence_advance_id: null
            }) {
            id, year, value, date_report,type, how_is_done,contract_number, description,
            state_id,value_state,activity_id, rezago
            }}
        '];
  
        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updateEvidenceAdvance' => [
                'id',
            ]]]);

    }

    public function test_DeleteEvidenceAdvance()
    {  
        $evidence = $this->createEvidence();
        $idEvidencia = $evidence->id;
        $response = $this->graphQL("mutation {deleteEvidenceAdvance(input:{id:$idEvidencia,}){id} }");
        $response
        ->assertSuccessful()
        ->assertJsonStructure(['data' => ['deleteEvidenceAdvance' => [
            'id',
        ]]]);

    }


}