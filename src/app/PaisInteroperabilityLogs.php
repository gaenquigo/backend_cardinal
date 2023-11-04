<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class PaisInteroperabilityLogs extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $auditInclude = [
        'id',
        'pai_code',
        'pai_id',
        'user_id'
    ];

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'pai_code',
        'pai_id',
        'user_id'
    ];
}
