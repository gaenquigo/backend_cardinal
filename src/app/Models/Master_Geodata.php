<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Master_Geodata extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'master_geodata';

    protected $fillable = [
        'nombre_capa',
        'url',
        'url_metadata',
        'descripcion',
        'categoria',
        'tipo',
        'capa_wms',
        'posicion',
        'propietario',
        'frecuencia_actualizacion',
        'es_visible',
        'es_deprecada',
        'anio'
    ];

    public function categoria_capa()
    {
        return $this->hasOne(Domain::Class, 'id', 'categoria');
    }

    public function tipo_capa()
    {
        return $this->hasOne(Domain::Class, 'id', 'tipo');
    }

    public function frecuenciaActualizacion()
    {
        return $this->hasOne(Domain::Class, 'id', 'frecuencia_actualizacion');
    }

    public function campos_geodata(): HasMany
    {
        return $this->hasMany(Campo_Geodata::Class, 'capa_id', 'id');
    }

}
