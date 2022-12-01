<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDAvailabilityType
 *
 *
 * XSD Type: BDAvailabilityType
 */
class BDAvailabilityType
{
    /**
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * @var \DateTime $start
     */
    private $start = null;

    /**
     * @var \DateTime $end
     */
    private $end = null;

    public function __construct(\DateTime $dateFrom = null, \DateTime $start = null, \DateTime $end = null)
    {
        $this->dateFrom = $dateFrom;
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * Gets as dateFrom
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets a new dateFrom
     *
     * @param \DateTime $dateFrom
     * @return self
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    /**
     * Gets as start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
        return $this;
    }
}

