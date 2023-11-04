<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    protected $table = 'audits';

    protected $fillable = [
        'id', 
        'user_type', 
        'user_id', 
        'event', 
       'auditable',
        'old_values',
        'new_values',
        'url',
        'ip_address',
        'user_agent',
        'tags'
    ];

    public function user(){
     
    return $this->belongsTo(User::class,  'user_id');
    }


}
