<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\ServiceProviderPaymentAType;

/**
 * Class representing AmountPrePaymentAType
 */
class AmountPrePaymentAType
{
    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var string $paymentMethod
     */
    private $paymentMethod = null;

    /**
     * @var bool $paymentLink
     */
    private $paymentLink = null;

    /**
     * @var string $stripePaymentMethods
     */
    private $stripePaymentMethods = null;

    /**
     * @var string $datatransPaymentMethods
     */
    private $datatransPaymentMethods = null;

    /**
     * Construct
     *
     * @param float $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param float $value
     * @return float
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
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

    /**
     * Gets as paymentLink
     *
     * @return bool
     */
    public function getPaymentLink()
    {
        return $this->paymentLink;
    }

    /**
     * Sets a new paymentLink
     *
     * @param bool $paymentLink
     * @return self
     */
    public function setPaymentLink($paymentLink)
    {
        $this->paymentLink = $paymentLink;
        return $this;
    }

    /**
     * Gets as stripePaymentMethods
     *
     * @return string
     */
    public function getStripePaymentMethods()
    {
        return $this->stripePaymentMethods;
    }

    /**
     * Sets a new stripePaymentMethods
     *
     * @param string $stripePaymentMethods
     * @return self
     */
    public function setStripePaymentMethods($stripePaymentMethods)
    {
        $this->stripePaymentMethods = $stripePaymentMethods;
        return $this;
    }

    /**
     * Gets as datatransPaymentMethods
     *
     * @return string
     */
    public function getDatatransPaymentMethods()
    {
        return $this->datatransPaymentMethods;
    }

    /**
     * Sets a new datatransPaymentMethods
     *
     * @param string $datatransPaymentMethods
     * @return self
     */
    public function setDatatransPaymentMethods($datatransPaymentMethods)
    {
        $this->datatransPaymentMethods = $datatransPaymentMethods;
        return $this;
    }
}

