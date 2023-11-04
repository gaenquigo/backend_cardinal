<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Date extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    /**
     * @var array
     */
    protected $auditInclude = [
        'id',
        'start_date',
        'end_date',
        'semester'
      
    ];

      /**
     * @var string
     */
    protected $table = 'dates';
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'start_date',
        'end_date',
        'semester'
    ];

}
