<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDArrivalDepartureTemplateConditionType
 *
 *
 * XSD Type: BDArrivalDepartureTemplateConditionType
 */
class BDArrivalDepartureTemplateConditionType
{
    /**
     * @var int $daysUntilArrival
     */
    private $daysUntilArrival = null;

    /**
     * @var int $minStay
     */
    private $minStay = null;

    /**
     * @var int $maxStay
     */
    private $maxStay = null;

    /**
     * @var int $interval
     */
    private $interval = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType\ArrivalDaysAType $arrivalDays
     */
    private $arrivalDays = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType\DepartureDaysAType $departureDays
     */
    private $departureDays = null;

    public function __construct(int $daysUntilArrival = null, int $minStay = null, int $maxStay = null, int $interval = null, \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType\ArrivalDaysAType $arrivalDays = null, \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType\DepartureDaysAType $departureDays = null)
    {
        $this->daysUntilArrival = $daysUntilArrival;
        $this->minStay = $minStay;
        $this->maxStay = $maxStay;
        $this->interval = $interval;
        $this->arrivalDays = $arrivalDays;
        $this->departureDays = $departureDays;
    }

    /**
     * Gets as daysUntilArrival
     *
     * @return int
     */
    public function getDaysUntilArrival()
    {
        return $this->daysUntilArrival;
    }

    /**
     * Sets a new daysUntilArrival
     *
     * @param int $daysUntilArrival
     * @return self
     */
    public function setDaysUntilArrival($daysUntilArrival)
    {
        $this->daysUntilArrival = $daysUntilArrival;
        return $this;
    }

    /**
     * Gets as minStay
     *
     * @return int
     */
    public function getMinStay()
    {
        return $this->minStay;
    }

    /**
     * Sets a new minStay
     *
     * @param int $minStay
     * @return self
     */
    public function setMinStay($minStay)
    {
        $this->minStay = $minStay;
        return $this;
    }

    /**
     * Gets as maxStay
     *
     * @return int
     */
    public function getMaxStay()
    {
        return $this->maxStay;
    }

    /**
     * Sets a new maxStay
     *
     * @param int $maxStay
     * @return self
     */
    public function setMaxStay($maxStay)
    {
        $this->maxStay = $maxStay;
        return $this;
    }

    /**
     * Gets as interval
     *
     * @return int
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Sets a new interval
     *
     * @param int $interval
     * @return self
     */
    public function setInterval($interval)
    {
        $this->interval = $interval;
        return $this;
    }

    /**
     * Gets as arrivalDays
     *
     * @return \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType\ArrivalDaysAType
     */
    public function getArrivalDays()
    {
        return $this->arrivalDays;
    }

    /**
     * Sets a new arrivalDays
     *
     * @param \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType\ArrivalDaysAType $arrivalDays
     * @return self
     */
    public function setArrivalDays(\Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType\ArrivalDaysAType $arrivalDays)
    {
        $this->arrivalDays = $arrivalDays;
        return $this;
    }

    /**
     * Gets as departureDays
     *
     * @return \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType\DepartureDaysAType
     */
    public function getDepartureDays()
    {
        return $this->departureDays;
    }

    /**
     * Sets a new departureDays
     *
     * @param \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType\DepartureDaysAType $departureDays
     * @return self
     */
    public function setDepartureDays(\Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType\DepartureDaysAType $departureDays)
    {
        $this->departureDays = $departureDays;
        return $this;
    }
}

