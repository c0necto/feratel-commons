<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDAdditionalPriceTemplatePriceListType
 *
 *
 * XSD Type: BDAdditionalPriceTemplatePriceList
 */
class BDAdditionalPriceTemplatePriceListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplatePriceListType\PricesAType\PriceValueAType[] $prices
     */
    private $prices = null;

    public function __construct(array $prices = null)
    {
        $this->prices = $prices;
    }

    /**
     * Adds as priceValue
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplatePriceListType\PricesAType\PriceValueAType $priceValue
     */
    public function addToPrices(\Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplatePriceListType\PricesAType\PriceValueAType $priceValue)
    {
        $this->prices[] = $priceValue;
        return $this;
    }

    /**
     * isset prices
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrices($index)
    {
        return isset($this->prices[$index]);
    }

    /**
     * unset prices
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrices($index)
    {
        unset($this->prices[$index]);
    }

    /**
     * Gets as prices
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplatePriceListType\PricesAType\PriceValueAType[]
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Sets a new prices
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplatePriceListType\PricesAType\PriceValueAType[] $prices
     * @return self
     */
    public function setPrices(array $prices = null)
    {
        $this->prices = $prices;
        return $this;
    }
}

