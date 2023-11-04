<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ObjectiveHistory
 * @package App
 */
class ObjectiveHistory extends Model
{
    /**
     * @var string
     */
    protected $table = 'objectives_history';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'history',
        'project_history_id',
        'parent_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function projectHistory()
    {
        return $this->belongsTo(ProjectHistory::class, 'project_history_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Objective::class, 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function objectiveProductsHistory()
    {
        return $this->hasMany(ObjectiveProductHistory::class, 'objective_history_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activitiesHistory()
    {
        return $this->hasMany(ActivityHistory::class, 'objective_history_id');
    }

}
