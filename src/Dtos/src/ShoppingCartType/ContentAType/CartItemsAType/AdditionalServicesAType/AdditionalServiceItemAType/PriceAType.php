<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType;

/**
 * Class representing PriceAType
 */
class PriceAType
{
    /**
     * @var float $totalPrice
     */
    private $totalPrice = null;

    /**
     * @var bool $isBestPrice
     */
    private $isBestPrice = null;

    /**
     * @var float $basePrice
     */
    private $basePrice = null;

    public function __construct(float $totalPrice = null, bool $isBestPrice = null, float $basePrice = null)
    {
        $this->totalPrice = $totalPrice;
        $this->isBestPrice = $isBestPrice;
        $this->basePrice = $basePrice;
    }

    /**
     * Gets as totalPrice
     *
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Sets a new totalPrice
     *
     * @param float $totalPrice
     * @return self
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }

    /**
     * Gets as isBestPrice
     *
     * @return bool
     */
    public function getIsBestPrice()
    {
        return $this->isBestPrice;
    }

    /**
     * Sets a new isBestPrice
     *
     * @param bool $isBestPrice
     * @return self
     */
    public function setIsBestPrice($isBestPrice)
    {
        $this->isBestPrice = $isBestPrice;
        return $this;
    }

    /**
     * Gets as basePrice
     *
     * @return float
     */
    public function getBasePrice()
    {
        return $this->basePrice;
    }

    /**
     * Sets a new basePrice
     *
     * @param float $basePrice
     * @return self
     */
    public function setBasePrice($basePrice)
    {
        $this->basePrice = $basePrice;
        return $this;
    }
}

