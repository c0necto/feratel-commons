<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackagePriceListType
 *
 *
 * XSD Type: BDPackagePriceList
 */
class BDPackagePriceListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackagePriceItemType[] $price
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
     * @param \Conecto\FeratelDsi\Dtos\BDPackagePriceItemType $price
     */
    public function addToPrice(\Conecto\FeratelDsi\Dtos\BDPackagePriceItemType $price)
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
     * @return \Conecto\FeratelDsi\Dtos\BDPackagePriceItemType[]
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackagePriceItemType[] $price
     * @return self
     */
    public function setPrice(array $price = null)
    {
        $this->price = $price;
        return $this;
    }
}

