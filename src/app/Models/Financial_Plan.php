<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\Financing_Source;
use App\Models\PAI; 
use App\Models\Fundraising; 
use App\Models\ActivitySource; 
use Illuminate\Database\Eloquent\Relations\HasMany;
class Financial_Plan extends Model  implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'financial_plans';

    protected $fillable = [
        'p_a_i_id',
        'source_id',
        'value',
        'investment_percentage',
        'investment',
        'investment_balance',
        'functioning_percentage',
        'functioning',
        'functioning_balance',
        'debt_service_percentage',
        'debt_service',
        'debt_service_balance',
        'fund_percentage',
        'fund',
        'fund_balance',
        'year',
        'financial_plan_code'
    ];

    public function financing_Source()
    {
        return $this->hasOne(Financing_Source::Class, 'id', 'source_id');
    }

    public function fundraising()
    {
        return $this->hasMany(Fundraising::class,'financial_plans_id','id');
    }
    public function pai()
    {
        return $this->belongsTo(PAI::class, 'p_a_i_id');
    }

    public function activity_source()
    {
        return $this->hasMany(ActivitySource::class, 'source_id', 'id');
    }
}
