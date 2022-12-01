<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BasketSummaryTotalPaymentType
 *
 *
 * XSD Type: BasketSummaryTotalPaymentType
 */
class BasketSummaryTotalPaymentType extends BasketSummaryAdvPaymentType
{
    /**
     * @var float $productAmount
     */
    private $productAmount = null;

    public function __construct(float $productAmount = null, float $vATAmount = null, float $amount = null)
    {
        $this->productAmount = $productAmount;
        parent::__construct($vATAmount,$amount);
    }

    /**
     * Gets as productAmount
     *
     * @return float
     */
    public function getProductAmount()
    {
        return $this->productAmount;
    }

    /**
     * Sets a new productAmount
     *
     * @param float $productAmount
     * @return self
     */
    public function setProductAmount($productAmount)
    {
        $this->productAmount = $productAmount;
        return $this;
    }
}

