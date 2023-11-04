<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class IndicatorIediVariable extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'indicator_iedi_variables';
    protected $fillable = [
        'name',
        'abbreviated_name',
        'description',
        'indicator_id'
    ];    

    public function indicator()
    {
        return $this->belongsTo(Indicator::class, 'indicator_id', 'id');
    }
}
