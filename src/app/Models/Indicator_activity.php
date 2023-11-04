<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use OwenIt\Auditing\Contracts\Auditable;

class Indicator_activity extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'indicator_activities';

    protected $fillable = [
        'numerator',
        'denominator',
        'weighing',
        'result',
        'result_completed',
        'year',
        'variable_in',
        'indicator_id',
        'activities_id',
        'variable_id',
        'evidence_id'
    ];

    public function activities(): BelongsTo
    {
        return $this->belongsTo(Activity::Class, 'activities_id', 'id');
    }

    public function evidences(): BelongsTo
    {
        return $this->belongsTo(EvidenceAdvance::Class, 'evidence_id', 'id');
    }

    public function variableIn()
    {
        return $this->hasOne(Domain::Class, 'id', 'variable_in');
    }

    public function variable()
    {
        return $this->hasOne(Variable::Class, 'id', 'variable_id');
    }

    public function indicator()
    {
        return $this->hasOne(Indicator::Class, 'id', 'indicator_id');
    }    
}
