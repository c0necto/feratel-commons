<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CartItemBrochureType
 *
 *
 * XSD Type: CartItemBrochureType
 */
class CartItemBrochureType
{
    /**
     * @var string $variationId
     */
    private $variationId = null;

    /**
     * @var string $guestSettlerCode
     */
    private $guestSettlerCode = null;

    /**
     * @var int $numberOfItems
     */
    private $numberOfItems = null;

    public function __construct(string $variationId = null, string $guestSettlerCode = null, int $numberOfItems = null)
    {
        $this->variationId = $variationId;
        $this->guestSettlerCode = $guestSettlerCode;
        $this->numberOfItems = $numberOfItems;
    }

    /**
     * Gets as variationId
     *
     * @return string
     */
    public function getVariationId()
    {
        return $this->variationId;
    }

    /**
     * Sets a new variationId
     *
     * @param string $variationId
     * @return self
     */
    public function setVariationId($variationId)
    {
        $this->variationId = $variationId;
        return $this;
    }

    /**
     * Gets as guestSettlerCode
     *
     * @return string
     */
    public function getGuestSettlerCode()
    {
        return $this->guestSettlerCode;
    }

    /**
     * Sets a new guestSettlerCode
     *
     * @param string $guestSettlerCode
     * @return self
     */
    public function setGuestSettlerCode($guestSettlerCode)
    {
        $this->guestSettlerCode = $guestSettlerCode;
        return $this;
    }

    /**
     * Gets as numberOfItems
     *
     * @return int
     */
    public function getNumberOfItems()
    {
        return $this->numberOfItems;
    }

    /**
     * Sets a new numberOfItems
     *
     * @param int $numberOfItems
     * @return self
     */
    public function setNumberOfItems($numberOfItems)
    {
        $this->numberOfItems = $numberOfItems;
        return $this;
    }
}

