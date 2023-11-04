<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class IndicatorAccount extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'indicator_accounts';
    protected $fillable = [
        'account_ppta_id',
        'account_id',
        'financing_source_id',
        'indicator_id'
    ];    

    public function financing_source()
    {
        return $this->hasOne(Financing_Source::Class, 'id', 'financing_source_id');
    }

    public function indicator()
    {
        return $this->belongsTo(Indicator::class, 'indicator_id', 'id');
    }
}
