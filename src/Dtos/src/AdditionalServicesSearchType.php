<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing AdditionalServicesSearchType
 *
 * Defines list of search objects.
 * XSD Type: AdditionalServicesSearchType
 */
class AdditionalServicesSearchType
{
    /**
     * @var int $startIndex
     */
    private $startIndex = null;

    /**
     * @var int $pageSize
     */
    private $pageSize = null;

    /**
     * @var string[] $sortOrder
     */
    private $sortOrder = null;

    /**
     * Provides one set of search parameters information for request of availability.
     *
     * @var \Conecto\FeratelDsi\Dtos\AdditionalServicesSearchParametersType[] $searchParameters
     */
    private $searchParameters = [
        
    ];

    public function __construct(int $startIndex = null, int $pageSize = null, array $sortOrder = null, array $searchParameters = null)
    {
        $this->startIndex = $startIndex;
        $this->pageSize = $pageSize;
        $this->sortOrder = $sortOrder;
        $this->searchParameters = $searchParameters;
    }

    /**
     * Gets as startIndex
     *
     * @return int
     */
    public function getStartIndex()
    {
        return $this->startIndex;
    }

    /**
     * Sets a new startIndex
     *
     * @param int $startIndex
     * @return self
     */
    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;
        return $this;
    }

    /**
     * Gets as pageSize
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * Sets a new pageSize
     *
     * @param int $pageSize
     * @return self
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * Adds as sortOrder
     *
     * @return self
     * @param string $sortOrder
     */
    public function addToSortOrder($sortOrder)
    {
        $this->sortOrder[] = $sortOrder;
        return $this;
    }

    /**
     * isset sortOrder
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSortOrder($index)
    {
        return isset($this->sortOrder[$index]);
    }

    /**
     * unset sortOrder
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSortOrder($index)
    {
        unset($this->sortOrder[$index]);
    }

    /**
     * Gets as sortOrder
     *
     * @return string[]
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Sets a new sortOrder
     *
     * @param string $sortOrder
     * @return self
     */
    public function setSortOrder(array $sortOrder)
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }

    /**
     * Adds as searchParameters
     *
     * Provides one set of search parameters information for request of availability.
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\AdditionalServicesSearchParametersType $searchParameters
     */
    public function addToSearchParameters(\Conecto\FeratelDsi\Dtos\AdditionalServicesSearchParametersType $searchParameters)
    {
        $this->searchParameters[] = $searchParameters;
        return $this;
    }

    /**
     * isset searchParameters
     *
     * Provides one set of search parameters information for request of availability.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSearchParameters($index)
    {
        return isset($this->searchParameters[$index]);
    }

    /**
     * unset searchParameters
     *
     * Provides one set of search parameters information for request of availability.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSearchParameters($index)
    {
        unset($this->searchParameters[$index]);
    }

    /**
     * Gets as searchParameters
     *
     * Provides one set of search parameters information for request of availability.
     *
     * @return \Conecto\FeratelDsi\Dtos\AdditionalServicesSearchParametersType[]
     */
    public function getSearchParameters()
    {
        return $this->searchParameters;
    }

    /**
     * Sets a new searchParameters
     *
     * Provides one set of search parameters information for request of availability.
     *
     * @param \Conecto\FeratelDsi\Dtos\AdditionalServicesSearchParametersType[] $searchParameters
     * @return self
     */
    public function setSearchParameters(array $searchParameters)
    {
        $this->searchParameters = $searchParameters;
        return $this;
    }
}

