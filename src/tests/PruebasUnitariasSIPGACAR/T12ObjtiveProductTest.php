<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T12ObjtiveProductTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_CreateObjtiveProduct()
    {
        $objetivo = $this->createObjetivo();
        $pIdobjetivo = $objetivo->id;
        $domain = $this->createDomain();
        $pIdProducto = $domain->id;
        $domainNational = $this->createDomain();
        $pIdNational = $domainNational->id;
        $data = [
            'objective_id' => $pIdobjetivo,
            'product_id' => $pIdProducto,
            'product_other' => "Otro producto {$this->faker->name}",
            'goal_1' => $this->faker->numberBetween(10, 100),
            'goal_1_balance' => $this->faker->numberBetween(500000, 9000000),
            'goal_2' => $this->faker->numberBetween(10000, 1000000),
            'goal_2_balance' => $this->faker->numberBetween(10, 100),
            'goal_3' => $this->faker->numberBetween(100000, 9000000),
            'goal_3_balance' => $this->faker->numberBetween(10000, 1000000),
            'goal_4' => $this->faker->numberBetween(10, 100),
            'goal_4_balance' => $this->faker->numberBetween(100000, 9000000),
            'total_goal' => $this->faker->numberBetween(20000, 2000000),
            'weighing' => $this->faker->numberBetween(1, 100),
            'unit_goal' => $this->faker->numberBetween(100000, 3000000),
            'indicator_national_id' => 1,
            'indicator_ods_id' => 1,
            'national_policy_id' => $pIdNational 

        ];

        $params = ['query' => "
        mutation {createObjectiveProduct(input:{" . '
          objective_id: ' . $data['objective_id'] . ',
          product_id: ' . $data['product_id'] . ',
          product_other: "' . $data['product_other'] . '",
          goal_1: ' . $data['goal_1'] . ',
          goal_1_balance: ' . $data['goal_1_balance'] . ',
          goal_2: ' . $data['goal_2'] . ',
          goal_2_balance: ' . $data['goal_2_balance'] . ',
          goal_3: ' . $data['goal_3'] . ',
          goal_3_balance: ' . $data['goal_3_balance'] . ',
          goal_4: ' . $data['goal_4'] . ',
          goal_4_balance: ' . $data['goal_4_balance'] . ',
          total_goal: ' . $data['total_goal'] . ',
          weighing: ' . $data['weighing'] . ',
          unit_goal: ' . $data['unit_goal'] . ',
          indicator_national_id: ' . $data['indicator_national_id'] . ',
          indicator_ods_id:  ' . $data['indicator_ods_id'] . '
          national_policy_id:   ' . $data['national_policy_id'] . ',
            }) {
              id ,  objective_id, product_other, goal_1, goal_1_balance, goal_2, goal_2_balance, goal_3,
              goal_3_balance, goal_4,  goal_4_balance , total_goal,
              weighing, unit_goal, indicator_national_id , indicator_ods_id,  national_policy_id
            }}
        ', ];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createObjectiveProduct' => [
                'id',
            ]]]);

    }

    public function test_UpdateObjtiveProduct()
    {
        $objetivoProducto = $this->createObjetivoProducto();
        $pIobjetivoProducto = $objetivoProducto->id;
        
        $objetivo = $this->createObjetivo();
        $pIdobjetivo = $objetivo->id;
        
        $domain = $this->createDomain();
        $pIdProducto = $domain->id;

        $domainNational = $this->createDomain();
        $pIdNational = $domainNational->id;
        
        $data = [
            'id' => $pIobjetivoProducto,
            'objective_id' =>  $pIdobjetivo,
            'product_id' => $pIdProducto,
            'product_other' => "Otro producto update {$this->faker->name}",
            'goal_1' => $this->faker->numberBetween(10, 100),
            'goal_1_balance' => $this->faker->numberBetween(500000, 9000000),
            'goal_2' => $this->faker->numberBetween(10000, 1000000),
            'goal_2_balance' => $this->faker->numberBetween(10, 100),
            'goal_3' => $this->faker->numberBetween(100000, 9000000),
            'goal_3_balance' => $this->faker->numberBetween(10000, 1000000),
            'goal_4' => $this->faker->numberBetween(10, 100),
            'goal_4_balance' => $this->faker->numberBetween(100000, 9000000),
            'total_goal' => $this->faker->numberBetween(20000, 2000000),
            'weighing' => $this->faker->numberBetween(1, 100),
            'unit_goal' => $this->faker->numberBetween(100000, 3000000),
            'indicator_national_id' => 1,
            'indicator_ods_id' => 1,
            'national_policy_id' => $pIdNational,

        ];

        $params = ['query' => "
        mutation {updateObjectiveProduct(input:{" . '
          id: ' . $data['id'] . ',
          objective_id: ' . $data['objective_id'] . ',
          product_id: ' . $data['product_id'] . ',
          product_other: "' . $data['product_other'] . '",
          goal_1: ' . $data['goal_1'] . ',
          goal_1_balance: ' . $data['goal_1_balance'] . ',
          goal_2: ' . $data['goal_2'] . ',
          goal_2_balance: ' . $data['goal_2_balance'] . ',
          goal_3: ' . $data['goal_3'] . ',
          goal_3_balance: ' . $data['goal_3_balance'] . ',
          goal_4: ' . $data['goal_4'] . ',
          goal_4_balance: ' . $data['goal_4_balance'] . ',
          total_goal: ' . $data['total_goal'] . ',
          weighing: ' . $data['weighing'] . ',
          unit_goal: ' . $data['unit_goal'] . ',
          indicator_national_id: ' . $data['indicator_national_id'] . ',
          indicator_ods_id:  ' . $data['indicator_ods_id'] . '
          national_policy_id:   ' . $data['national_policy_id'] . ',
            }) {
              id ,  objective_id, product_other, goal_1, goal_1_balance, goal_2, goal_2_balance, goal_3,
              goal_3_balance, goal_4,  goal_4_balance , total_goal,
              weighing, unit_goal, indicator_national_id , indicator_ods_id,  national_policy_id
            }}
        ', ];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updateObjectiveProduct' => [
                'id',
            ]]]);

    }

    public function test_DeleteObjtiveProduct()
    {
        $objetivoProducto = $this->createObjetivoProducto();
        $pIobjetivoProducto = $objetivoProducto->id;
        $response = $this->graphQL("mutation {deleteObjectiveProduct(input:{id:  $pIobjetivoProducto,}){id} }");
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['deleteObjectiveProduct' => [
                'id',
            ]]]);
    }

}
