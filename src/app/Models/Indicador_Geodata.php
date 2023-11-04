<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use OwenIt\Auditing\Contracts\Auditable;

class Indicador_Geodata extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'indicador_geodata';

    protected $fillable = [
        'variable_id',
        'master_geodata_id'
    ];

    public function variables(): BelongsTo
    {
        return $this->belongsTo(Variable::Class, 'variable_id', 'id');
    }

    public function master_geodata()
    {
        return $this->hasOne(Master_Geodata::Class, 'id', 'master_geodata_id');
    }
}
