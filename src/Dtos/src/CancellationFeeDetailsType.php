<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CancellationFeeDetailsType
 *
 *
 * XSD Type: CancellationFeeDetailsType
 */
class CancellationFeeDetailsType extends CancellationInsuranceBaseType
{
    /**
     * @var int $daysUntilArrival
     */
    private $daysUntilArrival = null;

    public function __construct(int $daysUntilArrival = null, float $amountFrom = null, float $amountTo = null, string $calculationRule = null, float $price = null)
    {
        $this->daysUntilArrival = $daysUntilArrival;
        parent::__construct($amountFrom,$amountTo,$calculationRule,$price);
    }

    /**
     * Gets as daysUntilArrival
     *
     * @return int
     */
    public function getDaysUntilArrival()
    {
        return $this->daysUntilArrival;
    }

    /**
     * Sets a new daysUntilArrival
     *
     * @param int $daysUntilArrival
     * @return self
     */
    public function setDaysUntilArrival($daysUntilArrival)
    {
        $this->daysUntilArrival = $daysUntilArrival;
        return $this;
    }
}

