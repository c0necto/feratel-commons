<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDArrivalDepartureTemplateType
 *
 *
 * XSD Type: BDArrivalDepartureTemplateType
 */
class BDArrivalDepartureTemplateType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var \DateTime $validFrom
     */
    private $validFrom = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType[] $conditions
     */
    private $conditions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType[] $periods
     */
    private $periods = null;

    public function __construct(string $id = null, string $name = null, \DateTime $validFrom = null, \DateTime $changeDate = null, array $conditions = null, array $periods = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->validFrom = $validFrom;
        $this->changeDate = $changeDate;
        $this->conditions = $conditions;
        $this->periods = $periods;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as validFrom
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Sets a new validFrom
     *
     * @param \DateTime $validFrom
     * @return self
     */
    public function setValidFrom(\DateTime $validFrom)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * Gets as changeDate
     *
     * @return \DateTime
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Sets a new changeDate
     *
     * @param \DateTime $changeDate
     * @return self
     */
    public function setChangeDate(\DateTime $changeDate)
    {
        $this->changeDate = $changeDate;
        return $this;
    }

    /**
     * Adds as condition
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType $condition
     */
    public function addToConditions(\Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType $condition)
    {
        $this->conditions[] = $condition;
        return $this;
    }

    /**
     * isset conditions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConditions($index)
    {
        return isset($this->conditions[$index]);
    }

    /**
     * unset conditions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConditions($index)
    {
        unset($this->conditions[$index]);
    }

    /**
     * Gets as conditions
     *
     * @return \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType[]
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Sets a new conditions
     *
     * @param \Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType[] $conditions
     * @return self
     */
    public function setConditions(array $conditions = null)
    {
        $this->conditions = $conditions;
        return $this;
    }

    /**
     * Adds as period
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType $period
     */
    public function addToPeriods(\Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType $period)
    {
        $this->periods[] = $period;
        return $this;
    }

    /**
     * isset periods
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPeriods($index)
    {
        return isset($this->periods[$index]);
    }

    /**
     * unset periods
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPeriods($index)
    {
        unset($this->periods[$index]);
    }

    /**
     * Gets as periods
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType[]
     */
    public function getPeriods()
    {
        return $this->periods;
    }

    /**
     * Sets a new periods
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType[] $periods
     * @return self
     */
    public function setPeriods(array $periods = null)
    {
        $this->periods = $periods;
        return $this;
    }
}

