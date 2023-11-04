<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class Payment
 * @package App\Models
 */
class Payment extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    /**
     * @var array
     */
    protected $auditInclude = [
        'id',
        'value',
        'payment',
        'payment_date',
        'evidence_id'
    ];

    /**
     * @var string
     */
    protected $table = 'payments';

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'value',
        'payment',
        'payment_date',
        'evidence_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function evidence()
    {
        return $this->belongsTo(EvidenceAdvance::class, 'evidence_id');
    }
}
