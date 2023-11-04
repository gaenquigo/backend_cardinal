<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class ApprovePAI
 * @package App
 */
class ApprovePAI extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    /**
     * @var array
     */
    protected $auditInclude = [
        'id',
        'date',
        'file',
        'resolution_number',
        'pai_id',
    ];

    /**
     * @var string
     */
    protected $table = 'approve_pais';
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'date',
        'file',
        'resolution_number',
        'pai_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pai()
    {
        return $this->belongsTo(PAI::class);
    }
}
