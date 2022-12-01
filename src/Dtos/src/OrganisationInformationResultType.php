<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing OrganisationInformationResultType
 *
 * The result used for receiving organisation information
 * XSD Type: OrganisationInformationResultType
 */
class OrganisationInformationResultType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ContactDataType $contactData
     */
    private $contactData = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CreditCardType[] $creditCards
     */
    private $creditCards = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\MerchantIDType $merchantID
     */
    private $merchantID = null;

    /**
     * @var string $gTCOperator
     */
    private $gTCOperator = null;

    /**
     * @var string $gTCMediator
     */
    private $gTCMediator = null;

    /**
     * @var string $dataSecuritySystem
     */
    private $dataSecuritySystem = null;

    /**
     * @var string $cancellationConditions
     */
    private $cancellationConditions = null;

    /**
     * @var string $dataPrivacyText
     */
    private $dataPrivacyText = null;

    /**
     * @var string $visitorTaxInformation
     */
    private $visitorTaxInformation = null;

    /**
     * @var string $cancellationProtectionText
     */
    private $cancellationProtectionText = null;

    /**
     * @var string $currency
     */
    private $currency = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PaymentInformationType $paymentInformation
     */
    private $paymentInformation = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\InsuranceAndFeeInformationType $insuranceAndFeeInformation
     */
    private $insuranceAndFeeInformation = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SettlementInformationType $settlementInformation
     */
    private $settlementInformation = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDRevenueSettingType[] $revenueSettings
     */
    private $revenueSettings = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\ContactDataType $contactData = null, array $creditCards = null, \Conecto\FeratelDsi\Dtos\MerchantIDType $merchantID = null, string $gTCOperator = null, string $gTCMediator = null, string $dataSecuritySystem = null, string $cancellationConditions = null, string $dataPrivacyText = null, string $visitorTaxInformation = null, string $cancellationProtectionText = null, string $currency = null, \Conecto\FeratelDsi\Dtos\PaymentInformationType $paymentInformation = null, \Conecto\FeratelDsi\Dtos\InsuranceAndFeeInformationType $insuranceAndFeeInformation = null, \Conecto\FeratelDsi\Dtos\SettlementInformationType $settlementInformation = null, array $revenueSettings = null)
    {
        $this->contactData = $contactData;
        $this->creditCards = $creditCards;
        $this->merchantID = $merchantID;
        $this->gTCOperator = $gTCOperator;
        $this->gTCMediator = $gTCMediator;
        $this->dataSecuritySystem = $dataSecuritySystem;
        $this->cancellationConditions = $cancellationConditions;
        $this->dataPrivacyText = $dataPrivacyText;
        $this->visitorTaxInformation = $visitorTaxInformation;
        $this->cancellationProtectionText = $cancellationProtectionText;
        $this->currency = $currency;
        $this->paymentInformation = $paymentInformation;
        $this->insuranceAndFeeInformation = $insuranceAndFeeInformation;
        $this->settlementInformation = $settlementInformation;
        $this->revenueSettings = $revenueSettings;
    }

    /**
     * Gets as contactData
     *
     * @return \Conecto\FeratelDsi\Dtos\ContactDataType
     */
    public function getContactData()
    {
        return $this->contactData;
    }

    /**
     * Sets a new contactData
     *
     * @param \Conecto\FeratelDsi\Dtos\ContactDataType $contactData
     * @return self
     */
    public function setContactData(\Conecto\FeratelDsi\Dtos\ContactDataType $contactData)
    {
        $this->contactData = $contactData;
        return $this;
    }

    /**
     * Adds as creditCard
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\CreditCardType $creditCard
     */
    public function addToCreditCards(\Conecto\FeratelDsi\Dtos\CreditCardType $creditCard)
    {
        $this->creditCards[] = $creditCard;
        return $this;
    }

    /**
     * isset creditCards
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCreditCards($index)
    {
        return isset($this->creditCards[$index]);
    }

    /**
     * unset creditCards
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCreditCards($index)
    {
        unset($this->creditCards[$index]);
    }

    /**
     * Gets as creditCards
     *
     * @return \Conecto\FeratelDsi\Dtos\CreditCardType[]
     */
    public function getCreditCards()
    {
        return $this->creditCards;
    }

    /**
     * Sets a new creditCards
     *
     * @param \Conecto\FeratelDsi\Dtos\CreditCardType[] $creditCards
     * @return self
     */
    public function setCreditCards(array $creditCards)
    {
        $this->creditCards = $creditCards;
        return $this;
    }

    /**
     * Gets as merchantID
     *
     * @return \Conecto\FeratelDsi\Dtos\MerchantIDType
     */
    public function getMerchantID()
    {
        return $this->merchantID;
    }

    /**
     * Sets a new merchantID
     *
     * @param \Conecto\FeratelDsi\Dtos\MerchantIDType $merchantID
     * @return self
     */
    public function setMerchantID(\Conecto\FeratelDsi\Dtos\MerchantIDType $merchantID)
    {
        $this->merchantID = $merchantID;
        return $this;
    }

    /**
     * Gets as gTCOperator
     *
     * @return string
     */
    public function getGTCOperator()
    {
        return $this->gTCOperator;
    }

    /**
     * Sets a new gTCOperator
     *
     * @param string $gTCOperator
     * @return self
     */
    public function setGTCOperator($gTCOperator)
    {
        $this->gTCOperator = $gTCOperator;
        return $this;
    }

    /**
     * Gets as gTCMediator
     *
     * @return string
     */
    public function getGTCMediator()
    {
        return $this->gTCMediator;
    }

    /**
     * Sets a new gTCMediator
     *
     * @param string $gTCMediator
     * @return self
     */
    public function setGTCMediator($gTCMediator)
    {
        $this->gTCMediator = $gTCMediator;
        return $this;
    }

    /**
     * Gets as dataSecuritySystem
     *
     * @return string
     */
    public function getDataSecuritySystem()
    {
        return $this->dataSecuritySystem;
    }

    /**
     * Sets a new dataSecuritySystem
     *
     * @param string $dataSecuritySystem
     * @return self
     */
    public function setDataSecuritySystem($dataSecuritySystem)
    {
        $this->dataSecuritySystem = $dataSecuritySystem;
        return $this;
    }

    /**
     * Gets as cancellationConditions
     *
     * @return string
     */
    public function getCancellationConditions()
    {
        return $this->cancellationConditions;
    }

    /**
     * Sets a new cancellationConditions
     *
     * @param string $cancellationConditions
     * @return self
     */
    public function setCancellationConditions($cancellationConditions)
    {
        $this->cancellationConditions = $cancellationConditions;
        return $this;
    }

    /**
     * Gets as dataPrivacyText
     *
     * @return string
     */
    public function getDataPrivacyText()
    {
        return $this->dataPrivacyText;
    }

    /**
     * Sets a new dataPrivacyText
     *
     * @param string $dataPrivacyText
     * @return self
     */
    public function setDataPrivacyText($dataPrivacyText)
    {
        $this->dataPrivacyText = $dataPrivacyText;
        return $this;
    }

    /**
     * Gets as visitorTaxInformation
     *
     * @return string
     */
    public function getVisitorTaxInformation()
    {
        return $this->visitorTaxInformation;
    }

    /**
     * Sets a new visitorTaxInformation
     *
     * @param string $visitorTaxInformation
     * @return self
     */
    public function setVisitorTaxInformation($visitorTaxInformation)
    {
        $this->visitorTaxInformation = $visitorTaxInformation;
        return $this;
    }

    /**
     * Gets as cancellationProtectionText
     *
     * @return string
     */
    public function getCancellationProtectionText()
    {
        return $this->cancellationProtectionText;
    }

    /**
     * Sets a new cancellationProtectionText
     *
     * @param string $cancellationProtectionText
     * @return self
     */
    public function setCancellationProtectionText($cancellationProtectionText)
    {
        $this->cancellationProtectionText = $cancellationProtectionText;
        return $this;
    }

    /**
     * Gets as currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as paymentInformation
     *
     * @return \Conecto\FeratelDsi\Dtos\PaymentInformationType
     */
    public function getPaymentInformation()
    {
        return $this->paymentInformation;
    }

    /**
     * Sets a new paymentInformation
     *
     * @param \Conecto\FeratelDsi\Dtos\PaymentInformationType $paymentInformation
     * @return self
     */
    public function setPaymentInformation(?\Conecto\FeratelDsi\Dtos\PaymentInformationType $paymentInformation = null)
    {
        $this->paymentInformation = $paymentInformation;
        return $this;
    }

    /**
     * Gets as insuranceAndFeeInformation
     *
     * @return \Conecto\FeratelDsi\Dtos\InsuranceAndFeeInformationType
     */
    public function getInsuranceAndFeeInformation()
    {
        return $this->insuranceAndFeeInformation;
    }

    /**
     * Sets a new insuranceAndFeeInformation
     *
     * @param \Conecto\FeratelDsi\Dtos\InsuranceAndFeeInformationType $insuranceAndFeeInformation
     * @return self
     */
    public function setInsuranceAndFeeInformation(\Conecto\FeratelDsi\Dtos\InsuranceAndFeeInformationType $insuranceAndFeeInformation)
    {
        $this->insuranceAndFeeInformation = $insuranceAndFeeInformation;
        return $this;
    }

    /**
     * Gets as settlementInformation
     *
     * @return \Conecto\FeratelDsi\Dtos\SettlementInformationType
     */
    public function getSettlementInformation()
    {
        return $this->settlementInformation;
    }

    /**
     * Sets a new settlementInformation
     *
     * @param \Conecto\FeratelDsi\Dtos\SettlementInformationType $settlementInformation
     * @return self
     */
    public function setSettlementInformation(?\Conecto\FeratelDsi\Dtos\SettlementInformationType $settlementInformation = null)
    {
        $this->settlementInformation = $settlementInformation;
        return $this;
    }

    /**
     * Adds as revenueSetting
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDRevenueSettingType $revenueSetting
     */
    public function addToRevenueSettings(\Conecto\FeratelDsi\Dtos\BDRevenueSettingType $revenueSetting)
    {
        $this->revenueSettings[] = $revenueSetting;
        return $this;
    }

    /**
     * isset revenueSettings
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRevenueSettings($index)
    {
        return isset($this->revenueSettings[$index]);
    }

    /**
     * unset revenueSettings
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRevenueSettings($index)
    {
        unset($this->revenueSettings[$index]);
    }

    /**
     * Gets as revenueSettings
     *
     * @return \Conecto\FeratelDsi\Dtos\BDRevenueSettingType[]
     */
    public function getRevenueSettings()
    {
        return $this->revenueSettings;
    }

    /**
     * Sets a new revenueSettings
     *
     * @param \Conecto\FeratelDsi\Dtos\BDRevenueSettingType[] $revenueSettings
     * @return self
     */
    public function setRevenueSettings(array $revenueSettings = null)
    {
        $this->revenueSettings = $revenueSettings;
        return $this;
    }
}

