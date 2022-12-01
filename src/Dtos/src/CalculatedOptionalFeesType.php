<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CalculatedOptionalFeesType
 *
 *
 * XSD Type: CalculatedOptionalFeesType
 */
class CalculatedOptionalFeesType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var float $cancellationInsurance
     */
    private $cancellationInsurance = null;

    /**
     * @var float $bookingFee
     */
    private $bookingFee = null;

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
     * Gets as currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as cancellationInsurance
     *
     * @return float
     */
    public function getCancellationInsurance()
    {
        return $this->cancellationInsurance;
    }

    /**
     * Sets a new cancellationInsurance
     *
     * @param float $cancellationInsurance
     * @return self
     */
    public function setCancellationInsurance($cancellationInsurance)
    {
        $this->cancellationInsurance = $cancellationInsurance;
        return $this;
    }

    /**
     * Gets as bookingFee
     *
     * @return float
     */
    public function getBookingFee()
    {
        return $this->bookingFee;
    }

    /**
     * Sets a new bookingFee
     *
     * @param float $bookingFee
     * @return self
     */
    public function setBookingFee($bookingFee)
    {
        $this->bookingFee = $bookingFee;
        return $this;
    }
}

