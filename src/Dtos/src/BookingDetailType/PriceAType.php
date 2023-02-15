<?php

namespace Conecto\FeratelDsi\Dtos\BookingDetailType;

/**
 * Class representing PriceAType
 */
class PriceAType
{
    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var float $commissionBasePrice
     */
    private $commissionBasePrice = null;

    /**
     * @var float $commissionInPercents
     */
    private $commissionInPercents = null;

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
     * Gets as commissionBasePrice
     *
     * @return float
     */
    public function getCommissionBasePrice()
    {
        return $this->commissionBasePrice;
    }

    /**
     * Sets a new commissionBasePrice
     *
     * @param float $commissionBasePrice
     * @return self
     */
    public function setCommissionBasePrice($commissionBasePrice)
    {
        $this->commissionBasePrice = $commissionBasePrice;
        return $this;
    }

    /**
     * Gets as commissionInPercents
     *
     * @return float
     */
    public function getCommissionInPercents()
    {
        return $this->commissionInPercents;
    }

    /**
     * Sets a new commissionInPercents
     *
     * @param float $commissionInPercents
     * @return self
     */
    public function setCommissionInPercents($commissionInPercents)
    {
        $this->commissionInPercents = $commissionInPercents;
        return $this;
    }
}

