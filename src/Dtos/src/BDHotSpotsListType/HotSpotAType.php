<?php

namespace Conecto\FeratelDsi\Dtos\BDHotSpotsListType;

/**
 * Class representing HotSpotAType
 */
class HotSpotAType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var float $distance
     */
    private $distance = null;

    public function __construct(string $id = null, float $distance = null)
    {
        $this->id = $id;
        $this->distance = $distance;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
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

