<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    protected $fillable = [
        'name',
        'city_code',
        'divipola',
        'state_id',
        'country_id',
        'continent_id',
        'created_at',
        'updated_at'
    ];

    public function State(){
        return $this->belongsTo(State::class, 'state_id');
    }

    public function Country(){
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function Continent(){
        return $this->belongsTo(Continent::class, 'continent_id');
    }

    public function Group(){
        return $this->hasMany(Group::class);
    }

}
