<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SPResponseType
 *
 *
 * XSD Type: SPResponseType
 */
class SPResponseType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestPoolListType\RequestPoolAType[] $requestPoolList
     */
    private $requestPoolList = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestPoolDetailsType $requestPoolDetails
     */
    private $requestPoolDetails = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\EBModuleStatusType $eBModuleStatus
     */
    private $eBModuleStatus = null;

    public function __construct(array $requestPoolList = null, \Conecto\FeratelDsi\Dtos\RequestPoolDetailsType $requestPoolDetails = null, \Conecto\FeratelDsi\Dtos\EBModuleStatusType $eBModuleStatus = null)
    {
        $this->requestPoolList = $requestPoolList;
        $this->requestPoolDetails = $requestPoolDetails;
        $this->eBModuleStatus = $eBModuleStatus;
    }

    /**
     * Adds as requestPool
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RequestPoolListType\RequestPoolAType $requestPool
     */
    public function addToRequestPoolList(\Conecto\FeratelDsi\Dtos\RequestPoolListType\RequestPoolAType $requestPool)
    {
        $this->requestPoolList[] = $requestPool;
        return $this;
    }

    /**
     * isset requestPoolList
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestPoolList($index)
    {
        return isset($this->requestPoolList[$index]);
    }

    /**
     * unset requestPoolList
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestPoolList($index)
    {
        unset($this->requestPoolList[$index]);
    }

    /**
     * Gets as requestPoolList
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestPoolListType\RequestPoolAType[]
     */
    public function getRequestPoolList()
    {
        return $this->requestPoolList;
    }

    /**
     * Sets a new requestPoolList
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestPoolListType\RequestPoolAType[] $requestPoolList
     * @return self
     */
    public function setRequestPoolList(array $requestPoolList = null)
    {
        $this->requestPoolList = $requestPoolList;
        return $this;
    }

    /**
     * Gets as requestPoolDetails
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestPoolDetailsType
     */
    public function getRequestPoolDetails()
    {
        return $this->requestPoolDetails;
    }

    /**
     * Sets a new requestPoolDetails
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestPoolDetailsType $requestPoolDetails
     * @return self
     */
    public function setRequestPoolDetails(?\Conecto\FeratelDsi\Dtos\RequestPoolDetailsType $requestPoolDetails = null)
    {
        $this->requestPoolDetails = $requestPoolDetails;
        return $this;
    }

    /**
     * Gets as eBModuleStatus
     *
     * @return \Conecto\FeratelDsi\Dtos\EBModuleStatusType
     */
    public function getEBModuleStatus()
    {
        return $this->eBModuleStatus;
    }

    /**
     * Sets a new eBModuleStatus
     *
     * @param \Conecto\FeratelDsi\Dtos\EBModuleStatusType $eBModuleStatus
     * @return self
     */
    public function setEBModuleStatus(?\Conecto\FeratelDsi\Dtos\EBModuleStatusType $eBModuleStatus = null)
    {
        $this->eBModuleStatus = $eBModuleStatus;
        return $this;
    }
}

