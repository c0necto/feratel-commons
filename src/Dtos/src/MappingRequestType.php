<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing MappingRequestType
 *
 *
 * XSD Type: MappingRequestType
 */
class MappingRequestType
{
    /**
     * @var string $agentDutyCode
     */
    private $agentDutyCode = null;

    /**
     * @var string $filterType
     */
    private $filterType = null;

    /**
     * @var string $filter
     */
    private $filter = null;

    /**
     * @var string $dBCode
     */
    private $dBCode = null;

    public function __construct(string $agentDutyCode = null, string $filterType = null, string $filter = null, string $dBCode = null)
    {
        $this->agentDutyCode = $agentDutyCode;
        $this->filterType = $filterType;
        $this->filter = $filter;
        $this->dBCode = $dBCode;
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
     * Gets as filterType
     *
     * @return string
     */
    public function getFilterType()
    {
        return $this->filterType;
    }

    /**
     * Sets a new filterType
     *
     * @param string $filterType
     * @return self
     */
    public function setFilterType($filterType)
    {
        $this->filterType = $filterType;
        return $this;
    }

    /**
     * Gets as filter
     *
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter
     *
     * @param string $filter
     * @return self
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;
        return $this;
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
}

