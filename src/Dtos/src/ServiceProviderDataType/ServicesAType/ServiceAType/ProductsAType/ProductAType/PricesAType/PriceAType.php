<?php

namespace Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType;

/**
 * Class representing PriceAType
 */
class PriceAType
{
    /**
     * @var float $unitPrice
     */
    private $unitPrice = null;

    /**
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * @var \DateTime $dateTo
     */
    private $dateTo = null;

    /**
     * @var int $duration
     */
    private $duration = null;

    /**
     * @var int $payNights
     */
    private $payNights = null;

    /**
     * @var bool $splitPrice
     */
    private $splitPrice = null;

    /**
     * @var string $mealCode
     */
    private $mealCode = null;

    /**
     * @var string $bookable
     */
    private $bookable = null;

    /**
     * @var bool $inGap
     */
    private $inGap = null;

    /**
     * @var bool $isBestPrice
     */
    private $isBestPrice = null;

    /**
     * @var string $specialPrice
     */
    private $specialPrice = null;

    /**
     * @var string $specialPriceName
     */
    private $specialPriceName = null;

    /**
     * @var float $amountSaved
     */
    private $amountSaved = null;

    /**
     * @var string $revenueName
     */
    private $revenueName = null;

    /**
     * @var float $revenueAmount
     */
    private $revenueAmount = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PriceDetailsType $priceDetails
     */
    private $priceDetails = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType\BaseInformationAType $baseInformation
     */
    private $baseInformation = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType\CancellationInformationAType[] $cancellationInformation
     */
    private $cancellationInformation = [
        
    ];

    public function __construct(float $unitPrice = null, bool $inGap = null, \Conecto\FeratelDsi\Dtos\PriceDetailsType $priceDetails = null, float $revenueAmount = null, string $revenueName = null, float $amountSaved = null, string $specialPriceName = null, string $specialPrice = null, bool $isBestPrice = null, string $bookable = null, \DateTime $dateFrom = null, string $mealCode = null, bool $splitPrice = null, int $payNights = null, int $duration = null, \DateTime $dateTo = null, \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType\BaseInformationAType $baseInformation = null, array $cancellationInformation = null)
    {
        $this->unitPrice = $unitPrice;
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->duration = $duration;
        $this->payNights = $payNights;
        $this->splitPrice = $splitPrice;
        $this->mealCode = $mealCode;
        $this->bookable = $bookable;
        $this->inGap = $inGap;
        $this->isBestPrice = $isBestPrice;
        $this->specialPrice = $specialPrice;
        $this->specialPriceName = $specialPriceName;
        $this->amountSaved = $amountSaved;
        $this->revenueName = $revenueName;
        $this->revenueAmount = $revenueAmount;
        $this->priceDetails = $priceDetails;
        $this->baseInformation = $baseInformation;
        $this->cancellationInformation = $cancellationInformation;
    }

    /**
     * Gets as unitPrice
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Sets a new unitPrice
     *
     * @param float $unitPrice
     * @return self
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * Gets as dateFrom
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets a new dateFrom
     *
     * @param \DateTime $dateFrom
     * @return self
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    /**
     * Gets as dateTo
     *
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Sets a new dateTo
     *
     * @param \DateTime $dateTo
     * @return self
     */
    public function setDateTo(\DateTime $dateTo)
    {
        $this->dateTo = $dateTo;
        return $this;
    }

    /**
     * Gets as duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * @param int $duration
     * @return self
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
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
     * Gets as splitPrice
     *
     * @return bool
     */
    public function getSplitPrice()
    {
        return $this->splitPrice;
    }

    /**
     * Sets a new splitPrice
     *
     * @param bool $splitPrice
     * @return self
     */
    public function setSplitPrice($splitPrice)
    {
        $this->splitPrice = $splitPrice;
        return $this;
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
     * Gets as bookable
     *
     * @return string
     */
    public function getBookable()
    {
        return $this->bookable;
    }

    /**
     * Sets a new bookable
     *
     * @param string $bookable
     * @return self
     */
    public function setBookable($bookable)
    {
        $this->bookable = $bookable;
        return $this;
    }

    /**
     * Gets as inGap
     *
     * @return bool
     */
    public function getInGap()
    {
        return $this->inGap;
    }

    /**
     * Sets a new inGap
     *
     * @param bool $inGap
     * @return self
     */
    public function setInGap($inGap)
    {
        $this->inGap = $inGap;
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
     * Gets as specialPrice
     *
     * @return string
     */
    public function getSpecialPrice()
    {
        return $this->specialPrice;
    }

    /**
     * Sets a new specialPrice
     *
     * @param string $specialPrice
     * @return self
     */
    public function setSpecialPrice($specialPrice)
    {
        $this->specialPrice = $specialPrice;
        return $this;
    }

    /**
     * Gets as specialPriceName
     *
     * @return string
     */
    public function getSpecialPriceName()
    {
        return $this->specialPriceName;
    }

    /**
     * Sets a new specialPriceName
     *
     * @param string $specialPriceName
     * @return self
     */
    public function setSpecialPriceName($specialPriceName)
    {
        $this->specialPriceName = $specialPriceName;
        return $this;
    }

    /**
     * Gets as amountSaved
     *
     * @return float
     */
    public function getAmountSaved()
    {
        return $this->amountSaved;
    }

    /**
     * Sets a new amountSaved
     *
     * @param float $amountSaved
     * @return self
     */
    public function setAmountSaved($amountSaved)
    {
        $this->amountSaved = $amountSaved;
        return $this;
    }

    /**
     * Gets as revenueName
     *
     * @return string
     */
    public function getRevenueName()
    {
        return $this->revenueName;
    }

    /**
     * Sets a new revenueName
     *
     * @param string $revenueName
     * @return self
     */
    public function setRevenueName($revenueName)
    {
        $this->revenueName = $revenueName;
        return $this;
    }

    /**
     * Gets as revenueAmount
     *
     * @return float
     */
    public function getRevenueAmount()
    {
        return $this->revenueAmount;
    }

    /**
     * Sets a new revenueAmount
     *
     * @param float $revenueAmount
     * @return self
     */
    public function setRevenueAmount($revenueAmount)
    {
        $this->revenueAmount = $revenueAmount;
        return $this;
    }

    /**
     * Gets as priceDetails
     *
     * @return \Conecto\FeratelDsi\Dtos\PriceDetailsType
     */
    public function getPriceDetails()
    {
        return $this->priceDetails;
    }

    /**
     * Sets a new priceDetails
     *
     * @param \Conecto\FeratelDsi\Dtos\PriceDetailsType $priceDetails
     * @return self
     */
    public function setPriceDetails(?\Conecto\FeratelDsi\Dtos\PriceDetailsType $priceDetails = null)
    {
        $this->priceDetails = $priceDetails;
        return $this;
    }

    /**
     * Gets as baseInformation
     *
     * @return \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType\BaseInformationAType
     */
    public function getBaseInformation()
    {
        return $this->baseInformation;
    }

    /**
     * Sets a new baseInformation
     *
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType\BaseInformationAType $baseInformation
     * @return self
     */
    public function setBaseInformation(\Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType\BaseInformationAType $baseInformation)
    {
        $this->baseInformation = $baseInformation;
        return $this;
    }

    /**
     * Adds as cancellationInformation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType\CancellationInformationAType $cancellationInformation
     */
    public function addToCancellationInformation(\Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType\CancellationInformationAType $cancellationInformation)
    {
        $this->cancellationInformation[] = $cancellationInformation;
        return $this;
    }

    /**
     * isset cancellationInformation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancellationInformation($index)
    {
        return isset($this->cancellationInformation[$index]);
    }

    /**
     * unset cancellationInformation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancellationInformation($index)
    {
        unset($this->cancellationInformation[$index]);
    }

    /**
     * Gets as cancellationInformation
     *
     * @return \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType\CancellationInformationAType[]
     */
    public function getCancellationInformation()
    {
        return $this->cancellationInformation;
    }

    /**
     * Sets a new cancellationInformation
     *
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType\CancellationInformationAType[] $cancellationInformation
     * @return self
     */
    public function setCancellationInformation(array $cancellationInformation)
    {
        $this->cancellationInformation = $cancellationInformation;
        return $this;
    }
}

