<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingsModel extends Model
{

    protected $table = 'c_setting';

    public function scopeTypeArray($query, $key = NULL, $type = ['type' => 'array'])
    {
        $query->where($key)
                ->where($type)
                ->orderBy('order')
                ->first();
    }

}
