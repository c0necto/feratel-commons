<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BookingCancellationInformationType
 *
 *
 * XSD Type: BookingCancellationInformation
 */
class BookingCancellationInformationType
{
    /**
     * @var bool $freeCancellation
     */
    private $freeCancellation = null;

    /**
     * @var \DateTime $dateUntil
     */
    private $dateUntil = null;

    /**
     * @var string $timeUntil
     */
    private $timeUntil = null;

    /**
     * @var int $calculationBase
     */
    private $calculationBase = null;

    /**
     * @var float $percentage
     */
    private $percentage = null;

    /**
     * @var float $amount
     */
    private $amount = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    public function __construct(bool $freeCancellation = null, \DateTime $dateUntil = null, string $timeUntil = null, int $calculationBase = null, float $percentage = null, float $amount = null, string $currencyCode = null)
    {
        $this->freeCancellation = $freeCancellation;
        $this->dateUntil = $dateUntil;
        $this->timeUntil = $timeUntil;
        $this->calculationBase = $calculationBase;
        $this->percentage = $percentage;
        $this->amount = $amount;
        $this->currencyCode = $currencyCode;
    }

    /**
     * Gets as freeCancellation
     *
     * @return bool
     */
    public function getFreeCancellation()
    {
        return $this->freeCancellation;
    }

    /**
     * Sets a new freeCancellation
     *
     * @param bool $freeCancellation
     * @return self
     */
    public function setFreeCancellation($freeCancellation)
    {
        $this->freeCancellation = $freeCancellation;
        return $this;
    }

    /**
     * Gets as dateUntil
     *
     * @return \DateTime
     */
    public function getDateUntil()
    {
        return $this->dateUntil;
    }

    /**
     * Sets a new dateUntil
     *
     * @param \DateTime $dateUntil
     * @return self
     */
    public function setDateUntil(\DateTime $dateUntil)
    {
        $this->dateUntil = $dateUntil;
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
}

