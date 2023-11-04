<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Permission extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    /**
     * @var array
     */
    protected $auditInclude = [
        'id',
        'name',
        'module',
        'created_at',
        'updated_at'
    ];

    protected $table = 'permissions';

    protected $fillable = [
        'name',
        'module',
        'created_at',
        'updated_at'
    ];

     /**
     * The roles that belong to the Permission.
     */
    public function rols()
    {
        return $this->belongsToMany(Rol::class);
    }

}
