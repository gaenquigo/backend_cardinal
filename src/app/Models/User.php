<?php

namespace App\Models;

use App\Notifications\MyResetPasswordNotification;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 * @package App
 */
class User extends Authenticatable implements Auditable, JWTSubject
{
    use Notifiable, \OwenIt\Auditing\Auditable;

    /**
     * @var array
     */
  //  protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $auditInclude = [
        'name',
        'last_name',
        'type_document',
        'document',
        'start_date',
        'end_date',
        'group_id',
        'email',
        'password',
        'active',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'last_name',
        'type_document',
        'document',
        'start_date',
        'end_date',
        'email',
        'password',
        'active',
        'created_at',
        'updated_at',
        'group_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function rols()
    {
        return $this->belongsToMany(Rol::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    /**
     * @param string $token
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MyResetPasswordNotification($token));
    }
    
    /**
     * @param string $token
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * @param string $token
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function rolUser()
    {//
       // return $this->belongsToMany(Rol_User::class);
    return $this->hasMany(Rol_User::class);
    }

    public static function boot() {
        parent::boot();
        self::deleting(function($user) { // before delete() method call this
             $user->rolUser()->each(function($rol) {
                $rol->delete(); // <-- direct deletion
             });
             
        });
    }
}

