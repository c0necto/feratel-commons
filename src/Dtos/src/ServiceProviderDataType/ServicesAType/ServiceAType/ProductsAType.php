<?php

namespace Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType;

/**
 * Class representing ProductsAType
 */
class ProductsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType[] $product
     */
    private $product = [
        
    ];

    public function __construct(array $product = null)
    {
        $this->product = $product;
    }

    /**
     * Adds as product
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType $product
     */
    public function addToProduct(\Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType $product)
    {
        $this->product[] = $product;
        return $this;
    }

    /**
     * isset product
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProduct($index)
    {
        return isset($this->product[$index]);
    }

    /**
     * unset product
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProduct($index)
    {
        unset($this->product[$index]);
    }

    /**
     * Gets as product
     *
     * @return \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType[]
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType[] $product
     * @return self
     */
    public function setProduct(array $product)
    {
        $this->product = $product;
        return $this;
    }
}

