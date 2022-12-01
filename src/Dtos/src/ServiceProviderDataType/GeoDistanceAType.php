<?php

namespace Conecto\FeratelDsi\Dtos\ServiceProviderDataType;

/**
 * Class representing GeoDistanceAType
 */
class GeoDistanceAType
{
    /**
     * @var string $hotSpotName
     */
    private $hotSpotName = null;

    /**
     * @var float $distance
     */
    private $distance = null;

    public function __construct(string $hotSpotName = null, float $distance = null)
    {
        $this->hotSpotName = $hotSpotName;
        $this->distance = $distance;
    }

    /**
     * Gets as hotSpotName
     *
     * @return string
     */
    public function getHotSpotName()
    {
        return $this->hotSpotName;
    }

    /**
     * Sets a new hotSpotName
     *
     * @param string $hotSpotName
     * @return self
     */
    public function setHotSpotName($hotSpotName)
    {
        $this->hotSpotName = $hotSpotName;
        return $this;
    }

    /**
     * Gets as distance
     *
     * @return float
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Sets a new distance
     *
     * @param float $distance
     * @return self
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
        return $this;
    }
}

