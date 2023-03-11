<?php

namespace AadshalshihryLaravelHyperpay\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AadshalshihryLaravelHyperpay\Skeleton\SkeletonClass
 */
class LaravelHyperpay extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelHyperpay';
    }
}
