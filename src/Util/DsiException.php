<?php

namespace Conecto\FeratelDsi\Util;

use Exception;

class DsiException extends Exception
{

    /**
     * @param $status
     * @param $message
     * @param null $previous
     */
    public function __construct($status, $message, $previous = null)
    {
        parent::__construct($message, $status, $previous);
    }
}
