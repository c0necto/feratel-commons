<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackagePriceItemType
 *
 *
 * XSD Type: BDPackagePriceItem
 */
class BDPackagePriceItemType
{
    /**
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * @var \DateTime $dateTo
     */
    private $dateTo = null;

    /**
     * @var string $categoryId
     */
    private $categoryId = null;

    /**
     * @var int $duration
     */
    private $duration = null;

    /**
     * @var float $salesPrice
     */
    private $salesPrice = null;

    /**
     * @var float $additionalNight
     */
    private $additionalNight = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackagePriceValueType[] $priceValue
     */
    private $priceValue = [
        
    ];

    public function __construct(\DateTime $dateFrom = null, \DateTime $dateTo = null, string $categoryId = null, int $duration = null, float $salesPrice = null, float $additionalNight = null, array $priceValue = null)
    {
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->categoryId = $categoryId;
        $this->duration = $duration;
        $this->salesPrice = $salesPrice;
        $this->additionalNight = $additionalNight;
        $this->priceValue = $priceValue;
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
     * Gets as categoryId
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Sets a new categoryId
     *
     * @param string $categoryId
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
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
     * Gets as salesPrice
     *
     * @return float
     */
    public function getSalesPrice()
    {
        return $this->salesPrice;
    }

    /**
     * Sets a new salesPrice
     *
     * @param float $salesPrice
     * @return self
     */
    public function setSalesPrice($salesPrice)
    {
        $this->salesPrice = $salesPrice;
        return $this;
    }

    /**
     * Gets as additionalNight
     *
     * @return float
     */
    public function getAdditionalNight()
    {
        return $this->additionalNight;
    }

    /**
     * Sets a new additionalNight
     *
     * @param float $additionalNight
     * @return self
     */
    public function setAdditionalNight($additionalNight)
    {
        $this->additionalNight = $additionalNight;
        return $this;
    }

    /**
     * Adds as priceValue
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPackagePriceValueType $priceValue
     */
    public function addToPriceValue(\Conecto\FeratelDsi\Dtos\BDPackagePriceValueType $priceValue)
    {
        $this->priceValue[] = $priceValue;
        return $this;
    }

    /**
     * isset priceValue
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriceValue($index)
    {
        return isset($this->priceValue[$index]);
    }

    /**
     * unset priceValue
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriceValue($index)
    {
        unset($this->priceValue[$index]);
    }

    /**
     * Gets as priceValue
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackagePriceValueType[]
     */
    public function getPriceValue()
    {
        return $this->priceValue;
    }

    /**
     * Sets a new priceValue
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackagePriceValueType[] $priceValue
     * @return self
     */
    public function setPriceValue(array $priceValue = null)
    {
        $this->priceValue = $priceValue;
        return $this;
    }
}

