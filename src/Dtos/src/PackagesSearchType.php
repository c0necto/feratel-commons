<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing PackagesSearchType
 *
 *
 * XSD Type: PackagesSearchType
 */
class PackagesSearchType
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
     * @var \Conecto\FeratelDsi\Dtos\SearchPackageParametersType $searchParameters
     */
    private $searchParameters = null;

    public function __construct(int $startIndex = null, int $pageSize = null, array $sortOrder = null, \Conecto\FeratelDsi\Dtos\SearchPackageParametersType $searchParameters = null)
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
     * Gets as searchParameters
     *
     * @return \Conecto\FeratelDsi\Dtos\SearchPackageParametersType
     */
    public function getSearchParameters()
    {
        return $this->searchParameters;
    }

    /**
     * Sets a new searchParameters
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchPackageParametersType $searchParameters
     * @return self
     */
    public function setSearchParameters(\Conecto\FeratelDsi\Dtos\SearchPackageParametersType $searchParameters)
    {
        $this->searchParameters = $searchParameters;
        return $this;
    }
}

