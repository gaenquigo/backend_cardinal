<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Permission_Rol
 * @package App
 */
class Permission_Rol extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'permission_id', 'rol_id'
    ];

    /**
     * @var string
     */
    protected $table = 'permission_rol';
    /**
    * Indicates if the IDs are auto-incrementing.
    *
    * @var bool
    */
    public $incrementing = true;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function permission() {
        return $this->belongsTo(Permission::class, 'permission_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rol() {
        return $this->belongsTo(Rol::class, 'rol_id');
    }

}
