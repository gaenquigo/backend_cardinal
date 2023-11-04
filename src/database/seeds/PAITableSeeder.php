<?php

use Illuminate\Database\Seeder;
use App\Models\PAI;
use App\Models\StrategicLine;
use App\Models\Program;
use App\Models\Project;
use App\Models\Objective;
use App\Models\ObjectiveProduct;
use App\Models\Activity;
use App\Models\ActivitySource;
use App\Models\Financial_Plan;

/**
 * Class PAITableSeeder
 */
class PAITableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PAI::create([
            'name' => "PAI de ejemplo",
            'start_date' => "2020-01-01",
            'end_date' => "2024-01-02",
            'director_name' => "Jose Rodriguez",
            'group_id' => 1,
        ]);

        $pai = PAI::create([
            'name' => "PAI aprobado",
            'start_date' => "2020-01-01",
            'end_date' => "2024-01-01",
            'director_name' => "Jose Rodriguez",
            'group_id' => 1,
            'approved' => 1
        ]);

        $strategicLine = StrategicLine::create([
            'name' => 'Linea estrategica de prueba',
            'weighing' => 100,
            'p_a_i_id' => $pai->id,
        ]);

        $program = Program::create([
            'strategic_line_id' => $strategicLine->id,
            'national_program_id' => 1,
            'car_program' => 'Programa de prueba',
            'weighing' => 100
        ]);

        $project = Project::create([
            'program_id' => $program->id,
            'project' => 'Proyecto de prueba',
            'weighing' => 100
        ]);

        $objective = Objective::create([
            'objective' => 'Objetivo de prueba',
            'project_id' => $project->id,
            'weighing' => 100,
        ]);

        $objective = ObjectiveProduct::create([
            'objective_id' => $objective->id,
            'product_id' => 1,
            'goal_1' => 1,
            'goal_2' => 2,
            'goal_3' => 3,
            'goal_4' => 4,
            'weighing' => 100,
            'total_goal' => 10,
            'unit_goal' => 1,
            'indicator_national_id' => 1,
            'indicator_ods_id' => 1,
            'national_policy_id' => 1
        ]);

        $activity = Activity::create([
            'objective_id' => $objective->id,
            'product_id' => 1,
            'name' => 'Actividad de prueba',
            'goal' => 10,
            'goal_1' => 1,
            'goal_2' => 2,
            'goal_3' => 3,
            'goal_4' => 4,
            'weighing' => 100,
            'geometry' => 1,
        ]);


        DB::table('financing_sources')->insert([
            'father_id' => 5,
            'code' => '1.1.1.1.1.4',
            'name' => "Fuente de financiación",
            'description' => 'Prueba de fuente de financiación',
            'final_level' => true,            
            'group_id' => 1
        ]);

        $idFinancingSource = DB::getPdo()->lastInsertId();

        Financial_Plan:: create([
            'p_a_i_id' => $pai->id,
            'source_id' => $idFinancingSource,
            'value' => 1000000,
            'investment' => 300000,
            'investment_balance' => 300000,
            'functioning' => 200000,
            'debt_service' => 300000,
            'fund' => 200000,
            'year' => 1
        ]);

        $idFinancingPlanY1 = DB::getPdo()->lastInsertId();

        Financial_Plan:: create([
            'p_a_i_id' => $pai->id,
            'source_id' => $idFinancingSource,
            'value' => 2000000,
            'investment' => 600000,
            'investment_balance' => 600000,
            'functioning' => 400000,
            'debt_service' => 600000,
            'fund' => 400000,
            'year' => 2
        ]);

        $idFinancingPlanY2 = DB::getPdo()->lastInsertId();

        Financial_Plan:: create([
            'p_a_i_id' => $pai->id,
            'source_id' => $idFinancingSource,
            'value' => 100000,
            'investment' => 30000,
            'investment_balance' => 30000,
            'functioning' => 20000,
            'debt_service' => 30000,
            'fund' => 20000,
            'year' => 3
        ]);

        $idFinancingPlanY3 = DB::getPdo()->lastInsertId();

        Financial_Plan:: create([
            'p_a_i_id' => $pai->id,
            'source_id' => $idFinancingSource,
            'value' => 200000,
            'investment' => 60000,
            'investment_balance' => 60000,
            'functioning' => 40000,
            'debt_service' => 60000,
            'fund' => 40000,
            'year' => 4
        ]);

        $idFinancingPlanY4 = DB::getPdo()->lastInsertId();

        ActivitySource::create([
            'activity_id' => $activity->id,
            'goal' => 2000000,
            'source_id' => $idFinancingPlanY1,
            'value' => 2000000,
            'age' => 1,
        ]);

        ActivitySource::create([
            'activity_id' => $activity->id,
            'goal' => 2000000,
            'source_id' => $idFinancingPlanY2,
            'value' => 2000000,
            'age' => 2,
        ]);


        ActivitySource::create([
            'activity_id' => $activity->id,
            'goal' => 100000,
            'source_id' => $idFinancingPlanY3,
            'value' => 100000,
            'age' => 3,
        ]);


        ActivitySource::create([
            'activity_id' => $activity->id,
            'goal' => 200000,
            'source_id' => $idFinancingPlanY4,
            'value' => 200000,
            'age' => 4,
        ]);
    }
}
