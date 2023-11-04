<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Cost_Source extends Model  implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'cost_sources';

    protected $fillable = [
        'father_id',
        'code',
        'name',
        'description',
        'final_level',
        'functioning',
        'compensation',
        'debt_service',
        'parent_id', 
        'group_id' 
    ];


    public function cost_sources()
    {
        return $this->hasMany(Cost_Source::Class, 'father_id', 'id');
    }
    public function financial_costs()
    {
        return $this->hasMany(Financial_cost::Class, 'cost_sources_id', 'id');
    }
     
}
