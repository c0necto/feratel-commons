<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SPRequestType
 *
 *
 * XSD Type: SPRequestType
 */
class SPRequestType
{
    /**
     * @var string $agentDutyCode
     */
    private $agentDutyCode = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SPRequestType\GetRequestPoolListAType $getRequestPoolList
     */
    private $getRequestPoolList = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SPRequestType\GetRequestPoolDetailsAType $getRequestPoolDetails
     */
    private $getRequestPoolDetails = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SPRequestType\ActivateRequestPoolAType $activateRequestPool
     */
    private $activateRequestPool = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SPRequestType\SetRequestPoolStatusAType $setRequestPoolStatus
     */
    private $setRequestPoolStatus = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SPRequestType\SetEBModuleStatusAType $setEBModuleStatus
     */
    private $setEBModuleStatus = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SPRequestType\CheckEBModuleStatusAType $checkEBModuleStatus
     */
    private $checkEBModuleStatus = null;

    public function __construct(string $agentDutyCode = null, \Conecto\FeratelDsi\Dtos\SPRequestType\GetRequestPoolListAType $getRequestPoolList = null, \Conecto\FeratelDsi\Dtos\SPRequestType\GetRequestPoolDetailsAType $getRequestPoolDetails = null, \Conecto\FeratelDsi\Dtos\SPRequestType\ActivateRequestPoolAType $activateRequestPool = null, \Conecto\FeratelDsi\Dtos\SPRequestType\SetRequestPoolStatusAType $setRequestPoolStatus = null, \Conecto\FeratelDsi\Dtos\SPRequestType\SetEBModuleStatusAType $setEBModuleStatus = null, \Conecto\FeratelDsi\Dtos\SPRequestType\CheckEBModuleStatusAType $checkEBModuleStatus = null)
    {
        $this->agentDutyCode = $agentDutyCode;
        $this->getRequestPoolList = $getRequestPoolList;
        $this->getRequestPoolDetails = $getRequestPoolDetails;
        $this->activateRequestPool = $activateRequestPool;
        $this->setRequestPoolStatus = $setRequestPoolStatus;
        $this->setEBModuleStatus = $setEBModuleStatus;
        $this->checkEBModuleStatus = $checkEBModuleStatus;
    }

    /**
     * Gets as agentDutyCode
     *
     * @return string
     */
    public function getAgentDutyCode()
    {
        return $this->agentDutyCode;
    }

    /**
     * Sets a new agentDutyCode
     *
     * @param string $agentDutyCode
     * @return self
     */
    public function setAgentDutyCode($agentDutyCode)
    {
        $this->agentDutyCode = $agentDutyCode;
        return $this;
    }

    /**
     * Gets as getRequestPoolList
     *
     * @return \Conecto\FeratelDsi\Dtos\SPRequestType\GetRequestPoolListAType
     */
    public function getGetRequestPoolList()
    {
        return $this->getRequestPoolList;
    }

    /**
     * Sets a new getRequestPoolList
     *
     * @param \Conecto\FeratelDsi\Dtos\SPRequestType\GetRequestPoolListAType $getRequestPoolList
     * @return self
     */
    public function setGetRequestPoolList(?\Conecto\FeratelDsi\Dtos\SPRequestType\GetRequestPoolListAType $getRequestPoolList = null)
    {
        $this->getRequestPoolList = $getRequestPoolList;
        return $this;
    }

    /**
     * Gets as getRequestPoolDetails
     *
     * @return \Conecto\FeratelDsi\Dtos\SPRequestType\GetRequestPoolDetailsAType
     */
    public function getGetRequestPoolDetails()
    {
        return $this->getRequestPoolDetails;
    }

    /**
     * Sets a new getRequestPoolDetails
     *
     * @param \Conecto\FeratelDsi\Dtos\SPRequestType\GetRequestPoolDetailsAType $getRequestPoolDetails
     * @return self
     */
    public function setGetRequestPoolDetails(?\Conecto\FeratelDsi\Dtos\SPRequestType\GetRequestPoolDetailsAType $getRequestPoolDetails = null)
    {
        $this->getRequestPoolDetails = $getRequestPoolDetails;
        return $this;
    }

    /**
     * Gets as activateRequestPool
     *
     * @return \Conecto\FeratelDsi\Dtos\SPRequestType\ActivateRequestPoolAType
     */
    public function getActivateRequestPool()
    {
        return $this->activateRequestPool;
    }

    /**
     * Sets a new activateRequestPool
     *
     * @param \Conecto\FeratelDsi\Dtos\SPRequestType\ActivateRequestPoolAType $activateRequestPool
     * @return self
     */
    public function setActivateRequestPool(?\Conecto\FeratelDsi\Dtos\SPRequestType\ActivateRequestPoolAType $activateRequestPool = null)
    {
        $this->activateRequestPool = $activateRequestPool;
        return $this;
    }

    /**
     * Gets as setRequestPoolStatus
     *
     * @return \Conecto\FeratelDsi\Dtos\SPRequestType\SetRequestPoolStatusAType
     */
    public function getSetRequestPoolStatus()
    {
        return $this->setRequestPoolStatus;
    }

    /**
     * Sets a new setRequestPoolStatus
     *
     * @param \Conecto\FeratelDsi\Dtos\SPRequestType\SetRequestPoolStatusAType $setRequestPoolStatus
     * @return self
     */
    public function setSetRequestPoolStatus(?\Conecto\FeratelDsi\Dtos\SPRequestType\SetRequestPoolStatusAType $setRequestPoolStatus = null)
    {
        $this->setRequestPoolStatus = $setRequestPoolStatus;
        return $this;
    }

    /**
     * Gets as setEBModuleStatus
     *
     * @return \Conecto\FeratelDsi\Dtos\SPRequestType\SetEBModuleStatusAType
     */
    public function getSetEBModuleStatus()
    {
        return $this->setEBModuleStatus;
    }

    /**
     * Sets a new setEBModuleStatus
     *
     * @param \Conecto\FeratelDsi\Dtos\SPRequestType\SetEBModuleStatusAType $setEBModuleStatus
     * @return self
     */
    public function setSetEBModuleStatus(?\Conecto\FeratelDsi\Dtos\SPRequestType\SetEBModuleStatusAType $setEBModuleStatus = null)
    {
        $this->setEBModuleStatus = $setEBModuleStatus;
        return $this;
    }

    /**
     * Gets as checkEBModuleStatus
     *
     * @return \Conecto\FeratelDsi\Dtos\SPRequestType\CheckEBModuleStatusAType
     */
    public function getCheckEBModuleStatus()
    {
        return $this->checkEBModuleStatus;
    }

    /**
     * Sets a new checkEBModuleStatus
     *
     * @param \Conecto\FeratelDsi\Dtos\SPRequestType\CheckEBModuleStatusAType $checkEBModuleStatus
     * @return self
     */
    public function setCheckEBModuleStatus(?\Conecto\FeratelDsi\Dtos\SPRequestType\CheckEBModuleStatusAType $checkEBModuleStatus = null)
    {
        $this->checkEBModuleStatus = $checkEBModuleStatus;
        return $this;
    }
}

