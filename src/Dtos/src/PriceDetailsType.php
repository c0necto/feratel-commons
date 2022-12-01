<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing PriceDetailsType
 *
 *
 * XSD Type: PriceDetailsType
 */
class PriceDetailsType
{
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
     * @var float $totalUserExtra
     */
    private $totalUserExtra = null;

    /**
     * @var string $extraName
     */
    private $extraName = null;

    public function __construct(float $totalAdultPrice = null, float $totalAdultMeal = null, float $totalAdultVT = null, float $totalChildrenPrice = null, float $totalChildrenMeal = null, float $totalChildrenVT = null, float $totalBedlinen = null, float $totalFinalCleaning = null, float $totalUserExtra = null, string $extraName = null)
    {
        $this->totalAdultPrice = $totalAdultPrice;
        $this->totalAdultMeal = $totalAdultMeal;
        $this->totalAdultVT = $totalAdultVT;
        $this->totalChildrenPrice = $totalChildrenPrice;
        $this->totalChildrenMeal = $totalChildrenMeal;
        $this->totalChildrenVT = $totalChildrenVT;
        $this->totalBedlinen = $totalBedlinen;
        $this->totalFinalCleaning = $totalFinalCleaning;
        $this->totalUserExtra = $totalUserExtra;
        $this->extraName = $extraName;
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
     * Gets as totalUserExtra
     *
     * @return float
     */
    public function getTotalUserExtra()
    {
        return $this->totalUserExtra;
    }

    /**
     * Sets a new totalUserExtra
     *
     * @param float $totalUserExtra
     * @return self
     */
    public function setTotalUserExtra($totalUserExtra)
    {
        $this->totalUserExtra = $totalUserExtra;
        return $this;
    }

    /**
     * Gets as extraName
     *
     * @return string
     */
    public function getExtraName()
    {
        return $this->extraName;
    }

    /**
     * Sets a new extraName
     *
     * @param string $extraName
     * @return self
     */
    public function setExtraName($extraName)
    {
        $this->extraName = $extraName;
        return $this;
    }
}

