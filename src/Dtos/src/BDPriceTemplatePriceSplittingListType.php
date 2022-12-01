<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPriceTemplatePriceSplittingListType
 *
 *
 * XSD Type: BDPriceTemplatePriceSplittingList
 */
class BDPriceTemplatePriceSplittingListType
{
    /**
     * @var bool $fromDiscounts
     */
    private $fromDiscounts = null;

    /**
     * @var bool $fromMeals
     */
    private $fromMeals = null;

    /**
     * @var bool $fromExtras
     */
    private $fromExtras = null;

    /**
     * @var bool $fromChildPrice
     */
    private $fromChildPrice = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceSplittingListType\PriceSplittingAType[] $priceSplitting
     */
    private $priceSplitting = [
        
    ];

    public function __construct(bool $fromDiscounts = null, bool $fromMeals = null, bool $fromExtras = null, bool $fromChildPrice = null, array $priceSplitting = null)
    {
        $this->fromDiscounts = $fromDiscounts;
        $this->fromMeals = $fromMeals;
        $this->fromExtras = $fromExtras;
        $this->fromChildPrice = $fromChildPrice;
        $this->priceSplitting = $priceSplitting;
    }

    /**
     * Gets as fromDiscounts
     *
     * @return bool
     */
    public function getFromDiscounts()
    {
        return $this->fromDiscounts;
    }

    /**
     * Sets a new fromDiscounts
     *
     * @param bool $fromDiscounts
     * @return self
     */
    public function setFromDiscounts($fromDiscounts)
    {
        $this->fromDiscounts = $fromDiscounts;
        return $this;
    }

    /**
     * Gets as fromMeals
     *
     * @return bool
     */
    public function getFromMeals()
    {
        return $this->fromMeals;
    }

    /**
     * Sets a new fromMeals
     *
     * @param bool $fromMeals
     * @return self
     */
    public function setFromMeals($fromMeals)
    {
        $this->fromMeals = $fromMeals;
        return $this;
    }

    /**
     * Gets as fromExtras
     *
     * @return bool
     */
    public function getFromExtras()
    {
        return $this->fromExtras;
    }

    /**
     * Sets a new fromExtras
     *
     * @param bool $fromExtras
     * @return self
     */
    public function setFromExtras($fromExtras)
    {
        $this->fromExtras = $fromExtras;
        return $this;
    }

    /**
     * Gets as fromChildPrice
     *
     * @return bool
     */
    public function getFromChildPrice()
    {
        return $this->fromChildPrice;
    }

    /**
     * Sets a new fromChildPrice
     *
     * @param bool $fromChildPrice
     * @return self
     */
    public function setFromChildPrice($fromChildPrice)
    {
        $this->fromChildPrice = $fromChildPrice;
        return $this;
    }

    /**
     * Adds as priceSplitting
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceSplittingListType\PriceSplittingAType $priceSplitting
     */
    public function addToPriceSplitting(\Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceSplittingListType\PriceSplittingAType $priceSplitting)
    {
        $this->priceSplitting[] = $priceSplitting;
        return $this;
    }

    /**
     * isset priceSplitting
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriceSplitting($index)
    {
        return isset($this->priceSplitting[$index]);
    }

    /**
     * unset priceSplitting
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriceSplitting($index)
    {
        unset($this->priceSplitting[$index]);
    }

    /**
     * Gets as priceSplitting
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceSplittingListType\PriceSplittingAType[]
     */
    public function getPriceSplitting()
    {
        return $this->priceSplitting;
    }

    /**
     * Sets a new priceSplitting
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceSplittingListType\PriceSplittingAType[] $priceSplitting
     * @return self
     */
    public function setPriceSplitting(array $priceSplitting = null)
    {
        $this->priceSplitting = $priceSplitting;
        return $this;
    }
}

