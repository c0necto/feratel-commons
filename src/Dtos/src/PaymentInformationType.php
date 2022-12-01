<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing PaymentInformationType
 *
 *
 * XSD Type: PaymentInformationType
 */
class PaymentInformationType
{
    /**
     * @var bool $hasPrePayment
     */
    private $hasPrePayment = null;

    /**
     * @var float $prePaymentPercent
     */
    private $prePaymentPercent = null;

    /**
     * @var float $prePaymentFixedAmount
     */
    private $prePaymentFixedAmount = null;

    /**
     * @var string $prePaymentDueRule
     */
    private $prePaymentDueRule = null;

    /**
     * @var int $prePayDueDays
     */
    private $prePayDueDays = null;

    /**
     * @var int $finalPayDueDays
     */
    private $finalPayDueDays = null;

    /**
     * @var string $paymentProvider
     */
    private $paymentProvider = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PaymentInformationType\PossiblePaymentMethodsAType $possiblePaymentMethods
     */
    private $possiblePaymentMethods = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PaymentInformationType\ServiceProviderPaymentAType $serviceProviderPayment
     */
    private $serviceProviderPayment = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PaymentInformationType\SplitPaymentAType $splitPayment
     */
    private $splitPayment = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PaymentInformationType\OrganisationPaymentAType $organisationPayment
     */
    private $organisationPayment = null;

    public function __construct(bool $hasPrePayment = null, float $prePaymentPercent = null, float $prePaymentFixedAmount = null, string $prePaymentDueRule = null, int $prePayDueDays = null, int $finalPayDueDays = null, string $paymentProvider = null, \Conecto\FeratelDsi\Dtos\PaymentInformationType\PossiblePaymentMethodsAType $possiblePaymentMethods = null, \Conecto\FeratelDsi\Dtos\PaymentInformationType\ServiceProviderPaymentAType $serviceProviderPayment = null, \Conecto\FeratelDsi\Dtos\PaymentInformationType\SplitPaymentAType $splitPayment = null, \Conecto\FeratelDsi\Dtos\PaymentInformationType\OrganisationPaymentAType $organisationPayment = null)
    {
        $this->hasPrePayment = $hasPrePayment;
        $this->prePaymentPercent = $prePaymentPercent;
        $this->prePaymentFixedAmount = $prePaymentFixedAmount;
        $this->prePaymentDueRule = $prePaymentDueRule;
        $this->prePayDueDays = $prePayDueDays;
        $this->finalPayDueDays = $finalPayDueDays;
        $this->paymentProvider = $paymentProvider;
        $this->possiblePaymentMethods = $possiblePaymentMethods;
        $this->serviceProviderPayment = $serviceProviderPayment;
        $this->splitPayment = $splitPayment;
        $this->organisationPayment = $organisationPayment;
    }

    /**
     * Gets as hasPrePayment
     *
     * @return bool
     */
    public function getHasPrePayment()
    {
        return $this->hasPrePayment;
    }

    /**
     * Sets a new hasPrePayment
     *
     * @param bool $hasPrePayment
     * @return self
     */
    public function setHasPrePayment($hasPrePayment)
    {
        $this->hasPrePayment = $hasPrePayment;
        return $this;
    }

    /**
     * Gets as prePaymentPercent
     *
     * @return float
     */
    public function getPrePaymentPercent()
    {
        return $this->prePaymentPercent;
    }

    /**
     * Sets a new prePaymentPercent
     *
     * @param float $prePaymentPercent
     * @return self
     */
    public function setPrePaymentPercent($prePaymentPercent)
    {
        $this->prePaymentPercent = $prePaymentPercent;
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

    /**
     * Gets as prePaymentDueRule
     *
     * @return string
     */
    public function getPrePaymentDueRule()
    {
        return $this->prePaymentDueRule;
    }

    /**
     * Sets a new prePaymentDueRule
     *
     * @param string $prePaymentDueRule
     * @return self
     */
    public function setPrePaymentDueRule($prePaymentDueRule)
    {
        $this->prePaymentDueRule = $prePaymentDueRule;
        return $this;
    }

    /**
     * Gets as prePayDueDays
     *
     * @return int
     */
    public function getPrePayDueDays()
    {
        return $this->prePayDueDays;
    }

    /**
     * Sets a new prePayDueDays
     *
     * @param int $prePayDueDays
     * @return self
     */
    public function setPrePayDueDays($prePayDueDays)
    {
        $this->prePayDueDays = $prePayDueDays;
        return $this;
    }

    /**
     * Gets as finalPayDueDays
     *
     * @return int
     */
    public function getFinalPayDueDays()
    {
        return $this->finalPayDueDays;
    }

    /**
     * Sets a new finalPayDueDays
     *
     * @param int $finalPayDueDays
     * @return self
     */
    public function setFinalPayDueDays($finalPayDueDays)
    {
        $this->finalPayDueDays = $finalPayDueDays;
        return $this;
    }

    /**
     * Gets as paymentProvider
     *
     * @return string
     */
    public function getPaymentProvider()
    {
        return $this->paymentProvider;
    }

    /**
     * Sets a new paymentProvider
     *
     * @param string $paymentProvider
     * @return self
     */
    public function setPaymentProvider($paymentProvider)
    {
        $this->paymentProvider = $paymentProvider;
        return $this;
    }

    /**
     * Gets as possiblePaymentMethods
     *
     * @return \Conecto\FeratelDsi\Dtos\PaymentInformationType\PossiblePaymentMethodsAType
     */
    public function getPossiblePaymentMethods()
    {
        return $this->possiblePaymentMethods;
    }

    /**
     * Sets a new possiblePaymentMethods
     *
     * @param \Conecto\FeratelDsi\Dtos\PaymentInformationType\PossiblePaymentMethodsAType $possiblePaymentMethods
     * @return self
     */
    public function setPossiblePaymentMethods(\Conecto\FeratelDsi\Dtos\PaymentInformationType\PossiblePaymentMethodsAType $possiblePaymentMethods)
    {
        $this->possiblePaymentMethods = $possiblePaymentMethods;
        return $this;
    }

    /**
     * Gets as serviceProviderPayment
     *
     * @return \Conecto\FeratelDsi\Dtos\PaymentInformationType\ServiceProviderPaymentAType
     */
    public function getServiceProviderPayment()
    {
        return $this->serviceProviderPayment;
    }

    /**
     * Sets a new serviceProviderPayment
     *
     * @param \Conecto\FeratelDsi\Dtos\PaymentInformationType\ServiceProviderPaymentAType $serviceProviderPayment
     * @return self
     */
    public function setServiceProviderPayment(\Conecto\FeratelDsi\Dtos\PaymentInformationType\ServiceProviderPaymentAType $serviceProviderPayment)
    {
        $this->serviceProviderPayment = $serviceProviderPayment;
        return $this;
    }

    /**
     * Gets as splitPayment
     *
     * @return \Conecto\FeratelDsi\Dtos\PaymentInformationType\SplitPaymentAType
     */
    public function getSplitPayment()
    {
        return $this->splitPayment;
    }

    /**
     * Sets a new splitPayment
     *
     * @param \Conecto\FeratelDsi\Dtos\PaymentInformationType\SplitPaymentAType $splitPayment
     * @return self
     */
    public function setSplitPayment(\Conecto\FeratelDsi\Dtos\PaymentInformationType\SplitPaymentAType $splitPayment)
    {
        $this->splitPayment = $splitPayment;
        return $this;
    }

    /**
     * Gets as organisationPayment
     *
     * @return \Conecto\FeratelDsi\Dtos\PaymentInformationType\OrganisationPaymentAType
     */
    public function getOrganisationPayment()
    {
        return $this->organisationPayment;
    }

    /**
     * Sets a new organisationPayment
     *
     * @param \Conecto\FeratelDsi\Dtos\PaymentInformationType\OrganisationPaymentAType $organisationPayment
     * @return self
     */
    public function setOrganisationPayment(\Conecto\FeratelDsi\Dtos\PaymentInformationType\OrganisationPaymentAType $organisationPayment)
    {
        $this->organisationPayment = $organisationPayment;
        return $this;
    }
}

