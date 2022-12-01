<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CancellationInsuranceBaseType
 *
 *
 * XSD Type: CancellationInsuranceBaseType
 */
class CancellationInsuranceBaseType
{
    /**
     * @var float $amountFrom
     */
    private $amountFrom = null;

    /**
     * @var float $amountTo
     */
    private $amountTo = null;

    /**
     * @var string $calculationRule
     */
    private $calculationRule = null;

    /**
     * @var float $price
     */
    private $price = null;

    public function __construct(float $amountFrom = null, float $amountTo = null, string $calculationRule = null, float $price = null)
    {
        $this->amountFrom = $amountFrom;
        $this->amountTo = $amountTo;
        $this->calculationRule = $calculationRule;
        $this->price = $price;
    }

    /**
     * Gets as amountFrom
     *
     * @return float
     */
    public function getAmountFrom()
    {
        return $this->amountFrom;
    }

    /**
     * Sets a new amountFrom
     *
     * @param float $amountFrom
     * @return self
     */
    public function setAmountFrom($amountFrom)
    {
        $this->amountFrom = $amountFrom;
        return $this;
    }

    /**
     * Gets as amountTo
     *
     * @return float
     */
    public function getAmountTo()
    {
        return $this->amountTo;
    }

    /**
     * Sets a new amountTo
     *
     * @param float $amountTo
     * @return self
     */
    public function setAmountTo($amountTo)
    {
        $this->amountTo = $amountTo;
        return $this;
    }

    /**
     * Gets as calculationRule
     *
     * @return string
     */
    public function getCalculationRule()
    {
        return $this->calculationRule;
    }

    /**
     * Sets a new calculationRule
     *
     * @param string $calculationRule
     * @return self
     */
    public function setCalculationRule($calculationRule)
    {
        $this->calculationRule = $calculationRule;
        return $this;
    }

    /**
     * Gets as price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param float $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
}

