<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\Financial_Plan;

/**
 * Class PAI
 * @package App
 */
class PAI extends Model implements Auditable
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
        'name',
        'start_date',
        'end_date',
        'director_name',
        'group_id',
        'approved',
    ];

    /**
     * @var string
     */
    protected $table = 'pais';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'start_date',
        'end_date',
        'director_name',
        'group_id',
        'approved',
        'pai_code',
        'internal_status'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function strategicLines()
    {
        return $this->hasMany(StrategicLine::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function versions()
    {
        return $this->hasMany(PAIHistory::class, 'parent_id');
    }

    public function financial_plans()
    {
        return $this->hasMany(Financial_Plan::class, 'p_a_i_id', 'id');
    }

    public function financial_costs()
    {
        return $this->hasMany(Financial_cost::class, 'p_a_i_id', 'id');
    }
    
    public function Suggestion()
    {
        return $this->hasMany(Suggestion::class, 'p_a_i_id', 'id');
    }

    public function reportFCA()
    {
        return $this->hasMany(ReportFCA::class, 'pai_id', 'id');
    }

    public function indicatorIediValue()
    {
        return $this->hasMany(IndicatorIediValue::class, 'p_a_i_id', 'id');
    }
}
