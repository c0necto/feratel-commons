<?php

namespace Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType;

/**
 * Class representing CancellationFeeAType
 */
class CancellationFeeAType
{
    /**
     * @var int $calculationBase
     */
    private $calculationBase = null;

    /**
     * @var float $percentage
     */
    private $percentage = null;

    /**
     * @var int $daysUntil
     */
    private $daysUntil = null;

    /**
     * @var string $timeUntil
     */
    private $timeUntil = null;

    public function __construct(int $calculationBase = null, float $percentage = null, int $daysUntil = null, string $timeUntil = null)
    {
        $this->calculationBase = $calculationBase;
        $this->percentage = $percentage;
        $this->daysUntil = $daysUntil;
        $this->timeUntil = $timeUntil;
    }

    /**
     * Gets as calculationBase
     *
     * @return int
     */
    public function getCalculationBase()
    {
        return $this->calculationBase;
    }

    /**
     * Sets a new calculationBase
     *
     * @param int $calculationBase
     * @return self
     */
    public function setCalculationBase($calculationBase)
    {
        $this->calculationBase = $calculationBase;
        return $this;
    }

    /**
     * Gets as percentage
     *
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Sets a new percentage
     *
     * @param float $percentage
     * @return self
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
        return $this;
    }

    /**
     * Gets as daysUntil
     *
     * @return int
     */
    public function getDaysUntil()
    {
        return $this->daysUntil;
    }

    /**
     * Sets a new daysUntil
     *
     * @param int $daysUntil
     * @return self
     */
    public function setDaysUntil($daysUntil)
    {
        $this->daysUntil = $daysUntil;
        return $this;
    }

    /**
     * Gets as timeUntil
     *
     * @return string
     */
    public function getTimeUntil()
    {
        return $this->timeUntil;
    }

    /**
     * Sets a new timeUntil
     *
     * @param string $timeUntil
     * @return self
     */
    public function setTimeUntil($timeUntil)
    {
        $this->timeUntil = $timeUntil;
        return $this;
    }
}

