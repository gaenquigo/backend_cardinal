<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PAIHistory
 * @package App\Models
 */
class PAIHistory extends Model
{
    /**
     * @var string
     */
    protected $table = 'pais_history';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'version',
        'history',
        'parent_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(PAI::class, 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function strategicLinesHistory() {
        return $this->hasMany(StrategicLineHistory::class, 'pai_history_id');
    }
}
