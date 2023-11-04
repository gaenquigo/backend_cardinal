<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class StrategicLine
 * @package App
 */
class StrategicLine extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $auditInclude = [
        'id',
        'name',
        'weighing',
        'p_a_i_id',
    ];

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'weighing',
        'p_a_i_id',
        'internal_status',
        'strategic_line_code'

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pai()
    {
        return $this->belongsTo(PAI::class, 'p_a_i_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}
