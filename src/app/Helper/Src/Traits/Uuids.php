<?php

namespace App\Helper\Src\Traits;

use Uuid;

trait Uuids
{

    protected static function boot()
    {
        parent::boot();
        static::creating(function($model) {
            $model->{$model->getKeyName()} = Uuid::generate(4)->string;
        });
    }

}
