<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class TransactionalLogs extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    /**
     * @var string
     */
    protected $table = 'transactional_logs';

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $auditInclude = [
        'id',
        'description',
        'user_id'
    ];

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'description',
        'user_id'
    ];
}
