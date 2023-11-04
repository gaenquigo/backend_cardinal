<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T29IndicadorGeodataTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */
    public function test_CreateIndicadorGeodata()
    {

        $MasterGeodata = $this->CreateMasterGeodata();
        $idMasterGeodata = $MasterGeodata->id;
        $data = [

            'master_geodata_id' => $idMasterGeodata,

        ];

        $params = ['query' => "
          mutation {createIndicatorGeodata(input:{" . '
            master_geodata_id: ' . $data['master_geodata_id'] . ',

              }) {
              id
              }}
          '];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createIndicatorGeodata' => [
                'id',
            ]]]);

    }  

    public function test_UpdateIndicadorGeodata()
    {

        $MasterGeodata = $this->CreateMasterGeodata();
        $idMasterGeodata = $MasterGeodata->id;
        $IndicadorGeodata =$this->CreateIndicadorGeodata();
        $idIndicadorGeodata = $IndicadorGeodata->id;
        $data = [
            'id' =>  $idIndicadorGeodata, 
            'master_geodata_id' => $idMasterGeodata,

        ];

        $params = ['query' => "
          mutation {updateIndicatorGeodata(input:{" . '
            id: ' . $data['id'] . ',
            master_geodata_id: ' . $data['master_geodata_id'] . ',

              }) {
              id
              }}
          '];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updateIndicatorGeodata' => [
                'id',
            ]]]);

    }

     
    public function test_DeleteIndicadorGeodata()
    {   
        $IndicadorGeodata =$this->CreateIndicadorGeodata();
        $idIndicadorGeodata = $IndicadorGeodata->id;
        $response = $this->graphQL("mutation {deleteIndicatorGeodata(input:[{id:$idIndicadorGeodata,}]){id} }");
        $response
        ->assertSuccessful();
        $idPhase = $response->json('data.deleteIndicatorGeodata.id');
    }

    public function test_DeleteAllIndicadorGeodata()
    {   
        $IndicadorGeodata =$this->CreateIndicadorGeodata();
        $idIndicadorGeodata = $IndicadorGeodata->id;
        $response = $this->graphQL("mutation {deleteIndicatorGeodata(input:[{[id:$idIndicadorGeodata,]}]){id} }");
        $response
        ->assertSuccessful();
        $idPhase = $response->json('data.deleteIndicatorGeodata.id');
    }

}
