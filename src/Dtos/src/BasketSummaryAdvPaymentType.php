<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BasketSummaryAdvPaymentType
 *
 *
 * XSD Type: BasketSummaryAdvPaymentType
 */
class BasketSummaryAdvPaymentType extends BasketSummaryBasePaymentType
{
    /**
     * @var float $vATAmount
     */
    private $vATAmount = null;

    public function __construct(float $vATAmount = null, float $amount = null)
    {
        $this->vATAmount = $vATAmount;
        parent::__construct($amount);
    }

    /**
     * Gets as vATAmount
     *
     * @return float
     */
    public function getVATAmount()
    {
        return $this->vATAmount;
    }

    /**
     * Sets a new vATAmount
     *
     * @param float $vATAmount
     * @return self
     */
    public function setVATAmount($vATAmount)
    {
        $this->vATAmount = $vATAmount;
        return $this;
    }
}

