<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\Variable;

class Phase extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'phases';

    protected $fillable = [
        'name',
        'percentage',
        'value',
        'variable_id'
    ];

    public function variable(): BelongsTo
    {
        return $this->belongsTo(Variable::Class, 'variable_id', 'id');
    }
    
}
