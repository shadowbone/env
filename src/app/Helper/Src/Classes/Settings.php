<?php

namespace App\Helper\Src\Classes;

use App\Models\SettingsModel;

class Settings
{

    public function appInit()
    {
        $qSetting = SettingsModel::TypeArray([
                    'key' => 'APP_INIT',
                    'name' => 'info'
                ])->first();
        if ($qSetting->type === 'array') {
            return (object) json_decode($qSetting->value);
        } else {
            return $qSetting->value;
        }
    }

}
