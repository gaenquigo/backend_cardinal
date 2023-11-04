<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\MyResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\Implementation;
use App\Models\Financial_Plan;  

class Fundraising extends Model implements Auditable 
{
    use  \OwenIt\Auditing\Auditable;
    
    protected $table = 'fundraisings';

    protected $auditInclude = [
      'value',
      'date',
      'implementation_id',
      'financial_plans_id',
      'collections'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'value',
        'date',
        'implementation_id',
        'financial_plans_id',
        'collections'
    ];

    public function implementation(): BelongsTo
    {
        return $this->belongsTo(Implementation::Class, 'implementation_id', 'id');
    }
   
    public function Financial_Plan()
    {
        return $this->belongsTo(Financial_Plan::class,'id','financial_plans_id');
    }

   }

