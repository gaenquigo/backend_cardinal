<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T20ImplementationTest extends TestCase
{
   /** Prubas al API BackEnd SIPGACAR de GraphQL     */

   public function test_CreateImplementation()
   {
    $Plan = $this->createFinancialPlan();
    $idPlan = $Plan->id;
     $pai = $this->createPAI();
     $pIdPAI = $pai->id;
     $data = [
         'p_a_i_s_id' => $pIdPAI,
         'fundraising' => [[
             'value' => "{$this->faker->numberBetween(100000, 900000)}",
             'date' => now()->toDateString(),
             'financial_plans_id' => $idPlan,
         ]]
     ];
 
     $params = ['query' => "
     mutation {createImplementation(input:{" . ' 
        p_a_i_s_id: ' . $data['p_a_i_s_id'] . ',
        fundraising: {create: [{
            value: "' . $data['fundraising'][0]['value'] . '",
            date: "' . $data['fundraising'][0]['date'] . '",
            financial_plans_id: ' . $data['fundraising'][0]['financial_plans_id'] . ',
        }]},
        }) {
        id, p_a_i_s_id, fundraising {value, date, financial_plans_id}
        }}
     ', ];
 
     $response = $this->postGraphQL($params);
     
     $response
         ->assertSuccessful()
         ->assertJsonStructure(['data' => ['createImplementation' => [
             'id',
             'p_a_i_s_id',
             'fundraising' => ['*' => ['value', 'date', 'financial_plans_id']]
         ]]])
         ->assertJsonFragment($data);
 
   }

}