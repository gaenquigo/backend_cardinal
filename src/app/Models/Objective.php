<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class Objective
 * @package App
 */
class Objective extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    /**
     * @var array
     */
    protected $auditInclude = [
        'id',
        'objective',
        'project_id',
        'weighing',
    ];

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'objective',
        'project_id',
        'weighing',
        'internal_status',
        'objective_code'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function objectiveProducts()
    {
        return $this->hasMany(ObjectiveProduct::class);
    }

}
