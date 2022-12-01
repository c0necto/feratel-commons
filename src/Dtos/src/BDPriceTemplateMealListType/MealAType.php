<?php

namespace Conecto\FeratelDsi\Dtos\BDPriceTemplateMealListType;

/**
 * Class representing MealAType
 */
class MealAType
{
    /**
     * @var string $mealCode
     */
    private $mealCode = null;

    /**
     * @var float $value
     */
    private $value = null;

    /**
     * @var int $nights
     */
    private $nights = null;

    public function __construct(string $mealCode = null, float $value = null, int $nights = null)
    {
        $this->mealCode = $mealCode;
        $this->value = $value;
        $this->nights = $nights;
    }

    /**
     * Gets as mealCode
     *
     * @return string
     */
    public function getMealCode()
    {
        return $this->mealCode;
    }

    /**
     * Sets a new mealCode
     *
     * @param string $mealCode
     * @return self
     */
    public function setMealCode($mealCode)
    {
        $this->mealCode = $mealCode;
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
     * Gets as nights
     *
     * @return int
     */
    public function getNights()
    {
        return $this->nights;
    }

    /**
     * Sets a new nights
     *
     * @param int $nights
     * @return self
     */
    public function setNights($nights)
    {
        $this->nights = $nights;
        return $this;
    }
}

