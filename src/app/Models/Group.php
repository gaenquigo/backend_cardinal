<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class Group
 * @package App
 */
class Group extends Model implements Auditable
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
        'name',
        'city_id',
        'state_id',
        'acronym',
        'address',
        'active',
        'created_at',
        'updated_at'
    ];
    /**
     * @var string
     */
    protected $table = 'groups';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'city_id',
        'state_id',
        'acronym',
        'address',
        'active',
        'created_at',
        'updated_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function Suggestion()
    {
        return $this->hasMany(Suggestion::class, 'group_id', 'id');
    }

    public function ReportFCA()
    {
        return $this->hasMany(ReportFCA::class, 'group_id', 'id');
    }

}
