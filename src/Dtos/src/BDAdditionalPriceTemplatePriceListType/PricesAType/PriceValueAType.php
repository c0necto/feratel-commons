<?php

namespace Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplatePriceListType\PricesAType;

/**
 * Class representing PriceValueAType
 */
class PriceValueAType
{
    /**
     * @var int $durationUnits
     */
    private $durationUnits = null;

    /**
     * @var float $price
     */
    private $price = null;

    public function __construct(int $durationUnits = null, float $price = null)
    {
        $this->durationUnits = $durationUnits;
        $this->price = $price;
    }

    /**
     * Gets as durationUnits
     *
     * @return int
     */
    public function getDurationUnits()
    {
        return $this->durationUnits;
    }

    /**
     * Sets a new durationUnits
     *
     * @param int $durationUnits
     * @return self
     */
    public function setDurationUnits($durationUnits)
    {
        $this->durationUnits = $durationUnits;
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
}

