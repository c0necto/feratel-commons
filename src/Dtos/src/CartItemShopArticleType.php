<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CartItemShopArticleType
 *
 *
 * XSD Type: CartItemShopArticleType
 */
class CartItemShopArticleType
{
    /**
     * @var string $variationId
     */
    private $variationId = null;

    /**
     * @var int $numberOfItems
     */
    private $numberOfItems = null;

    /**
     * @var string $guestSettlerCode
     */
    private $guestSettlerCode = null;

    /**
     * @var string $paymentMethod
     */
    private $paymentMethod = null;

    public function __construct(string $variationId = null, int $numberOfItems = null, string $guestSettlerCode = null, string $paymentMethod = null)
    {
        $this->variationId = $variationId;
        $this->numberOfItems = $numberOfItems;
        $this->guestSettlerCode = $guestSettlerCode;
        $this->paymentMethod = $paymentMethod;
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
     * Gets as paymentMethod
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Sets a new paymentMethod
     *
     * @param string $paymentMethod
     * @return self
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }
}

