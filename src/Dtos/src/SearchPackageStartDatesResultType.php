<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SearchPackageStartDatesResultType
 *
 *
 * XSD Type: SearchPackageStartDatesResultType
 */
class SearchPackageStartDatesResultType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchPackageStartDatesResultType\StartDateAType[] $startDate
     */
    private $startDate = [
        
    ];

    public function __construct(array $startDate = null)
    {
        $this->startDate = $startDate;
    }

    /**
     * Adds as startDate
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\SearchPackageStartDatesResultType\StartDateAType $startDate
     */
    public function addToStartDate(\Conecto\FeratelDsi\Dtos\SearchPackageStartDatesResultType\StartDateAType $startDate)
    {
        $this->startDate[] = $startDate;
        return $this;
    }

    /**
     * isset startDate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStartDate($index)
    {
        return isset($this->startDate[$index]);
    }

    /**
     * unset startDate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStartDate($index)
    {
        unset($this->startDate[$index]);
    }

    /**
     * Gets as startDate
     *
     * @return \Conecto\FeratelDsi\Dtos\SearchPackageStartDatesResultType\StartDateAType[]
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchPackageStartDatesResultType\StartDateAType[] $startDate
     * @return self
     */
    public function setStartDate(array $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }
}

