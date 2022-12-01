<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackagePriceSettingsType
 *
 *
 * XSD Type: BDPackagePriceSettings
 */
class BDPackagePriceSettingsType
{
    /**
     * @var string $priceType
     */
    private $priceType = null;

    /**
     * @var string $packagePrice
     */
    private $packagePrice = null;

    public function __construct(string $priceType = null, string $packagePrice = null)
    {
        $this->priceType = $priceType;
        $this->packagePrice = $packagePrice;
    }

    /**
     * Gets as priceType
     *
     * @return string
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Sets a new priceType
     *
     * @param string $priceType
     * @return self
     */
    public function setPriceType($priceType)
    {
        $this->priceType = $priceType;
        return $this;
    }

    /**
     * Gets as packagePrice
     *
     * @return string
     */
    public function getPackagePrice()
    {
        return $this->packagePrice;
    }

    /**
     * Sets a new packagePrice
     *
     * @param string $packagePrice
     * @return self
     */
    public function setPackagePrice($packagePrice)
    {
        $this->packagePrice = $packagePrice;
        return $this;
    }
}

