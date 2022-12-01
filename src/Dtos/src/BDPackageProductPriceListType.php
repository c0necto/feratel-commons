<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageProductPriceListType
 *
 *
 * XSD Type: BDPackageProductPriceList
 */
class BDPackageProductPriceListType
{
    /**
     * @var bool $ownPrice
     */
    private $ownPrice = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageProductPriceItemType[] $price
     */
    private $price = [
        
    ];

    public function __construct(bool $ownPrice = null, array $price = null)
    {
        $this->ownPrice = $ownPrice;
        $this->price = $price;
    }

    /**
     * Gets as ownPrice
     *
     * @return bool
     */
    public function getOwnPrice()
    {
        return $this->ownPrice;
    }

    /**
     * Sets a new ownPrice
     *
     * @param bool $ownPrice
     * @return self
     */
    public function setOwnPrice($ownPrice)
    {
        $this->ownPrice = $ownPrice;
        return $this;
    }

    /**
     * Adds as price
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPackageProductPriceItemType $price
     */
    public function addToPrice(\Conecto\FeratelDsi\Dtos\BDPackageProductPriceItemType $price)
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
     * @return \Conecto\FeratelDsi\Dtos\BDPackageProductPriceItemType[]
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageProductPriceItemType[] $price
     * @return self
     */
    public function setPrice(array $price = null)
    {
        $this->price = $price;
        return $this;
    }
}

