<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDAdditionalProductListType
 *
 *
 * XSD Type: BDAdditionalProductList
 */
class BDAdditionalProductListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalProductItemType[] $product
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
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalProductItemType $product
     */
    public function addToProduct(\Conecto\FeratelDsi\Dtos\BDAdditionalProductItemType $product)
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
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalProductItemType[]
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalProductItemType[] $product
     * @return self
     */
    public function setProduct(array $product)
    {
        $this->product = $product;
        return $this;
    }
}

