<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T7ObjetivosTest extends TestCase
{
/** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_CreateObjetivo()
    {
        $project = $this->createProject();
        $pIdproject = $project->id;
        $data = [
            'project_id' => $pIdproject,
            'objective' => "Objetivo {$this->faker->name}",
            'weighing' => $this->faker->numberBetween(10, 100),
        ];
        $response = $this->graphQL("mutation {createObjective(input:{project_id: $pIdproject,"
            . 'objective: "' . $data['objective'] . '",'
            . 'weighing: ' . $data['weighing']
            . '}) {id, project_id, objective ,  weighing}}');

        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createObjective' => [
                'id',
            ]]]);

    }

    public function test_UpDateObjetivo()
    {
        $objetivo = $this->createObjetivo();
        $pIdobjetivo = $objetivo->id;
        $pIdProject = $objetivo->project_id;

        $data = [
            'id' => $pIdobjetivo,
            'project_id' => $pIdProject,
            'objective' => "Objetivo  update {$this->faker->name}",
            'weighing' => $this->faker->numberBetween(10, 100),
        ];

        $response = $this->graphQL("mutation {updateObjective(input:{id: $pIdobjetivo,"
            . 'project_id: ' . $data['project_id'] . ','
            . 'objective: "' . $data['objective'] . '",'
            . 'weighing: ' . $data['weighing']
            . '}) {id, project_id, objective ,  weighing}}');

        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updateObjective' => [
                'id',
            ]]]);

    }

    public function test_DeleteObjetivo()
    {
        $objetivo = $this->createObjetivo();
        $pIdobjetivo = $objetivo->id;
        $response = $this->graphQL("mutation {deleteObjective(input:{id:$pIdobjetivo,}){id}}");
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['deleteObjective' => [
                'id',
            ]]]);

    }

}
