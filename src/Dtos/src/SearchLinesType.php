<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SearchLinesType
 *
 * Defines list of search objects.
 * XSD Type: SearchLinesType
 */
class SearchLinesType
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
     * @var string $searchType
     */
    private $searchType = null;

    /**
     * @var string $responseType
     */
    private $responseType = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchParametersType[] $searchParameters
     */
    private $searchParameters = [
        
    ];

    public function __construct(int $startIndex = null, int $pageSize = null, array $sortOrder = null, string $searchType = null, string $responseType = null, array $searchParameters = null)
    {
        $this->startIndex = $startIndex;
        $this->pageSize = $pageSize;
        $this->sortOrder = $sortOrder;
        $this->searchType = $searchType;
        $this->responseType = $responseType;
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
     * Gets as searchType
     *
     * @return string
     */
    public function getSearchType()
    {
        return $this->searchType;
    }

    /**
     * Sets a new searchType
     *
     * @param string $searchType
     * @return self
     */
    public function setSearchType($searchType)
    {
        $this->searchType = $searchType;
        return $this;
    }

    /**
     * Gets as responseType
     *
     * @return string
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * Sets a new responseType
     *
     * @param string $responseType
     * @return self
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;
        return $this;
    }

    /**
     * Adds as searchParameters
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\SearchParametersType $searchParameters
     */
    public function addToSearchParameters(\Conecto\FeratelDsi\Dtos\SearchParametersType $searchParameters)
    {
        $this->searchParameters[] = $searchParameters;
        return $this;
    }

    /**
     * isset searchParameters
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
     * @return \Conecto\FeratelDsi\Dtos\SearchParametersType[]
     */
    public function getSearchParameters()
    {
        return $this->searchParameters;
    }

    /**
     * Sets a new searchParameters
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchParametersType[] $searchParameters
     * @return self
     */
    public function setSearchParameters(array $searchParameters)
    {
        $this->searchParameters = $searchParameters;
        return $this;
    }
}

