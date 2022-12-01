<?php

namespace Conecto\FeratelDsi\Dtos\SPRequestType;

/**
 * Class representing ActivateRequestPoolAType
 */
class ActivateRequestPoolAType
{
    /**
     * @var string $hotelCode
     */
    private $hotelCode = null;

    /**
     * @var string $requestPoolId
     */
    private $requestPoolId = null;

    public function __construct(string $hotelCode = null, string $requestPoolId = null)
    {
        $this->hotelCode = $hotelCode;
        $this->requestPoolId = $requestPoolId;
    }

    /**
     * Gets as hotelCode
     *
     * @return string
     */
    public function getHotelCode()
    {
        return $this->hotelCode;
    }

    /**
     * Sets a new hotelCode
     *
     * @param string $hotelCode
     * @return self
     */
    public function setHotelCode($hotelCode)
    {
        $this->hotelCode = $hotelCode;
        return $this;
    }

    /**
     * Gets as requestPoolId
     *
     * @return string
     */
    public function getRequestPoolId()
    {
        return $this->requestPoolId;
    }

    /**
     * Sets a new requestPoolId
     *
     * @param string $requestPoolId
     * @return self
     */
    public function setRequestPoolId($requestPoolId)
    {
        $this->requestPoolId = $requestPoolId;
        return $this;
    }
}

