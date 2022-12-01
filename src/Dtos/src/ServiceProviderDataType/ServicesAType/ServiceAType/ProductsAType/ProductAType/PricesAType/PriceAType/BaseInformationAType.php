<?php

namespace Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType;

/**
 * Class representing BaseInformationAType
 */
class BaseInformationAType
{
    /**
     * @var float $basePrice
     */
    private $basePrice = null;

    /**
     * @var string $standardMealCode
     */
    private $standardMealCode = null;

    /**
     * @var float $basePriceWithMeal
     */
    private $basePriceWithMeal = null;

    /**
     * @var float $mealPrice
     */
    private $mealPrice = null;

    public function __construct(float $basePrice = null, string $standardMealCode = null, float $basePriceWithMeal = null, float $mealPrice = null)
    {
        $this->basePrice = $basePrice;
        $this->standardMealCode = $standardMealCode;
        $this->basePriceWithMeal = $basePriceWithMeal;
        $this->mealPrice = $mealPrice;
    }

    /**
     * Gets as basePrice
     *
     * @return float
     */
    public function getBasePrice()
    {
        return $this->basePrice;
    }

    /**
     * Sets a new basePrice
     *
     * @param float $basePrice
     * @return self
     */
    public function setBasePrice($basePrice)
    {
        $this->basePrice = $basePrice;
        return $this;
    }

    /**
     * Gets as standardMealCode
     *
     * @return string
     */
    public function getStandardMealCode()
    {
        return $this->standardMealCode;
    }

    /**
     * Sets a new standardMealCode
     *
     * @param string $standardMealCode
     * @return self
     */
    public function setStandardMealCode($standardMealCode)
    {
        $this->standardMealCode = $standardMealCode;
        return $this;
    }

    /**
     * Gets as basePriceWithMeal
     *
     * @return float
     */
    public function getBasePriceWithMeal()
    {
        return $this->basePriceWithMeal;
    }

    /**
     * Sets a new basePriceWithMeal
     *
     * @param float $basePriceWithMeal
     * @return self
     */
    public function setBasePriceWithMeal($basePriceWithMeal)
    {
        $this->basePriceWithMeal = $basePriceWithMeal;
        return $this;
    }

    /**
     * Gets as mealPrice
     *
     * @return float
     */
    public function getMealPrice()
    {
        return $this->mealPrice;
    }

    /**
     * Sets a new mealPrice
     *
     * @param float $mealPrice
     * @return self
     */
    public function setMealPrice($mealPrice)
    {
        $this->mealPrice = $mealPrice;
        return $this;
    }
}

