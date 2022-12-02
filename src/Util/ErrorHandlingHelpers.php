<?php

namespace Conecto\FeratelDsi;

use Error;
use Exception;

class ErrorHandlingHelpers
{

    /**
     * It is not pretty, however, it follows the example of PHP RFC: Catchable "call to a member function of a non-object"
     * {@link https://wiki.php.net/rfc/catchable-call-to-member-of-non-object}
     *
     * @param Exception|Error $exception
     * @return false|int
     */
    public static function isMethodCallOnNullObjectException(Exception|Error $exception): int|false
    {
        return preg_match("/Call to a member function .* on null/", $exception->getMessage());
    }
}
