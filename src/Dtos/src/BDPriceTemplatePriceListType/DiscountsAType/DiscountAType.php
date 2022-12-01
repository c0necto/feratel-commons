<?php

namespace Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\DiscountsAType;

/**
 * Class representing DiscountAType
 */
class DiscountAType
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
     * @var int $stayFrom
     */
    private $stayFrom = null;

    /**
     * @var float $value
     */
    private $value = null;

    public function __construct(int $occupancyFrom = null, int $occupancyTo = null, int $stayFrom = null, float $value = null)
    {
        $this->occupancyFrom = $occupancyFrom;
        $this->occupancyTo = $occupancyTo;
        $this->stayFrom = $stayFrom;
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
     * Gets as stayFrom
     *
     * @return int
     */
    public function getStayFrom()
    {
        return $this->stayFrom;
    }

    /**
     * Sets a new stayFrom
     *
     * @param int $stayFrom
     * @return self
     */
    public function setStayFrom($stayFrom)
    {
        $this->stayFrom = $stayFrom;
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

