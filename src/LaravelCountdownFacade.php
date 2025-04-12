<?php

namespace Ariyanshipu\LaravelCountdown;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ariyanshipu\LaravelCountdown\Skeleton\SkeletonClass
 */
class LaravelCountdownFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-countdown';
    }
}
