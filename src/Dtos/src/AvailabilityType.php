<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing AvailabilityType
 *
 *
 * XSD Type: AvailabilityType
 */
class AvailabilityType
{
    /**
     * @var \DateTime $day
     */
    private $day = null;

    /**
     * @var int $count
     */
    private $count = null;

    public function __construct(\DateTime $day = null, int $count = null)
    {
        $this->day = $day;
        $this->count = $count;
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
}

