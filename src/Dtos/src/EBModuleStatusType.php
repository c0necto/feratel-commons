<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing EBModuleStatusType
 *
 *
 * XSD Type: EBModuleStatusType
 */
class EBModuleStatusType
{
    /**
     * @var string $hotelCode
     */
    private $hotelCode = null;

    /**
     * @var string $status
     */
    private $status = null;

    public function __construct(string $hotelCode = null, string $status = null)
    {
        $this->hotelCode = $hotelCode;
        $this->status = $status;
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
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
}

