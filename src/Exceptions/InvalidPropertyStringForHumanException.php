<?php

/*
 * This file is part of the Ariyanshipu\LaravelCountdown package.
 */

namespace Ariyanshipu\LaravelCountdown\Exceptions;

use InvalidArgumentException;

class InvalidPropertyStringForHumanException extends InvalidArgumentException
{
    protected $message = 'String to parse for human contains invalid property';
}
