<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPriceTemplatePriceListType
 *
 *
 * XSD Type: BDPriceTemplatePriceList
 */
class BDPriceTemplatePriceListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\BasePricesAType\BasePriceAType[] $basePrices
     */
    private $basePrices = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\SurchargesAType\SurchargeAType[] $surcharges
     */
    private $surcharges = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\DiscountsAType\DiscountAType[] $discounts
     */
    private $discounts = null;

    public function __construct(array $basePrices = null, array $surcharges = null, array $discounts = null)
    {
        $this->basePrices = $basePrices;
        $this->surcharges = $surcharges;
        $this->discounts = $discounts;
    }

    /**
     * Adds as basePrice
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\BasePricesAType\BasePriceAType $basePrice
     */
    public function addToBasePrices(\Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\BasePricesAType\BasePriceAType $basePrice)
    {
        $this->basePrices[] = $basePrice;
        return $this;
    }

    /**
     * isset basePrices
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBasePrices($index)
    {
        return isset($this->basePrices[$index]);
    }

    /**
     * unset basePrices
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBasePrices($index)
    {
        unset($this->basePrices[$index]);
    }

    /**
     * Gets as basePrices
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\BasePricesAType\BasePriceAType[]
     */
    public function getBasePrices()
    {
        return $this->basePrices;
    }

    /**
     * Sets a new basePrices
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\BasePricesAType\BasePriceAType[] $basePrices
     * @return self
     */
    public function setBasePrices(array $basePrices = null)
    {
        $this->basePrices = $basePrices;
        return $this;
    }

    /**
     * Adds as surcharge
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\SurchargesAType\SurchargeAType $surcharge
     */
    public function addToSurcharges(\Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\SurchargesAType\SurchargeAType $surcharge)
    {
        $this->surcharges[] = $surcharge;
        return $this;
    }

    /**
     * isset surcharges
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSurcharges($index)
    {
        return isset($this->surcharges[$index]);
    }

    /**
     * unset surcharges
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSurcharges($index)
    {
        unset($this->surcharges[$index]);
    }

    /**
     * Gets as surcharges
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\SurchargesAType\SurchargeAType[]
     */
    public function getSurcharges()
    {
        return $this->surcharges;
    }

    /**
     * Sets a new surcharges
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\SurchargesAType\SurchargeAType[] $surcharges
     * @return self
     */
    public function setSurcharges(array $surcharges = null)
    {
        $this->surcharges = $surcharges;
        return $this;
    }

    /**
     * Adds as discount
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\DiscountsAType\DiscountAType $discount
     */
    public function addToDiscounts(\Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\DiscountsAType\DiscountAType $discount)
    {
        $this->discounts[] = $discount;
        return $this;
    }

    /**
     * isset discounts
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscounts($index)
    {
        return isset($this->discounts[$index]);
    }

    /**
     * unset discounts
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscounts($index)
    {
        unset($this->discounts[$index]);
    }

    /**
     * Gets as discounts
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\DiscountsAType\DiscountAType[]
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    /**
     * Sets a new discounts
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\DiscountsAType\DiscountAType[] $discounts
     * @return self
     */
    public function setDiscounts(array $discounts = null)
    {
        $this->discounts = $discounts;
        return $this;
    }
}

