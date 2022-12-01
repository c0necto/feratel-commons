<?php

namespace Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType;

/**
 * Class representing DatesAType
 */
class DatesAType
{
    /**
     * @var bool $hideStartDate
     */
    private $hideStartDate = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType\DatesAType\DateAType[] $date
     */
    private $date = [
        
    ];

    public function __construct(bool $hideStartDate = null, array $date = null)
    {
        $this->hideStartDate = $hideStartDate;
        $this->date = $date;
    }

    /**
     * Gets as hideStartDate
     *
     * @return bool
     */
    public function getHideStartDate()
    {
        return $this->hideStartDate;
    }

    /**
     * Sets a new hideStartDate
     *
     * @param bool $hideStartDate
     * @return self
     */
    public function setHideStartDate($hideStartDate)
    {
        $this->hideStartDate = $hideStartDate;
        return $this;
    }

    /**
     * Adds as date
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType\DatesAType\DateAType $date
     */
    public function addToDate(\Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType\DatesAType\DateAType $date)
    {
        $this->date[] = $date;
        return $this;
    }

    /**
     * isset date
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDate($index)
    {
        return isset($this->date[$index]);
    }

    /**
     * unset date
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDate($index)
    {
        unset($this->date[$index]);
    }

    /**
     * Gets as date
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType\DatesAType\DateAType[]
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType\DatesAType\DateAType[] $date
     * @return self
     */
    public function setDate(array $date = null)
    {
        $this->date = $date;
        return $this;
    }
}

