<?php

namespace Conecto\FeratelDsi\Dtos\SPRequestType;

/**
 * Class representing CheckEBModuleStatusAType
 */
class CheckEBModuleStatusAType
{
    /**
     * @var string $hotelCode
     */
    private $hotelCode = null;

    public function __construct(string $hotelCode = null)
    {
        $this->hotelCode = $hotelCode;
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
}

