<?php

namespace Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType;

/**
 * Class representing PricesAType
 */
class PricesAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType[] $price
     */
    private $price = [
        
    ];

    public function __construct(array $price = null)
    {
        $this->price = $price;
    }

    /**
     * Adds as price
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType $price
     */
    public function addToPrice(\Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType $price)
    {
        $this->price[] = $price;
        return $this;
    }

    /**
     * isset price
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrice($index)
    {
        return isset($this->price[$index]);
    }

    /**
     * unset price
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrice($index)
    {
        unset($this->price[$index]);
    }

    /**
     * Gets as price
     *
     * @return \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType[]
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType[] $price
     * @return self
     */
    public function setPrice(array $price)
    {
        $this->price = $price;
        return $this;
    }
}

