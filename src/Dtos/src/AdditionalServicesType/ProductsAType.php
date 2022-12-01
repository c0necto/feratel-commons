<?php

namespace Conecto\FeratelDsi\Dtos\AdditionalServicesType;

/**
 * Class representing ProductsAType
 */
class ProductsAType
{
    /**
     * Defines single product object.
     *
     * @var \Conecto\FeratelDsi\Dtos\AdditionalProductType[] $product
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
     * Defines single product object.
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\AdditionalProductType $product
     */
    public function addToProduct(\Conecto\FeratelDsi\Dtos\AdditionalProductType $product)
    {
        $this->product[] = $product;
        return $this;
    }

    /**
     * isset product
     *
     * Defines single product object.
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
     * Defines single product object.
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
     * Defines single product object.
     *
     * @return \Conecto\FeratelDsi\Dtos\AdditionalProductType[]
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * Defines single product object.
     *
     * @param \Conecto\FeratelDsi\Dtos\AdditionalProductType[] $product
     * @return self
     */
    public function setProduct(array $product)
    {
        $this->product = $product;
        return $this;
    }
}

