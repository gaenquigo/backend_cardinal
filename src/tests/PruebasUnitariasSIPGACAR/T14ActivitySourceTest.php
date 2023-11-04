<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T14ActivitySourceTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_CreateActivitySource()
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
        '];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createActivitySource' => [
                'id',
            ]]]);

    }

    public function test_UpdateActivitySource()
    {
        $activitySource = $this->createActivitySource();
        $idActivitySource = $activitySource->id;
        $activity = $this->createActivity();
        $idActivity = $activity->id;
        $fuente = $this->createFinancialPlan();
        $idFunete = $fuente->id;

        $data = [
            'id' => $idActivitySource,
            'activity_id' => $idActivity,
            'source_id' => $idFunete,
            'goal' => $this->faker->numberBetween(10, 100),
            'value' => $this->faker->numberBetween(100000, 99999999),
            'evidence_balance' => $this->faker->numberBetween(100000, 99999999),
            'age' => $this->faker->numberBetween(1, 4),

        ];
        $params = ['query' => "
        mutation {updateActivitySource(input:{" . '
            id: ' . $data['id'] . ',
            activity_id: ' . $data['activity_id'] . ',
            source_id: ' . $data['source_id'] . ',
            goal: ' . $data['goal'] . ',
            value: ' . $data['value'] . ',
            evidence_balance: ' . $data['evidence_balance'] . ',
            age: ' . $data['age'] . ',
            }) {
            id
            }}
        '];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updateActivitySource' => [
                'id',
            ]]]);

    }

    public function test_DeleteActitivitySource()
    {
        $activitySource = $this->createActivitySource();
        $idActivitySource = $activitySource->id;
        $response = $this->graphQL("mutation {deleteActivitySource(input:{id:$idActivitySource,}){id} }");
        $response
        ->assertSuccessful()
        ->assertJsonStructure(['data' => ['deleteActivitySource' => [
            'id',
        ]]]);

    }

}
