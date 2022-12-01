<?php

namespace Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType;

/**
 * Class representing PaymentInformationAType
 */
class PaymentInformationAType
{
    /**
     * @var bool $useOwnPaymentSettings
     */
    private $useOwnPaymentSettings = null;

    /**
     * @var string $paymentType
     */
    private $paymentType = null;

    /**
     * @var float $prePaymentPercentage
     */
    private $prePaymentPercentage = null;

    /**
     * @var float $prePaymentFixedAmount
     */
    private $prePaymentFixedAmount = null;

    public function __construct(bool $useOwnPaymentSettings = null, string $paymentType = null, float $prePaymentPercentage = null, float $prePaymentFixedAmount = null)
    {
        $this->useOwnPaymentSettings = $useOwnPaymentSettings;
        $this->paymentType = $paymentType;
        $this->prePaymentPercentage = $prePaymentPercentage;
        $this->prePaymentFixedAmount = $prePaymentFixedAmount;
    }

    /**
     * Gets as useOwnPaymentSettings
     *
     * @return bool
     */
    public function getUseOwnPaymentSettings()
    {
        return $this->useOwnPaymentSettings;
    }

    /**
     * Sets a new useOwnPaymentSettings
     *
     * @param bool $useOwnPaymentSettings
     * @return self
     */
    public function setUseOwnPaymentSettings($useOwnPaymentSettings)
    {
        $this->useOwnPaymentSettings = $useOwnPaymentSettings;
        return $this;
    }

    /**
     * Gets as paymentType
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Sets a new paymentType
     *
     * @param string $paymentType
     * @return self
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * Gets as prePaymentPercentage
     *
     * @return float
     */
    public function getPrePaymentPercentage()
    {
        return $this->prePaymentPercentage;
    }

    /**
     * Sets a new prePaymentPercentage
     *
     * @param float $prePaymentPercentage
     * @return self
     */
    public function setPrePaymentPercentage($prePaymentPercentage)
    {
        $this->prePaymentPercentage = $prePaymentPercentage;
        return $this;
    }

    /**
     * Gets as prePaymentFixedAmount
     *
     * @return float
     */
    public function getPrePaymentFixedAmount()
    {
        return $this->prePaymentFixedAmount;
    }

    /**
     * Sets a new prePaymentFixedAmount
     *
     * @param float $prePaymentFixedAmount
     * @return self
     */
    public function setPrePaymentFixedAmount($prePaymentFixedAmount)
    {
        $this->prePaymentFixedAmount = $prePaymentFixedAmount;
        return $this;
    }
}

