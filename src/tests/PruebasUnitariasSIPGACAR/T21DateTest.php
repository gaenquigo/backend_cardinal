<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T21DateTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_createDate()
    {
        
        $data = [
            'start_date' => now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
            'end_date' => now()->add(60, 'day')->isoFormat('YYYY-MM-DD'),
            'semester' => $this->faker->numberBetween(1, 10),
        ];

        $params = ['query' => "
       mutation {createDate(input:{" . '
        start_date: "' . $data['start_date'] . '",
        end_date: "' . $data['end_date'] . '",
        semester: "' . $data['semester'] . '",
        }) {
        id, start_date , end_date ,  semester
        }}
    ', ];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createDate' => [
                'id',
            ]]]);

    }

    public function test_updateDate()
    {
        $date = $this->createDate();
        $idDate = $date->id;
        
        $data = [
            'id' => $idDate,
            'start_date' => now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
            'end_date' => now()->add(60, 'day')->isoFormat('YYYY-MM-DD'),
            'semester' => $this->faker->numberBetween(1, 10),
        ];

        $params = ['query' => "
       mutation {updateDate(input:{" . '
        id: "' . $data['id'] . '",
        start_date: "' . $data['start_date'] . '",
        end_date: "' . $data['end_date'] . '",
        semester: "' . $data['semester'] . '",
        }) {
        id, start_date , end_date ,  semester
        }}
    ', ];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updateDate' => [
                'id',
            ]]]);

    }

}
