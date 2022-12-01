<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType;

/**
 * Class representing PriceAType
 */
class PriceAType
{
    /**
     * @var float $totalSellPrice
     */
    private $totalSellPrice = null;

    /**
     * @var float $adultSellPrice
     */
    private $adultSellPrice = null;

    /**
     * @var float $childSellPrice
     */
    private $childSellPrice = null;

    /**
     * @var float $visitorTax
     */
    private $visitorTax = null;

    /**
     * @var float $cancellationInsurance
     */
    private $cancellationInsurance = null;

    /**
     * @var float $bookingFee
     */
    private $bookingFee = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType[] $details
     */
    private $details = null;

    public function __construct(float $totalSellPrice = null, float $adultSellPrice = null, float $childSellPrice = null, float $visitorTax = null, float $cancellationInsurance = null, float $bookingFee = null, array $details = null)
    {
        $this->totalSellPrice = $totalSellPrice;
        $this->adultSellPrice = $adultSellPrice;
        $this->childSellPrice = $childSellPrice;
        $this->visitorTax = $visitorTax;
        $this->cancellationInsurance = $cancellationInsurance;
        $this->bookingFee = $bookingFee;
        $this->details = $details;
    }

    /**
     * Gets as totalSellPrice
     *
     * @return float
     */
    public function getTotalSellPrice()
    {
        return $this->totalSellPrice;
    }

    /**
     * Sets a new totalSellPrice
     *
     * @param float $totalSellPrice
     * @return self
     */
    public function setTotalSellPrice($totalSellPrice)
    {
        $this->totalSellPrice = $totalSellPrice;
        return $this;
    }

    /**
     * Gets as adultSellPrice
     *
     * @return float
     */
    public function getAdultSellPrice()
    {
        return $this->adultSellPrice;
    }

    /**
     * Sets a new adultSellPrice
     *
     * @param float $adultSellPrice
     * @return self
     */
    public function setAdultSellPrice($adultSellPrice)
    {
        $this->adultSellPrice = $adultSellPrice;
        return $this;
    }

    /**
     * Gets as childSellPrice
     *
     * @return float
     */
    public function getChildSellPrice()
    {
        return $this->childSellPrice;
    }

    /**
     * Sets a new childSellPrice
     *
     * @param float $childSellPrice
     * @return self
     */
    public function setChildSellPrice($childSellPrice)
    {
        $this->childSellPrice = $childSellPrice;
        return $this;
    }

    /**
     * Gets as visitorTax
     *
     * @return float
     */
    public function getVisitorTax()
    {
        return $this->visitorTax;
    }

    /**
     * Sets a new visitorTax
     *
     * @param float $visitorTax
     * @return self
     */
    public function setVisitorTax($visitorTax)
    {
        $this->visitorTax = $visitorTax;
        return $this;
    }

    /**
     * Gets as cancellationInsurance
     *
     * @return float
     */
    public function getCancellationInsurance()
    {
        return $this->cancellationInsurance;
    }

    /**
     * Sets a new cancellationInsurance
     *
     * @param float $cancellationInsurance
     * @return self
     */
    public function setCancellationInsurance($cancellationInsurance)
    {
        $this->cancellationInsurance = $cancellationInsurance;
        return $this;
    }

    /**
     * Gets as bookingFee
     *
     * @return float
     */
    public function getBookingFee()
    {
        return $this->bookingFee;
    }

    /**
     * Sets a new bookingFee
     *
     * @param float $bookingFee
     * @return self
     */
    public function setBookingFee($bookingFee)
    {
        $this->bookingFee = $bookingFee;
        return $this;
    }

    /**
     * Adds as packageProductItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType $packageProductItem
     */
    public function addToDetails(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType $packageProductItem)
    {
        $this->details[] = $packageProductItem;
        return $this;
    }

    /**
     * isset details
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetails($index)
    {
        return isset($this->details[$index]);
    }

    /**
     * unset details
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetails($index)
    {
        unset($this->details[$index]);
    }

    /**
     * Gets as details
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType[]
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType[] $details
     * @return self
     */
    public function setDetails(array $details)
    {
        $this->details = $details;
        return $this;
    }
}

