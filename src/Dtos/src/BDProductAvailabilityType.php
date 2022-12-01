<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDProductAvailabilityType
 *
 *
 * XSD Type: BDProductAvailabilityType
 */
class BDProductAvailabilityType
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

    /**
     * @var string $salesChannel
     */
    private $salesChannel = null;

    public function __construct(\DateTime $dateFrom = null, \DateTime $start = null, \DateTime $end = null, string $salesChannel = null)
    {
        $this->dateFrom = $dateFrom;
        $this->start = $start;
        $this->end = $end;
        $this->salesChannel = $salesChannel;
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

    /**
     * Gets as salesChannel
     *
     * @return string
     */
    public function getSalesChannel()
    {
        return $this->salesChannel;
    }

    /**
     * Sets a new salesChannel
     *
     * @param string $salesChannel
     * @return self
     */
    public function setSalesChannel($salesChannel)
    {
        $this->salesChannel = $salesChannel;
        return $this;
    }
}

