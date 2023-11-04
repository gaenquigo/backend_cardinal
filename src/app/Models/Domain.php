<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Domain extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'domains';

    protected $fillable = [
       'domain' ,'father_id', 'name', 'description', 'state'
    ];

    public function financingSources(): BelongsTo
    {
        return $this->belongsTo(Financing_Source::class);
    }
}
