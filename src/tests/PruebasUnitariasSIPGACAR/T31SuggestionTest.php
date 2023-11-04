<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T31SuggestionTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_CreateSuggestion()
    {   $pai = $this->createPAI();
        $pIdPAI = $pai->id;
        $grupo = $this->createGrupo();
        $pIdGrupo = $grupo->id;
        $user = $this->createUser();
        $userID = $user->id;
        $domain = $this->createDomain();
        $IdDomain = $domain->id;

       
        $data = [
            'user_id' => $userID,
            'domain_id' =>  $IdDomain,
            'p_a_i_id' => $pIdPAI,
            'group_id' =>  $pIdGrupo,
            'suggestion' => $this->faker->text,
         
        ];

        $params = ['query' => "
        mutation {createSuggestion(input:{" . '
            user_id: ' . $data['user_id'] . ',
            domain_id: ' . $data['domain_id'] . ',
            p_a_i_id: ' . $data['p_a_i_id'] . ',
            group_id: ' . $data['group_id'] . ',
            suggestion: "' . $data['suggestion'] . '"
            
            }) {
            id, user_id, domain_id, p_a_i_id , group_id, suggestion
            }} 
        ', ];

        $response = $this->postGraphQL($params);
        $verify = [
            'user_id' => $data['user_id'],
            'domain_id' => $data['domain_id'],
            'p_a_i_id' => $data['p_a_i_id'],
            'group_id' => $data['group_id'],
        ];

        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createSuggestion' => [
                'id',
            ]]])
            ->assertJsonFragment($verify);

    }

    public function test_UpdateSuggestion()
    {   
        $pai = $this->createPAI();
        $pIdPAI = $pai->id;
        $grupo = $this->createGrupo();
        $pIdGrupo = $grupo->id;
        $user = $this->createUser();
        $userID = $user->id;
        $domain = $this->createDomain();
        $IdDomain = $domain->id;
        $suggestion = $this->CreateSuggestion();
        $idSuggestion =  $suggestion->id;
        
        $data = [
            'id' => $idSuggestion,
            'user_id' => $userID,
            'domain_id' =>  $IdDomain,
            'p_a_i_id' => $pIdPAI,
            'group_id' =>  $pIdGrupo,
            'suggestion' => $this->faker->text,
         
        ];

        $params = ['query' => "
        mutation {updateSuggestion(input:{" . '
            id: ' . $data['id'] . ',
            user_id: ' . $data['user_id'] . ',
            domain_id: ' . $data['domain_id'] . ',
            p_a_i_id: ' . $data['p_a_i_id'] . ',
            group_id: ' . $data['group_id'] . ',
            suggestion: "' . $data['suggestion'] . '"
            
            }) {
            id, user_id, domain_id, p_a_i_id , group_id, suggestion
            }} 
        ', ];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updateSuggestion' => [
                'id',
            ]]]);
          

    }
  
    public function test_deleteSuggestion()
    {
        $suggestion = $this->CreateSuggestion();
        $idSuggestion =  $suggestion->id;
        $response = $this->graphQL("mutation {deleteSuggestion(input:{id:  $idSuggestion,}){id} }");
        $response
        ->assertSuccessful()
        ->assertJsonStructure(['data' => ['deleteSuggestion' => [
            'id',
        ]]]);
    }


}
