<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T0LoginUserTest extends TestCase
{
    //use RefreshDatabase;
    /** Prubas al API BackEnd de GraphQL     */
    public function test_UserCreate()
    {   
        $grupo = $this->createGrupo();
        $pIdGrupo = $grupo->id;
        $data = [
            'name' => $this->faker->name,
            'last_name' => $this->faker->lastName,
            'type_document' => $this->faker->randomElement(['CEDULA']),
            'document' => "{$this->faker->numberBetween(1000000, 9000000)}",
            'email' => $this->faker->email,
            'end_date' => now()->add(20, 'day')->isoFormat('YYYY-MM-DD'),
            'group_id' => $pIdGrupo
        ];

        $params = ['query' => "
        mutation {createUser(input:{" . '
            name: "' . $data['name'] . '",
            last_name: "' . $data['last_name'] . '",
            type_document: "' . $data['type_document'] . '",
            document: "' . $data['document'] . '",
            email: "' . $data['email'] . '",
            end_date: "' . $data['end_date'] . '",
            group_id:' . $data['group_id'] . '
            }) {
            id, name, last_name, type_document, document, email, end_date, group_id
            }}
        ', ];

        $response = $this->postGraphQL($params);

        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createUser' => [
                'id',
            ]]])
            ->assertJsonFragment($data);
    }

    public function test_UserLogin()
    {
        $user = $this->createUser();

        $email = $user->email;

        $password = 'SIPGA2020';

        $response = $this->graphQL('{login(email: "' . $email . '", password: "' . $password . '")
            {user {id, email} token{access_token}}}');

        $response
            ->assertSuccessful()
            ->assertJsonStructure([
                'data' => [
                    'login' => [
                        'user' => ['id', 'email'],
                        'token' => ['access_token'],
                    ],
                ],
            ])
            ->assertJsonFragment([
                'email' => $email,
            ]);
    }

    public function test_UpdateUser()
    {
        $user = $this->createUser();

        $userID = $user->id;

        $data = [
            'id' => "{$userID}",
            'name' => $this->faker->name,
            'last_name' => $this->faker->lastName,
            'type_document' => $this->faker->randomElement(['CEDULA']),
            'document' => "{$this->faker->numberBetween(1000000, 9000000)}",
        ];

        $params = ['query' => "
        mutation {updateUser(input:{id: $userID" . '
            name: "' . $data['name'] . '",
            last_name: "' . $data['last_name'] . '",
            type_document: "' . $data['type_document'] . '",
            document: "' . $data['document'] . '"
            }) {
            id, name, last_name, type_document, document
            }}
        ', ];

        $response = $this->postGraphQL($params);

        $response
        // Verifica que la respuesta del servidor sea exitosa
        ->assertSuccessful()
        // Verifica que la estructura contenga un data -> updateUser -> id
            ->assertJsonStructure(['data' => ['updateUser' => ['id']]])
        // Verifica que la información que se mandó ($data) esté contenida en la respuesta del servidor.
            ->assertJsonFragment($data);
    }

}
