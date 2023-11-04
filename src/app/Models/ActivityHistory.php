<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ActivityHistory
 * @package App
 */
class ActivityHistory extends Model
{
    /**
     * @var string
     */
    protected $table = 'activities_history';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'history',
        'objective_history_id',
        'parent_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function objectiveHistory()
    {
        return $this->belongsTo(ObjectiveHistory::class, 'objective_history_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Activity::class, 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activitySourcesHistory()
    {
        return $this->hasMany(ActivitySourceHistory::class, 'activity_history_id');
    }
}
