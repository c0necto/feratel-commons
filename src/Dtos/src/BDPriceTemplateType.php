<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPriceTemplateType
 *
 *
 * XSD Type: BDPriceTemplateType
 */
class BDPriceTemplateType
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
     * @var bool $isBestPrice
     */
    private $isBestPrice = null;

    /**
     * @var string $defaultMealCode
     */
    private $defaultMealCode = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType[] $periods
     */
    private $periods = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType $prices
     */
    private $prices = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplateChildReductionListType $childReductions
     */
    private $childReductions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceSplittingListType $priceSplittings
     */
    private $priceSplittings = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplateSpecialPriceListType $specialPrices
     */
    private $specialPrices = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplateMealListType\MealAType[] $meals
     */
    private $meals = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplateType\BedLinenAType $bedLinen
     */
    private $bedLinen = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplateType\FinalCleaningAType $finalCleaning
     */
    private $finalCleaning = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplateExtraListType\ExtraAType[] $extras
     */
    private $extras = null;

    public function __construct(string $id = null, string $name = null, \DateTime $validFrom = null, bool $isBestPrice = null, string $defaultMealCode = null, \DateTime $changeDate = null, array $periods = null, \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType $prices = null, \Conecto\FeratelDsi\Dtos\BDPriceTemplateChildReductionListType $childReductions = null, \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceSplittingListType $priceSplittings = null, \Conecto\FeratelDsi\Dtos\BDPriceTemplateSpecialPriceListType $specialPrices = null, array $meals = null, \Conecto\FeratelDsi\Dtos\BDPriceTemplateType\BedLinenAType $bedLinen = null, \Conecto\FeratelDsi\Dtos\BDPriceTemplateType\FinalCleaningAType $finalCleaning = null, array $extras = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->validFrom = $validFrom;
        $this->isBestPrice = $isBestPrice;
        $this->defaultMealCode = $defaultMealCode;
        $this->changeDate = $changeDate;
        $this->periods = $periods;
        $this->prices = $prices;
        $this->childReductions = $childReductions;
        $this->priceSplittings = $priceSplittings;
        $this->specialPrices = $specialPrices;
        $this->meals = $meals;
        $this->bedLinen = $bedLinen;
        $this->finalCleaning = $finalCleaning;
        $this->extras = $extras;
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
     * Gets as isBestPrice
     *
     * @return bool
     */
    public function getIsBestPrice()
    {
        return $this->isBestPrice;
    }

    /**
     * Sets a new isBestPrice
     *
     * @param bool $isBestPrice
     * @return self
     */
    public function setIsBestPrice($isBestPrice)
    {
        $this->isBestPrice = $isBestPrice;
        return $this;
    }

    /**
     * Gets as defaultMealCode
     *
     * @return string
     */
    public function getDefaultMealCode()
    {
        return $this->defaultMealCode;
    }

    /**
     * Sets a new defaultMealCode
     *
     * @param string $defaultMealCode
     * @return self
     */
    public function setDefaultMealCode($defaultMealCode)
    {
        $this->defaultMealCode = $defaultMealCode;
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

    /**
     * Gets as prices
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Sets a new prices
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType $prices
     * @return self
     */
    public function setPrices(?\Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType $prices = null)
    {
        $this->prices = $prices;
        return $this;
    }

    /**
     * Gets as childReductions
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplateChildReductionListType
     */
    public function getChildReductions()
    {
        return $this->childReductions;
    }

    /**
     * Sets a new childReductions
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateChildReductionListType $childReductions
     * @return self
     */
    public function setChildReductions(?\Conecto\FeratelDsi\Dtos\BDPriceTemplateChildReductionListType $childReductions = null)
    {
        $this->childReductions = $childReductions;
        return $this;
    }

    /**
     * Gets as priceSplittings
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceSplittingListType
     */
    public function getPriceSplittings()
    {
        return $this->priceSplittings;
    }

    /**
     * Sets a new priceSplittings
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceSplittingListType $priceSplittings
     * @return self
     */
    public function setPriceSplittings(?\Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceSplittingListType $priceSplittings = null)
    {
        $this->priceSplittings = $priceSplittings;
        return $this;
    }

    /**
     * Gets as specialPrices
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplateSpecialPriceListType
     */
    public function getSpecialPrices()
    {
        return $this->specialPrices;
    }

    /**
     * Sets a new specialPrices
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateSpecialPriceListType $specialPrices
     * @return self
     */
    public function setSpecialPrices(?\Conecto\FeratelDsi\Dtos\BDPriceTemplateSpecialPriceListType $specialPrices = null)
    {
        $this->specialPrices = $specialPrices;
        return $this;
    }

    /**
     * Adds as meal
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateMealListType\MealAType $meal
     */
    public function addToMeals(\Conecto\FeratelDsi\Dtos\BDPriceTemplateMealListType\MealAType $meal)
    {
        $this->meals[] = $meal;
        return $this;
    }

    /**
     * isset meals
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeals($index)
    {
        return isset($this->meals[$index]);
    }

    /**
     * unset meals
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeals($index)
    {
        unset($this->meals[$index]);
    }

    /**
     * Gets as meals
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplateMealListType\MealAType[]
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * Sets a new meals
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateMealListType\MealAType[] $meals
     * @return self
     */
    public function setMeals(array $meals = null)
    {
        $this->meals = $meals;
        return $this;
    }

    /**
     * Gets as bedLinen
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplateType\BedLinenAType
     */
    public function getBedLinen()
    {
        return $this->bedLinen;
    }

    /**
     * Sets a new bedLinen
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateType\BedLinenAType $bedLinen
     * @return self
     */
    public function setBedLinen(?\Conecto\FeratelDsi\Dtos\BDPriceTemplateType\BedLinenAType $bedLinen = null)
    {
        $this->bedLinen = $bedLinen;
        return $this;
    }

    /**
     * Gets as finalCleaning
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplateType\FinalCleaningAType
     */
    public function getFinalCleaning()
    {
        return $this->finalCleaning;
    }

    /**
     * Sets a new finalCleaning
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateType\FinalCleaningAType $finalCleaning
     * @return self
     */
    public function setFinalCleaning(?\Conecto\FeratelDsi\Dtos\BDPriceTemplateType\FinalCleaningAType $finalCleaning = null)
    {
        $this->finalCleaning = $finalCleaning;
        return $this;
    }

    /**
     * Adds as extra
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateExtraListType\ExtraAType $extra
     */
    public function addToExtras(\Conecto\FeratelDsi\Dtos\BDPriceTemplateExtraListType\ExtraAType $extra)
    {
        $this->extras[] = $extra;
        return $this;
    }

    /**
     * isset extras
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExtras($index)
    {
        return isset($this->extras[$index]);
    }

    /**
     * unset extras
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExtras($index)
    {
        unset($this->extras[$index]);
    }

    /**
     * Gets as extras
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplateExtraListType\ExtraAType[]
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * Sets a new extras
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateExtraListType\ExtraAType[] $extras
     * @return self
     */
    public function setExtras(array $extras = null)
    {
        $this->extras = $extras;
        return $this;
    }
}

