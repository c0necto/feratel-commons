<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BookingPriceDetailsType
 *
 *
 * XSD Type: BookingPriceDetails
 */
class BookingPriceDetailsType
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
     * @var float $totalExtras
     */
    private $totalExtras = null;

    /**
     * @var int $payNights
     */
    private $payNights = null;

    /**
     * @var string $promotionCodeCalcRule
     */
    private $promotionCodeCalcRule = null;

    /**
     * @var float $promotionCodePrice
     */
    private $promotionCodePrice = null;

    public function __construct(string $mealCode = null, float $totalPrice = null, float $totalAdultPrice = null, float $totalAdultMeal = null, float $totalAdultVT = null, float $totalChildrenPrice = null, float $totalChildrenMeal = null, float $totalChildrenVT = null, float $totalBedlinen = null, float $totalFinalCleaning = null, float $totalExtras = null, int $payNights = null, string $promotionCodeCalcRule = null, float $promotionCodePrice = null)
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
        $this->totalExtras = $totalExtras;
        $this->payNights = $payNights;
        $this->promotionCodeCalcRule = $promotionCodeCalcRule;
        $this->promotionCodePrice = $promotionCodePrice;
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
     * Gets as totalExtras
     *
     * @return float
     */
    public function getTotalExtras()
    {
        return $this->totalExtras;
    }

    /**
     * Sets a new totalExtras
     *
     * @param float $totalExtras
     * @return self
     */
    public function setTotalExtras($totalExtras)
    {
        $this->totalExtras = $totalExtras;
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

    /**
     * Gets as promotionCodeCalcRule
     *
     * @return string
     */
    public function getPromotionCodeCalcRule()
    {
        return $this->promotionCodeCalcRule;
    }

    /**
     * Sets a new promotionCodeCalcRule
     *
     * @param string $promotionCodeCalcRule
     * @return self
     */
    public function setPromotionCodeCalcRule($promotionCodeCalcRule)
    {
        $this->promotionCodeCalcRule = $promotionCodeCalcRule;
        return $this;
    }

    /**
     * Gets as promotionCodePrice
     *
     * @return float
     */
    public function getPromotionCodePrice()
    {
        return $this->promotionCodePrice;
    }

    /**
     * Sets a new promotionCodePrice
     *
     * @param float $promotionCodePrice
     * @return self
     */
    public function setPromotionCodePrice($promotionCodePrice)
    {
        $this->promotionCodePrice = $promotionCodePrice;
        return $this;
    }
}

