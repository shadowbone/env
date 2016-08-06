<?php

Route::group(['namespace' => 'Modules\Frontend\Controllers'], function() {
    Route::get('/', 'DashboardController@getIndex');
});
