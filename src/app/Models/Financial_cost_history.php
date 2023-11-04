<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Financial_cost_history extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    /**
     * @var array
     */
    protected $auditInclude = [
        'id',
        'financial_costs_id',
        'noveltyGastos_id',
        'financialCost_history'
        
    ];

    protected $table = 'financial_cost_historys';

    protected $fillable = [
        'id',
        'financial_costs_id',
        'noveltyGastos_id',
        'financialCost_history'
    ];

    public function financing_cost()
    {
        return $this->belongsTo(Financial_cost::Class, 'id', 'financial_costs_id');
    }

    public function novelity()
    {
        return $this->belongsTo(NoveltyPAI::class,'id','noveltyGastos_id');
    }
    
}
