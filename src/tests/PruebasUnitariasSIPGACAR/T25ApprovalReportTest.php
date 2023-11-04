<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T25ApprovalReportTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_CreateApprovalReport()
    {
        $pai = $this->createPAI();
        $pIdPAI = $pai->id;
        $grupo = $this->createGrupo();
        $pIdGrupo = $grupo->id;
        $data = [
            'file' => $this->faker->text,
            'date' => now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
            'agreement' => $this->faker->text,
            'pai_id' => $pIdPAI,
            'group_id' => $pIdGrupo,
        ];

        $params = ['query' => "
    mutation {createApprovalReportI(input:{" . '
        file: "' . $data['file'] . '",
        date: "' . $data['date'] . '",
        agreement: "' . $data['agreement'] . '",
        pai_id: ' . $data['pai_id'] . ',
        group_id: ' . $data['group_id'] . ',

        }) {
        id, file, date, agreement,pai_id , group_id
        }}
    '];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createApprovalReportI' => [
                'id',
            ]]]);

    }
}
