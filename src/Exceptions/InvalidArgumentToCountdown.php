<?php

/*
 * This file is part of the Ariyanshipu\LaravelCountdown package.
 */

namespace Ariyanshipu\LaravelCountdown\Exceptions;

use InvalidArgumentException;

class InvalidArgumentToCountdown extends InvalidArgumentException
{
    protected $message = 'You must at least tell where to count from.';
}
