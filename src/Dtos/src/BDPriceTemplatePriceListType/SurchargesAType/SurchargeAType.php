<?php

namespace Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\SurchargesAType;

/**
 * Class representing SurchargeAType
 */
class SurchargeAType
{
    /**
     * @var int $occupancyFrom
     */
    private $occupancyFrom = null;

    /**
     * @var int $occupancyTo
     */
    private $occupancyTo = null;

    /**
     * @var int $stayTo
     */
    private $stayTo = null;

    /**
     * @var float $value
     */
    private $value = null;

    public function __construct(int $occupancyFrom = null, int $occupancyTo = null, int $stayTo = null, float $value = null)
    {
        $this->occupancyFrom = $occupancyFrom;
        $this->occupancyTo = $occupancyTo;
        $this->stayTo = $stayTo;
        $this->value = $value;
    }

    /**
     * Gets as occupancyFrom
     *
     * @return int
     */
    public function getOccupancyFrom()
    {
        return $this->occupancyFrom;
    }

    /**
     * Sets a new occupancyFrom
     *
     * @param int $occupancyFrom
     * @return self
     */
    public function setOccupancyFrom($occupancyFrom)
    {
        $this->occupancyFrom = $occupancyFrom;
        return $this;
    }

    /**
     * Gets as occupancyTo
     *
     * @return int
     */
    public function getOccupancyTo()
    {
        return $this->occupancyTo;
    }

    /**
     * Sets a new occupancyTo
     *
     * @param int $occupancyTo
     * @return self
     */
    public function setOccupancyTo($occupancyTo)
    {
        $this->occupancyTo = $occupancyTo;
        return $this;
    }

    /**
     * Gets as stayTo
     *
     * @return int
     */
    public function getStayTo()
    {
        return $this->stayTo;
    }

    /**
     * Sets a new stayTo
     *
     * @param int $stayTo
     * @return self
     */
    public function setStayTo($stayTo)
    {
        $this->stayTo = $stayTo;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}

