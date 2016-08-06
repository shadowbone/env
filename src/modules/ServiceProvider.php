<?php

namespace Modules;

use Setting,
    View;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function boot()
    {
        $modules = config("module.modules");
        while (list(, $module) = each($modules)) {
            if (file_exists(__DIR__ . '/' . $module . '/routes.php')) {
                include __DIR__ . '/' . $module . '/routes.php';
            }
            if (is_dir(__DIR__ . '/' . $module . '/Views')) {
                $this->loadViewsFrom(__DIR__ . '/' . $module . '/Views', $module);
            }
        }
        view()->share('info', Setting::appInit());
    }

    public function register()
    {
        
    }

}
