<?php
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('upload_file', 'UploadFileController@upload');
Route::get('get_file', 'UploadFileController@get_file');
Route::post('delete_file', 'UploadFileController@delete_file');


Route::group([], function ($ruta) {
    $ruta->post('login', 'AuthController@login');
    Route::group(['prefix' => 'master-geodata'], function () {
        Route::get('', 'MasterGeoDataController@index');
    });
    Route::group(['prefix' => 'indicators-activities'], function () {
        Route::get('/{indicator_id}', 'IndicatorActivitiesController@index');
    });
    Route::group(['prefix' => 'activities-indicators'], function () {
        Route::get('/{indicator_id}', 'IndicatorActivitiesFullController@index');
    });
    Route::group(['prefix' => 'groups'], function () {
        Route::get('', 'GroupsController@index');
    });
    Route::group(['prefix' => 'IndicatorsMG'], function () {
        Route::get('', 'IndicatorsMGController@index');
    });
});
Route::group(['middleware' => ['jwt.auth']], function () {
    Route::group(['prefix' => 'pais-full'], function () {
        Route::get('', 'PaisFullController@index');
        Route::post('', 'PaisFullController@store');
        Route::delete('/{pai_code}', 'PaisFullController@destroy');
        Route::get('/{pai_code}', 'PaisFullController@show');
    });
    Route::group(['prefix' => 'pais'], function () {
        Route::get('', 'PaisController@index');
        Route::post('', 'PaisController@store');
        Route::put('', 'PaisController@update');
        Route::delete('/{pai_code}', 'PaisController@destroy');
        Route::get('/{pai_code}', 'PaisController@show');
        Route::group(['prefix' => 'strategic-line'], function () {

            Route::post('/create', 'StrategicLineController@store');
            Route::put('/update', 'StrategicLineController@update');
            Route::delete('/delete', 'StrategicLineController@destroy');
            Route::get('/read', 'StrategicLineController@index');

            Route::group(['prefix' => 'programs'], function () {
                Route::post('/create', 'ProgramController@store');
                Route::put('/update', 'ProgramController@update');
                Route::delete('/delete', 'ProgramController@destroy');
                Route::get('/read', 'ProgramController@index');

                Route::group(['prefix' => 'project'], function () {
                    Route::post('/create', 'ProjectController@store');
                    Route::put('/update', 'ProjectController@update');
                    Route::delete('/delete', 'ProjectController@destroy');
                    Route::get('/read', 'ProjectController@index');

                    Route::group(['prefix' => 'objective'], function () {
                        Route::post('/create', 'ObjectiveController@store');
                        Route::put('/update', 'ObjectiveController@update');
                        Route::delete('/delete', 'ObjectiveController@destroy');
                        Route::get('/read', 'ObjectiveController@index');

                        Route::group(['prefix' => 'objective-product'], function () {
                            Route::post('/create', 'ObjectiveProductController@store');
                            Route::put('/update', 'ObjectiveProductController@update');
                            Route::delete('/delete', 'ObjectiveProductController@destroy');
                            Route::get('/read', 'ObjectiveProductController@index');
                        });
                        Route::group(['prefix' => 'activity'], function () {
                            Route::post('/create', 'ActivitiesController@store');
                            Route::put('/update', 'ActivitiesController@update');
                            Route::delete('/delete', 'ActivitiesController@destroy');
                            Route::get('/read', 'ActivitiesController@index');

                            Route::group(['prefix' => 'lag'], function () {
                                Route::get('/read', 'LagsController@index');
                                Route::post('/create', 'LagsController@store');
                                Route::group(['prefix' => 'source'], function () {
                                    Route::post('/create', 'LagsSourcesController@store');
                                    Route::delete('/delete', 'LagsSourcesController@destroy');
                                    Route::get('/read', 'LagsSourcesController@index');
                                });

                                Route::group(['prefix' => 'indicator'], function () {
                                    Route::post('/create', 'IndicatorsLagsController@store');
                                    Route::delete('/delete', 'IndicatorsLagsController@destroy');
                                    Route::get('/read', 'IndicatorsLagsController@index');
                                });

                                Route::group(['prefix' => 'payments'], function () {
                                    Route::post('/create', 'LagsPaymentsController@store');
                                    Route::delete('/delete', 'LagsPaymentsController@destroy');
                                    Route::get('/read', 'LagsPaymentsController@index');
                                });
                            });
                            

                            Route::group(['prefix' => 'indicator'], function () {
                                Route::post('/create', 'IndicatorsActivitiesController@store');
                                Route::delete('/delete', 'IndicatorsActivitiesController@destroy');
                                Route::get('/read', 'IndicatorsActivitiesController@index');
                            });
                            Route::group(['prefix' => 'source'], function () {
                                Route::post('/create', 'ActivitiesSourcesController@store');
                                Route::delete('/delete', 'ActivitiesSourcesController@destroy');
                                Route::get('/read', 'ActivitiesSourcesController@index');
                            });
                            Route::group(['prefix' => 'point'], function () {
                                Route::post('/create', 'ActivityGeodataController@point');
                                Route::delete('/delete', 'ActivityGeodataController@deletePoints');
                                Route::get('/read', 'ActivityGeodataController@getPoints');
                            });
                            Route::group(['prefix' => 'line'], function () {
                                Route::post('/create', 'ActivityGeodataController@line');
                                Route::delete('/delete', 'ActivityGeodataController@deleteLines');
                                Route::get('/read', 'ActivityGeodataController@getLines');
                            });
                            Route::group(['prefix' => 'polygon'], function () {
                                Route::post('/create', 'ActivityGeodataController@polygon');
                                Route::delete('/delete', 'ActivityGeodataController@deletePolygons');
                                Route::get('/read', 'ActivityGeodataController@getPolygons');
                            });
                            Route::group(['prefix' => 'evidence'], function () {
                                Route::post('/create', 'EvidencesAdvancesController@store');
                                Route::put('/update', 'EvidencesAdvancesController@update');
                                Route::delete('/delete', 'EvidencesAdvancesController@destroy');
                                Route::get('/read', 'EvidencesAdvancesController@index');
                                Route::group(['prefix' => 'advance'], function () {
                                    Route::post('/create', 'AdvancesController@store');
                                    Route::put('/update', 'AdvancesController@update');
                                    Route::delete('/delete', 'AdvancesController@destroy');
                                    Route::get('/read', 'AdvancesController@index');

                                    Route::group(['prefix' => 'source'], function () {
                                        Route::post('/create', 'AdvanceSourcesController@store');
                                        Route::delete('/delete', 'AdvanceSourcesController@destroy');
                                        Route::get('/read', 'AdvanceSourcesController@index');
                                    });

                                    Route::group(['prefix' => 'payments'], function () {
                                        Route::post('/create', 'AdvancePaymentsController@store');
                                        Route::delete('/delete', 'AdvancePaymentsController@destroy');
                                        Route::get('/read', 'AdvancePaymentsController@index');
                                    });
                                    Route::group(['prefix' => 'indicator'], function () {
                                        Route::post('/create', 'IndicatorsAdvancesController@store');
                                        Route::delete('/delete', 'IndicatorsAdvancesController@destroy');
                                        Route::get('/read', 'IndicatorsAdvancesController@index');
                                    });
                                });

                                Route::group(['prefix' => 'source'], function () {
                                    Route::post('/create', 'EvidencesSourcesController@store');
                                    Route::delete('/delete', 'EvidencesSourcesController@destroy');
                                    Route::get('/read', 'EvidencesSourcesController@index');
                                });

                                Route::group(['prefix' => 'indicator'], function () {
                                    Route::post('/create', 'IndicatorsEvidencesController@store');
                                    Route::delete('/delete', 'IndicatorsEvidencesController@destroy');
                                    Route::get('/read', 'IndicatorsEvidencesController@index');
                                });

                                Route::group(['prefix' => 'payments'], function () {
                                    Route::post('/create', 'EvidencePaymentsController@store');
                                    Route::delete('/delete', 'EvidencePaymentsController@destroy');
                                    Route::get('/read', 'EvidencePaymentsController@index');
                                });

                                Route::group(['prefix' => 'point'], function () {
                                    Route::post('/create', 'EvidenceGeodataController@point');
                                    Route::delete('/delete', 'EvidenceGeodataController@deletePoints');
                                    Route::get('/read', 'EvidenceGeodataController@getPoints');
                                });
                                Route::group(['prefix' => 'line'], function () {
                                    Route::post('/create', 'EvidenceGeodataController@line');
                                    Route::delete('/delete', 'EvidenceGeodataController@deleteLines');
                                    Route::get('/read', 'EvidenceGeodataController@getLines');
                                });
                                Route::group(['prefix' => 'polygon'], function () {
                                    Route::post('/create', 'EvidenceGeodataController@polygon');
                                    Route::delete('/delete', 'EvidenceGeodataController@deletePolygons');
                                    Route::get('/read', 'EvidenceGeodataController@getPolygons');
                                });
                            });
                        });
                    });
                });
            });
        });
        Route::group(['prefix' => 'financial_plans'], function () {
            Route::get('/all', 'FinancialPlanController@index');
            Route::get('/read', 'FinancialPlanController@show');
            Route::post('/create', 'FinancialPlanController@store');
            Route::delete('/delete', 'FinancialPlanController@destroy');
            Route::put('/update', 'FinancialPlanController@update');
        });
        Route::group(['prefix' => 'approve'], function () {
            Route::post('', 'ApprovePaiController@index');
        });
        Route::group(['prefix' => 'approve-report'], function () {
            Route::post('', 'ApproveReportController@index');
        });
        Route::group(['prefix' => 'fundraising'], function () {
            Route::get('/read', 'FundraisingsController@show');
            Route::post('/create', 'FundraisingsController@store');
        });
        Route::group(['prefix' => 'expenses'], function () {
            Route::get('/read', 'ExpensesController@show');
            Route::post('/create', 'ExpensesController@store');
            Route::post('/update', 'ExpensesController@update');
        });
    });

    Route::group(['prefix' => 'financing_sources'], function () {
        Route::get('/all', 'FinancingSourceController@index');
        Route::get('/read', 'FinancingSourceController@show');
        Route::post('/create', 'FinancingSourceController@store');
        Route::delete('/delete', 'FinancingSourceController@destroy');
        Route::put('/update', 'FinancingSourceController@update');
    });

    Route::group(['prefix' => 'cost_sources'], function () {
        Route::get('/all', 'CostSourceController@index');
        Route::get('/read', 'CostSourceController@show');
        Route::post('/create', 'CostSourceController@store');
        Route::delete('/delete', 'CostSourceController@destroy');
        Route::put('/update', 'CostSourceController@update');
    });
    Route::group(['prefix' => 'indicators'], function () {
        Route::get('/all', 'IndicatorController@index');
        Route::get('/read', 'IndicatorController@show');
        Route::post('/create', 'IndicatorController@store');
        Route::delete('/delete', 'IndicatorController@destroy');
        Route::put('/update', 'IndicatorController@update');
    });
});
