<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
        'name',
        'country_id',
        'created_at',
        'updated_at'
    ];

    public function Country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function City(){
        return $this->hasMany(City::class);
    }
}
