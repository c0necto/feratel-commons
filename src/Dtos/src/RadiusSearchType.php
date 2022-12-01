<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing RadiusSearchType
 *
 *
 * XSD Type: RadiusSearchType
 */
class RadiusSearchType
{
    /**
     * @var string $longitude
     */
    private $longitude = null;

    /**
     * @var string $latitude
     */
    private $latitude = null;

    /**
     * @var float $distance
     */
    private $distance = null;

    public function __construct(string $longitude = null, string $latitude = null, float $distance = null)
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->distance = $distance;
    }

    /**
     * Gets as longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets a new longitude
     *
     * @param string $longitude
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Gets as latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets a new latitude
     *
     * @param string $latitude
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
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

