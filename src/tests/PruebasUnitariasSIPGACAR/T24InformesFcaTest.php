<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T24InformesFcaTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */

  public function test_CreateInformesFca()
  {
    $pai = $this->createPAI();
    $pIdPAI = $pai->id;
    $grupo = $this->createGrupo();
    $pIdGrupo= $grupo->id;
    $data = [
        'file' => $this->faker->text,
        'filePago' => $this->faker->text,
        'date' =>  now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
        'archivoPago' => $this->faker->boolean,
        'status' => $this->faker->boolean,
        'pai_id' => $pIdPAI,
        'group_id' => $pIdGrupo,
    ];

    $params = ['query' => "
    mutation {createFca(input:{" . '
        file: "' . $data['file'] . '",
        filePago:  "' . $data['filePago'] . '",
        date: "' . $data['date'] . '",
        archivoPago:  ' . json_encode($data['archivoPago']) . ',
        status:  ' . json_encode($data['status']) . ',
        pai_id: ' . $data['pai_id'] . ',
        group_id: ' . $data['group_id'] . ',

        }) {
        id, file, filePago, date,status , pai_id, group_id
        }}
    ', ];

    $response = $this->postGraphQL($params);
    $response
        ->assertSuccessful()
        ->assertJsonStructure(['data' => ['createFca' => [
            'id',
        ]]]);

  }

  public function test_UpdateInformesFca()
  {
    $pai = $this->createPAI();
    $pIdPAI = $pai->id;
    $grupo = $this->createGrupo();
    $pIdGrupo= $grupo->id;
    $informeFCA = $this->CreateInformesFca();
    $idInformesFCA =   $informeFCA->id;
    $data = [
        'id' => $idInformesFCA,
        'file' => $this->faker->text,
        'filePago' => $this->faker->text,
        'date' =>  now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
        'archivoPago' => $this->faker->boolean,
        'status' => $this->faker->boolean,
        'pai_id' => $pIdPAI,
        'group_id' => $pIdGrupo,
    ];

    $params = ['query' => "
    mutation {updateFca(input:{" . '
        id: "' . $data['id'] . '",
        file: "' . $data['file'] . '",
        filePago:  "' . $data['filePago'] . '",
        date: "' . $data['date'] . '",
        archivoPago:  ' . json_encode($data['archivoPago']) . ',
        status:  ' . json_encode($data['status']) . ',
        pai_id: ' . $data['pai_id'] . ',
        group_id: ' . $data['group_id'] . ',

        }) {
        id, file, filePago, date,status , pai_id, group_id
        }}
    ', ];

    $response = $this->postGraphQL($params);
    $response
        ->assertSuccessful()
        ->assertJsonStructure(['data' => ['updateFca' => [
            'id',
        ]]]);

  }



}