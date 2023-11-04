<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class ObjectiveProduct
 * @package App
 */
class ObjectiveProduct extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    /**
     * @var array
     */
    protected $auditInclude = [
        'id',
        'objective_id',
        'product_id',
        'product_other',
        'goal_1',
        'goal_1_balance',
        'goal_2',
        'goal_2_balance',
        'goal_3',
        'goal_3_balance',
        'goal_4',
        'goal_4_balance',
        'weighing',
        'total_goal',
        'unit_goal',
        'indicator_national_id',
        'indicator_ods_id',
        'national_policy_id',
    ];

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'objective_id',
        'product_id',
        'product_other',
        'goal_1',
        'goal_1_balance',
        'goal_2',
        'goal_2_balance',
        'goal_3',
        'goal_3_balance',
        'goal_4',
        'goal_4_balance',
        'weighing',
        'total_goal',
        'unit_goal',
        'indicator_national_id',
        'indicator_ods_id',
        'national_policy_id',
        'objective_product_code'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->belongsTo(Domain::class, 'product_id');
    }
}
