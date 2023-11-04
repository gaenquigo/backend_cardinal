<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class NoveltyPAI
 * @package App
 */
class NoveltyPAI extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    /**
     * @var array
     */
    protected $auditInclude = [
        'id',
        'date',
        'file',
        'agreement_number',
        'agreement',
        'pai_id',
        'group_id',
        'complete'
    ];

    /**
     * @var string
     */
    protected $table = 'novelty_pais';
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'date',
        'file',
        'agreement_number',
        'agreement',
        'pai_id',
        'group_id',
        'complete'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pai()
    {
        return $this->belongsTo(PAI::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
