<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T18ApprovePAITest extends TestCase
{
  /** Prubas al API BackEnd SIPGACAR de GraphQL     */

  public function test_CreateApprovePAI()
  {
    $pai = $this->createPAI();
    $pIdPAI = $pai->id;
    $data = [
        'file' => $this->faker->text,
        'date' => now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
        'resolution_number' => $this->faker->text,
        'pai_id' => $pIdPAI,
    ];

    $params = ['query' => "
    mutation {createApprovePAI(input:{" . '
        file: "' . $data['file'] . '",
        date:  "' . $data['date'] . '",
        resolution_number: "' . $data['resolution_number'] . '",
        pai_id: ' . $data['pai_id'] . ',

        }) {
        id, file, date, resolution_number,pai_id
        }}
    ', ];

    $response = $this->postGraphQL($params);
    $response
        ->assertSuccessful()
        ->assertJsonStructure(['data' => ['createApprovePAI' => [
            'id',
        ]]]);

  }


}