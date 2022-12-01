<?php

namespace Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplatePriceListType;

/**
 * Class representing PricesAType
 */
class PricesAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplatePriceListType\PricesAType\PriceValueAType[] $priceValue
     */
    private $priceValue = [
        
    ];

    public function __construct(array $priceValue = null)
    {
        $this->priceValue = $priceValue;
    }

    /**
     * Adds as priceValue
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplatePriceListType\PricesAType\PriceValueAType $priceValue
     */
    public function addToPriceValue(\Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplatePriceListType\PricesAType\PriceValueAType $priceValue)
    {
        $this->priceValue[] = $priceValue;
        return $this;
    }

    /**
     * isset priceValue
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriceValue($index)
    {
        return isset($this->priceValue[$index]);
    }

    /**
     * unset priceValue
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriceValue($index)
    {
        unset($this->priceValue[$index]);
    }

    /**
     * Gets as priceValue
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplatePriceListType\PricesAType\PriceValueAType[]
     */
    public function getPriceValue()
    {
        return $this->priceValue;
    }

    /**
     * Sets a new priceValue
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplatePriceListType\PricesAType\PriceValueAType[] $priceValue
     * @return self
     */
    public function setPriceValue(array $priceValue = null)
    {
        $this->priceValue = $priceValue;
        return $this;
    }
}

