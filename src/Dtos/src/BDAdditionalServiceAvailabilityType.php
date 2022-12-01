<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDAdditionalServiceAvailabilityType
 *
 *
 * XSD Type: BDAdditionalServiceAvailabilityType
 */
class BDAdditionalServiceAvailabilityType
{
    /**
     * @var \DateTime $day
     */
    private $day = null;

    /**
     * @var int $count
     */
    private $count = null;

    /**
     * @var string $time
     */
    private $time = null;

    public function __construct(\DateTime $day = null, int $count = null, string $time = null)
    {
        $this->day = $day;
        $this->count = $count;
        $this->time = $time;
    }

    /**
     * Gets as day
     *
     * @return \DateTime
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Sets a new day
     *
     * @param \DateTime $day
     * @return self
     */
    public function setDay(\DateTime $day)
    {
        $this->day = $day;
        return $this;
    }

    /**
     * Gets as count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * @param int $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Gets as time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * @param string $time
     * @return self
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }
}

