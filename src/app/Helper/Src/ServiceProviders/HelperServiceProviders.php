<?php

namespace App\Helper\Src\ServiceProviders;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class HelperServiceProviders extends ServiceProvider
{

    public function boot()
    {
        //
    }

    public function register()
    {
        App::bind('settings', function() {
            return new \App\Helper\Src\Classes\Settings;
        });
    }

}
