<?php

namespace Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType;

/**
 * Class representing OccupancyAType
 */
class OccupancyAType
{
    /**
     * @var int $standardOccupancy
     */
    private $standardOccupancy = null;

    /**
     * @var int $minOccupancy
     */
    private $minOccupancy = null;

    /**
     * @var int $maxOccupancy
     */
    private $maxOccupancy = null;

    /**
     * @var int $minAdults
     */
    private $minAdults = null;

    /**
     * @var int $maxAdults
     */
    private $maxAdults = null;

    /**
     * @var int $minChild
     */
    private $minChild = null;

    /**
     * @var int $maxChild
     */
    private $maxChild = null;

    /**
     * @var string $priceRule
     */
    private $priceRule = null;

    /**
     * @var int $perNights
     */
    private $perNights = null;

    public function __construct(int $standardOccupancy = null, int $minOccupancy = null, int $maxOccupancy = null, int $minAdults = null, int $maxAdults = null, int $minChild = null, int $maxChild = null, string $priceRule = null, int $perNights = null)
    {
        $this->standardOccupancy = $standardOccupancy;
        $this->minOccupancy = $minOccupancy;
        $this->maxOccupancy = $maxOccupancy;
        $this->minAdults = $minAdults;
        $this->maxAdults = $maxAdults;
        $this->minChild = $minChild;
        $this->maxChild = $maxChild;
        $this->priceRule = $priceRule;
        $this->perNights = $perNights;
    }

    /**
     * Gets as standardOccupancy
     *
     * @return int
     */
    public function getStandardOccupancy()
    {
        return $this->standardOccupancy;
    }

    /**
     * Sets a new standardOccupancy
     *
     * @param int $standardOccupancy
     * @return self
     */
    public function setStandardOccupancy($standardOccupancy)
    {
        $this->standardOccupancy = $standardOccupancy;
        return $this;
    }

    /**
     * Gets as minOccupancy
     *
     * @return int
     */
    public function getMinOccupancy()
    {
        return $this->minOccupancy;
    }

    /**
     * Sets a new minOccupancy
     *
     * @param int $minOccupancy
     * @return self
     */
    public function setMinOccupancy($minOccupancy)
    {
        $this->minOccupancy = $minOccupancy;
        return $this;
    }

    /**
     * Gets as maxOccupancy
     *
     * @return int
     */
    public function getMaxOccupancy()
    {
        return $this->maxOccupancy;
    }

    /**
     * Sets a new maxOccupancy
     *
     * @param int $maxOccupancy
     * @return self
     */
    public function setMaxOccupancy($maxOccupancy)
    {
        $this->maxOccupancy = $maxOccupancy;
        return $this;
    }

    /**
     * Gets as minAdults
     *
     * @return int
     */
    public function getMinAdults()
    {
        return $this->minAdults;
    }

    /**
     * Sets a new minAdults
     *
     * @param int $minAdults
     * @return self
     */
    public function setMinAdults($minAdults)
    {
        $this->minAdults = $minAdults;
        return $this;
    }

    /**
     * Gets as maxAdults
     *
     * @return int
     */
    public function getMaxAdults()
    {
        return $this->maxAdults;
    }

    /**
     * Sets a new maxAdults
     *
     * @param int $maxAdults
     * @return self
     */
    public function setMaxAdults($maxAdults)
    {
        $this->maxAdults = $maxAdults;
        return $this;
    }

    /**
     * Gets as minChild
     *
     * @return int
     */
    public function getMinChild()
    {
        return $this->minChild;
    }

    /**
     * Sets a new minChild
     *
     * @param int $minChild
     * @return self
     */
    public function setMinChild($minChild)
    {
        $this->minChild = $minChild;
        return $this;
    }

    /**
     * Gets as maxChild
     *
     * @return int
     */
    public function getMaxChild()
    {
        return $this->maxChild;
    }

    /**
     * Sets a new maxChild
     *
     * @param int $maxChild
     * @return self
     */
    public function setMaxChild($maxChild)
    {
        $this->maxChild = $maxChild;
        return $this;
    }

    /**
     * Gets as priceRule
     *
     * @return string
     */
    public function getPriceRule()
    {
        return $this->priceRule;
    }

    /**
     * Sets a new priceRule
     *
     * @param string $priceRule
     * @return self
     */
    public function setPriceRule($priceRule)
    {
        $this->priceRule = $priceRule;
        return $this;
    }

    /**
     * Gets as perNights
     *
     * @return int
     */
    public function getPerNights()
    {
        return $this->perNights;
    }

    /**
     * Sets a new perNights
     *
     * @param int $perNights
     * @return self
     */
    public function setPerNights($perNights)
    {
        $this->perNights = $perNights;
        return $this;
    }
}

