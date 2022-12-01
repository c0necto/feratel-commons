<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType;

/**
 * Class representing ContentAType
 */
class ContentAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType $cartItems
     */
    private $cartItems = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType $paymentOptions
     */
    private $paymentOptions = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType $cartItems = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType $paymentOptions = null)
    {
        $this->cartItems = $cartItems;
        $this->paymentOptions = $paymentOptions;
    }

    /**
     * Gets as cartItems
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType
     */
    public function getCartItems()
    {
        return $this->cartItems;
    }

    /**
     * Sets a new cartItems
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType $cartItems
     * @return self
     */
    public function setCartItems(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType $cartItems)
    {
        $this->cartItems = $cartItems;
        return $this;
    }

    /**
     * Gets as paymentOptions
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType
     */
    public function getPaymentOptions()
    {
        return $this->paymentOptions;
    }

    /**
     * Sets a new paymentOptions
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType $paymentOptions
     * @return self
     */
    public function setPaymentOptions(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType $paymentOptions)
    {
        $this->paymentOptions = $paymentOptions;
        return $this;
    }
}

