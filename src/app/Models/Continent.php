<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    protected $table = 'continents';

    protected $fillable = [
        'name',
        'created_at',
        'updated_at'
    ];

    public function Country()
    {
        return $this->hasMany(Country::class);
    }
}
