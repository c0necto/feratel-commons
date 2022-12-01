<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SearchPackageCalculationResultType
 *
 *
 * XSD Type: SearchPackageCalculationResultType
 */
class SearchPackageCalculationResultType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchPackageCalculationResultType\CategoryAType $category
     */
    private $category = null;

    /**
     * @var float $adultPrice
     */
    private $adultPrice = null;

    /**
     * @var float $bookingFee
     */
    private $bookingFee = null;

    /**
     * @var float $cancellationInsurance
     */
    private $cancellationInsurance = null;

    /**
     * @var float $childPrice
     */
    private $childPrice = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var float $currencyFactor
     */
    private $currencyFactor = null;

    /**
     * @var float $totalPrice
     */
    private $totalPrice = null;

    /**
     * @var float $visitorTax
     */
    private $visitorTax = null;

    /**
     * @var string[] $error
     */
    private $error = [
        
    ];

    public function __construct(\Conecto\FeratelDsi\Dtos\SearchPackageCalculationResultType\CategoryAType $category = null, float $adultPrice = null, float $bookingFee = null, float $cancellationInsurance = null, float $childPrice = null, string $currencyCode = null, float $currencyFactor = null, float $totalPrice = null, float $visitorTax = null, array $error = null)
    {
        $this->category = $category;
        $this->adultPrice = $adultPrice;
        $this->bookingFee = $bookingFee;
        $this->cancellationInsurance = $cancellationInsurance;
        $this->childPrice = $childPrice;
        $this->currencyCode = $currencyCode;
        $this->currencyFactor = $currencyFactor;
        $this->totalPrice = $totalPrice;
        $this->visitorTax = $visitorTax;
        $this->error = $error;
    }

    /**
     * Gets as category
     *
     * @return \Conecto\FeratelDsi\Dtos\SearchPackageCalculationResultType\CategoryAType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchPackageCalculationResultType\CategoryAType $category
     * @return self
     */
    public function setCategory(\Conecto\FeratelDsi\Dtos\SearchPackageCalculationResultType\CategoryAType $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as adultPrice
     *
     * @return float
     */
    public function getAdultPrice()
    {
        return $this->adultPrice;
    }

    /**
     * Sets a new adultPrice
     *
     * @param float $adultPrice
     * @return self
     */
    public function setAdultPrice($adultPrice)
    {
        $this->adultPrice = $adultPrice;
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
     * Gets as childPrice
     *
     * @return float
     */
    public function getChildPrice()
    {
        return $this->childPrice;
    }

    /**
     * Sets a new childPrice
     *
     * @param float $childPrice
     * @return self
     */
    public function setChildPrice($childPrice)
    {
        $this->childPrice = $childPrice;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as currencyFactor
     *
     * @return float
     */
    public function getCurrencyFactor()
    {
        return $this->currencyFactor;
    }

    /**
     * Sets a new currencyFactor
     *
     * @param float $currencyFactor
     * @return self
     */
    public function setCurrencyFactor($currencyFactor)
    {
        $this->currencyFactor = $currencyFactor;
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
     * Adds as error
     *
     * @return self
     * @param string $error
     */
    public function addToError($error)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * isset error
     *
     * @param int|string $index
     * @return bool
     */
    public function issetError($index)
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * @param int|string $index
     * @return void
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * @return string[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param string[] $error
     * @return self
     */
    public function setError(array $error = null)
    {
        $this->error = $error;
        return $this;
    }
}

