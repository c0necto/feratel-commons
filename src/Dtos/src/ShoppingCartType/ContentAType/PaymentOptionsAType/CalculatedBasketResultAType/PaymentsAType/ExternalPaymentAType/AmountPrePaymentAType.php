<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\ExternalPaymentAType;

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
     * @var string $paymenMethod
     */
    private $paymenMethod = null;

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
     * Gets as paymenMethod
     *
     * @return string
     */
    public function getPaymenMethod()
    {
        return $this->paymenMethod;
    }

    /**
     * Sets a new paymenMethod
     *
     * @param string $paymenMethod
     * @return self
     */
    public function setPaymenMethod($paymenMethod)
    {
        $this->paymenMethod = $paymenMethod;
        return $this;
    }
}

