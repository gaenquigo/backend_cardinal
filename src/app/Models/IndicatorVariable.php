<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class IndicatorVariable extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'indicator_variables';
    protected $fillable = [
        'type_id',
        'type_variable_id',
        'indicator_id',
        'indicator_variable_id',
        'variable_id'
    ];    

    public function indicator(): BelongsTo
    {
        return $this->belongsTo(Indicator::Class, 'indicator_id', 'id');
    }

    public function variable()
    {
        return $this->hasOne(Variable::Class, 'id', 'variable_id');
    }
}
