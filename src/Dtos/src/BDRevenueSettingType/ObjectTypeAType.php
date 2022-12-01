<?php

namespace Conecto\FeratelDsi\Dtos\BDRevenueSettingType;

/**
 * Class representing ObjectTypeAType
 */
class ObjectTypeAType
{
    /**
     * @var bool $hotelRoom
     */
    private $hotelRoom = null;

    /**
     * @var bool $apartment
     */
    private $apartment = null;

    /**
     * @var bool $camping
     */
    private $camping = null;

    /**
     * @var bool $additionalService
     */
    private $additionalService = null;

    /**
     * @var bool $package
     */
    private $package = null;

    public function __construct(bool $hotelRoom = null, bool $apartment = null, bool $camping = null, bool $additionalService = null, bool $package = null)
    {
        $this->hotelRoom = $hotelRoom;
        $this->apartment = $apartment;
        $this->camping = $camping;
        $this->additionalService = $additionalService;
        $this->package = $package;
    }

    /**
     * Gets as hotelRoom
     *
     * @return bool
     */
    public function getHotelRoom()
    {
        return $this->hotelRoom;
    }

    /**
     * Sets a new hotelRoom
     *
     * @param bool $hotelRoom
     * @return self
     */
    public function setHotelRoom($hotelRoom)
    {
        $this->hotelRoom = $hotelRoom;
        return $this;
    }

    /**
     * Gets as apartment
     *
     * @return bool
     */
    public function getApartment()
    {
        return $this->apartment;
    }

    /**
     * Sets a new apartment
     *
     * @param bool $apartment
     * @return self
     */
    public function setApartment($apartment)
    {
        $this->apartment = $apartment;
        return $this;
    }

    /**
     * Gets as camping
     *
     * @return bool
     */
    public function getCamping()
    {
        return $this->camping;
    }

    /**
     * Sets a new camping
     *
     * @param bool $camping
     * @return self
     */
    public function setCamping($camping)
    {
        $this->camping = $camping;
        return $this;
    }

    /**
     * Gets as additionalService
     *
     * @return bool
     */
    public function getAdditionalService()
    {
        return $this->additionalService;
    }

    /**
     * Sets a new additionalService
     *
     * @param bool $additionalService
     * @return self
     */
    public function setAdditionalService($additionalService)
    {
        $this->additionalService = $additionalService;
        return $this;
    }

    /**
     * Gets as package
     *
     * @return bool
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Sets a new package
     *
     * @param bool $package
     * @return self
     */
    public function setPackage($package)
    {
        $this->package = $package;
        return $this;
    }
}

