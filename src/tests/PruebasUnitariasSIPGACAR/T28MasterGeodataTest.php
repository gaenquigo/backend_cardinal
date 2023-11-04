<?php

namespace Tests\PruebasUnitariasSIPGACAR;

use Tests\TestCase;

class T28MasterGeodataTest extends TestCase
{
    /** Prubas al API BackEnd SIPGACAR de GraphQL     */

    public function test_CreateMasterGeodata()
    {
        $domain = $this->createDomain();
        $IdDomain = $domain->id;
        $data = [
            'nombre_capa' => $this->faker->name,
            'url' => $this->faker->text,
            'url_metadata' => $this->faker->text,
            'descripcion' => $this->faker->text,
            'categoria' => $IdDomain,
            'tipo' => $IdDomain,
            'capa_wms' => $this->faker->text,
            'posicion' => $this->faker->numberBetween(1, 10),
            'propietario' => $this->faker->numberBetween(1, 10),
            'frecuencia_actualizacion' => $this->faker->numberBetween(1, 20),
            'es_visible' => $this->faker->boolean,
            'es_deprecada' => $this->faker->boolean,
            'anio' => $this->faker->numberBetween(1, 4),

        ];

        $params = ['query' => "
        mutation {createMasterGeodata(input:{" . '
            nombre_capa: "' . $data['nombre_capa'] . '",
            url: "' . $data['url'] . '",
            url_metadata: "' . $data['url_metadata'] . '",
            descripcion: "' . $data['descripcion'] . '",
            categoria: ' . $data['categoria'] . ',
            tipo: ' . $data['tipo'] . ',
            capa_wms: "' . $data['capa_wms'] . '",
            posicion: ' . $data['posicion'] . ',
            propietario: ' . $data['propietario'] . ',
            frecuencia_actualizacion: ' . $data['frecuencia_actualizacion'] . ',
            es_visible:  ' . json_encode($data['es_visible']) . ',
            es_deprecada:  ' . json_encode($data['es_deprecada']) . ',
            anio: ' . $data['anio'] . ',
       }) {
       id, nombre_capa, url, url_metadata, descripcion,
            categoria, tipo, capa_wms,  posicion, propietario, frecuencia_actualizacion,
            es_visible, es_deprecada, anio
       }}
   '];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['createMasterGeodata' => [
                'id',
            ]]]);

    }

  
    public function test_UpdateMasterGeodata()
    {
        $MasterGeodata = $this->CreateMasterGeodata();
        $idMasterGeodata =  $MasterGeodata->id;
        $domain = $this->createDomain();
        $IdDomain = $domain->id;
        $data = [
            'id' => $idMasterGeodata,
            'nombre_capa' => $this->faker->name,
            'url' => $this->faker->text,
            'url_metadata' => $this->faker->text,
            'descripcion' => $this->faker->text,
            'categoria' => $IdDomain,
            'tipo' => $IdDomain,
            'capa_wms' => $this->faker->text,
            'posicion' => $this->faker->numberBetween(1, 10),
            'propietario' => $this->faker->numberBetween(1, 10),
            'frecuencia_actualizacion' => $this->faker->numberBetween(1, 20),
            'es_visible' => $this->faker->boolean,
            'es_deprecada' => $this->faker->boolean,
            'anio' => $this->faker->numberBetween(1, 4),

        ];

        $params = ['query' => "
        mutation {updateMasterGeodata(input:{" . '
            id: ' . $data['id'] . ',
            nombre_capa: "' . $data['nombre_capa'] . '",
            url: "' . $data['url'] . '",
            url_metadata: "' . $data['url_metadata'] . '",
            descripcion: "' . $data['descripcion'] . '",
            categoria: ' . $data['categoria'] . ',
            tipo: ' . $data['tipo'] . ',
            capa_wms: "' . $data['capa_wms'] . '",
            posicion: ' . $data['posicion'] . ',
            propietario: ' . $data['propietario'] . ',
            frecuencia_actualizacion: ' . $data['frecuencia_actualizacion'] . ',
            es_visible:  ' . json_encode($data['es_visible']) . ',
            es_deprecada:  ' . json_encode($data['es_deprecada']) . ',
            anio: ' . $data['anio'] . ',
       }) {
       id, nombre_capa, url, url_metadata, descripcion,
            categoria, tipo, capa_wms,  posicion, propietario, frecuencia_actualizacion,
            es_visible, es_deprecada, anio
       }}
   '];

        $response = $this->postGraphQL($params);
        $response
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['updateMasterGeodata' => [
                'id',
            ]]]);

    }

    public function test_DeleteMasterGeodata()
    {   
        $MasterGeodata = $this->CreateMasterGeodata();
        $idMasterGeodata =  $MasterGeodata->id;
        $response = $this->graphQL("mutation {deleteMasterGeodata(input:[{id:$idMasterGeodata,}]){id} }");
        $response
        ->assertSuccessful();
        $idPhase = $response->json('data.deleteMasterGeodata.id');
    }

}
