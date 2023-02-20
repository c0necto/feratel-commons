<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing FiltersType
 *
 *
 * XSD Type: FiltersType
 */
class FiltersType
{
    /**
     * @var string $salesChannelId
     */
    private $salesChannelId = null;

    /**
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * @var \DateTime $dateTimeFrom
     */
    private $dateTimeFrom = null;

    /**
     * @var \DateTime $start
     */
    private $start = null;

    /**
     * @var \DateTime $end
     */
    private $end = null;

    /**
     * @var string[] $systems
     */
    private $systems = null;

    /**
     * @var bool $showCreativeCommons
     */
    private $showCreativeCommons = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType[] $preSelectedServiceProviderIDs
     */
    private $preSelectedServiceProviderIDs = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDServiceProviderFilterType $serviceProvider
     */
    private $serviceProvider = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDShopItemFilterType $shopItem
     */
    private $shopItem = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType[] $preSelectedEventIDs
     */
    private $preSelectedEventIDs = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDEventsFilterType $events
     */
    private $events = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDChangedEventsFilterType $changedEvents
     */
    private $changedEvents = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType[] $preSelectedInfrastructureIDs
     */
    private $preSelectedInfrastructureIDs = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDInfrastructureFilterType $infrastructure
     */
    private $infrastructure = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDChangedInfrastructureFilterType $changedInfrastructure
     */
    private $changedInfrastructure = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackagesFilterType $packages
     */
    private $packages = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackagesFilterType $packageContainer
     */
    private $packageContainer = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LanguageType[] $languages
     */
    private $languages = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $category
     */
    private $category = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $stars
     */
    private $stars = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $marketingGroup
     */
    private $marketingGroup = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $holidayThemes
     */
    private $holidayThemes = null;

    public function __construct(string $salesChannelId = null, array $preSelectedServiceProviderIDs = null, array $stars = null, array $languages = null, \Conecto\FeratelDsi\Dtos\BDPackagesFilterType $packages = null, \DateTime $dateTimeFrom = null, \DateTime $start = null, \DateTime $end = null, array $systems = null, bool $showCreativeCommons = null, \DateTime $dateFrom = null, \Conecto\FeratelDsi\Dtos\BDShopItemFilterType $shopItem = null, \Conecto\FeratelDsi\Dtos\BDServiceProviderFilterType $serviceProvider = null, array $preSelectedEventIDs = null, \Conecto\FeratelDsi\Dtos\BDEventsFilterType $events = null, \Conecto\FeratelDsi\Dtos\BDChangedEventsFilterType $changedEvents = null, array $preSelectedInfrastructureIDs = null, \Conecto\FeratelDsi\Dtos\BDInfrastructureFilterType $infrastructure = null, \Conecto\FeratelDsi\Dtos\BDChangedInfrastructureFilterType $changedInfrastructure = null, \Conecto\FeratelDsi\Dtos\BDPackagesFilterType $packageContainer = null, array $category = null, array $marketingGroup = null, array $holidayThemes = null)
    {
        $this->salesChannelId = $salesChannelId;
        $this->dateFrom = $dateFrom;
        $this->dateTimeFrom = $dateTimeFrom;
        $this->start = $start;
        $this->end = $end;
        $this->systems = $systems;
        $this->showCreativeCommons = $showCreativeCommons;
        $this->preSelectedServiceProviderIDs = $preSelectedServiceProviderIDs;
        $this->serviceProvider = $serviceProvider;
        $this->shopItem = $shopItem;
        $this->preSelectedEventIDs = $preSelectedEventIDs;
        $this->events = $events;
        $this->changedEvents = $changedEvents;
        $this->preSelectedInfrastructureIDs = $preSelectedInfrastructureIDs;
        $this->infrastructure = $infrastructure;
        $this->changedInfrastructure = $changedInfrastructure;
        $this->packages = $packages;
        $this->packageContainer = $packageContainer;
        $this->languages = $languages;
        $this->category = $category;
        $this->stars = $stars;
        $this->marketingGroup = $marketingGroup;
        $this->holidayThemes = $holidayThemes;
    }

    /**
     * Gets as salesChannelId
     *
     * @return string
     */
    public function getSalesChannelId()
    {
        return $this->salesChannelId;
    }

    /**
     * Sets a new salesChannelId
     *
     * @param string $salesChannelId
     * @return self
     */
    public function setSalesChannelId($salesChannelId)
    {
        $this->salesChannelId = $salesChannelId;
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
     * Gets as dateTimeFrom
     *
     * @return \DateTime
     */
    public function getDateTimeFrom()
    {
        return $this->dateTimeFrom;
    }

    /**
     * Sets a new dateTimeFrom
     *
     * @param \DateTime $dateTimeFrom
     * @return self
     */
    public function setDateTimeFrom(\DateTime $dateTimeFrom)
    {
        $this->dateTimeFrom = $dateTimeFrom;
        return $this;
    }

    /**
     * Gets as start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Adds as systems
     *
     * @return self
     * @param string $systems
     */
    public function addToSystems($systems)
    {
        $this->systems[] = $systems;
        return $this;
    }

    /**
     * isset systems
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSystems($index)
    {
        return isset($this->systems[$index]);
    }

    /**
     * unset systems
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSystems($index)
    {
        unset($this->systems[$index]);
    }

    /**
     * Gets as systems
     *
     * @return string[]
     */
    public function getSystems()
    {
        return $this->systems;
    }

    /**
     * Sets a new systems
     *
     * @param string $systems
     * @return self
     */
    public function setSystems(array $systems)
    {
        $this->systems = $systems;
        return $this;
    }

    /**
     * Gets as showCreativeCommons
     *
     * @return bool
     */
    public function getShowCreativeCommons()
    {
        return $this->showCreativeCommons;
    }

    /**
     * Sets a new showCreativeCommons
     *
     * @param bool $showCreativeCommons
     * @return self
     */
    public function setShowCreativeCommons($showCreativeCommons)
    {
        $this->showCreativeCommons = $showCreativeCommons;
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
     * @return \Conecto\FeratelDsi\Dtos\BDServiceProviderFilterType
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * Sets a new serviceProvider
     *
     * @param \Conecto\FeratelDsi\Dtos\BDServiceProviderFilterType $serviceProvider
     * @return self
     */
    public function setServiceProvider(?\Conecto\FeratelDsi\Dtos\BDServiceProviderFilterType $serviceProvider = null)
    {
        $this->serviceProvider = $serviceProvider;
        return $this;
    }

    /**
     * Gets as shopItem
     *
     * @return \Conecto\FeratelDsi\Dtos\BDShopItemFilterType
     */
    public function getShopItem()
    {
        return $this->shopItem;
    }

    /**
     * Sets a new shopItem
     *
     * @param \Conecto\FeratelDsi\Dtos\BDShopItemFilterType $shopItem
     * @return self
     */
    public function setShopItem(?\Conecto\FeratelDsi\Dtos\BDShopItemFilterType $shopItem = null)
    {
        $this->shopItem = $shopItem;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType $item
     */
    public function addToPreSelectedEventIDs(\Conecto\FeratelDsi\Dtos\GuidListType\ItemAType $item)
    {
        $this->preSelectedEventIDs[] = $item;
        return $this;
    }

    /**
     * isset preSelectedEventIDs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPreSelectedEventIDs($index)
    {
        return isset($this->preSelectedEventIDs[$index]);
    }

    /**
     * unset preSelectedEventIDs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPreSelectedEventIDs($index)
    {
        unset($this->preSelectedEventIDs[$index]);
    }

    /**
     * Gets as preSelectedEventIDs
     *
     * @return \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType[]
     */
    public function getPreSelectedEventIDs()
    {
        return $this->preSelectedEventIDs;
    }

    /**
     * Sets a new preSelectedEventIDs
     *
     * @param \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType[] $preSelectedEventIDs
     * @return self
     */
    public function setPreSelectedEventIDs(array $preSelectedEventIDs = null)
    {
        $this->preSelectedEventIDs = $preSelectedEventIDs;
        return $this;
    }

    /**
     * Gets as events
     *
     * @return \Conecto\FeratelDsi\Dtos\BDEventsFilterType
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Sets a new events
     *
     * @param \Conecto\FeratelDsi\Dtos\BDEventsFilterType $events
     * @return self
     */
    public function setEvents(?\Conecto\FeratelDsi\Dtos\BDEventsFilterType $events = null)
    {
        $this->events = $events;
        return $this;
    }

    /**
     * Gets as changedEvents
     *
     * @return \Conecto\FeratelDsi\Dtos\BDChangedEventsFilterType
     */
    public function getChangedEvents()
    {
        return $this->changedEvents;
    }

    /**
     * Sets a new changedEvents
     *
     * @param \Conecto\FeratelDsi\Dtos\BDChangedEventsFilterType $changedEvents
     * @return self
     */
    public function setChangedEvents(?\Conecto\FeratelDsi\Dtos\BDChangedEventsFilterType $changedEvents = null)
    {
        $this->changedEvents = $changedEvents;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType $item
     */
    public function addToPreSelectedInfrastructureIDs(\Conecto\FeratelDsi\Dtos\GuidListType\ItemAType $item)
    {
        $this->preSelectedInfrastructureIDs[] = $item;
        return $this;
    }

    /**
     * isset preSelectedInfrastructureIDs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPreSelectedInfrastructureIDs($index)
    {
        return isset($this->preSelectedInfrastructureIDs[$index]);
    }

    /**
     * unset preSelectedInfrastructureIDs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPreSelectedInfrastructureIDs($index)
    {
        unset($this->preSelectedInfrastructureIDs[$index]);
    }

    /**
     * Gets as preSelectedInfrastructureIDs
     *
     * @return \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType[]
     */
    public function getPreSelectedInfrastructureIDs()
    {
        return $this->preSelectedInfrastructureIDs;
    }

    /**
     * Sets a new preSelectedInfrastructureIDs
     *
     * @param \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType[] $preSelectedInfrastructureIDs
     * @return self
     */
    public function setPreSelectedInfrastructureIDs(array $preSelectedInfrastructureIDs = null)
    {
        $this->preSelectedInfrastructureIDs = $preSelectedInfrastructureIDs;
        return $this;
    }

    /**
     * Gets as infrastructure
     *
     * @return \Conecto\FeratelDsi\Dtos\BDInfrastructureFilterType
     */
    public function getInfrastructure()
    {
        return $this->infrastructure;
    }

    /**
     * Sets a new infrastructure
     *
     * @param \Conecto\FeratelDsi\Dtos\BDInfrastructureFilterType $infrastructure
     * @return self
     */
    public function setInfrastructure(?\Conecto\FeratelDsi\Dtos\BDInfrastructureFilterType $infrastructure = null)
    {
        $this->infrastructure = $infrastructure;
        return $this;
    }

    /**
     * Gets as changedInfrastructure
     *
     * @return \Conecto\FeratelDsi\Dtos\BDChangedInfrastructureFilterType
     */
    public function getChangedInfrastructure()
    {
        return $this->changedInfrastructure;
    }

    /**
     * Sets a new changedInfrastructure
     *
     * @param \Conecto\FeratelDsi\Dtos\BDChangedInfrastructureFilterType $changedInfrastructure
     * @return self
     */
    public function setChangedInfrastructure(?\Conecto\FeratelDsi\Dtos\BDChangedInfrastructureFilterType $changedInfrastructure = null)
    {
        $this->changedInfrastructure = $changedInfrastructure;
        return $this;
    }

    /**
     * Gets as packages
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackagesFilterType
     */
    public function getPackages()
    {
        return $this->packages;
    }

    /**
     * Sets a new packages
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackagesFilterType $packages
     * @return self
     */
    public function setPackages(?\Conecto\FeratelDsi\Dtos\BDPackagesFilterType $packages = null)
    {
        $this->packages = $packages;
        return $this;
    }

    /**
     * Gets as packageContainer
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackagesFilterType
     */
    public function getPackageContainer()
    {
        return $this->packageContainer;
    }

    /**
     * Sets a new packageContainer
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackagesFilterType $packageContainer
     * @return self
     */
    public function setPackageContainer(?\Conecto\FeratelDsi\Dtos\BDPackagesFilterType $packageContainer = null)
    {
        $this->packageContainer = $packageContainer;
        return $this;
    }

    /**
     * Adds as language
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\LanguageType $language
     */
    public function addToLanguages(\Conecto\FeratelDsi\Dtos\LanguageType $language)
    {
        $this->languages[] = $language;
        return $this;
    }

    /**
     * isset languages
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguages($index)
    {
        return isset($this->languages[$index]);
    }

    /**
     * unset languages
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguages($index)
    {
        unset($this->languages[$index]);
    }

    /**
     * Gets as languages
     *
     * @return \Conecto\FeratelDsi\Dtos\LanguageType[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Sets a new languages
     *
     * @param \Conecto\FeratelDsi\Dtos\LanguageType[] $languages
     * @return self
     */
    public function setLanguages(array $languages)
    {
        $this->languages = $languages;
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
    public function addToMarketingGroup(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->marketingGroup[] = $item;
        return $this;
    }

    /**
     * isset marketingGroup
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketingGroup($index)
    {
        return isset($this->marketingGroup[$index]);
    }

    /**
     * unset marketingGroup
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketingGroup($index)
    {
        unset($this->marketingGroup[$index]);
    }

    /**
     * Gets as marketingGroup
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getMarketingGroup()
    {
        return $this->marketingGroup;
    }

    /**
     * Sets a new marketingGroup
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $marketingGroup
     * @return self
     */
    public function setMarketingGroup(array $marketingGroup = null)
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
    public function addToHolidayThemes(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->holidayThemes[] = $item;
        return $this;
    }

    /**
     * isset holidayThemes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHolidayThemes($index)
    {
        return isset($this->holidayThemes[$index]);
    }

    /**
     * unset holidayThemes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHolidayThemes($index)
    {
        unset($this->holidayThemes[$index]);
    }

    /**
     * Gets as holidayThemes
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getHolidayThemes()
    {
        return $this->holidayThemes;
    }

    /**
     * Sets a new holidayThemes
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $holidayThemes
     * @return self
     */
    public function setHolidayThemes(array $holidayThemes = null)
    {
        $this->holidayThemes = $holidayThemes;
        return $this;
    }
}

