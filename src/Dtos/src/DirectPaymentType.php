<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing DirectPaymentType
 *
 *
 * XSD Type: DirectPaymentType
 */
class DirectPaymentType
{
    /**
     * @var float $prePayment
     */
    private $prePayment = null;

    /**
     * @var float $prePaymentUntil
     */
    private $prePaymentUntil = null;

    /**
     * @var float $finalPayment
     */
    private $finalPayment = null;

    /**
     * @var float $usePayment
     */
    private $usePayment = null;

    public function __construct(float $prePayment = null, float $prePaymentUntil = null, float $finalPayment = null, float $usePayment = null)
    {
        $this->prePayment = $prePayment;
        $this->prePaymentUntil = $prePaymentUntil;
        $this->finalPayment = $finalPayment;
        $this->usePayment = $usePayment;
    }

    /**
     * Gets as prePayment
     *
     * @return float
     */
    public function getPrePayment()
    {
        return $this->prePayment;
    }

    /**
     * Sets a new prePayment
     *
     * @param float $prePayment
     * @return self
     */
    public function setPrePayment($prePayment)
    {
        $this->prePayment = $prePayment;
        return $this;
    }

    /**
     * Gets as prePaymentUntil
     *
     * @return float
     */
    public function getPrePaymentUntil()
    {
        return $this->prePaymentUntil;
    }

    /**
     * Sets a new prePaymentUntil
     *
     * @param float $prePaymentUntil
     * @return self
     */
    public function setPrePaymentUntil($prePaymentUntil)
    {
        $this->prePaymentUntil = $prePaymentUntil;
        return $this;
    }

    /**
     * Gets as finalPayment
     *
     * @return float
     */
    public function getFinalPayment()
    {
        return $this->finalPayment;
    }

    /**
     * Sets a new finalPayment
     *
     * @param float $finalPayment
     * @return self
     */
    public function setFinalPayment($finalPayment)
    {
        $this->finalPayment = $finalPayment;
        return $this;
    }

    /**
     * Gets as usePayment
     *
     * @return float
     */
    public function getUsePayment()
    {
        return $this->usePayment;
    }

    /**
     * Sets a new usePayment
     *
     * @param float $usePayment
     * @return self
     */
    public function setUsePayment($usePayment)
    {
        $this->usePayment = $usePayment;
        return $this;
    }
}

