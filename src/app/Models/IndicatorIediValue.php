<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class IndicatorIediValue extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'indicator_iedi_values';
    protected $fillable = [
        'id',
        'value',
        'year',
        'p_a_i_id',
        'id_iedi_variable'
    ];    

    public function pai(): BelongsTo
    {
        return $this->belongsTo(PAI::class, 'p_a_i_id');
    }
}
