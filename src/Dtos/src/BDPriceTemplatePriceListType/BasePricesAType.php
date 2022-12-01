<?php

namespace Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType;

/**
 * Class representing BasePricesAType
 */
class BasePricesAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\BasePricesAType\BasePriceAType[] $basePrice
     */
    private $basePrice = [
        
    ];

    public function __construct(array $basePrice = null)
    {
        $this->basePrice = $basePrice;
    }

    /**
     * Adds as basePrice
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\BasePricesAType\BasePriceAType $basePrice
     */
    public function addToBasePrice(\Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\BasePricesAType\BasePriceAType $basePrice)
    {
        $this->basePrice[] = $basePrice;
        return $this;
    }

    /**
     * isset basePrice
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBasePrice($index)
    {
        return isset($this->basePrice[$index]);
    }

    /**
     * unset basePrice
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBasePrice($index)
    {
        unset($this->basePrice[$index]);
    }

    /**
     * Gets as basePrice
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\BasePricesAType\BasePriceAType[]
     */
    public function getBasePrice()
    {
        return $this->basePrice;
    }

    /**
     * Sets a new basePrice
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\BasePricesAType\BasePriceAType[] $basePrice
     * @return self
     */
    public function setBasePrice(array $basePrice = null)
    {
        $this->basePrice = $basePrice;
        return $this;
    }
}

