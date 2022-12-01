<?php

namespace Conecto\FeratelDsi\Dtos\BookingType;

/**
 * Class representing CurrencyFactorAType
 */
class CurrencyFactorAType
{
    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var string $guestCurrency
     */
    private $guestCurrency = null;

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
     * Gets as guestCurrency
     *
     * @return string
     */
    public function getGuestCurrency()
    {
        return $this->guestCurrency;
    }

    /**
     * Sets a new guestCurrency
     *
     * @param string $guestCurrency
     * @return self
     */
    public function setGuestCurrency($guestCurrency)
    {
        $this->guestCurrency = $guestCurrency;
        return $this;
    }
}

