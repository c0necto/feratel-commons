<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BasketSummaryBasePaymentType
 *
 *
 * XSD Type: BasketSummaryBasePaymentType
 */
class BasketSummaryBasePaymentType
{
    /**
     * @var float $amount
     */
    private $amount = null;

    public function __construct(float $amount = null)
    {
        $this->amount = $amount;
    }

    /**
     * Gets as amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
}

