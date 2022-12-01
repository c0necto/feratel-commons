<?php

namespace Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\BasePricesAType;

/**
 * Class representing BasePriceAType
 */
class BasePriceAType
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
     * @var float $price
     */
    private $price = null;

    /**
     * @var float $additionalBed
     */
    private $additionalBed = null;

    public function __construct(int $occupancyFrom = null, int $occupancyTo = null, float $price = null, float $additionalBed = null)
    {
        $this->occupancyFrom = $occupancyFrom;
        $this->occupancyTo = $occupancyTo;
        $this->price = $price;
        $this->additionalBed = $additionalBed;
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
     * Gets as price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param float $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as additionalBed
     *
     * @return float
     */
    public function getAdditionalBed()
    {
        return $this->additionalBed;
    }

    /**
     * Sets a new additionalBed
     *
     * @param float $additionalBed
     * @return self
     */
    public function setAdditionalBed($additionalBed)
    {
        $this->additionalBed = $additionalBed;
        return $this;
    }
}

