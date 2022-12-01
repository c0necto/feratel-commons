<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing MerchantIDType
 *
 *
 * XSD Type: MerchantIDType
 */
class MerchantIDType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var string $sign
     */
    private $sign = null;

    /**
     * @var bool $dSIPaymentCheckout
     */
    private $dSIPaymentCheckout = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
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
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as sign
     *
     * @return string
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * Sets a new sign
     *
     * @param string $sign
     * @return self
     */
    public function setSign($sign)
    {
        $this->sign = $sign;
        return $this;
    }

    /**
     * Gets as dSIPaymentCheckout
     *
     * @return bool
     */
    public function getDSIPaymentCheckout()
    {
        return $this->dSIPaymentCheckout;
    }

    /**
     * Sets a new dSIPaymentCheckout
     *
     * @param bool $dSIPaymentCheckout
     * @return self
     */
    public function setDSIPaymentCheckout($dSIPaymentCheckout)
    {
        $this->dSIPaymentCheckout = $dSIPaymentCheckout;
        return $this;
    }
}

