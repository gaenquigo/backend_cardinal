<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T13ActivityTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_CreateActivity()
    {
        $objetivoProducto = $this->createObjetivoProducto();
        $IdObjetivo = $objetivoProducto->objective_id;
        $IdProducto = $objetivoProducto->product_id;
        $indicador= $this->createIndicator();
        $idIndicador = $indicador->id;
     

        $data = [
            'objective_id' => $IdObjetivo,
            'product_id' => $IdProducto,
            'name' => "Activity {$this->faker->name}",
            'goal' => $this->faker->numberBetween(10, 100),
            'goal_1' => $this->faker->numberBetween(10, 100),
            'goal_2' => $this->faker->numberBetween(10, 100),
            'goal_3' => $this->faker->numberBetween(10, 100),
            'goal_4' => $this->faker->numberBetween(10, 100),
            'weighing' => $this->faker->numberBetween(10, 100),
            'ocde_category_id' =>$idIndicador,
            'ocde_indicator_id' => $idIndicador,
            'answer_sentence' => "answer_sentence {$this->faker->name}",
            'geometry' => $this->faker->numberBetween(1, 10),

        ];

        $params = ['query' => "
        mutation {createActivity(input:{" . '
          objective_id: ' . $data['objective_id'] . ',
          product_id: ' . $data['product_id'] . ',
          name: "' . $data['name'] . '",
          goal: ' . $data['goal'] . ',
          goal_1: ' . $data['goal_1'] . ',
          goal_2: ' . $data['goal_2'] . ',
          goal_3: ' . $data['goal_3'] . ',
          goal_4: ' . $data['goal_4'] . ',
          weighing: ' . $data['weighing'] . ',
          ocde_category_id: ' . $data['ocde_category_id'] . ',
          ocde_indicator_id: ' . $data['ocde_indicator_id'] . ',
          answer_sentence: "' . $data['answer_sentence'] . '",
          geometry: ' . $data['geometry'] . ',
            }) {
              id ,  objective_id, product_id, name, goal, goal_1, goal_2,
              goal_3, goal_4,  weighing , ocde_category_id,
              ocde_indicator_id, answer_sentence , geometry
            }}
        '];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createActivity' => [
                'id',
            ]]]);

    }

    public function test_UpdateActivity()
    {
        $activity = $this->createActivity();
        $IdActivity = $activity->id;
        $IdObjetivo = $activity->objective_id;
        $IdProducto = $activity->product_id;

        $indicador= $this->createIndicator();
        $idIndicador = $indicador->id;


        $data = [
            'id' => $IdActivity,
            'objective_id' => $IdObjetivo,
            'product_id' => $IdProducto,
            'name' => "Activity update {$this->faker->name}",
            'goal' => $this->faker->numberBetween(10, 100),
            'goal_1' => $this->faker->numberBetween(10, 100),
            'goal_2' => $this->faker->numberBetween(10, 100),
            'goal_3' => $this->faker->numberBetween(10, 100),
            'goal_4' => $this->faker->numberBetween(10, 100),
            'weighing' => $this->faker->numberBetween(10, 100),
            'ocde_category_id' => $idIndicador,
            'ocde_indicator_id' => $idIndicador,
            'answer_sentence' => "answer_sentence update {$this->faker->name}",
            'geometry' => $this->faker->numberBetween(1, 10),

        ];

        $params = ['query' => "
        mutation {updateActivity(input:{" . '
          id: ' . $data['id'] . ',
          objective_id: ' . $data['objective_id'] . ',
          product_id: ' . $data['product_id'] . ',
          name: "' . $data['name'] . '",
          goal: ' . $data['goal'] . ',
          goal_1: ' . $data['goal_1'] . ',
          goal_2: ' . $data['goal_2'] . ',
          goal_3: ' . $data['goal_3'] . ',
          goal_4: ' . $data['goal_4'] . ',
          weighing: ' . $data['weighing'] . ',
          ocde_category_id: ' . $data['ocde_category_id'] . ',
          ocde_indicator_id: ' . $data['ocde_indicator_id'] . ',
          answer_sentence: "' . $data['answer_sentence'] . '",
          geometry: ' . $data['geometry'] . ',
            }) {
              id ,  objective_id, product_id, name, goal, goal_1, goal_2,
              goal_3, goal_4,  weighing , ocde_category_id,
              ocde_indicator_id, answer_sentence , geometry
            }}
        '];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updateActivity' => [
                'id',
            ]]]);

    }

    public function test_DeleteActitivity()
    {
        $activity = $this->createActivity();
        $IdActivity = $activity->id;
        $response = $this->graphQL("mutation {deleteActivity(input:{activity_id:$IdActivity,}){id} }");
        $response
        ->assertSuccessful()
        ->assertJsonStructure(['data' => ['deleteActivity' => [
            'id',
        ]]]);

    }

}
