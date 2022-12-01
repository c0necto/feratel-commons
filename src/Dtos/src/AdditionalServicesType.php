<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing AdditionalServicesType
 *
 *
 * XSD Type: AdditionalServicesType
 */
class AdditionalServicesType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\AdditionalProductType[] $products
     */
    private $products = null;

    public function __construct(array $products = null)
    {
        $this->products = $products;
    }

    /**
     * Adds as product
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\AdditionalProductType $product
     */
    public function addToProducts(\Conecto\FeratelDsi\Dtos\AdditionalProductType $product)
    {
        $this->products[] = $product;
        return $this;
    }

    /**
     * isset products
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProducts($index)
    {
        return isset($this->products[$index]);
    }

    /**
     * unset products
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProducts($index)
    {
        unset($this->products[$index]);
    }

    /**
     * Gets as products
     *
     * @return \Conecto\FeratelDsi\Dtos\AdditionalProductType[]
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Sets a new products
     *
     * @param \Conecto\FeratelDsi\Dtos\AdditionalProductType[] $products
     * @return self
     */
    public function setProducts(array $products)
    {
        $this->products = $products;
        return $this;
    }
}

