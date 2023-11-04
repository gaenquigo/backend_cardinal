<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class T2GroupTest extends TestCase
{
    /** Prubas al API BackEnd de GraphQL     */

    function test_CreateGrupo()
    { 
        $data = [
            'name' => $this->faker->name,
            'city_id' =>  $this->faker->numberBetween(1, 200),
            'state_id' => $this->faker->randomElement([5,8,11,13,15,17]),
            'acronym' =>  $this->faker->name, 
            'address' =>  $this->faker->streetAddress
        ];

        $params = ['query' => "
        mutation {createGroup(input:{" . '
            name: "' . $data['name'] . '",
            city_id: "' . $data['city_id'] . '",
            state_id: "' . $data['state_id'] . '",
            acronym: "' . $data['acronym'] . '",
            address: "' . $data['address'] . '",
            }) {
            id
            }}
        '];
        $response = $this->postGraphQL($params);
        $response ->assertSuccessful();
    
    }

    function test_UpDateGrupo()
    {
        $grupo = $this->createGrupo();
        $pIdGrupo= $grupo->id;

        $data = [
            'id' => "{$pIdGrupo}",
            'name' => $this->faker->name,
            'city_id' => $this->faker->numberBetween(1, 200),
            'state_id' =>  $this->faker->randomElement([5,8,11,13,15,17]),
            'acronym' => 'EFG', 
            'address' => $this->faker->streetAddress
        ];

        $params = ['query' => "
        mutation {updateGroup(input:{id:  $pIdGrupo" . '
            name: "' . $data['name'] . '",
            city_id: "' . $data['city_id'] . '",
            state_id: "' . $data['state_id'] . '",
            acronym: "' . $data['acronym'] . '",
            address: "' . $data['address'] . '",
            }) {
                id
            }}
        '];

        $response = $this->postGraphQL($params);
        $response
            // Verifica que la respuesta del servidor sea exitosa
            ->assertSuccessful()
            // Verifica que la estructura contenga un data -> updateUser -> id
            ->assertJsonStructure(['data' => ['updateGroup' => ['id']]]);
    }
 
    function test_DeleteGrupo()
    {
        $grupo = $this->createGrupo();
        $pIdGrupo= $grupo->id;
        $params = ['query' => "
        mutation {deleteGroup(input:{id:  $pIdGrupo" . '
            }) {
                id
            }}
        '];

        $response = $this->postGraphQL($params);
        $response
            // Verifica que la respuesta del servidor sea exitosa
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['deleteGroup' => ['id']]]);
    }
}



