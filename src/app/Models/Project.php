<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class Project
 * @package App
 */
class Project extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    /**
     * @var array
     */
    protected $auditInclude = [
        'id',
        'program_id',
        'project',
        'weighing',
    ];
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'program_id',
        'project',
        'weighing',
        'internal_status',
        'project_code'

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function objectives() {
        return $this->hasMany(Objective::class);
    }
}
