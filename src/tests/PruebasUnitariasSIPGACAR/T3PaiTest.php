<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T3PaiTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_CreatePAI()
    {
        $grupo = $this->createGrupo();
        $pIdGrupo = $grupo->id;

        $data = [
            'group_id' => $pIdGrupo,
            'name' => 'PAI PRUEBA',
            'start_date' => now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
            'end_date' => now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
            'director_name' => $this->faker->name,
            'approved' => false,
        ];

        $params = ['query' => "
        mutation {createPAI(input:{" . '
            group_id: ' . $data['group_id'] . ',
            name: "' . $data['name'] . '",
            start_date: "' . $data['start_date'] . '",
            end_date: "' . $data['end_date'] . '",
            director_name: "' . $data['director_name'] . '",
            approved: false
            }) {
            id, start_date, end_date, approved
            }}
        ', ];

        $response = $this->postGraphQL($params);
        $verify = [
            'start_date' => $data['start_date'],
            'end_date' => $data['end_date'],
            'approved' => $data['approved'],
        ];

        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createPAI' => [
                'id',
            ]]])
            ->assertJsonFragment($verify);
    }

    public function test_UpDatePAI()
    {
        $pai = $this->createPAI();
        $pIdPAI = $pai->id;

        $data = [
            'id' => $pIdPAI,
            'name' => "PAI UPATE {$this->faker->name}",
            'start_date' => now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
            'end_date' => now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
            'director_name' => $this->faker->name,
            'approved' => false,
        ];

        $params = ['query' => "
        mutation {updatePAI(input:{" . '
            id: ' . $data['id'] . ',
            name: "' . $data['name'] . '",
            start_date: "' . $data['start_date'] . '",
            end_date: "' . $data['end_date'] . '",
            director_name: "' . $data['director_name'] . '",
            approved: false
            }) {
            id, start_date, end_date, approved
            }}
        ', ];

        $response = $this->postGraphQL($params);
        $verify = [
            'start_date' => $data['start_date'],
            'end_date' => $data['end_date'],
            'approved' => $data['approved'],
        ];

        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updatePAI' => [
                'id',
            ]]])
            ->assertJsonFragment($verify);

    }

    public function test_DeletePAI()
    {
        $pai = $this->createPAI();
        $pIdPAI = $pai->id;
        $response = $this->graphQL("mutation {deletePAI(input:{id:$pIdPAI}){id} }");
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['deletePAI' => [
                'id'
            ]]]);
           
    }

}
