<?php

namespace Conecto\FeratelDsi\Dtos\FeratelDsiRQ;

/**
 * Class representing FeratelDsiRQAType
 */
class FeratelDsiRQAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType $request
     */
    private $request = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\MappingRequestType $mappingRequest
     */
    private $mappingRequest = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SPRequestType $sPRequest
     */
    private $sPRequest = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\RequestType $request = null, \Conecto\FeratelDsi\Dtos\MappingRequestType $mappingRequest = null, \Conecto\FeratelDsi\Dtos\SPRequestType $sPRequest = null)
    {
        $this->request = $request;
        $this->mappingRequest = $mappingRequest;
        $this->sPRequest = $sPRequest;
    }

    /**
     * Gets as request
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType $request
     * @return self
     */
    public function setRequest(?\Conecto\FeratelDsi\Dtos\RequestType $request = null)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as mappingRequest
     *
     * @return \Conecto\FeratelDsi\Dtos\MappingRequestType
     */
    public function getMappingRequest()
    {
        return $this->mappingRequest;
    }

    /**
     * Sets a new mappingRequest
     *
     * @param \Conecto\FeratelDsi\Dtos\MappingRequestType $mappingRequest
     * @return self
     */
    public function setMappingRequest(?\Conecto\FeratelDsi\Dtos\MappingRequestType $mappingRequest = null)
    {
        $this->mappingRequest = $mappingRequest;
        return $this;
    }

    /**
     * Gets as sPRequest
     *
     * @return \Conecto\FeratelDsi\Dtos\SPRequestType
     */
    public function getSPRequest()
    {
        return $this->sPRequest;
    }

    /**
     * Sets a new sPRequest
     *
     * @param \Conecto\FeratelDsi\Dtos\SPRequestType $sPRequest
     * @return self
     */
    public function setSPRequest(?\Conecto\FeratelDsi\Dtos\SPRequestType $sPRequest = null)
    {
        $this->sPRequest = $sPRequest;
        return $this;
    }
}

