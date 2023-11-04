<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Activity
 * @package App
 */
class Activity extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    /**
     * @var array
     */
    protected $auditInclude = [
        'id',
        'objective_id',
        'product_id',
        'name',
        'goal',
        'goal_1',
        'goal_2',
        'goal_3',
        'goal_4',
        'weighing',
        'answer_sentence',
        'geometry',
        'ocde_category',
        'ocde_indicator',
        'indicator_id',
        'variable_id'
    ];

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'objective_id',
        'product_id',
        'name',
        'goal',
        'goal_1',
        'goal_2',
        'goal_3',
        'goal_4',
        'weighing',
        'answer_sentence',
        'geometry',
        'ocde_category_id',
        'ocde_indicator_id',
        'activity_code',
        'indicator_id',
        'variable_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function objective()
    {
        return $this->belongsTo(Objective::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activity_sources()
    {
        return $this->hasMany(ActivitySource::class);
    }

    /**
     * @return HasMany
     */
    public function evidences_advances()
    {
        return $this->hasMany(EvidenceAdvance::class, 'activity_id');
    }

    /**
     * @return HasMany
     */
    public function indicator_activities(): HasMany
    {
        return $this->hasMany(Indicator_activity::class, 'activities_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function otherDataYear(): HasMany
    {
        return $this->hasMany(OtherDataYear::class, 'activity_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ocdeCategory()
    {
        return $this->belongsTo(Domain::class, 'ocde_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ocdeIndicator()
    {
        return $this->belongsTo(Domain::class, 'ocde_indicator_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Domain::class, 'product_id');
    }

    /**
     * Get the indicator associated with the Activity
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function indicator(): HasOne
    {
        return $this->hasOne(Indicator::class, 'id', 'indicator_id');
    }

    /**
     * Get the variable associated with the Activity
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function variable(): HasOne
    {
        return $this->hasOne(Variable::class, 'id', 'variable_id');
    }

}
