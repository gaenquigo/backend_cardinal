<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T4LineaEstrategicaTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */
    public function test_CreateLineaEstrategica()
    {
        $pai = $this->createPAI();

        $pIdPAI = $pai->id;

        $data = [
            'p_a_i_id' => $pIdPAI,
            'name' => "Linea Estrategia {$this->faker->name}",
            'weighing' => $this->faker->numberBetween(10, 100),
        ];

        $response = $this->graphQL("mutation {createStrategicLine(input:{p_a_i_id: $pIdPAI,"
            . 'name: "' . $data['name'] . '",'
            . 'weighing: ' . $data['weighing']
            . '}) {id, p_a_i_id, name, weighing}}');

        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createStrategicLine' => [
                'id',
            ]]])
            ->assertJsonFragment($data);
    }

    public function test_UpDateLineaEstrategica()
    {
        $estrategia = $this->createEstrategia();
        $pIdEstrategia = $estrategia->id;
        $data = [
            'name' => "Linea Estrategia update {$this->faker->name}",
            'weighing' => $this->faker->numberBetween(10, 100),
        ];

        $response = $this->graphQL("mutation {updateStrategicLine(input:{id: $pIdEstrategia ,"
            . 'name: "' . $data['name'] . '",'
            . 'weighing: ' . $data['weighing']
            . '}) {id, p_a_i_id, name, weighing}}');

        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updateStrategicLine' => [
                'id',
            ]]])
            ->assertJsonFragment($data);

    }
    public function test_DeleteLineaEstrategica()
    {
        $estrategia = $this->createEstrategia();
        $pIdEstrategia = $estrategia->id;
        $response = $this->graphQL("mutation {deleteStrategicLine(input:{id:  $pIdEstrategia,}){id} }");
        $response
        ->assertSuccessful()
        ->assertJsonStructure(['data' => ['deleteStrategicLine' => [
            'id',
        ]]]);
    }
}
