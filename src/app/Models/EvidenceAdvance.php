<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class EvidenceAdvance
 * @package App\Models
 */
class EvidenceAdvance extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    /**
     * @var string
     */
    protected $table = 'evidence_advance';

    /**
     * @var array
     */
    protected $auditInclude = [
        'id',
        'year',
        'value',
        'date_report',
        'type',
        'how_is_done',
        'contract_number',
        'description',
        'state_id',
        'value_state',
        'evidence_advance_id',
        'activity_id',
        'rezago',
        'external_code'
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'year',
        'value',
        'date_report',
        'type',
        'how_is_done',
        'contract_number',
        'description',
        'state_id',
        'value_state',
        'evidence_advance_id',
        'activity_id',
        'rezago',
        'external_code'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function evidence()
    {
        return $this->belongsTo(EvidenceAdvance::class, 'evidence_advance_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function advances()
    {
        return $this->hasMany(EvidenceAdvance::class, 'evidence_advance_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function evidenceFinancial()
    {
        return $this->hasMany(EvidenceFinancial::class, 'evidence_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments()
    {
        return $this->hasMany(Payment::class, 'evidence_id');
    }

    public function indicator_activities(): HasMany
    {
        return $this->hasMany(Indicator_activity::class, 'evidence_id');
    }    

    public function otherDataYear(): HasMany
    {
        return $this->hasMany(OtherDataYear::class, 'activity_id', 'activity_id');
    }
}
