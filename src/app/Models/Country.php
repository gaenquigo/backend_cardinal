<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'continent_id',
        'a2-iso',
        'a3-un',
        'dialing',
    ];

    public function Continent()
    {
        return $this->belongsTo(Continent::class, 'continent_id');
    }

    public function State(){
        return $this->hasMany(State::class);
    }

}
