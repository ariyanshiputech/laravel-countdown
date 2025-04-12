<?php

namespace Ariyanshipu\LaravelCountdown\Traits;

use Carbon\Carbon;

trait CalculateTimeDiff
{
    /**
     * Return elapsed time based in model attribite
     *
     * @param  string $attribute
     * @return Ariyanshipu\LaravelCountdown\Countdown $countdown
     */
    public function elapsed($attribute)
    {
        $countdown = app('ariyanshipu.countdown');
        $attribute = $this->{$attribute};
        $now = Carbon::now();

        return $countdown->from($attribute)
            ->to($now)->get();
    }

    /**
     * Return until time based in model attribite
     *
     * @param  string $attribute
     * @return Ariyanshipu\LaravelCountdown\Countdown $countdown
     */
    public function until($attribute)
    {
        $countdown = app('ariyanshipu.countdown');
        $attribute = $this->{$attribute};
        $now = Carbon::now();

        return $countdown->from($now)
            ->to($attribute)->get();
    }
}
