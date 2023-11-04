<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\PAI; 
use App\Models\Group;

class Suggestion extends Model implements Auditable
{ 
    use \OwenIt\Auditing\Auditable;
   

    protected $table = 'suggestions';
    protected $fillable = [
      'id',
      'user_id',
      'group_id',
      'p_a_i_id',
      'domain_id',
      'suggestion'
      
    ];

    public function user()
    {
        return $this->belongsTo(User::Class, 'user_id', 'id');
    }

    
    public function pais()
    {
        return $this->belongsTo(PAI::class, 'p_a_i_id');
    }
    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id','id');
    }

    public function domain()
    {
        return $this->belongsTo(Domain::class, 'domain_id','id');
    }



}
