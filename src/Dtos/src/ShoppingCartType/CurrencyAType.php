<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType;

/**
 * Class representing CurrencyAType
 */
class CurrencyAType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * @var string $guestCurrency
     */
    private $guestCurrency = null;

    /**
     * @var float $factor
     */
    private $factor = null;

    /**
     * @var int $round
     */
    private $round = null;

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

    /**
     * Gets as factor
     *
     * @return float
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * Sets a new factor
     *
     * @param float $factor
     * @return self
     */
    public function setFactor($factor)
    {
        $this->factor = $factor;
        return $this;
    }

    /**
     * Gets as round
     *
     * @return int
     */
    public function getRound()
    {
        return $this->round;
    }

    /**
     * Sets a new round
     *
     * @param int $round
     * @return self
     */
    public function setRound($round)
    {
        $this->round = $round;
        return $this;
    }
}

