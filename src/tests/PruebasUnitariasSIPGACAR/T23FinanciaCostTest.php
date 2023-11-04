<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T23FinanciaCostTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_CreateFinanciaCost()
    {
        $grupo = $this->createGrupo();
        $idGrupo = $grupo->id;
        $pai = $this->createPAI();
        $pIdPAI = $pai->id;
        $costSource = $this->CreateCostSource();
        $idCostSource = $costSource->id;

        $data = [
            'year' => $this->faker->numberBetween(1, 4),
            'value_bugeted' => $this->faker->numberBetween(1000, 9999999),
            'value_comitted' => $this->faker->numberBetween(1000, 999999),
            'value_required' => $this->faker->numberBetween(1000, 999999),
            'value_paid' => $this->faker->numberBetween(1000, 999999),
            'p_a_i_id' => $pIdPAI,
            'cost_sources_id' => $idCostSource,
            'own' => $this->faker->boolean,
            'nation' => $this->faker->boolean,
            'royalties' => $this->faker->boolean,
            'funds' => $this->faker->boolean,
            'functioning' => $this->faker->boolean,
            'compensation' => $this->faker->boolean,
            'debt_service' => $this->faker->boolean,
            'complete' => $this->faker->boolean,
            'version' => $this->faker->numberBetween(1, 100),
            'group_id' => $idGrupo,

        ];

        $params = ['query' => "
    mutation {createfinancialCosts(input:{" . '
        year: "' . $data['year'] . '",
        value_bugeted: "' . $data['value_bugeted'] . '",
        value_comitted: "' . $data['value_comitted'] . '",
        value_required: "' . $data['value_required'] . '",
        value_paid: "' . $data['value_paid'] . '",
        p_a_i_id: ' . $data['p_a_i_id'] . ',
        cost_sources_id: ' . $data['cost_sources_id'] . ',
        own: ' . json_encode($data['own']) . ',
        nation:  ' . json_encode($data['nation']) . ',
        royalties:  ' . json_encode($data['royalties']) . ',
        funds:  ' . json_encode($data['funds']) . ',
        functioning:  ' . json_encode($data['functioning']) . ',
        compensation:  ' . json_encode($data['compensation']) . ',
        debt_service:  ' . json_encode($data['debt_service']) . ',
        complete:  ' . json_encode($data['complete']) . ',
        version: ' . $data['version'] . ',
        group_id: ' . $data['group_id'] . ',

        }) {
        id, year, value_bugeted, value_comitted, value_required, value_paid, p_a_i_id,
         own,  nation , royalties , funds, functioning,  compensation, debt_service,
        complete, version , group_id
        }}
    ', ];

        $response = $this->postGraphQL($params);
        $response

            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createfinancialCosts' => [
                'id',
            ]]]);

    }

    public function test_UpdateFinanciaCost()
    {
        $grupo = $this->createGrupo();
        $idGrupo = $grupo->id;
        $pai = $this->createPAI();
        $pIdPAI = $pai->id;
        $financial = $this->CreateFinancialCost();
        $idFinancial = $financial->id;
        $costSource = $this->CreateCostSource();
        $idCostSource = $costSource->id;

        $data = [
            'id' => $idFinancial,
            'year' => $this->faker->numberBetween(1, 4),
            'value_bugeted' => $this->faker->numberBetween(1000, 9999999),
            'value_comitted' => $this->faker->numberBetween(1000, 999999),
            'value_required' => $this->faker->numberBetween(1000, 999999),
            'value_paid' => $this->faker->numberBetween(1000, 999999),
            'p_a_i_id' => $pIdPAI,
            'cost_sources_id' => $idCostSource,
            'own' => $this->faker->boolean,
            'nation' => $this->faker->boolean,
            'royalties' => $this->faker->boolean,
            'funds' => $this->faker->boolean,
            'functioning' => $this->faker->boolean,
            'compensation' => $this->faker->boolean,
            'debt_service' => $this->faker->boolean,
            'complete' => $this->faker->boolean,
            'version' => $this->faker->numberBetween(1, 100),
            'group_id' => $idGrupo,

        ];

        $params = ['query' => "
        mutation {updatefinancialCosts(input:{" . '
            id: ' . $data['id'] . ',
            year: "' . $data['year'] . '",
            value_bugeted: "' . $data['value_bugeted'] . '",
            value_comitted: "' . $data['value_comitted'] . '",
            value_required: "' . $data['value_required'] . '",
            value_paid: "' . $data['value_paid'] . '",
            p_a_i_id: ' . $data['p_a_i_id'] . ',
            cost_sources_id: ' . $data['cost_sources_id'] . ',
            own: ' . json_encode($data['own']) . ',
            nation:  ' . json_encode($data['nation']) . ',
            royalties:  ' . json_encode($data['royalties']) . ',
            funds:  ' . json_encode($data['funds']) . ',
            functioning:  ' . json_encode($data['functioning']) . ',
            compensation:  ' . json_encode($data['compensation']) . ',
            debt_service:  ' . json_encode($data['debt_service']) . ',
            complete:  ' . json_encode($data['complete']) . ',
            version: ' . $data['version'] . ',
            group_id: ' . $data['group_id'] . ',

            }) {
                id, year, value_bugeted, value_comitted, value_required, value_paid, p_a_i_id,
                own,  nation , royalties , funds, functioning,  compensation, debt_service,
                complete, version , group_id
            }}
        ', ];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updatefinancialCosts' => [
                'id',
            ]]]);

    }

}
