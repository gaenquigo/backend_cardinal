<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\Indicator_objective;
use App\Models\Indicator_activity;
use App\Models\Domain;

class Indicator extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'indicators';

    protected $fillable = [
        'id',
        'type',
        'calcule_type',
        'category_type',
        'name',
        'abbreviated_name',
        'definition',
        'url',
        'unit_id',
        'result_name',
        'complementary_result',
        'complementary_in',
        'calcule_in',
        'parent_id',
        'group_id',
        'indicator_code',
        'geom',
        'label'
    ];

    public function indicator_activities()
    {
        return $this->hasMany(Indicator_activity::Class);
    }

    public function typeIndicatorDomain()
    {
        return $this->hasOne(Domain::Class, 'id', 'type');
    }

    public function calculeTypeDomain()
    {
        return $this->hasOne(Domain::Class, 'id', 'calcule_type');
    }

    public function categoryTypeDomain()
    {
        return $this->hasOne(Domain::Class, 'id', 'category_type');
    }

    public function otherData(): HasMany
    {
        return $this->hasMany(Other_data::class, 'indicator_id', 'id');
    }

    public function variables(): HasMany
    {
        return $this->hasMany(Variable::Class, 'indicator_id', 'id');
    }

    public function indicatorVariable(): HasMany
    {
        return $this->hasMany(IndicatorVariable::Class, 'indicator_id', 'id');
    }

    public function indicatorAccount(): HasMany
    {
        return $this->hasMany(IndicatorAccount::Class, 'indicator_id', 'id');
    }

    public function indicatorIediVariable(): HasMany
    {
        return $this->hasMany(IndicatorIediVariable::Class, 'indicator_id', 'id');
    }

    public function files(): HasMany
    {
        return $this->hasMany(File::Class, 'indicator_id', 'id');
    }

    public function units()
    {
        return $this->hasOne(Domain::Class, 'id', 'unit_id');
    }
}
