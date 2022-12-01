<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing AvailabilityCalendarListType
 *
 *
 * XSD Type: AvailabilityCalendarList
 */
class AvailabilityCalendarListType
{
    /**
     * @var string $productId
     */
    private $productId = null;

    /**
     * @var bool $minStayFromArrivalDay
     */
    private $minStayFromArrivalDay = null;

    /**
     * @var string[] $aV
     */
    private $aV = [
        
    ];

    public function __construct(string $productId = null, bool $minStayFromArrivalDay = null, array $aV = null)
    {
        $this->productId = $productId;
        $this->minStayFromArrivalDay = $minStayFromArrivalDay;
        $this->aV = $aV;
    }

    /**
     * Gets as productId
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Sets a new productId
     *
     * @param string $productId
     * @return self
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * Gets as minStayFromArrivalDay
     *
     * @return bool
     */
    public function getMinStayFromArrivalDay()
    {
        return $this->minStayFromArrivalDay;
    }

    /**
     * Sets a new minStayFromArrivalDay
     *
     * @param bool $minStayFromArrivalDay
     * @return self
     */
    public function setMinStayFromArrivalDay($minStayFromArrivalDay)
    {
        $this->minStayFromArrivalDay = $minStayFromArrivalDay;
        return $this;
    }

    /**
     * Adds as aV
     *
     * @return self
     * @param string $aV
     */
    public function addToAV($aV)
    {
        $this->aV[] = $aV;
        return $this;
    }

    /**
     * isset aV
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAV($index)
    {
        return isset($this->aV[$index]);
    }

    /**
     * unset aV
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAV($index)
    {
        unset($this->aV[$index]);
    }

    /**
     * Gets as aV
     *
     * @return string[]
     */
    public function getAV()
    {
        return $this->aV;
    }

    /**
     * Sets a new aV
     *
     * @param string[] $aV
     * @return self
     */
    public function setAV(array $aV)
    {
        $this->aV = $aV;
        return $this;
    }
}

