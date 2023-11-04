<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\Domain;
use App\Models\Phase;

class Variable extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'variables';

    protected $fillable = [
        'category_name',
        'phase_have',
        'category_weighing',
        'numerator_name',
        'abbreviated_numerator',
        'numerator_in',
        'denominator_name',
        'abbreviated_denominator',
        'denominator_in',
        'name_weighing',
        'abbreviated_weighing',
        'weighing_in',
        'indicator_id'
    ];

    public function indicator(): BelongsTo
    {
        return $this->belongsTo(Indicator::Class, 'indicator_id', 'id');
    }

    public function numeratorIn()
    {
        return $this->hasOne(Domain::Class, 'id', 'numerator_in');
    }

    public function denominatorIn()
    {
        return $this->hasOne(Domain::Class, 'id', 'denominator_in');
    }

    public function weighingIn()
    {
        return $this->hasOne(Domain::Class, 'id', 'weighing_in');
    }

    public function phases(): HasMany
    {
        return $this->hasMany(Phase::Class, 'variable_id', 'id');
    }

    public function indicador_geodata(): HasMany
    {
        return $this->hasMany(Indicador_Geodata::Class, 'variable_id', 'id');
    }
}
