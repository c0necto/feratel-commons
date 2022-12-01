<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType;

/**
 * Class representing PriceAType
 */
class PriceAType
{
    /**
     * @var string $mealCode
     */
    private $mealCode = null;

    /**
     * @var float $totalPrice
     */
    private $totalPrice = null;

    /**
     * @var float $totalAdultPrice
     */
    private $totalAdultPrice = null;

    /**
     * @var float $totalAdultMeal
     */
    private $totalAdultMeal = null;

    /**
     * @var float $totalAdultVT
     */
    private $totalAdultVT = null;

    /**
     * @var float $totalChildrenPrice
     */
    private $totalChildrenPrice = null;

    /**
     * @var float $totalChildrenMeal
     */
    private $totalChildrenMeal = null;

    /**
     * @var float $totalChildrenVT
     */
    private $totalChildrenVT = null;

    /**
     * @var float $totalBedlinen
     */
    private $totalBedlinen = null;

    /**
     * @var float $totalFinalCleaning
     */
    private $totalFinalCleaning = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType\ExtrasAType $extras
     */
    private $extras = null;

    /**
     * @var int $payNights
     */
    private $payNights = null;

    public function __construct(string $mealCode = null, float $totalPrice = null, float $totalAdultPrice = null, float $totalAdultMeal = null, float $totalAdultVT = null, float $totalChildrenPrice = null, float $totalChildrenMeal = null, float $totalChildrenVT = null, float $totalBedlinen = null, float $totalFinalCleaning = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType\ExtrasAType $extras = null, int $payNights = null)
    {
        $this->mealCode = $mealCode;
        $this->totalPrice = $totalPrice;
        $this->totalAdultPrice = $totalAdultPrice;
        $this->totalAdultMeal = $totalAdultMeal;
        $this->totalAdultVT = $totalAdultVT;
        $this->totalChildrenPrice = $totalChildrenPrice;
        $this->totalChildrenMeal = $totalChildrenMeal;
        $this->totalChildrenVT = $totalChildrenVT;
        $this->totalBedlinen = $totalBedlinen;
        $this->totalFinalCleaning = $totalFinalCleaning;
        $this->extras = $extras;
        $this->payNights = $payNights;
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
     * Gets as totalPrice
     *
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Sets a new totalPrice
     *
     * @param float $totalPrice
     * @return self
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }

    /**
     * Gets as totalAdultPrice
     *
     * @return float
     */
    public function getTotalAdultPrice()
    {
        return $this->totalAdultPrice;
    }

    /**
     * Sets a new totalAdultPrice
     *
     * @param float $totalAdultPrice
     * @return self
     */
    public function setTotalAdultPrice($totalAdultPrice)
    {
        $this->totalAdultPrice = $totalAdultPrice;
        return $this;
    }

    /**
     * Gets as totalAdultMeal
     *
     * @return float
     */
    public function getTotalAdultMeal()
    {
        return $this->totalAdultMeal;
    }

    /**
     * Sets a new totalAdultMeal
     *
     * @param float $totalAdultMeal
     * @return self
     */
    public function setTotalAdultMeal($totalAdultMeal)
    {
        $this->totalAdultMeal = $totalAdultMeal;
        return $this;
    }

    /**
     * Gets as totalAdultVT
     *
     * @return float
     */
    public function getTotalAdultVT()
    {
        return $this->totalAdultVT;
    }

    /**
     * Sets a new totalAdultVT
     *
     * @param float $totalAdultVT
     * @return self
     */
    public function setTotalAdultVT($totalAdultVT)
    {
        $this->totalAdultVT = $totalAdultVT;
        return $this;
    }

    /**
     * Gets as totalChildrenPrice
     *
     * @return float
     */
    public function getTotalChildrenPrice()
    {
        return $this->totalChildrenPrice;
    }

    /**
     * Sets a new totalChildrenPrice
     *
     * @param float $totalChildrenPrice
     * @return self
     */
    public function setTotalChildrenPrice($totalChildrenPrice)
    {
        $this->totalChildrenPrice = $totalChildrenPrice;
        return $this;
    }

    /**
     * Gets as totalChildrenMeal
     *
     * @return float
     */
    public function getTotalChildrenMeal()
    {
        return $this->totalChildrenMeal;
    }

    /**
     * Sets a new totalChildrenMeal
     *
     * @param float $totalChildrenMeal
     * @return self
     */
    public function setTotalChildrenMeal($totalChildrenMeal)
    {
        $this->totalChildrenMeal = $totalChildrenMeal;
        return $this;
    }

    /**
     * Gets as totalChildrenVT
     *
     * @return float
     */
    public function getTotalChildrenVT()
    {
        return $this->totalChildrenVT;
    }

    /**
     * Sets a new totalChildrenVT
     *
     * @param float $totalChildrenVT
     * @return self
     */
    public function setTotalChildrenVT($totalChildrenVT)
    {
        $this->totalChildrenVT = $totalChildrenVT;
        return $this;
    }

    /**
     * Gets as totalBedlinen
     *
     * @return float
     */
    public function getTotalBedlinen()
    {
        return $this->totalBedlinen;
    }

    /**
     * Sets a new totalBedlinen
     *
     * @param float $totalBedlinen
     * @return self
     */
    public function setTotalBedlinen($totalBedlinen)
    {
        $this->totalBedlinen = $totalBedlinen;
        return $this;
    }

    /**
     * Gets as totalFinalCleaning
     *
     * @return float
     */
    public function getTotalFinalCleaning()
    {
        return $this->totalFinalCleaning;
    }

    /**
     * Sets a new totalFinalCleaning
     *
     * @param float $totalFinalCleaning
     * @return self
     */
    public function setTotalFinalCleaning($totalFinalCleaning)
    {
        $this->totalFinalCleaning = $totalFinalCleaning;
        return $this;
    }

    /**
     * Gets as extras
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType\ExtrasAType
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * Sets a new extras
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType\ExtrasAType $extras
     * @return self
     */
    public function setExtras(?\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType\ExtrasAType $extras = null)
    {
        $this->extras = $extras;
        return $this;
    }

    /**
     * Gets as payNights
     *
     * @return int
     */
    public function getPayNights()
    {
        return $this->payNights;
    }

    /**
     * Sets a new payNights
     *
     * @param int $payNights
     * @return self
     */
    public function setPayNights($payNights)
    {
        $this->payNights = $payNights;
        return $this;
    }
}

