<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing PricesType
 *
 * Defines different prices for a product.
 * XSD Type: PricesType
 */
class PricesType
{
    /**
     * @var string $currency
     */
    private $currency = null;

    /**
     * Defines base price for a product (per unit per night, per person per night, etc.).
     *
     * @var float $basePrice
     */
    private $basePrice = null;

    /**
     * Defines total price for a product (calculated for the whole period of stay and all persons).
     *
     * @var float $totalPrice
     */
    private $totalPrice = null;

    /**
     * Defines special price offer for a product (optional).
     *
     * @var string[] $specialPrice
     */
    private $specialPrice = [
        
    ];

    /**
     * @var float $insteadPrice
     */
    private $insteadPrice = null;

    /**
     * @var float $amountSaved
     */
    private $amountSaved = null;

    /**
     * @var bool $isBestPrice
     */
    private $isBestPrice = null;

    public function __construct(string $currency = null, float $basePrice = null, float $totalPrice = null, array $specialPrice = null, float $insteadPrice = null, float $amountSaved = null, bool $isBestPrice = null)
    {
        $this->currency = $currency;
        $this->basePrice = $basePrice;
        $this->totalPrice = $totalPrice;
        $this->specialPrice = $specialPrice;
        $this->insteadPrice = $insteadPrice;
        $this->amountSaved = $amountSaved;
        $this->isBestPrice = $isBestPrice;
    }

    /**
     * Gets as currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as basePrice
     *
     * Defines base price for a product (per unit per night, per person per night, etc.).
     *
     * @return float
     */
    public function getBasePrice()
    {
        return $this->basePrice;
    }

    /**
     * Sets a new basePrice
     *
     * Defines base price for a product (per unit per night, per person per night, etc.).
     *
     * @param float $basePrice
     * @return self
     */
    public function setBasePrice($basePrice)
    {
        $this->basePrice = $basePrice;
        return $this;
    }

    /**
     * Gets as totalPrice
     *
     * Defines total price for a product (calculated for the whole period of stay and all persons).
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
     * Defines total price for a product (calculated for the whole period of stay and all persons).
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
     * Adds as specialPrice
     *
     * Defines special price offer for a product (optional).
     *
     * @return self
     * @param string $specialPrice
     */
    public function addToSpecialPrice($specialPrice)
    {
        $this->specialPrice[] = $specialPrice;
        return $this;
    }

    /**
     * isset specialPrice
     *
     * Defines special price offer for a product (optional).
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
     * Defines special price offer for a product (optional).
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
     * Defines special price offer for a product (optional).
     *
     * @return string[]
     */
    public function getSpecialPrice()
    {
        return $this->specialPrice;
    }

    /**
     * Sets a new specialPrice
     *
     * Defines special price offer for a product (optional).
     *
     * @param string[] $specialPrice
     * @return self
     */
    public function setSpecialPrice(array $specialPrice = null)
    {
        $this->specialPrice = $specialPrice;
        return $this;
    }

    /**
     * Gets as insteadPrice
     *
     * @return float
     */
    public function getInsteadPrice()
    {
        return $this->insteadPrice;
    }

    /**
     * Sets a new insteadPrice
     *
     * @param float $insteadPrice
     * @return self
     */
    public function setInsteadPrice($insteadPrice)
    {
        $this->insteadPrice = $insteadPrice;
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
}

