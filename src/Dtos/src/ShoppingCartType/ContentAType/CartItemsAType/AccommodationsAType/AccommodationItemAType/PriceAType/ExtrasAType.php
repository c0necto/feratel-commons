<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType;

/**
 * Class representing ExtrasAType
 */
class ExtrasAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType\ExtrasAType\ExtraAType[] $extra
     */
    private $extra = [
        
    ];

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType\ExtrasAType\TotalAType $total
     */
    private $total = null;

    public function __construct(array $extra = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType\ExtrasAType\TotalAType $total = null)
    {
        $this->extra = $extra;
        $this->total = $total;
    }

    /**
     * Adds as extra
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType\ExtrasAType\ExtraAType $extra
     */
    public function addToExtra(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType\ExtrasAType\ExtraAType $extra)
    {
        $this->extra[] = $extra;
        return $this;
    }

    /**
     * isset extra
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExtra($index)
    {
        return isset($this->extra[$index]);
    }

    /**
     * unset extra
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExtra($index)
    {
        unset($this->extra[$index]);
    }

    /**
     * Gets as extra
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType\ExtrasAType\ExtraAType[]
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Sets a new extra
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType\ExtrasAType\ExtraAType[] $extra
     * @return self
     */
    public function setExtra(array $extra)
    {
        $this->extra = $extra;
        return $this;
    }

    /**
     * Gets as total
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType\ExtrasAType\TotalAType
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType\ExtrasAType\TotalAType $total
     * @return self
     */
    public function setTotal(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType\ExtrasAType\TotalAType $total)
    {
        $this->total = $total;
        return $this;
    }
}

