<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class InformesFca extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    /**
     * @var array
     */

  
    protected $auditInclude = [
        'id',
        'date',
        'file',
        'archivoPago',
        'filePago',
        'pai_id',
        'group_id',
        'status'
    ];
    

    /**
     * @var array
     */
    protected $table = 'informesfca';
    protected $fillable = [
        'id',
        'date',
        'file',
        'filePago',
        'archivoPago',
        'pai_id',
        'group_id',
        'status'
    ];

    public function pai()
    {
        return $this->belongsTo(PAI::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
