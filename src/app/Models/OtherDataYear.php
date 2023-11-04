<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\Other_data;
use App\Models\Indicator_activity;

class OtherDataYear extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'other_data_year';

    protected $fillable = [
        'year',
        'value',
        'other_data_id',
        'activity_id'
    ];

    public function otherData()
    {
        return $this->hasOne(Other_data::class, 'id', 'other_data_id');
    }
}
