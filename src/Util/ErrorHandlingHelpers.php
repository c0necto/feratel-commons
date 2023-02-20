<?php

namespace Conecto\FeratelDsi;

use Throwable;

class ErrorHandlingHelpers
{

    /**
     * It is not pretty, however, it follows the example of PHP RFC: Catchable "call to a member function of a non-object"
     * {@link https://wiki.php.net/rfc/catchable-call-to-member-of-non-object}
     *
     * @param Throwable $exception
     * @return bool
     */
    public static function isMethodCallOnNullObjectException(Throwable $exception): bool
    {
        return boolval(preg_match("/Call to a member function .* on null/", $exception->getMessage()));
    }
}
