<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType\ExtrasAType;

/**
 * Class representing TotalAType
 */
class TotalAType
{
    /**
     * @var float $price
     */
    private $price = null;

    public function __construct(float $price = null)
    {
        $this->price = $price;
    }

    /**
     * Gets as price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param float $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
}

