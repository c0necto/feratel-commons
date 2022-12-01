<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing UpdateShoppingCartItemPaymentType
 *
 *
 * XSD Type: UpdateShoppingCartItemPaymentType
 */
class UpdateShoppingCartItemPaymentType
{
    /**
     * @var string $cartItemId
     */
    private $cartItemId = null;

    /**
     * @var string $paymentType
     */
    private $paymentType = null;

    /**
     * @var string $id
     */
    private $id = null;

    public function __construct(string $cartItemId = null, string $paymentType = null, string $id = null)
    {
        $this->cartItemId = $cartItemId;
        $this->paymentType = $paymentType;
        $this->id = $id;
    }

    /**
     * Gets as cartItemId
     *
     * @return string
     */
    public function getCartItemId()
    {
        return $this->cartItemId;
    }

    /**
     * Sets a new cartItemId
     *
     * @param string $cartItemId
     * @return self
     */
    public function setCartItemId($cartItemId)
    {
        $this->cartItemId = $cartItemId;
        return $this;
    }

    /**
     * Gets as paymentType
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Sets a new paymentType
     *
     * @param string $paymentType
     * @return self
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}

