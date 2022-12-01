<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing GetOrganisationInformationType
 *
 * The request used for acquiring an organisation information
 * XSD Type: GetOrganisationInformationType
 */
class GetOrganisationInformationType
{
    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var bool $showPaymentInformation
     */
    private $showPaymentInformation = null;

    /**
     * @var string $salesChannelId
     */
    private $salesChannelId = null;

    /**
     * @var bool $showInsuranceAndFeeInformation
     */
    private $showInsuranceAndFeeInformation = null;

    /**
     * @var bool $showSettlementInformation
     */
    private $showSettlementInformation = null;

    /**
     * @var bool $showRevenueSettings
     */
    private $showRevenueSettings = null;

    public function __construct(string $code = null, bool $showPaymentInformation = null, string $salesChannelId = null, bool $showInsuranceAndFeeInformation = null, bool $showSettlementInformation = null, bool $showRevenueSettings = null)
    {
        $this->code = $code;
        $this->showPaymentInformation = $showPaymentInformation;
        $this->salesChannelId = $salesChannelId;
        $this->showInsuranceAndFeeInformation = $showInsuranceAndFeeInformation;
        $this->showSettlementInformation = $showSettlementInformation;
        $this->showRevenueSettings = $showRevenueSettings;
    }

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as showPaymentInformation
     *
     * @return bool
     */
    public function getShowPaymentInformation()
    {
        return $this->showPaymentInformation;
    }

    /**
     * Sets a new showPaymentInformation
     *
     * @param bool $showPaymentInformation
     * @return self
     */
    public function setShowPaymentInformation($showPaymentInformation)
    {
        $this->showPaymentInformation = $showPaymentInformation;
        return $this;
    }

    /**
     * Gets as salesChannelId
     *
     * @return string
     */
    public function getSalesChannelId()
    {
        return $this->salesChannelId;
    }

    /**
     * Sets a new salesChannelId
     *
     * @param string $salesChannelId
     * @return self
     */
    public function setSalesChannelId($salesChannelId)
    {
        $this->salesChannelId = $salesChannelId;
        return $this;
    }

    /**
     * Gets as showInsuranceAndFeeInformation
     *
     * @return bool
     */
    public function getShowInsuranceAndFeeInformation()
    {
        return $this->showInsuranceAndFeeInformation;
    }

    /**
     * Sets a new showInsuranceAndFeeInformation
     *
     * @param bool $showInsuranceAndFeeInformation
     * @return self
     */
    public function setShowInsuranceAndFeeInformation($showInsuranceAndFeeInformation)
    {
        $this->showInsuranceAndFeeInformation = $showInsuranceAndFeeInformation;
        return $this;
    }

    /**
     * Gets as showSettlementInformation
     *
     * @return bool
     */
    public function getShowSettlementInformation()
    {
        return $this->showSettlementInformation;
    }

    /**
     * Sets a new showSettlementInformation
     *
     * @param bool $showSettlementInformation
     * @return self
     */
    public function setShowSettlementInformation($showSettlementInformation)
    {
        $this->showSettlementInformation = $showSettlementInformation;
        return $this;
    }

    /**
     * Gets as showRevenueSettings
     *
     * @return bool
     */
    public function getShowRevenueSettings()
    {
        return $this->showRevenueSettings;
    }

    /**
     * Sets a new showRevenueSettings
     *
     * @param bool $showRevenueSettings
     * @return self
     */
    public function setShowRevenueSettings($showRevenueSettings)
    {
        $this->showRevenueSettings = $showRevenueSettings;
        return $this;
    }
}

