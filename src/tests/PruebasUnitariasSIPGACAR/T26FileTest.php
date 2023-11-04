<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T26FileTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_CreateFile()
    {
        $pai = $this->createPAI();
        $pIdPAI = $pai->id;
        $approvePai = $this->CreateApprovePAI();
        $pIdApprovePai = $approvePai->id;
        $informesFca = $this->CreateInformesFca();
        $pIiformesFCA = $informesFca->id;
        $indicador = $this->createIndicator();
        $pIdIndicador = $indicador->id;

        $data = [
            'file_url' => $this->faker->text,
            'name' => $this->faker->text,
            'type' => $this->faker->text,
            'size' => $this->faker->text,
            'indicator_id' => $pIdIndicador,
            'p_a_i_id' => $pIdPAI,
            'approve_p_a_i_id' => $pIdApprovePai,
            'informesfca_id' => $pIiformesFCA,
        ];

        $params = ['query' => "
    mutation {createFile(input:{" . '
        file_url: "' . $data['file_url'] . '",
        name: "' . $data['name'] . '",
        type: "' . $data['type'] . '",
        size: "' . $data['size'] . '",
        indicator_id: ' . $data['indicator_id'] . ',
        p_a_i_id: ' . $data['p_a_i_id'] . ',
        approve_p_a_i_id: ' . $data['approve_p_a_i_id'] . ',
        informesfca_id: ' . $data['informesfca_id'] . ',

        }) {
        id, file_url, name, type,size ,
        indicator_id, p_a_i_id,
         approve_p_a_i_id, informesfca_id
        }}
    '];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createFile' => [
                'id',
            ]]]);

    }

    public function test_UpdateFile()
    {
        $pai = $this->createPAI();
        $pIdPAI = $pai->id;
        $approvePai = $this->CreateApprovePAI();
        $pIdApprovePai = $approvePai->id;
        $informesFca = $this->CreateInformesFca();
        $pIiformesFCA = $informesFca->id;
        $indicador = $this->createIndicator();
        $pIdIndicador = $indicador->id;
        $file = $this->CreateFile();
        $pIdFile = $file->id;

        $data = [
            'id' => $pIdFile,
            'file_url' => $this->faker->text,
            'name' => $this->faker->text,
            'type' => $this->faker->text,
            'size' => $this->faker->text,
            'indicator_id' => $pIdIndicador,
            'p_a_i_id' => $pIdPAI,
            'approve_p_a_i_id' => $pIdApprovePai,
            'informesfca_id' => $pIiformesFCA,
        ];

        $params = ['query' => "
    mutation {updateFile(input:{" . '
        id: ' . $data['id'] . ',
        file_url: "' . $data['file_url'] . '",
        name: "' . $data['name'] . '",
        type: "' . $data['type'] . '",
        size: "' . $data['size'] . '",
        indicator_id: ' . $data['indicator_id'] . ',
        p_a_i_id: ' . $data['p_a_i_id'] . ',
        approve_p_a_i_id: ' . $data['approve_p_a_i_id'] . ',
        informesfca_id: ' . $data['informesfca_id'] . ',

        }) {
        id, file_url, name, type,size ,
        indicator_id, p_a_i_id,
         approve_p_a_i_id, informesfca_id
        }}
    '];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updateFile' => [
                'id',
            ]]]);

    }

    public function test_deleteFile()
    {  
        $file = $this->CreateFile();
        $pIdFile = $file->id;

        $response = $this->graphQL("mutation {deleteFile(input:{id:$pIdFile,}){id} }");
        $response
        ->assertSuccessful()
        ->assertJsonStructure(['data' => ['deleteFile' => [
            'id',
        ]]]);

    }

}
