<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Indicator_activity;
use App\Models\Activity;
use App\Models\ActivitySource;
use App\Models\EvidenceAdvance;
use App\Models\EvidenceFinancial;
use App\Models\Objective;
use App\Models\PAI;
use App\Models\Program;
use App\Models\Project;
use App\Models\StrategicLine;
use stdClass;

/**
 * Class IndicatorActivitiesFullController
 * @package App\Http\Controllers
 */
class IndicatorActivitiesFullController extends Controller
{
    public function index($indicator_id)
    {
        try {
            $indicator_activities = Indicator_activity::where('indicator_id', $indicator_id)->get();
            $IdsActs = array();
            foreach ($indicator_activities as $indAct) {
                array_push($IdsActs, $indAct["activities_id"]);
            }
            $ActivitiesResul = array();
            foreach (array_unique($IdsActs) as $idAct) {
                $response_info = new stdClass();
                $response_info->GroupId = $this->getGroupIdAct($idAct);
                $response_info->ValPresu = $this->getValPresupuestadoAct($idAct);
                $response_info->ValCompro = $this->getValCompromeAct($idAct);
                $response_info->IDAct = $idAct;
                $response_info->ActName = $this->getNameAct($idAct);
                array_push($ActivitiesResul, $response_info);
            }
            $response = new ApiResponse(200, "Success", $ActivitiesResul);
        } catch (\Exception $e) {
            $response = new ApiResponse(500, "Error", ["messages" =>  'Internal Server Error ']);
        }
        return $response->response();
    }
    public function getGroupIdAct($idAct)
    {
        $activity = Activity::where('id', '=', $idAct)->first();
        $objective = Objective::where('id', '=', $activity["objective_id"])->first();
        $project = Project::where('id', '=', $objective["project_id"])->first();
        $program = Program::where('id', '=', $project["program_id"])->first();
        $strategic_line = StrategicLine::where('id', '=', $program["strategic_line_id"])->first();
        $pai = PAI::where('id', '=', $strategic_line["p_a_i_id"])->first();
        $gruopID = $pai["group_id"];
        return $gruopID;
    }
    public function getValPresupuestadoAct($idAct)
    {
        $Act_Source = ActivitySource::where('activity_id', '=', $idAct)->get();
        $valPresu = 0;
        foreach ($Act_Source as $ActVal) {
            $valPresu += $ActVal["value"];
        }
        return $valPresu;
    }
    public function getValCompromeAct($idAct)
    {
        $Act_Evid = EvidenceAdvance::where('activity_id', '=', $idAct)->get();
        $valCompro = 0;
        foreach ($Act_Evid as $Evid) {
            $EvidFinan = EvidenceFinancial::where('evidence_id', '=', $Evid["id"])->get();
            foreach ($EvidFinan as $EvidFin) {
                $valCompro += $EvidFin["value"];
            }
        }
        return $valCompro;
    }
    public function getNameAct($idAct)
    {
        $activity = Activity::where('id', '=', $idAct)->first();
        return $activity["name"];
    }
}
