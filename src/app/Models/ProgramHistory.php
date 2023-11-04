<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramHistory extends Model
{
    /**
     * @var string
     */
    protected $table = 'programs_history';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'history',
        'strategic_line_history_id',
        'parent_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function strategicLineHistory()
    {
        return $this->belongsTo(StrategicLineHistory::class, 'strategic_line_history_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Program::class, 'parent_id');
    }

    public function projectsHistory()
    {
        return $this->hasMany(ProjectHistory::class, 'program_history_id');
    }

}
