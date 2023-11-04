<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ObjectiveProduct
 * @package App
 */
class ObjectiveProductHistory extends Model
{
    /**
     * @var string
     */
    protected $table = 'objective_products_history';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'history',
        'objective_history_id',
        'parent_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function objectiveHistory()
    {
        return $this->belongsTo(ObjectiveHistory::class, 'objective_history_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Objective::class, 'parent_id');
    }
}
