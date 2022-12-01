<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPriceTemplateMealListType
 *
 *
 * XSD Type: BDPriceTemplateMealList
 */
class BDPriceTemplateMealListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplateMealListType\MealAType[] $meal
     */
    private $meal = [
        
    ];

    public function __construct(array $meal = null)
    {
        $this->meal = $meal;
    }

    /**
     * Adds as meal
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateMealListType\MealAType $meal
     */
    public function addToMeal(\Conecto\FeratelDsi\Dtos\BDPriceTemplateMealListType\MealAType $meal)
    {
        $this->meal[] = $meal;
        return $this;
    }

    /**
     * isset meal
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeal($index)
    {
        return isset($this->meal[$index]);
    }

    /**
     * unset meal
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeal($index)
    {
        unset($this->meal[$index]);
    }

    /**
     * Gets as meal
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplateMealListType\MealAType[]
     */
    public function getMeal()
    {
        return $this->meal;
    }

    /**
     * Sets a new meal
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateMealListType\MealAType[] $meal
     * @return self
     */
    public function setMeal(array $meal = null)
    {
        $this->meal = $meal;
        return $this;
    }
}

