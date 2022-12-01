<?php

namespace Conecto\FeratelDsi\Dtos\MappingResponseType\ServiceProviderAType\ServiceAType;

/**
 * Class representing ProductAType
 */
class ProductAType
{
    /**
     * @var string $mappingCode
     */
    private $mappingCode = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * @var int $minOccupancy
     */
    private $minOccupancy = null;

    /**
     * @var int $maxOccupancy
     */
    private $maxOccupancy = null;

    /**
     * @var int $standardOccupancy
     */
    private $standardOccupancy = null;

    /**
     * @var string $priceRule
     */
    private $priceRule = null;

    /**
     * @var int $nights
     */
    private $nights = null;

    /**
     * @var string $standardMealCode
     */
    private $standardMealCode = null;

    /**
     * @var bool $useMinStayOnlyFromArrivalDay
     */
    private $useMinStayOnlyFromArrivalDay = null;

    public function __construct(string $mappingCode = null, string $name = null, bool $active = null, int $minOccupancy = null, int $maxOccupancy = null, int $standardOccupancy = null, string $priceRule = null, int $nights = null, string $standardMealCode = null, bool $useMinStayOnlyFromArrivalDay = null)
    {
        $this->mappingCode = $mappingCode;
        $this->name = $name;
        $this->active = $active;
        $this->minOccupancy = $minOccupancy;
        $this->maxOccupancy = $maxOccupancy;
        $this->standardOccupancy = $standardOccupancy;
        $this->priceRule = $priceRule;
        $this->nights = $nights;
        $this->standardMealCode = $standardMealCode;
        $this->useMinStayOnlyFromArrivalDay = $useMinStayOnlyFromArrivalDay;
    }

    /**
     * Gets as mappingCode
     *
     * @return string
     */
    public function getMappingCode()
    {
        return $this->mappingCode;
    }

    /**
     * Sets a new mappingCode
     *
     * @param string $mappingCode
     * @return self
     */
    public function setMappingCode($mappingCode)
    {
        $this->mappingCode = $mappingCode;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param bool $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
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
     * Gets as nights
     *
     * @return int
     */
    public function getNights()
    {
        return $this->nights;
    }

    /**
     * Sets a new nights
     *
     * @param int $nights
     * @return self
     */
    public function setNights($nights)
    {
        $this->nights = $nights;
        return $this;
    }

    /**
     * Gets as standardMealCode
     *
     * @return string
     */
    public function getStandardMealCode()
    {
        return $this->standardMealCode;
    }

    /**
     * Sets a new standardMealCode
     *
     * @param string $standardMealCode
     * @return self
     */
    public function setStandardMealCode($standardMealCode)
    {
        $this->standardMealCode = $standardMealCode;
        return $this;
    }

    /**
     * Gets as useMinStayOnlyFromArrivalDay
     *
     * @return bool
     */
    public function getUseMinStayOnlyFromArrivalDay()
    {
        return $this->useMinStayOnlyFromArrivalDay;
    }

    /**
     * Sets a new useMinStayOnlyFromArrivalDay
     *
     * @param bool $useMinStayOnlyFromArrivalDay
     * @return self
     */
    public function setUseMinStayOnlyFromArrivalDay($useMinStayOnlyFromArrivalDay)
    {
        $this->useMinStayOnlyFromArrivalDay = $useMinStayOnlyFromArrivalDay;
        return $this;
    }
}

