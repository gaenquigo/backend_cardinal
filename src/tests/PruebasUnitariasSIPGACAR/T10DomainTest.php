<?php
namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T10DomainTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_CreateDomain()
    {
        $data = [
            'name' => "nombre {$this->faker->name}",
            'description' => $this->faker->text,
            'state' =>$this->faker->boolean,
            'domain' => "domain {$this->faker->name}",
        ];

        $params = ['query' => "
        mutation {createDomain(input:{" . '
            name: "' . $data['name'] . '",
            description: "' . $data['description'] . '",
            state : ' . json_encode($data['state']) . ',
            domain: "' . $data['domain'] . '"
            }) {
            id, name, description, state, domain
            }}
        ', ];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createDomain' => [
                'id',
            ]]]);
    }

    public function test_UpdateDomain()
    {
        $domain = $this->createDomain();
        $IdDomain = $domain->id;
        $data = [
            'id' => $IdDomain,
            'name' => "update {$this->faker->name}",
            'description' => $this->faker->text,
            'state' =>$this->faker->boolean,
            'domain' => "domain update {$this->faker->name}",
        ];

        $params = ['query' => "
        mutation {updateDomain(input:{" . '
            id: ' . $data['id'] . ',
            name: "' . $data['name'] . '",
            description: "' . $data['description'] . '",
            state : ' . json_encode($data['state']) . ',
            domain: "' . $data['domain'] . '"
            }) {
            id, name, description, state, domain
            }}
        ', ];

        $response = $this->postGraphQL($params);

        $verify = [
            'name' => $data['name'],
            'description' => $data['description'],
            'state' => $data['state'],
        ];
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updateDomain' => [
                'id',
            ]]])
            ->assertJsonFragment($verify);
    }

    public function test_deleteDomain()
    {
        $domain = $this->createDomain();
        $IdDomain = $domain->id;
        $response = $this->graphQL("mutation {deleteDomain(input:{id:  $IdDomain,}){id} }");
        $response
        ->assertSuccessful()
        ->assertJsonStructure(['data' => ['deleteDomain' => [
            'id',
        ]]]);
    }

}
