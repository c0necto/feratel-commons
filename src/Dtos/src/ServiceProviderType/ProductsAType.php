<?php

namespace Conecto\FeratelDsi\Dtos\ServiceProviderType;

/**
 * Class representing ProductsAType
 */
class ProductsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ProductType[] $product
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
     * @param \Conecto\FeratelDsi\Dtos\ProductType $product
     */
    public function addToProduct(\Conecto\FeratelDsi\Dtos\ProductType $product)
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
     * @return \Conecto\FeratelDsi\Dtos\ProductType[]
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * @param \Conecto\FeratelDsi\Dtos\ProductType[] $product
     * @return self
     */
    public function setProduct(array $product)
    {
        $this->product = $product;
        return $this;
    }
}

