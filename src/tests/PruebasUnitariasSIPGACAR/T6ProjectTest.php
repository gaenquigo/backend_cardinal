<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class T6ProjectTest extends TestCase
{
/** Prubas al API BackEnd SIPGACAR de GraphQL     */
  
    function test_CreateProject()
    {
        $programa = $this->createPrograma();
        $pIdprograma = $programa->id;
        $data = [
            'program_id' => $pIdprograma,
            'project' => "Proyecto {$this->faker->name}",
            'weighing' => $this->faker->numberBetween(10, 100),
        ];

        $response = $this->graphQL("mutation {createProject(input:{program_id: $pIdprograma,"
            . 'project: "' . $data['project'] . '",'
            . 'weighing: ' . $data['weighing']
            . '}) {id, program_id, project ,  weighing}}');

        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createProject' => [
                'id',
            ]]])
            ->assertJsonFragment($data);
    }
   
    
    function test_UpDateProject()
    {
        $project = $this->createProject();
        $pIdproject = $project->id;

        $data = [
            'id' => $pIdproject,
            'project' => "Proyecto  update {$this->faker->name}",
            'weighing' => $this->faker->numberBetween(10, 100)   
        ];

        $response = $this->graphQL("mutation {updateProject(input:{id: $pIdproject,"
            . 'project: "' . $data['project'] . '",'
            . 'weighing: ' . $data['weighing']
            . '}) {id,  project ,  weighing}}');

        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updateProject' => [
                'id',
            ]]]); 

    }

    function test_DeleteProject()
    {
        $project = $this->createProject();
        $pIdproject = $project->id;
        $response = $this->graphQL("mutation {deleteProject(input:{id:$pIdproject,}){id}}");
        $projectsId =  $resp = $response->json("data.deleteProject.id"); 
        $response
        ->assertSuccessful()
        ->assertJsonStructure(['data' => ['deleteProject' => [
            'id'
        ]]]);
        
    }  
}