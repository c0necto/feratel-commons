<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDClosedPeriodsType
 *
 *
 * XSD Type: BDClosedPeriods
 */
class BDClosedPeriodsType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDClosedPeriodType[] $closedPeriod
     */
    private $closedPeriod = [
        
    ];

    public function __construct(array $closedPeriod = null)
    {
        $this->closedPeriod = $closedPeriod;
    }

    /**
     * Adds as closedPeriod
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDClosedPeriodType $closedPeriod
     */
    public function addToClosedPeriod(\Conecto\FeratelDsi\Dtos\BDClosedPeriodType $closedPeriod)
    {
        $this->closedPeriod[] = $closedPeriod;
        return $this;
    }

    /**
     * isset closedPeriod
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClosedPeriod($index)
    {
        return isset($this->closedPeriod[$index]);
    }

    /**
     * unset closedPeriod
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClosedPeriod($index)
    {
        unset($this->closedPeriod[$index]);
    }

    /**
     * Gets as closedPeriod
     *
     * @return \Conecto\FeratelDsi\Dtos\BDClosedPeriodType[]
     */
    public function getClosedPeriod()
    {
        return $this->closedPeriod;
    }

    /**
     * Sets a new closedPeriod
     *
     * @param \Conecto\FeratelDsi\Dtos\BDClosedPeriodType[] $closedPeriod
     * @return self
     */
    public function setClosedPeriod(array $closedPeriod)
    {
        $this->closedPeriod = $closedPeriod;
        return $this;
    }
}

