<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectHistory
 * @package App\Models
 */
class ProjectHistory extends Model
{
    /**
     * @var string
     */
    protected $table = 'projects_history';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'history',
        'program_history_id',
        'parent_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function programHistory()
    {
        return $this->belongsTo(ProgramHistory::class, 'program_history_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Program::class, 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function objectivesHistory()
    {
        return $this->hasMany(ObjectiveHistory::class, 'project_history_id');
    }
}
