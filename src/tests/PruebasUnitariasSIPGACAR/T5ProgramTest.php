<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T5ProgramTest extends TestCase
{
/** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_CreateProgram()
    {
        $estrategia = $this->createEstrategia();
        $pIdEstrategia = $estrategia->id;

        $data = [
            'strategic_line_id' => $pIdEstrategia,
            'car_program' => "Programa {$this->faker->name}",
            'national_program_id' => 15,
            'weighing' => $this->faker->numberBetween(10, 100),
        ];

        $params = ['query' => "
        mutation {createProgram(input:{" . '
            strategic_line_id: ' . $data['strategic_line_id'] . ',
            car_program: "' . $data['car_program'] . '",
            national_program_id: ' . $data['national_program_id'] . ',
            weighing: ' . $data['weighing'] . '
            }) {
            id , strategic_line_id , car_program ,  national_program_id ,  weighing
            }}
        '];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createProgram' => [
                'id',
            ]]]);

    }

    public function test_UpDateProgram()
    {
        $programa = $this->createPrograma();
        $pIdprograma = $programa->id;
        $data = [
            'id' => $pIdprograma,
            'car_program' => "Programa update {$this->faker->name}",
            'weighing' => $this->faker->numberBetween(10, 100),
        ];

        $params = ['query' => "
        mutation {updateProgram(input:{" . '
            id: ' . $data['id'] . ',
            car_program: "' . $data['car_program'] . '",
            weighing: ' . $data['weighing'] . '
            }) {
            id , car_program ,  weighing
            }}
        '];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updateProgram' => [
                'id',
            ]]]);
    }

    public function test_DeleteProgram()
    {
        $programa = $this->createPrograma();
        $pIdprograma = $programa->id;
        $params = ['query' => "
        mutation {deleteProgram(input:{id:  $pIdprograma" . '
            }) {
                id
            }}
        '];
        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['deleteProgram' => ['id']]]);
    }
}
