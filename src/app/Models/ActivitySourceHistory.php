<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ActivitySource
 * @package App
 */
class ActivitySourceHistory extends Model
{
    /**
     * @var string
     */
    protected $table = 'activity_sources_history';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'history',
        'activity_history_id',
        'parent_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function activityHistory()
    {
        return $this->belongsTo(ActivityHistory::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(ActivitySource::class, 'parent_id');
    }
}

