<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Campo_Geodata extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'campos_geodata';

    protected $fillable = [
        'campo',
        'alias',
        'capa_id'
    ];

    public function master_geodata(): BelongsTo
    {
        return $this->belongsTo(Master_Geodata::Class, 'capa_id', 'id');
    }
}
