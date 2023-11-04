<?php

namespace App\Models;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Model;

class Financial_cost extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'financial_costs';
    protected $fillable = [
      'year',
      'value_bugeted',
      'value_comitted',
      'value_required',
      'value_paid',
      'cost_sources_id',
      'own',
      'nation',
      'royalties',
      'funds',
      'functioning',
      'compensation',
      'debt_service',
      'complete',
      'version',
      'p_a_i_id',
      'group_id',
      
   
   
    ];
    public function cost_sources()
    {
        return $this->belongsTo(Cost_Source::Class, 'cost_sources_id', 'id');
    }

    
    public function pais()
    {
        return $this->belongsTo(PAI::class, 'p_a_i_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

}

