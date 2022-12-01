<?php

namespace Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType;

/**
 * Class representing DiscountsAType
 */
class DiscountsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\DiscountsAType\DiscountAType[] $discount
     */
    private $discount = [
        
    ];

    public function __construct(array $discount = null)
    {
        $this->discount = $discount;
    }

    /**
     * Adds as discount
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\DiscountsAType\DiscountAType $discount
     */
    public function addToDiscount(\Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\DiscountsAType\DiscountAType $discount)
    {
        $this->discount[] = $discount;
        return $this;
    }

    /**
     * isset discount
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscount($index)
    {
        return isset($this->discount[$index]);
    }

    /**
     * unset discount
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscount($index)
    {
        unset($this->discount[$index]);
    }

    /**
     * Gets as discount
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\DiscountsAType\DiscountAType[]
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceListType\DiscountsAType\DiscountAType[] $discount
     * @return self
     */
    public function setDiscount(array $discount = null)
    {
        $this->discount = $discount;
        return $this;
    }
}

