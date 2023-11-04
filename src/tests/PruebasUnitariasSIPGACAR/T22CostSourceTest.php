<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T22CostSourceTest extends TestCase
{
/** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_CreateCostSource()
    {
        $grupo = $this->createGrupo();
        $idGrupo = $grupo->id;
        $data = [
            'father_id' => 1,
            'code' => $this->faker->numberBetween(1, 1000),
            'name' => "Nombre {$this->faker->name}",
            'description' => $this->faker->text,
            'final_level' => $this->faker->boolean,
            'functioning' => $this->faker->boolean,
            'compensation' => $this->faker->boolean,
            'debt_service' => $this->faker->boolean,
            'parent_id' => 1,
            'group_id' => $idGrupo,

        ];

        $params = ['query' => "
    mutation {createCostSources(input:{" . '
        father_id: ' . $data['father_id'] . ',
        code: "' . $data['code'] . '",
        name: "' . $data['name'] . '",
        description: "' . $data['description'] . '",
        final_level: ' . json_encode($data['final_level']) . ',
        functioning:  ' . json_encode($data['functioning']) . ',
        compensation:  ' . json_encode($data['compensation']) . ',
        debt_service:  ' . json_encode($data['debt_service']) . ',
        parent_id: ' . $data['parent_id'] . ',
        group_id: ' . $data['group_id'] . ',

        }) {
        id, father_id, code, name, description, final_level, compensation,
        functioning, compensation,  debt_service , parent_id , group_id
        }}
    '];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createCostSources' => [
                'id',
            ]]]);

    }

    public function test_UpdateCostSource()
    {
        $grupo = $this->createGrupo();
        $idGrupo = $grupo->id;
        $costSource = $this->CreateCostSource();
        $idCostSource = $costSource->id;

        $data = [
            'id' => $idCostSource,
            'father_id' => 1,
            'code' => $this->faker->numberBetween(1, 1000),
            'name' => "Nombre {$this->faker->name}",
            'description' => $this->faker->text,
            'final_level' => $this->faker->boolean,
            'functioning' => $this->faker->boolean,
            'compensation' => $this->faker->boolean,
            'debt_service' => $this->faker->boolean,
            'parent_id' => 1,
            'group_id' => $idGrupo,

        ];

        $params = ['query' => "
    mutation {updateCostSources(input:{" . '
        id: ' . $data['id'] . ',
        father_id: ' . $data['father_id'] . ',
        code: "' . $data['code'] . '",
        name: "' . $data['name'] . '",
        description: "' . $data['description'] . '",
        final_level: ' . json_encode($data['final_level']) . ',
        functioning:  ' . json_encode($data['functioning']) . ',
        compensation:  ' . json_encode($data['compensation']) . ',
        debt_service:  ' . json_encode($data['debt_service']) . ',
        parent_id: ' . $data['parent_id'] . ',
        group_id: ' . $data['group_id'] . ',

        }) {
        id, father_id, code, name, description, final_level, compensation,
        functioning, compensation,  debt_service , parent_id , group_id
        }}
    '];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updateCostSources' => [
                'id',
            ]]]);

    }


    public function test_DeleteCostSource()
    { 
        $costSource = $this->CreateCostSource();
        $idCostSource = $costSource->id; 
        $response = $this->graphQL("mutation {deleteCostSources(input:{id:$idCostSource,}){id} }");
        $response
        ->assertSuccessful()
        ->assertJsonStructure(['data' => ['deleteCostSources' => [
            'id',
        ]]]);

    }

}
