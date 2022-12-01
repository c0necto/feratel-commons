<?php

namespace Conecto\FeratelDsi\Dtos\BDEventDetailsType;

/**
 * Class representing DatesAType
 */
class DatesAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDEventDetailsType\DatesAType\DateAType[] $date
     */
    private $date = [
        
    ];

    public function __construct(array $date = null)
    {
        $this->date = $date;
    }

    /**
     * Adds as date
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDEventDetailsType\DatesAType\DateAType $date
     */
    public function addToDate(\Conecto\FeratelDsi\Dtos\BDEventDetailsType\DatesAType\DateAType $date)
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
     * @return \Conecto\FeratelDsi\Dtos\BDEventDetailsType\DatesAType\DateAType[]
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * @param \Conecto\FeratelDsi\Dtos\BDEventDetailsType\DatesAType\DateAType[] $date
     * @return self
     */
    public function setDate(array $date = null)
    {
        $this->date = $date;
        return $this;
    }
}

