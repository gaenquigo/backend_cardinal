<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Financial_Plan_History extends Model
{
    protected $table = 'financial_plans_history';

    protected $fillable = [
        'id',
        'history',
        'pai_history_id',
        'parent_id',
    ];

    public function paiHistory()
    {
        return $this->belongsTo(PAIHistory::class, 'pai_history_id');
    }    

    public function parent()
    {
        return $this->belongsTo(Financial_Plan::class, 'parent_id');
    }
}
