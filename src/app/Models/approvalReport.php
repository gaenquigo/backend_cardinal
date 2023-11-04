<?php

namespace App\Models;

use OwenIt\Auditing\Contracts\Auditable;

use Illuminate\Database\Eloquent\Model;

class ApprovalReport extends Model  implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $auditInclude = [
        'id',
        'date',
        'file',
        'agreement',
        'pai_id',
        'group_id'
 
    ];

    /**
     * @var string
     */
    protected $table = 'approval_reports';
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'date',
        'file',
        'agreement',
        'pai_id',
        'group_id'
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
