<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\TotalAType;

/**
 * Class representing AmountVatAType
 */
class AmountVatAType
{
    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var bool $showVAT
     */
    private $showVAT = null;

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
     * Gets as showVAT
     *
     * @return bool
     */
    public function getShowVAT()
    {
        return $this->showVAT;
    }

    /**
     * Sets a new showVAT
     *
     * @param bool $showVAT
     * @return self
     */
    public function setShowVAT($showVAT)
    {
        $this->showVAT = $showVAT;
        return $this;
    }
}

