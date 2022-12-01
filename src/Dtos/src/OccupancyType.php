<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing OccupancyType
 *
 *
 * XSD Type: OccupancyType
 */
class OccupancyType
{
    /**
     * @var int $standard
     */
    private $standard = null;

    /**
     * @var int $min
     */
    private $min = null;

    /**
     * @var int $max
     */
    private $max = null;

    public function __construct(int $standard = null, int $min = null, int $max = null)
    {
        $this->standard = $standard;
        $this->min = $min;
        $this->max = $max;
    }

    /**
     * Gets as standard
     *
     * @return int
     */
    public function getStandard()
    {
        return $this->standard;
    }

    /**
     * Sets a new standard
     *
     * @param int $standard
     * @return self
     */
    public function setStandard($standard)
    {
        $this->standard = $standard;
        return $this;
    }

    /**
     * Gets as min
     *
     * @return int
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Sets a new min
     *
     * @param int $min
     * @return self
     */
    public function setMin($min)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * Gets as max
     *
     * @return int
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Sets a new max
     *
     * @param int $max
     * @return self
     */
    public function setMax($max)
    {
        $this->max = $max;
        return $this;
    }
}

