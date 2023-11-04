<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\ApprovalReport;
use App\Models\Historical_Pais;
/**
 * Class File
 * @package App
 */
class File extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    /**
     * @var array
     */
    protected $auditInclude = [
        'id',
        'file_url',
        'name',
        'type',
        'size',
        'indicator_id',
        'p_a_i_id',
        'approve_p_a_i_id',
        'noveltyGastos_id',
        'reports_id',
        'reportsHistorical_id',
        'informesfca_id'
    ];
    

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'file_url',
        'name',
        'type',
        'size',
        'indicator_id',
        'p_a_i_id',
        'approve_p_a_i_id',
        'noveltyGastos_id',
        'reports_id',
        'reportsHistorical_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
//    public function pai()
//    {
//        return $this->belongsTo(PAI::class);
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function approvePAI()
    {
        return $this->belongsTo(ApprovePAI::class, 'approve_p_a_i_id');
    }

    public function indicator(): BelongsTo
    {
        return $this->belongsTo(Indicator::Class, 'indicator_id', 'id');
    }

    public function novelety()
    {
        return $this->belongsTo(NoveltyPAI::class, 'noveltyGastos_id');
    }

    public function approveReports(): BelongsTo
    {
        return $this->belongsTo(ApprovalReport::class, 'reports_id', 'id');
    }

    public function historicalReports(): BelongsTo
    {
        return $this->belongsTo(Historical_Pais::class, 'reportsHistorical_id', 'id');
    }

    public function reportsFCA(): BelongsTo
    {
        return $this->belongsTo(InformesFca::class, 'informesfca_id', 'id');
    }
    
}
