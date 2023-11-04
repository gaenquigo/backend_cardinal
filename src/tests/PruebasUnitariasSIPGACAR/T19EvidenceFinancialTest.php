<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T19EvidenceFinancialTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_CreateEvidenceFinancial()
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

        $params = ['query' => "
    mutation {createEvidenceFinancial(input:{" . '
        value: ' . $data['value'] . ',
        activity_source_id: ' . $data['activity_source_id'] . ',
        evidence_id: ' . $data['evidence_id'] . ',

        }) {
        id, value, activity_source_id, evidence_id
        }}
    '];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createEvidenceFinancial' => [
                'id',
            ]]]);

    }

    public function test_UpdateEvidenceFinancial()
    {
        $activitySource = $this->createActivitySource();
        $idActivitySource = $activitySource->id;
        $evidence = $this->createEvidence();
        $idEvidencia = $evidence->id;
        $evidenceFinancial = $this->CreateEvidenceFinancial();
        $idEvidenciaFinancial = $evidenceFinancial->id;

        $data = [
            'id' => $idEvidenciaFinancial,
            'value' => $this->faker->numberBetween(100000, 99999999),
            'activity_source_id' => $idActivitySource,
            'evidence_id' => $idEvidencia,
        ];

        $params = ['query' => "
        mutation {updateEvidenceFinancial(input:{" . '
        id: ' . $data['id'] . ',
        value: ' . $data['value'] . ',
        activity_source_id: ' . $data['activity_source_id'] . ',
        evidence_id: ' . $data['evidence_id'] . ',
        }) {
        id, value, activity_source_id, evidence_id
        }}
    '];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updateEvidenceFinancial' => [
                'id',
            ]]]);

    }

    public function test_DeleteEvidenceFinancial()
    {  
        $evidenceFinancial = $this->CreateEvidenceFinancial();
        $idEvidenciaFinancial = $evidenceFinancial->id;
        $response = $this->graphQL("mutation {deleteEvidenceFinancial(input:{id:$idEvidenciaFinancial,}){id} }");
        $response
        ->assertSuccessful()
        ->assertJsonStructure(['data' => ['deleteEvidenceFinancial' => [
            'id',
        ]]]);

    }

}
