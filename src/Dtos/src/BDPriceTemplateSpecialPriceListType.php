<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPriceTemplateSpecialPriceListType
 *
 *
 * XSD Type: BDPriceTemplateSpecialPriceList
 */
class BDPriceTemplateSpecialPriceListType
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
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplateSpecialPriceListType\SpecialPriceAType[] $specialPrice
     */
    private $specialPrice = [
        
    ];

    public function __construct(bool $fromDiscounts = null, bool $fromMeals = null, bool $fromExtras = null, bool $fromChildPrice = null, array $specialPrice = null)
    {
        $this->fromDiscounts = $fromDiscounts;
        $this->fromMeals = $fromMeals;
        $this->fromExtras = $fromExtras;
        $this->fromChildPrice = $fromChildPrice;
        $this->specialPrice = $specialPrice;
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
     * Adds as specialPrice
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateSpecialPriceListType\SpecialPriceAType $specialPrice
     */
    public function addToSpecialPrice(\Conecto\FeratelDsi\Dtos\BDPriceTemplateSpecialPriceListType\SpecialPriceAType $specialPrice)
    {
        $this->specialPrice[] = $specialPrice;
        return $this;
    }

    /**
     * isset specialPrice
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialPrice($index)
    {
        return isset($this->specialPrice[$index]);
    }

    /**
     * unset specialPrice
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialPrice($index)
    {
        unset($this->specialPrice[$index]);
    }

    /**
     * Gets as specialPrice
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplateSpecialPriceListType\SpecialPriceAType[]
     */
    public function getSpecialPrice()
    {
        return $this->specialPrice;
    }

    /**
     * Sets a new specialPrice
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateSpecialPriceListType\SpecialPriceAType[] $specialPrice
     * @return self
     */
    public function setSpecialPrice(array $specialPrice = null)
    {
        $this->specialPrice = $specialPrice;
        return $this;
    }
}

