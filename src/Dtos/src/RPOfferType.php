<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing RPOfferType
 *
 *
 * XSD Type: RPOffer
 */
class RPOfferType
{
    /**
     * @var \DateTime $arrivalDate
     */
    private $arrivalDate = null;

    /**
     * @var int $lengthOfStay
     */
    private $lengthOfStay = null;

    /**
     * @var \DateTime $departureDate
     */
    private $departureDate = null;

    /**
     * @var int $numAdults
     */
    private $numAdults = null;

    /**
     * @var int $numChildren
     */
    private $numChildren = null;

    /**
     * @var string $childrenAges
     */
    private $childrenAges = null;

    /**
     * @var int $numUnit
     */
    private $numUnit = null;

    /**
     * @var string $productType
     */
    private $productType = null;

    /**
     * @var string $mealCode
     */
    private $mealCode = null;

    /**
     * @var float $maxPrice
     */
    private $maxPrice = null;

    /**
     * @var int $line
     */
    private $line = null;

    /**
     * @var string $multiLineCondition
     */
    private $multiLineCondition = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $categories
     */
    private $categories = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $stars
     */
    private $stars = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $classifications
     */
    private $classifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $serviceClassifications
     */
    private $serviceClassifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $facilities
     */
    private $facilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $serviceFacilities
     */
    private $serviceFacilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $towns
     */
    private $towns = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\HotSpotListType\ItemAType[] $hotSpots
     */
    private $hotSpots = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $marketingGroups
     */
    private $marketingGroups = null;

    public function __construct(\DateTime $arrivalDate = null, int $lengthOfStay = null, array $towns = null, array $facilities = null, \DateTime $departureDate = null, int $numAdults = null, int $numChildren = null, string $childrenAges = null, int $numUnit = null, string $productType = null, string $mealCode = null, float $maxPrice = null, int $line = null, string $multiLineCondition = null, array $categories = null, array $stars = null, array $classifications = null, array $serviceClassifications = null, array $serviceFacilities = null, array $hotSpots = null, array $marketingGroups = null)
    {
        $this->arrivalDate = $arrivalDate;
        $this->lengthOfStay = $lengthOfStay;
        $this->departureDate = $departureDate;
        $this->numAdults = $numAdults;
        $this->numChildren = $numChildren;
        $this->childrenAges = $childrenAges;
        $this->numUnit = $numUnit;
        $this->productType = $productType;
        $this->mealCode = $mealCode;
        $this->maxPrice = $maxPrice;
        $this->line = $line;
        $this->multiLineCondition = $multiLineCondition;
        $this->categories = $categories;
        $this->stars = $stars;
        $this->classifications = $classifications;
        $this->serviceClassifications = $serviceClassifications;
        $this->facilities = $facilities;
        $this->serviceFacilities = $serviceFacilities;
        $this->towns = $towns;
        $this->hotSpots = $hotSpots;
        $this->marketingGroups = $marketingGroups;
    }

    /**
     * Gets as arrivalDate
     *
     * @return \DateTime
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * Sets a new arrivalDate
     *
     * @param \DateTime $arrivalDate
     * @return self
     */
    public function setArrivalDate(\DateTime $arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
        return $this;
    }

    /**
     * Gets as lengthOfStay
     *
     * @return int
     */
    public function getLengthOfStay()
    {
        return $this->lengthOfStay;
    }

    /**
     * Sets a new lengthOfStay
     *
     * @param int $lengthOfStay
     * @return self
     */
    public function setLengthOfStay($lengthOfStay)
    {
        $this->lengthOfStay = $lengthOfStay;
        return $this;
    }

    /**
     * Gets as departureDate
     *
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Sets a new departureDate
     *
     * @param \DateTime $departureDate
     * @return self
     */
    public function setDepartureDate(\DateTime $departureDate)
    {
        $this->departureDate = $departureDate;
        return $this;
    }

    /**
     * Gets as numAdults
     *
     * @return int
     */
    public function getNumAdults()
    {
        return $this->numAdults;
    }

    /**
     * Sets a new numAdults
     *
     * @param int $numAdults
     * @return self
     */
    public function setNumAdults($numAdults)
    {
        $this->numAdults = $numAdults;
        return $this;
    }

    /**
     * Gets as numChildren
     *
     * @return int
     */
    public function getNumChildren()
    {
        return $this->numChildren;
    }

    /**
     * Sets a new numChildren
     *
     * @param int $numChildren
     * @return self
     */
    public function setNumChildren($numChildren)
    {
        $this->numChildren = $numChildren;
        return $this;
    }

    /**
     * Gets as childrenAges
     *
     * @return string
     */
    public function getChildrenAges()
    {
        return $this->childrenAges;
    }

    /**
     * Sets a new childrenAges
     *
     * @param string $childrenAges
     * @return self
     */
    public function setChildrenAges($childrenAges)
    {
        $this->childrenAges = $childrenAges;
        return $this;
    }

    /**
     * Gets as numUnit
     *
     * @return int
     */
    public function getNumUnit()
    {
        return $this->numUnit;
    }

    /**
     * Sets a new numUnit
     *
     * @param int $numUnit
     * @return self
     */
    public function setNumUnit($numUnit)
    {
        $this->numUnit = $numUnit;
        return $this;
    }

    /**
     * Gets as productType
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Sets a new productType
     *
     * @param string $productType
     * @return self
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
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
     * Gets as maxPrice
     *
     * @return float
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * Sets a new maxPrice
     *
     * @param float $maxPrice
     * @return self
     */
    public function setMaxPrice($maxPrice)
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    /**
     * Gets as line
     *
     * @return int
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Sets a new line
     *
     * @param int $line
     * @return self
     */
    public function setLine($line)
    {
        $this->line = $line;
        return $this;
    }

    /**
     * Gets as multiLineCondition
     *
     * @return string
     */
    public function getMultiLineCondition()
    {
        return $this->multiLineCondition;
    }

    /**
     * Sets a new multiLineCondition
     *
     * @param string $multiLineCondition
     * @return self
     */
    public function setMultiLineCondition($multiLineCondition)
    {
        $this->multiLineCondition = $multiLineCondition;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToCategories(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->categories[] = $item;
        return $this;
    }

    /**
     * isset categories
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategories($index)
    {
        return isset($this->categories[$index]);
    }

    /**
     * unset categories
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategories($index)
    {
        unset($this->categories[$index]);
    }

    /**
     * Gets as categories
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets a new categories
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $categories
     * @return self
     */
    public function setCategories(array $categories)
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToStars(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->stars[] = $item;
        return $this;
    }

    /**
     * isset stars
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStars($index)
    {
        return isset($this->stars[$index]);
    }

    /**
     * unset stars
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStars($index)
    {
        unset($this->stars[$index]);
    }

    /**
     * Gets as stars
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * Sets a new stars
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $stars
     * @return self
     */
    public function setStars(array $stars)
    {
        $this->stars = $stars;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToClassifications(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->classifications[] = $item;
        return $this;
    }

    /**
     * isset classifications
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassifications($index)
    {
        return isset($this->classifications[$index]);
    }

    /**
     * unset classifications
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassifications($index)
    {
        unset($this->classifications[$index]);
    }

    /**
     * Gets as classifications
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getClassifications()
    {
        return $this->classifications;
    }

    /**
     * Sets a new classifications
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $classifications
     * @return self
     */
    public function setClassifications(array $classifications)
    {
        $this->classifications = $classifications;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToServiceClassifications(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->serviceClassifications[] = $item;
        return $this;
    }

    /**
     * isset serviceClassifications
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceClassifications($index)
    {
        return isset($this->serviceClassifications[$index]);
    }

    /**
     * unset serviceClassifications
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceClassifications($index)
    {
        unset($this->serviceClassifications[$index]);
    }

    /**
     * Gets as serviceClassifications
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getServiceClassifications()
    {
        return $this->serviceClassifications;
    }

    /**
     * Sets a new serviceClassifications
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $serviceClassifications
     * @return self
     */
    public function setServiceClassifications(array $serviceClassifications)
    {
        $this->serviceClassifications = $serviceClassifications;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToFacilities(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->facilities[] = $item;
        return $this;
    }

    /**
     * isset facilities
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFacilities($index)
    {
        return isset($this->facilities[$index]);
    }

    /**
     * unset facilities
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFacilities($index)
    {
        unset($this->facilities[$index]);
    }

    /**
     * Gets as facilities
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getFacilities()
    {
        return $this->facilities;
    }

    /**
     * Sets a new facilities
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $facilities
     * @return self
     */
    public function setFacilities(array $facilities)
    {
        $this->facilities = $facilities;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToServiceFacilities(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->serviceFacilities[] = $item;
        return $this;
    }

    /**
     * isset serviceFacilities
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceFacilities($index)
    {
        return isset($this->serviceFacilities[$index]);
    }

    /**
     * unset serviceFacilities
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceFacilities($index)
    {
        unset($this->serviceFacilities[$index]);
    }

    /**
     * Gets as serviceFacilities
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getServiceFacilities()
    {
        return $this->serviceFacilities;
    }

    /**
     * Sets a new serviceFacilities
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $serviceFacilities
     * @return self
     */
    public function setServiceFacilities(array $serviceFacilities)
    {
        $this->serviceFacilities = $serviceFacilities;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToTowns(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->towns[] = $item;
        return $this;
    }

    /**
     * isset towns
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTowns($index)
    {
        return isset($this->towns[$index]);
    }

    /**
     * unset towns
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTowns($index)
    {
        unset($this->towns[$index]);
    }

    /**
     * Gets as towns
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getTowns()
    {
        return $this->towns;
    }

    /**
     * Sets a new towns
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $towns
     * @return self
     */
    public function setTowns(array $towns)
    {
        $this->towns = $towns;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\HotSpotListType\ItemAType $item
     */
    public function addToHotSpots(\Conecto\FeratelDsi\Dtos\HotSpotListType\ItemAType $item)
    {
        $this->hotSpots[] = $item;
        return $this;
    }

    /**
     * isset hotSpots
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotSpots($index)
    {
        return isset($this->hotSpots[$index]);
    }

    /**
     * unset hotSpots
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotSpots($index)
    {
        unset($this->hotSpots[$index]);
    }

    /**
     * Gets as hotSpots
     *
     * @return \Conecto\FeratelDsi\Dtos\HotSpotListType\ItemAType[]
     */
    public function getHotSpots()
    {
        return $this->hotSpots;
    }

    /**
     * Sets a new hotSpots
     *
     * @param \Conecto\FeratelDsi\Dtos\HotSpotListType\ItemAType[] $hotSpots
     * @return self
     */
    public function setHotSpots(array $hotSpots)
    {
        $this->hotSpots = $hotSpots;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToMarketingGroups(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->marketingGroups[] = $item;
        return $this;
    }

    /**
     * isset marketingGroups
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketingGroups($index)
    {
        return isset($this->marketingGroups[$index]);
    }

    /**
     * unset marketingGroups
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketingGroups($index)
    {
        unset($this->marketingGroups[$index]);
    }

    /**
     * Gets as marketingGroups
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getMarketingGroups()
    {
        return $this->marketingGroups;
    }

    /**
     * Sets a new marketingGroups
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $marketingGroups
     * @return self
     */
    public function setMarketingGroups(array $marketingGroups)
    {
        $this->marketingGroups = $marketingGroups;
        return $this;
    }
}

