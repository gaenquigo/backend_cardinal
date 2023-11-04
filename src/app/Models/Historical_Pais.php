<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 
/**
 * Class File
 * @package App
 */

class Historical_Pais extends Model
{
     /**
     * @var string
     */
    protected $table = 'historical_Pais';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'group_id',
        'anio',
        'name',
        'url'
    ];

     /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
