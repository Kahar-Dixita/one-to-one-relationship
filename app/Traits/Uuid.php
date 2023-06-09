<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait Uuid
{
    protected static function boot ()
    {
        parent::boot();
        static::creating(function ($model) 
        {
            if ($model->getKey() === null) {
                $model->setAttribute($model->getKeyName(), Str::Uuid()->toString());
            }
        });
    }

  
    public function getIncrementing ()
    {
        return false;
    }

  
    public function getKeyType ()
    {
        return 'string';
    }
}
