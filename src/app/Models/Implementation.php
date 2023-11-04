<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Fundraising;

/**
 * Class PAI
 * @package App
 */
class Implementation extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
   
    protected $table = 'implementations';
    protected $auditInclude = [
       'id',
       'p_a_i_s_id'
    ];


    protected $fillable = [
        'id',
        'p_a_i_s_id'
    ];

    public function fundraising(): HasMany
    {
        return $this->hasMany(Fundraising::Class, 'implementation_id', 'id');
    }
}
