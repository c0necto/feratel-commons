<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPeriodListType
 *
 *
 * XSD Type: BDPeriodList
 */
class BDPeriodListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType[] $period
     */
    private $period = [
        
    ];

    public function __construct(array $period = null)
    {
        $this->period = $period;
    }

    /**
     * Adds as period
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType $period
     */
    public function addToPeriod(\Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType $period)
    {
        $this->period[] = $period;
        return $this;
    }

    /**
     * isset period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPeriod($index)
    {
        return isset($this->period[$index]);
    }

    /**
     * unset period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPeriod($index)
    {
        unset($this->period[$index]);
    }

    /**
     * Gets as period
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType[]
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType[] $period
     * @return self
     */
    public function setPeriod(array $period = null)
    {
        $this->period = $period;
        return $this;
    }
}

