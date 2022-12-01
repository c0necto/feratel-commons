<?php

namespace App\Helpers\FeratelDsi\Util;

use Exception;

class DsiException extends Exception
{

    /**
     * @param $status
     * @param $message
     */
    public function __construct($status, $message, $previous = null)
    {
        parent::__construct($message, $status, $previous);
    }
}
