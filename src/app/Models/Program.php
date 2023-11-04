<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class Program
 * @package App
 */
class Program extends Model implements Auditable
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
        'strategic_line_id',
        'national_program_id',
        'car_program',
        'weighing'
    ];

    /**
     * @var array
     */
    protected $fillable = [
        'strategic_line_id',
        'national_program_id',
        'car_program',
        'weighing',
        'internal_status',
        'program_code'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function strategicLine()
    {
        return $this->belongsTo(StrategicLine::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
//    public function nationalProgram()
//    {
//        return $this->belongsTo(NationalProgram::class);
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
