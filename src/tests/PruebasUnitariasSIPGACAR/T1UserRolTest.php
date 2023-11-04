<?php

namespace Tests\PruebasUnitariasSIPGACAR;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;

class T1UserRolTest extends TestCase
{
    //use RefreshDatabase;
    /** Prubas al API BackEnd de GraphQL     */
 
    public function test_CreateRol()
    {
         $data = [
            'name' =>  $this->faker->name,
            'description' => $this->faker->text
        ];
        $params = ['query' => "
        mutation {createRol(input:{" . '
            name: "' . $data['name'] . '",
            description: "' . $data['description'] . '",
            }) {
            id, name, description
            }}
        '];
        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createRol' => [
                'id'
            ]]])
            ->assertJsonFragment($data);
    }

    public function test_UpDateRol()
    {
        $rol = $this->createRol();
        $rolID = $rol->id;
        $data = [
            'id' => "{$rolID}",
            'name' => $this->faker->name,
            'description' => $this->faker->text,
        ];
      
        $params = ['query' => "
        mutation {updateRol(input:{id: $rolID" . '
            name: "' . $data['name'] . '",
            description: "' .  $data['description'] . '",
           
            }) {
            id, name, description
            }}
        '];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updateRol' => ['id']]])
            ->assertJsonFragment($data);
    }

    public function test_DeleteRol()
    {
        $rol = $this->createRol();
        $rolID = $rol->id;
        $params = ['query' => "
        mutation {deleteRol(input:{id: $rolID" . ' }) {
            id, name, description
            }}
        '];

        $response = $this->postGraphQL($params);

        $response
            ->assertSuccessful();

    }

    public function test_Permissions()
    {
        $response = $this->graphQL('{permission {id}}');
        $arrPerm = $response->json("data.permission");
        $this->assertNotEmpty($arrPerm, "No hay permisos cargados en la Base de Datos");
    }

    public function test_CrudArrayPermissionRol()
    {
        $rol = $this->createRol();
        $rolID = $rol->id;
        $pIdPermiso = 1;

        $data = [
            'rol_id' => $rolID,
            'permission_id' =>  $pIdPermiso,
        ];

        $params = ['query' => "
        mutation {crudArrayPermissionRol(input:{" . '
            rol_id: ' . $data['rol_id'] . ',
            permission_id: ' . $data['permission_id'] . ',
            }) {
                Rol{id} Permissions{id,name}
            }}
        '];
        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful();

    }

    public function test_CreateUserRol()
    {
        $rol = $this->createRol();
        $rolID = $rol->id;
        $user = $this->createUser();
        $userID = $user->id;
        
        $data = [
            'rol_id' => $rolID,
            'user_id' => $userID,
        ];

        $params = ['query' => "
        mutation {createRolUser(input:{" . '
            rol_id: ' . $data['rol_id'] . ',
            user_id: ' . $data['user_id'] . ',
            }) {
               id
            }}
        '];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createRolUser' => [
                'id'
            ]]]);

        $rolUserId = $response->json('data.createRolUser.id');

        $this->assertDatabaseHas('rol_user', [
            'id' => $rolUserId,
            'rol_id' => $rolID,
            'user_id' => $userID
        ]);
    } 

}
