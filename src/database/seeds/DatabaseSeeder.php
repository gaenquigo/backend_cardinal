<?php

use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RolPermissionListTableSeeder::class);
        $this->call(ContinentsTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(StateTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(GroupTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RolUserTableSeeder::class);
        $this->call(DomainTableSeeder::class);
        $this->call(DomainIndicatorCalculeSeeder::class);
        $this->call(DomainIndicatorTypeSeeder::class);
        $this->call(DomainIndicatorOtherDataSeeder::class);
        $this->call(DomainNatureSeeder::class);
        $this->call(DomainIndicatorVariablesSeeder::class);
        $this->call(DomainUnityObjetivePAISeeder::class);
        $this->call(DomainIndicatorDNPDataSeeder::class);
        $this->call(DomainNationalPolicyIndicatorsSeeder::class);
        $this->call(DomainODSIndicatorsSeeder::class);
        $this->call(DomainDatesColletsSeeder::class);
        $this->call(DomainDatesCostSeeder::class);
        $this->call(DomainDateRezagoSeeder ::class);
        $this->call(FinancingSourceTableSeeder::class);
        $this->call(FinancingCostTableSeeder::class);
        $this->call(MasterGeodataSeeder::class);
        $this->call(StateEvidenceAdvanceSeeder::class);
        $this->call(DomainIndicatorCategoryType::class);
        $this->call(AnexosSeeder::class);
        $this->call(DomainDatesSuggestion::class);
        $this->call(DomainDatesFestivos::class);
        $this->call(IndicatorSeeder::class);
        $this->call(IndicadorGeodataSeeder::class);
        $this->call(DateTableSeeder::class);
        $this->call(DomainOCDESeeder::class);
        $this->call(DomainIndicatorVariableTypeSeeder::class);
        $this->call(IndicatorSeederIEDI::class);
        $this->call(DomainUrlSeeder::class);

        ///////////// Prueba Informacion Historica ////////////////
       
        $this->call(HistoricPAI_CAM_Seeder::class);
        $this->call(HistoricPAI_CAR_Seeder::class);
        $this->call(HistoricPAI_CARDER_Seeder::class);
        $this->call(HistoricPAI_CARDIQUE_Seeder::class);
        $this->call(HistoricPAI_CARSUCRE_Seeder::class);
        $this->call(HistoricPAI_CAS_Seeder::class);
        $this->call(HistoricPAI_CDMB_Seeder::class);
        $this->call(HistoricPAI_CODECHOCO_Seeder::class);
        $this->call(HistoricPAI_CORALINA_Seeder::class);
        $this->call(HistoricPAI_CORANTIOQUIA_Seeder::class);
        $this->call(HistoricPAI_CORMACARENA_Seeder::class);
        $this->call(HistoricPAI_CORNARE_Seeder::class);
        $this->call(HistoricPAI_CORPAMAG_Seeder::class);
        $this->call(HistoricPAI_CORPOAMAZONIA_Seeder::class);
        $this->call(HistoricPAI_CORPOBOYACA_Seeder::class);
        $this->call(HistoricPAI_CORPOCALDAS_Seeder::class);
        $this->call(HistoricPAI_CORPOCESAR_Seeder::class);
        $this->call(HistoricPAI_CORPOCHIVOR_Seeder::class);
        $this->call(HistoricPAI_CORPOGUAJIRA_Seeder::class);
        $this->call(HistoricPAI_CORPOGUAVIO_Seeder::class);
        $this->call(HistoricPAI_CORPOMOJANA_Seeder::class);
        $this->call(HistoricPAI_CORPONARINO_Seeder::class);
        $this->call(HistoricPAI_CORPONOR_Seeder::class);
        $this->call(HistoricPAI_CORPORINOQUIA_Seeder::class);
        $this->call(HistoricPAI_CORPOURABA_Seeder::class);
        $this->call(HistoricPAI_CORTOLIMA_Seeder::class);
        $this->call(HistoricPAI_CRA_Seeder::class);
        $this->call(HistoricPAI_CRC_Seeder::class);
        $this->call(HistoricPAI_CRQ_Seeder::class);
        $this->call(HistoricPAI_CSB_Seeder::class);
        $this->call(HistoricPAI_CVC_Seeder::class);
        $this->call(HistoricPAI_CVS_Seeder::class);
        $this->call(HistoricFilesSeeder::class);

        
    }
}
