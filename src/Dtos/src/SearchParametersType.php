<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SearchParametersType
 *
 * Provides one set of search parameters information for request of availability.
 * XSD Type: SearchParametersType
 */
class SearchParametersType
{
    /**
     * @var int $units
     */
    private $units = null;

    /**
     * @var int $nights
     */
    private $nights = null;

    /**
     * @var int $adults
     */
    private $adults = null;

    /**
     * Provides search index for request of availability. Allowed from 1 to 3.
     *
     * @var int $index
     */
    private $index = null;

    /**
     * @var string $salesChannel
     */
    private $salesChannel = null;

    /**
     * @var \DateTime $from
     */
    private $from = null;

    /**
     * @var \DateTime $to
     */
    private $to = null;

    /**
     * @var string $multilineSearchCondition
     */
    private $multilineSearchCondition = null;

    /**
     * @var bool $lastMinuteOnly
     */
    private $lastMinuteOnly = null;

    /**
     * @var bool $splitOffersOnly
     */
    private $splitOffersOnly = null;

    /**
     * @var int $duration
     */
    private $duration = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType[] $preSelectedServiceProviderIDs
     */
    private $preSelectedServiceProviderIDs = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchServiceProviderType $serviceProvider
     */
    private $serviceProvider = null;

    /**
     * @var string $children
     */
    private $children = null;

    /**
     * @var string $meal
     */
    private $meal = null;

    /**
     * @var float $maxPrice
     */
    private $maxPrice = null;

    /**
     * @var float $minPrice
     */
    private $minPrice = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BookOnlyType $bookOnly
     */
    private $bookOnly = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchParametersType\AccommodationFacilityAType\ItemAType[] $accommodationFacility
     */
    private $accommodationFacility = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $serviceFacility
     */
    private $serviceFacility = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $category
     */
    private $category = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $stars
     */
    private $stars = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $chain
     */
    private $chain = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchParametersType\MarketingGroupAType $marketingGroup
     */
    private $marketingGroup = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $classification
     */
    private $classification = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\HotSpotSearchItemType $hotSpot
     */
    private $hotSpot = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $accommodationHandicapFacility
     */
    private $accommodationHandicapFacility = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchParametersType\PackageContainerAType $packageContainer
     */
    private $packageContainer = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchParametersType\TotalPriceFilterAType $totalPriceFilter
     */
    private $totalPriceFilter = null;

    public function __construct(int $units = null, int $nights = null, int $adults = null, int $index = null, string $salesChannel = null, \DateTime $from = null, \DateTime $to = null, string $multilineSearchCondition = null, bool $lastMinuteOnly = null, bool $splitOffersOnly = null, int $duration = null, array $preSelectedServiceProviderIDs = null, \Conecto\FeratelDsi\Dtos\SearchServiceProviderType $serviceProvider = null, string $children = null, string $meal = null, float $maxPrice = null, float $minPrice = null, \Conecto\FeratelDsi\Dtos\BookOnlyType $bookOnly = null, array $accommodationFacility = null, array $serviceFacility = null, array $category = null, array $stars = null, array $chain = null, \Conecto\FeratelDsi\Dtos\SearchParametersType\MarketingGroupAType $marketingGroup = null, array $classification = null, \Conecto\FeratelDsi\Dtos\HotSpotSearchItemType $hotSpot = null, array $accommodationHandicapFacility = null, \Conecto\FeratelDsi\Dtos\SearchParametersType\PackageContainerAType $packageContainer = null, \Conecto\FeratelDsi\Dtos\SearchParametersType\TotalPriceFilterAType $totalPriceFilter = null)
    {
        $this->units = $units;
        $this->nights = $nights;
        $this->adults = $adults;
        $this->index = $index;
        $this->salesChannel = $salesChannel;
        $this->from = $from;
        $this->to = $to;
        $this->multilineSearchCondition = $multilineSearchCondition;
        $this->lastMinuteOnly = $lastMinuteOnly;
        $this->splitOffersOnly = $splitOffersOnly;
        $this->duration = $duration;
        $this->preSelectedServiceProviderIDs = $preSelectedServiceProviderIDs;
        $this->serviceProvider = $serviceProvider;
        $this->children = $children;
        $this->meal = $meal;
        $this->maxPrice = $maxPrice;
        $this->minPrice = $minPrice;
        $this->bookOnly = $bookOnly;
        $this->accommodationFacility = $accommodationFacility;
        $this->serviceFacility = $serviceFacility;
        $this->category = $category;
        $this->stars = $stars;
        $this->chain = $chain;
        $this->marketingGroup = $marketingGroup;
        $this->classification = $classification;
        $this->hotSpot = $hotSpot;
        $this->accommodationHandicapFacility = $accommodationHandicapFacility;
        $this->packageContainer = $packageContainer;
        $this->totalPriceFilter = $totalPriceFilter;
    }

    /**
     * Gets as units
     *
     * @return int
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Sets a new units
     *
     * @param int $units
     * @return self
     */
    public function setUnits($units)
    {
        $this->units = $units;
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
     * Gets as adults
     *
     * @return int
     */
    public function getAdults()
    {
        return $this->adults;
    }

    /**
     * Sets a new adults
     *
     * @param int $adults
     * @return self
     */
    public function setAdults($adults)
    {
        $this->adults = $adults;
        return $this;
    }

    /**
     * Gets as index
     *
     * Provides search index for request of availability. Allowed from 1 to 3.
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Sets a new index
     *
     * Provides search index for request of availability. Allowed from 1 to 3.
     *
     * @param int $index
     * @return self
     */
    public function setIndex($index)
    {
        $this->index = $index;
        return $this;
    }

    /**
     * Gets as salesChannel
     *
     * @return string
     */
    public function getSalesChannel()
    {
        return $this->salesChannel;
    }

    /**
     * Sets a new salesChannel
     *
     * @param string $salesChannel
     * @return self
     */
    public function setSalesChannel($salesChannel)
    {
        $this->salesChannel = $salesChannel;
        return $this;
    }

    /**
     * Gets as from
     *
     * @return \DateTime
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Sets a new from
     *
     * @param \DateTime $from
     * @return self
     */
    public function setFrom(\DateTime $from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * Gets as to
     *
     * @return \DateTime
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Sets a new to
     *
     * @param \DateTime $to
     * @return self
     */
    public function setTo(\DateTime $to)
    {
        $this->to = $to;
        return $this;
    }

    /**
     * Gets as multilineSearchCondition
     *
     * @return string
     */
    public function getMultilineSearchCondition()
    {
        return $this->multilineSearchCondition;
    }

    /**
     * Sets a new multilineSearchCondition
     *
     * @param string $multilineSearchCondition
     * @return self
     */
    public function setMultilineSearchCondition($multilineSearchCondition)
    {
        $this->multilineSearchCondition = $multilineSearchCondition;
        return $this;
    }

    /**
     * Gets as lastMinuteOnly
     *
     * @return bool
     */
    public function getLastMinuteOnly()
    {
        return $this->lastMinuteOnly;
    }

    /**
     * Sets a new lastMinuteOnly
     *
     * @param bool $lastMinuteOnly
     * @return self
     */
    public function setLastMinuteOnly($lastMinuteOnly)
    {
        $this->lastMinuteOnly = $lastMinuteOnly;
        return $this;
    }

    /**
     * Gets as splitOffersOnly
     *
     * @return bool
     */
    public function getSplitOffersOnly()
    {
        return $this->splitOffersOnly;
    }

    /**
     * Sets a new splitOffersOnly
     *
     * @param bool $splitOffersOnly
     * @return self
     */
    public function setSplitOffersOnly($splitOffersOnly)
    {
        $this->splitOffersOnly = $splitOffersOnly;
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
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType $item
     */
    public function addToPreSelectedServiceProviderIDs(\Conecto\FeratelDsi\Dtos\GuidListType\ItemAType $item)
    {
        $this->preSelectedServiceProviderIDs[] = $item;
        return $this;
    }

    /**
     * isset preSelectedServiceProviderIDs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPreSelectedServiceProviderIDs($index)
    {
        return isset($this->preSelectedServiceProviderIDs[$index]);
    }

    /**
     * unset preSelectedServiceProviderIDs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPreSelectedServiceProviderIDs($index)
    {
        unset($this->preSelectedServiceProviderIDs[$index]);
    }

    /**
     * Gets as preSelectedServiceProviderIDs
     *
     * @return \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType[]
     */
    public function getPreSelectedServiceProviderIDs()
    {
        return $this->preSelectedServiceProviderIDs;
    }

    /**
     * Sets a new preSelectedServiceProviderIDs
     *
     * @param \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType[] $preSelectedServiceProviderIDs
     * @return self
     */
    public function setPreSelectedServiceProviderIDs(array $preSelectedServiceProviderIDs = null)
    {
        $this->preSelectedServiceProviderIDs = $preSelectedServiceProviderIDs;
        return $this;
    }

    /**
     * Gets as serviceProvider
     *
     * @return \Conecto\FeratelDsi\Dtos\SearchServiceProviderType
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * Sets a new serviceProvider
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchServiceProviderType $serviceProvider
     * @return self
     */
    public function setServiceProvider(?\Conecto\FeratelDsi\Dtos\SearchServiceProviderType $serviceProvider = null)
    {
        $this->serviceProvider = $serviceProvider;
        return $this;
    }

    /**
     * Gets as children
     *
     * @return string
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Sets a new children
     *
     * @param string $children
     * @return self
     */
    public function setChildren($children)
    {
        $this->children = $children;
        return $this;
    }

    /**
     * Gets as meal
     *
     * @return string
     */
    public function getMeal()
    {
        return $this->meal;
    }

    /**
     * Sets a new meal
     *
     * @param string $meal
     * @return self
     */
    public function setMeal($meal)
    {
        $this->meal = $meal;
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
     * Gets as minPrice
     *
     * @return float
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * Sets a new minPrice
     *
     * @param float $minPrice
     * @return self
     */
    public function setMinPrice($minPrice)
    {
        $this->minPrice = $minPrice;
        return $this;
    }

    /**
     * Gets as bookOnly
     *
     * @return \Conecto\FeratelDsi\Dtos\BookOnlyType
     */
    public function getBookOnly()
    {
        return $this->bookOnly;
    }

    /**
     * Sets a new bookOnly
     *
     * @param \Conecto\FeratelDsi\Dtos\BookOnlyType $bookOnly
     * @return self
     */
    public function setBookOnly(?\Conecto\FeratelDsi\Dtos\BookOnlyType $bookOnly = null)
    {
        $this->bookOnly = $bookOnly;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\SearchParametersType\AccommodationFacilityAType\ItemAType $item
     */
    public function addToAccommodationFacility(\Conecto\FeratelDsi\Dtos\SearchParametersType\AccommodationFacilityAType\ItemAType $item)
    {
        $this->accommodationFacility[] = $item;
        return $this;
    }

    /**
     * isset accommodationFacility
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccommodationFacility($index)
    {
        return isset($this->accommodationFacility[$index]);
    }

    /**
     * unset accommodationFacility
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccommodationFacility($index)
    {
        unset($this->accommodationFacility[$index]);
    }

    /**
     * Gets as accommodationFacility
     *
     * @return \Conecto\FeratelDsi\Dtos\SearchParametersType\AccommodationFacilityAType\ItemAType[]
     */
    public function getAccommodationFacility()
    {
        return $this->accommodationFacility;
    }

    /**
     * Sets a new accommodationFacility
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchParametersType\AccommodationFacilityAType\ItemAType[] $accommodationFacility
     * @return self
     */
    public function setAccommodationFacility(array $accommodationFacility = null)
    {
        $this->accommodationFacility = $accommodationFacility;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToServiceFacility(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->serviceFacility[] = $item;
        return $this;
    }

    /**
     * isset serviceFacility
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceFacility($index)
    {
        return isset($this->serviceFacility[$index]);
    }

    /**
     * unset serviceFacility
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceFacility($index)
    {
        unset($this->serviceFacility[$index]);
    }

    /**
     * Gets as serviceFacility
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getServiceFacility()
    {
        return $this->serviceFacility;
    }

    /**
     * Sets a new serviceFacility
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $serviceFacility
     * @return self
     */
    public function setServiceFacility(array $serviceFacility = null)
    {
        $this->serviceFacility = $serviceFacility;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToCategory(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->category[] = $item;
        return $this;
    }

    /**
     * isset category
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
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
    public function setStars(array $stars = null)
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
    public function addToChain(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->chain[] = $item;
        return $this;
    }

    /**
     * isset chain
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChain($index)
    {
        return isset($this->chain[$index]);
    }

    /**
     * unset chain
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChain($index)
    {
        unset($this->chain[$index]);
    }

    /**
     * Gets as chain
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getChain()
    {
        return $this->chain;
    }

    /**
     * Sets a new chain
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $chain
     * @return self
     */
    public function setChain(array $chain = null)
    {
        $this->chain = $chain;
        return $this;
    }

    /**
     * Gets as marketingGroup
     *
     * @return \Conecto\FeratelDsi\Dtos\SearchParametersType\MarketingGroupAType
     */
    public function getMarketingGroup()
    {
        return $this->marketingGroup;
    }

    /**
     * Sets a new marketingGroup
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchParametersType\MarketingGroupAType $marketingGroup
     * @return self
     */
    public function setMarketingGroup(?\Conecto\FeratelDsi\Dtos\SearchParametersType\MarketingGroupAType $marketingGroup = null)
    {
        $this->marketingGroup = $marketingGroup;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToClassification(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->classification[] = $item;
        return $this;
    }

    /**
     * isset classification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassification($index)
    {
        return isset($this->classification[$index]);
    }

    /**
     * unset classification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassification($index)
    {
        unset($this->classification[$index]);
    }

    /**
     * Gets as classification
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Sets a new classification
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $classification
     * @return self
     */
    public function setClassification(array $classification = null)
    {
        $this->classification = $classification;
        return $this;
    }

    /**
     * Gets as hotSpot
     *
     * @return \Conecto\FeratelDsi\Dtos\HotSpotSearchItemType
     */
    public function getHotSpot()
    {
        return $this->hotSpot;
    }

    /**
     * Sets a new hotSpot
     *
     * @param \Conecto\FeratelDsi\Dtos\HotSpotSearchItemType $hotSpot
     * @return self
     */
    public function setHotSpot(?\Conecto\FeratelDsi\Dtos\HotSpotSearchItemType $hotSpot = null)
    {
        $this->hotSpot = $hotSpot;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToAccommodationHandicapFacility(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->accommodationHandicapFacility[] = $item;
        return $this;
    }

    /**
     * isset accommodationHandicapFacility
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccommodationHandicapFacility($index)
    {
        return isset($this->accommodationHandicapFacility[$index]);
    }

    /**
     * unset accommodationHandicapFacility
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccommodationHandicapFacility($index)
    {
        unset($this->accommodationHandicapFacility[$index]);
    }

    /**
     * Gets as accommodationHandicapFacility
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getAccommodationHandicapFacility()
    {
        return $this->accommodationHandicapFacility;
    }

    /**
     * Sets a new accommodationHandicapFacility
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $accommodationHandicapFacility
     * @return self
     */
    public function setAccommodationHandicapFacility(array $accommodationHandicapFacility = null)
    {
        $this->accommodationHandicapFacility = $accommodationHandicapFacility;
        return $this;
    }

    /**
     * Gets as packageContainer
     *
     * @return \Conecto\FeratelDsi\Dtos\SearchParametersType\PackageContainerAType
     */
    public function getPackageContainer()
    {
        return $this->packageContainer;
    }

    /**
     * Sets a new packageContainer
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchParametersType\PackageContainerAType $packageContainer
     * @return self
     */
    public function setPackageContainer(?\Conecto\FeratelDsi\Dtos\SearchParametersType\PackageContainerAType $packageContainer = null)
    {
        $this->packageContainer = $packageContainer;
        return $this;
    }

    /**
     * Gets as totalPriceFilter
     *
     * @return \Conecto\FeratelDsi\Dtos\SearchParametersType\TotalPriceFilterAType
     */
    public function getTotalPriceFilter()
    {
        return $this->totalPriceFilter;
    }

    /**
     * Sets a new totalPriceFilter
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchParametersType\TotalPriceFilterAType $totalPriceFilter
     * @return self
     */
    public function setTotalPriceFilter(?\Conecto\FeratelDsi\Dtos\SearchParametersType\TotalPriceFilterAType $totalPriceFilter = null)
    {
        $this->totalPriceFilter = $totalPriceFilter;
        return $this;
    }
}

