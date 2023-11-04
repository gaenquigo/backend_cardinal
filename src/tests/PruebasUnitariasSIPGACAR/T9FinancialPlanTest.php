<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T9FinancialPlanTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_CreateFinancialPlan()
    {
        $pai = $this->createPAI();
        $pIdPAI = $pai->id;
        $fuente = $this->createFuenteFinanciacion();
        $fuenteID = $fuente->id;
        $data = [
            'p_a_i_id' => $pIdPAI,
            'source_id' => $fuenteID,
            'value' => $this->faker->numberBetween(500000, 9000000),
            'investment_percentage' => $this->faker->numberBetween(10, 100),
            'investment' => $this->faker->numberBetween(500000, 9000000),
            'investment_balance' => $this->faker->numberBetween(10000, 1000000),
            'functioning_percentage' => $this->faker->numberBetween(10, 100),
            'functioning' => $this->faker->numberBetween(100000, 9000000),
            'functioning_balance' => $this->faker->numberBetween(10000, 1000000),
            'debt_service_percentage' => $this->faker->numberBetween(10, 100),
            'debt_service' => $this->faker->numberBetween(100000, 9000000),
            'debt_service_balance' => $this->faker->numberBetween(20000, 2000000),
            'fund_percentage' => $this->faker->numberBetween(10, 100),
            'fund' => $this->faker->numberBetween(100000, 3000000),
            'fund_balance' => $this->faker->numberBetween(100000, 3000000),
            'year' => $this->faker->randomElement([1, 2, 3, 4]),
        ];

        $params = ['query' => "
        mutation {createFinancialPlan(input:{" . '
            p_a_i_id: ' . $data['p_a_i_id'] . ',
            source_id: ' . $data['source_id'] . ',
            value: ' . $data['value'] . ',
            investment_percentage: ' . $data['investment_percentage'] . ',
            investment: ' . $data['investment'] . ',
            investment_balance: ' . $data['investment_balance'] . ',
            functioning_percentage: ' . $data['functioning_percentage'] . ',
            functioning: ' . $data['functioning'] . ',
            functioning_balance: ' . $data['functioning_balance'] . ',
            debt_service_percentage: ' . $data['debt_service_percentage'] . ',
            debt_service: ' . $data['debt_service'] . ',
            debt_service_balance: ' . $data['debt_service_balance'] . ',
            fund_percentage: ' . $data['fund_percentage'] . ',
            fund: ' . $data['fund'] . ',
            fund_balance:  ' . $data['fund_balance'] . '
            year:   ' . $data['year'] . ',
            }) {
            id, p_a_i_id, source_id, value, investment_percentage, investment, investment_balance,
            functioning_percentage, functioning,  functioning_balance , debt_service_percentage,   
            debt_service, debt_service_balance, fund_percentage , fund,  fund_balance , year
            }}
        '];

        $response = $this->postGraphQL($params);

        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createFinancialPlan' => [
                'id',
            ]]]);

    } 

    public function test_UpdateFinancialPlan()
    {
        $pai = $this->createPAI();
        $pIdPAI = $pai->id;
        $fuente = $this->createFuenteFinanciacion();
        $fuenteID = $fuente->id;
        $Plan = $this->createFinancialPlan();
        $pIdPlan = $Plan->id;

        $data = [
            'id' => $pIdPlan, 
            'p_a_i_id' => $pIdPAI,
            'source_id' => $fuenteID,
            'value' => $this->faker->numberBetween(500000, 9000000),
            'investment_percentage' => $this->faker->numberBetween(10, 100),
            'investment' => $this->faker->numberBetween(500000, 9000000),
            'investment_balance' => $this->faker->numberBetween(10000, 1000000),
            'functioning_percentage' => $this->faker->numberBetween(10, 100),
            'functioning' => $this->faker->numberBetween(100000, 9000000),
            'functioning_balance' => $this->faker->numberBetween(10000, 1000000),
            'debt_service_percentage' => $this->faker->numberBetween(10, 100),
            'debt_service' => $this->faker->numberBetween(100000, 9000000),
            'debt_service_balance' => $this->faker->numberBetween(20000, 2000000),
            'fund_percentage' => $this->faker->numberBetween(10, 100),
            'fund' => $this->faker->numberBetween(100000, 3000000),
            'fund_balance' => $this->faker->numberBetween(100000, 3000000),
            'year' => $this->faker->randomElement([1, 2, 3, 4]),
        ];

        $params = ['query' => "
        mutation {updateFinancialPlan(input:{" . '
            id: ' . $data['id'] . ',
            p_a_i_id: ' . $data['p_a_i_id'] . ',
            source_id: ' . $data['source_id'] . ',
            value: ' . $data['value'] . ',
            investment_percentage: ' . $data['investment_percentage'] . ',
            investment: ' . $data['investment'] . ',
            investment_balance: ' . $data['investment_balance'] . ',
            functioning_percentage: ' . $data['functioning_percentage'] . ',
            functioning: ' . $data['functioning'] . ',
            functioning_balance: ' . $data['functioning_balance'] . ',
            debt_service_percentage: ' . $data['debt_service_percentage'] . ',
            debt_service: ' . $data['debt_service'] . ',
            debt_service_balance: ' . $data['debt_service_balance'] . ',
            fund_percentage: ' . $data['fund_percentage'] . ',
            fund: ' . $data['fund'] . ',
            fund_balance:  ' . $data['fund_balance'] . '
            year:   ' . $data['year'] . ',
            }) {
            id, p_a_i_id, source_id, value, investment_percentage, investment, investment_balance,
            functioning_percentage, functioning,  functioning_balance , debt_service_percentage,   
            debt_service, debt_service_balance, fund_percentage , fund,  fund_balance , year
            }}
        '];

        $response = $this->postGraphQL($params);

        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updateFinancialPlan' => [
                'id',
            ]]]);

    }

    

}
