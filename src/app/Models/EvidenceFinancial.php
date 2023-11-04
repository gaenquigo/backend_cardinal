<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class EvidenceFinancial
 * @package App\Models
 */
class EvidenceFinancial extends Model  implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    /**
     * @var string
     */
    protected $table = 'evidence_financial';

    /**
     * @var array
     */
    protected $auditInclude = [
        'id',
        'value',
        'activity_source_id',
        'evidence_id',
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'value',
        'activity_source_id',
        'evidence_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function activitySource()
    {
        return $this->belongsTo(ActivitySource::class, 'activity_source_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function evidence()
    {
        return $this->belongsTo(EvidenceAdvance::class, 'evidence_id');
    }
}
