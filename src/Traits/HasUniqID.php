<?php

namespace AadshalshihryLaravelHyperpay\Traits;

trait HasUniqID
{
    public static function bootHasUniqID()
    {
        static::creating(function ($model) {
            if (! $model->getKey()) {
                $model->{$model->getKeyName()} = uniqid();
            }
        });
    }
}
