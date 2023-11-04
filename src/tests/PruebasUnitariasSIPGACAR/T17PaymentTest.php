<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T17PaymentTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_CreatePayment()
    {
        $evidence = $this->createEvidence();
        $idEvidencia = $evidence->id;

        $data = [
            'value' => $this->faker->numberBetween(100000, 99999999),
            'payment' => $this->faker->boolean,
            'payment_date' => now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
            'evidence_id' => $idEvidencia,
        ];

        $params = ['query' => "
        mutation {createPayment(input:{" . '
            value: ' . $data['value'] . ',
            payment: ' . json_encode($data['payment']) . ', 
            payment_date: "' . $data['payment_date'] . '",
            evidence_id: ' . $data['evidence_id'] . ',

            }) {
            id, value, payment, payment_date,evidence_id
            }}
        ', ];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createPayment' => [
                'id',
            ]]]);

    }

    public function test_updatePayment()
    {
        $evidence = $this->createEvidence();
        $idEvidencia = $evidence->id;
        $payment = $this->createPayment();
        $idPayment = $payment->id;
        $data = [
            'id' => $idPayment,
            'value' => $this->faker->numberBetween(100000, 99999999),
            'payment' => $this->faker->boolean,
            'payment_date' => now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
            'evidence_id' => $idEvidencia,
        ];

        $params = ['query' => "
        mutation {updatePayment(input:{" . '
            id: ' . $data['id'] . ',
            value: ' . $data['value'] . ',
            payment: ' . json_encode($data['payment']) . ', 
            payment_date: "' . $data['payment_date'] . '",
            evidence_id: ' . $data['evidence_id'] . ',
            }) {
            id, value, payment, payment_date,evidence_id
            }}
        ', ];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updatePayment' => [
                'id',
            ]]]);

    }

    
    public function test_DeletePayment()
    {
        $payment = $this->createPayment();
        $idPayment = $payment->id;
        $response = $this->graphQL("mutation {deletePayment(input:{id:$idPayment,}){id} }");
        $response
        ->assertSuccessful()
        ->assertJsonStructure(['data' => ['deletePayment' => [
            'id',
        ]]]);

    }

}
