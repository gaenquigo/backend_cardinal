<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StrategicLineHistory
 * @package App
 */
class StrategicLineHistory extends Model
{

    /**
     * @var string
     */
    protected $table = 'strategic_lines_history';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'history',
        'pai_history_id',
        'parent_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paiHistory()
    {
        return $this->belongsTo(PAIHistory::class, 'pai_history_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parent()
    {
        return $this->hasMany(StrategicLine::class, 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function programsHistory()
    {
        return $this->hasMany(ProgramHistory::class, 'strategic_line_history_id');
    }
}
