<?php

/*
 * This file is part of the Ariyanshipu\LaravelCountdown package.
 */

namespace Ariyanshipu\LaravelCountdown\Exceptions;

use InvalidArgumentException;

class InvalidDateFormatToCountdown extends InvalidArgumentException
{
    protected $message = 'Invalid date string or object to parse.';
}
