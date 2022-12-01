<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType\ExtrasAType;

/**
 * Class representing ExtraAType
 */
class ExtraAType
{
    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var float $standardPrice
     */
    private $standardPrice = null;

    public function __construct(string $name = null, float $standardPrice = null)
    {
        $this->name = $name;
        $this->standardPrice = $standardPrice;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as standardPrice
     *
     * @return float
     */
    public function getStandardPrice()
    {
        return $this->standardPrice;
    }

    /**
     * Sets a new standardPrice
     *
     * @param float $standardPrice
     * @return self
     */
    public function setStandardPrice($standardPrice)
    {
        $this->standardPrice = $standardPrice;
        return $this;
    }
}

