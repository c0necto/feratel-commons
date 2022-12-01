<?php

namespace Conecto\FeratelDsi\Dtos;

use Conecto\FeratelDsi\Dtos\FeratelDsiRS\FeratelDsiRSAType;

/**
 * Class representing FeratelDsiRS
 */
class FeratelDsiRS extends FeratelDsiRSAType
{
    public function __construct(int $status = null, string $message = null, array $result = null, array $mappingResult = null, \Conecto\FeratelDsi\Dtos\SPResponseType $sPResult = null)
    {
        parent::__construct($status,$message,$result,$mappingResult,$sPResult);
    }
}

