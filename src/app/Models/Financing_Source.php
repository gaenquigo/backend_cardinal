<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Financing_Source extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'financing_sources';

    protected $fillable = [
        'father_id',
        'code',
        'name',
        'description',
        'type_id',
        'final_level',
        'parent_id',
        'group_id',
        'corporation'
    ];

    /**
     * The permissions that belong to the role.
     */
    public function domains()
    {
        return $this->hasMany(Domain::Class, 'id', 'type_id');
    }

    public function financing_sources()
    {
        return $this->hasMany(Financing_Source::Class, 'father_id', 'id');
    }

    public function financial_plan()
    {
        return $this->belongsTo(Financial_Plan::Class, 'id', 'source_id');
    }
}
