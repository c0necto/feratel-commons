<?php

namespace Conecto\FeratelDsi\Dtos;

use Conecto\FeratelDsi\Dtos\FeratelDsiRQ\FeratelDsiRQAType;

/**
 * Class representing FeratelDsiRQ
 */
class FeratelDsiRQ extends FeratelDsiRQAType
{
    public function __construct(\Conecto\FeratelDsi\Dtos\RequestType $request = null, \Conecto\FeratelDsi\Dtos\MappingRequestType $mappingRequest = null, \Conecto\FeratelDsi\Dtos\SPRequestType $sPRequest = null)
    {
        parent::__construct($request,$mappingRequest,$sPRequest);
    }
}

