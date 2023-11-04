<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Indicator1;
use App\Models\Indicator5;
use App\Models\Domain;


class Other_data extends Model
{
    protected $table = 'other_data';

    protected $fillable = [
        'variable_name',
        'type',
        'value',
        'indicator_id',
    ];

    public function indicator()
    {
        return $this->belongsTo(Indicator::class, 'indicator_id', 'id');
    }

    public function typeOtherDataDomain()
    {
        return $this->hasOne(Domain::class, 'id', 'type');
    }
}
