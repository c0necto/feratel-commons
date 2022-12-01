<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing GetAvailabilitiesType
 *
 *
 * XSD Type: GetAvailabilitiesType
 */
class GetAvailabilitiesType
{
    /**
     * @var string $dBCode
     */
    private $dBCode = null;

    /**
     * @var int $months
     */
    private $months = null;

    /**
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * @var string $salesChannelId
     */
    private $salesChannelId = null;

    /**
     * @var string $serviceProviderId
     */
    private $serviceProviderId = null;

    /**
     * @var string $productId
     */
    private $productId = null;

    /**
     * @var bool $showMinStayLogic
     */
    private $showMinStayLogic = null;

    public function __construct(string $dBCode = null, int $months = null, \DateTime $startDate = null, string $salesChannelId = null, string $serviceProviderId = null, string $productId = null, bool $showMinStayLogic = null)
    {
        $this->dBCode = $dBCode;
        $this->months = $months;
        $this->startDate = $startDate;
        $this->salesChannelId = $salesChannelId;
        $this->serviceProviderId = $serviceProviderId;
        $this->productId = $productId;
        $this->showMinStayLogic = $showMinStayLogic;
    }

    /**
     * Gets as dBCode
     *
     * @return string
     */
    public function getDBCode()
    {
        return $this->dBCode;
    }

    /**
     * Sets a new dBCode
     *
     * @param string $dBCode
     * @return self
     */
    public function setDBCode($dBCode)
    {
        $this->dBCode = $dBCode;
        return $this;
    }

    /**
     * Gets as months
     *
     * @return int
     */
    public function getMonths()
    {
        return $this->months;
    }

    /**
     * Sets a new months
     *
     * @param int $months
     * @return self
     */
    public function setMonths($months)
    {
        $this->months = $months;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
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
     * Gets as serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Sets a new serviceProviderId
     *
     * @param string $serviceProviderId
     * @return self
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Gets as productId
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Sets a new productId
     *
     * @param string $productId
     * @return self
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * Gets as showMinStayLogic
     *
     * @return bool
     */
    public function getShowMinStayLogic()
    {
        return $this->showMinStayLogic;
    }

    /**
     * Sets a new showMinStayLogic
     *
     * @param bool $showMinStayLogic
     * @return self
     */
    public function setShowMinStayLogic($showMinStayLogic)
    {
        $this->showMinStayLogic = $showMinStayLogic;
        return $this;
    }
}

