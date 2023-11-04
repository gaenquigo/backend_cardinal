<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Data_Geodata extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'data_geodata';

    protected $fillable = [
        'campo',
        'alias',
        'master_geodata_id'
    ];
}
