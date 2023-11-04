<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\Financial_Plan; 

/**
 * Class ActivitySource
 * @package App
 */
class ActivitySource extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    /**
     * @var array
     */
    protected $auditInclude = [
        'id',
        'activity_id',
        'goal',
        'source_id',
        'value',
        'evidence_balance',
        'age',
    ];

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'activity_id',
        'goal',
        'source_id',
        'value',
        'evidence_balance',
        'age',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function financial_plan(): hasOne
    {
        return $this->hasOne(Financial_Plan::class, 'id', 'source_id');
    }

    public function financial_costs()
    {
        return $this->hasMany(Financial_cost::Class, 'activity_sources_id', 'id');
    }
}

