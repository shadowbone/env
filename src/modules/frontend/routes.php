<?php

Route::group(['prefix' => 'frontend', 'namespace' => 'Modules\Frontend\Controllers'], function() {
    Route::get('/', 'DashboardController@getIndex');
});
