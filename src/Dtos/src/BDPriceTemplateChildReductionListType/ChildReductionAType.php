<?php

namespace Conecto\FeratelDsi\Dtos\BDPriceTemplateChildReductionListType;

/**
 * Class representing ChildReductionAType
 */
class ChildReductionAType
{
    /**
     * @var int $ageFrom
     */
    private $ageFrom = null;

    /**
     * @var int $ageTo
     */
    private $ageTo = null;

    /**
     * @var string $calcRule
     */
    private $calcRule = null;

    /**
     * @var float $value
     */
    private $value = null;

    /**
     * @var bool $withMeals
     */
    private $withMeals = null;

    /**
     * @var bool $useBasePrice
     */
    private $useBasePrice = null;

    public function __construct(int $ageFrom = null, int $ageTo = null, string $calcRule = null, float $value = null, bool $withMeals = null, bool $useBasePrice = null)
    {
        $this->ageFrom = $ageFrom;
        $this->ageTo = $ageTo;
        $this->calcRule = $calcRule;
        $this->value = $value;
        $this->withMeals = $withMeals;
        $this->useBasePrice = $useBasePrice;
    }

    /**
     * Gets as ageFrom
     *
     * @return int
     */
    public function getAgeFrom()
    {
        return $this->ageFrom;
    }

    /**
     * Sets a new ageFrom
     *
     * @param int $ageFrom
     * @return self
     */
    public function setAgeFrom($ageFrom)
    {
        $this->ageFrom = $ageFrom;
        return $this;
    }

    /**
     * Gets as ageTo
     *
     * @return int
     */
    public function getAgeTo()
    {
        return $this->ageTo;
    }

    /**
     * Sets a new ageTo
     *
     * @param int $ageTo
     * @return self
     */
    public function setAgeTo($ageTo)
    {
        $this->ageTo = $ageTo;
        return $this;
    }

    /**
     * Gets as calcRule
     *
     * @return string
     */
    public function getCalcRule()
    {
        return $this->calcRule;
    }

    /**
     * Sets a new calcRule
     *
     * @param string $calcRule
     * @return self
     */
    public function setCalcRule($calcRule)
    {
        $this->calcRule = $calcRule;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as withMeals
     *
     * @return bool
     */
    public function getWithMeals()
    {
        return $this->withMeals;
    }

    /**
     * Sets a new withMeals
     *
     * @param bool $withMeals
     * @return self
     */
    public function setWithMeals($withMeals)
    {
        $this->withMeals = $withMeals;
        return $this;
    }

    /**
     * Gets as useBasePrice
     *
     * @return bool
     */
    public function getUseBasePrice()
    {
        return $this->useBasePrice;
    }

    /**
     * Sets a new useBasePrice
     *
     * @param bool $useBasePrice
     * @return self
     */
    public function setUseBasePrice($useBasePrice)
    {
        $this->useBasePrice = $useBasePrice;
        return $this;
    }
}

