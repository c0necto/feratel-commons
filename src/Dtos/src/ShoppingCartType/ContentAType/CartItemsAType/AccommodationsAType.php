<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType;

/**
 * Class representing AccommodationsAType
 */
class AccommodationsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType[] $accommodationItem
     */
    private $accommodationItem = [
        
    ];

    public function __construct(array $accommodationItem = null)
    {
        $this->accommodationItem = $accommodationItem;
    }

    /**
     * Adds as accommodationItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType $accommodationItem
     */
    public function addToAccommodationItem(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType $accommodationItem)
    {
        $this->accommodationItem[] = $accommodationItem;
        return $this;
    }

    /**
     * isset accommodationItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccommodationItem($index)
    {
        return isset($this->accommodationItem[$index]);
    }

    /**
     * unset accommodationItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccommodationItem($index)
    {
        unset($this->accommodationItem[$index]);
    }

    /**
     * Gets as accommodationItem
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType[]
     */
    public function getAccommodationItem()
    {
        return $this->accommodationItem;
    }

    /**
     * Sets a new accommodationItem
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType[] $accommodationItem
     * @return self
     */
    public function setAccommodationItem(array $accommodationItem = null)
    {
        $this->accommodationItem = $accommodationItem;
        return $this;
    }
}

