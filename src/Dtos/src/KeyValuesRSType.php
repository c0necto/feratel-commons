<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing KeyValuesRSType
 *
 *
 * XSD Type: KeyValuesRSType
 */
class KeyValuesRSType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\LocationType[] $countries
     */
    private $countries = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LocationType[] $regions
     */
    private $regions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LocationType[] $towns
     */
    private $towns = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LocationType[] $districts
     */
    private $districts = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\HotSpotGroupType[] $hotSpotTypes
     */
    private $hotSpotTypes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\HotSpotItemType[] $hotSpots
     */
    private $hotSpots = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $categories
     */
    private $categories = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $stars
     */
    private $stars = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $classifications
     */
    private $classifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $guestCardClassifications
     */
    private $guestCardClassifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $hotelChains
     */
    private $hotelChains = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $marketingGroups
     */
    private $marketingGroups = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $serviceClassifications
     */
    private $serviceClassifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $holidayThemes
     */
    private $holidayThemes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\FacilityGroupType[] $facilityGroups
     */
    private $facilityGroups = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\FacilityType[] $facilities
     */
    private $facilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LanguageSystemType[] $languages
     */
    private $languages = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RatingQuestionType[] $ratingQuestions
     */
    private $ratingQuestions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RatingVisitorType[] $ratingVisitors
     */
    private $ratingVisitors = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ServiceCodeType[] $serviceCodes
     */
    private $serviceCodes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SalutationType[] $salutations
     */
    private $salutations = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CountryType[] $guestCountries
     */
    private $guestCountries = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShopItemGroupType[] $shopItemGroups
     */
    private $shopItemGroups = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\InfrastructureTypeType[] $infrastructureTypes
     */
    private $infrastructureTypes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\InfrastructureTopicType[] $infrastructureTopics
     */
    private $infrastructureTopics = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SerialEventType[] $serialEvents
     */
    private $serialEvents = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BankCodeType[] $bankCodes
     */
    private $bankCodes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\KVCustomAttributeType[] $customAttributes
     */
    private $customAttributes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\KVFallbackLanguagesType[] $fallbackLanguages
     */
    private $fallbackLanguages = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\KVLinkType[] $linkTypes
     */
    private $linkTypes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\HandicapGlobalItemType[] $handicapGroups
     */
    private $handicapGroups = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\HandicapBaseItemType[] $handicapTypes
     */
    private $handicapTypes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\HandicapGlobalItemType[] $handicapFacilityGroups
     */
    private $handicapFacilityGroups = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\HandicapFacilityItemType[] $handicapFacilities
     */
    private $handicapFacilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $handicapClassifications
     */
    private $handicapClassifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\VisitorTaxType[] $visitorTaxInfo
     */
    private $visitorTaxInfo = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $additionalServiceTypes
     */
    private $additionalServiceTypes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\KVGuestCardType[] $guestCards
     */
    private $guestCards = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\KVCreativeCommonType[] $creativeCommons
     */
    private $creativeCommons = null;

    public function __construct(array $countries = null, array $districts = null, array $fallbackLanguages = null, array $bankCodes = null, array $infrastructureTopics = null, array $shopItemGroups = null, array $ratingVisitors = null, array $salutations = null, array $towns = null, array $regions = null, array $stars = null, array $hotSpotTypes = null, array $hotSpots = null, array $categories = null, array $handicapClassifications = null, array $handicapFacilityGroups = null, array $additionalServiceTypes = null, array $handicapGroups = null, array $languages = null, array $guestCardClassifications = null, array $classifications = null, array $serviceClassifications = null, array $serialEvents = null, array $infrastructureTypes = null, array $guestCountries = null, array $ratingQuestions = null, array $serviceCodes = null, array $facilityGroups = null, array $holidayThemes = null, array $facilities = null, array $customAttributes = null, array $marketingGroups = null, array $hotelChains = null, array $handicapFacilities = null, array $handicapTypes = null, array $visitorTaxInfo = null, array $linkTypes = null, array $guestCards = null, array $creativeCommons = null)
    {
        $this->countries = $countries;
        $this->regions = $regions;
        $this->towns = $towns;
        $this->districts = $districts;
        $this->hotSpotTypes = $hotSpotTypes;
        $this->hotSpots = $hotSpots;
        $this->categories = $categories;
        $this->stars = $stars;
        $this->classifications = $classifications;
        $this->guestCardClassifications = $guestCardClassifications;
        $this->hotelChains = $hotelChains;
        $this->marketingGroups = $marketingGroups;
        $this->serviceClassifications = $serviceClassifications;
        $this->holidayThemes = $holidayThemes;
        $this->facilityGroups = $facilityGroups;
        $this->facilities = $facilities;
        $this->languages = $languages;
        $this->ratingQuestions = $ratingQuestions;
        $this->ratingVisitors = $ratingVisitors;
        $this->serviceCodes = $serviceCodes;
        $this->salutations = $salutations;
        $this->guestCountries = $guestCountries;
        $this->shopItemGroups = $shopItemGroups;
        $this->infrastructureTypes = $infrastructureTypes;
        $this->infrastructureTopics = $infrastructureTopics;
        $this->serialEvents = $serialEvents;
        $this->bankCodes = $bankCodes;
        $this->customAttributes = $customAttributes;
        $this->fallbackLanguages = $fallbackLanguages;
        $this->linkTypes = $linkTypes;
        $this->handicapGroups = $handicapGroups;
        $this->handicapTypes = $handicapTypes;
        $this->handicapFacilityGroups = $handicapFacilityGroups;
        $this->handicapFacilities = $handicapFacilities;
        $this->handicapClassifications = $handicapClassifications;
        $this->visitorTaxInfo = $visitorTaxInfo;
        $this->additionalServiceTypes = $additionalServiceTypes;
        $this->guestCards = $guestCards;
        $this->creativeCommons = $creativeCommons;
    }

    /**
     * Adds as location
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\LocationType $location
     */
    public function addToCountries(\Conecto\FeratelDsi\Dtos\LocationType $location)
    {
        $this->countries[] = $location;
        return $this;
    }

    /**
     * isset countries
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCountries($index)
    {
        return isset($this->countries[$index]);
    }

    /**
     * unset countries
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCountries($index)
    {
        unset($this->countries[$index]);
    }

    /**
     * Gets as countries
     *
     * @return \Conecto\FeratelDsi\Dtos\LocationType[]
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * Sets a new countries
     *
     * @param \Conecto\FeratelDsi\Dtos\LocationType[] $countries
     * @return self
     */
    public function setCountries(array $countries = null)
    {
        $this->countries = $countries;
        return $this;
    }

    /**
     * Adds as location
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\LocationType $location
     */
    public function addToRegions(\Conecto\FeratelDsi\Dtos\LocationType $location)
    {
        $this->regions[] = $location;
        return $this;
    }

    /**
     * isset regions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegions($index)
    {
        return isset($this->regions[$index]);
    }

    /**
     * unset regions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegions($index)
    {
        unset($this->regions[$index]);
    }

    /**
     * Gets as regions
     *
     * @return \Conecto\FeratelDsi\Dtos\LocationType[]
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * Sets a new regions
     *
     * @param \Conecto\FeratelDsi\Dtos\LocationType[] $regions
     * @return self
     */
    public function setRegions(array $regions = null)
    {
        $this->regions = $regions;
        return $this;
    }

    /**
     * Adds as location
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\LocationType $location
     */
    public function addToTowns(\Conecto\FeratelDsi\Dtos\LocationType $location)
    {
        $this->towns[] = $location;
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
     * @return \Conecto\FeratelDsi\Dtos\LocationType[]
     */
    public function getTowns()
    {
        return $this->towns;
    }

    /**
     * Sets a new towns
     *
     * @param \Conecto\FeratelDsi\Dtos\LocationType[] $towns
     * @return self
     */
    public function setTowns(array $towns = null)
    {
        $this->towns = $towns;
        return $this;
    }

    /**
     * Adds as location
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\LocationType $location
     */
    public function addToDistricts(\Conecto\FeratelDsi\Dtos\LocationType $location)
    {
        $this->districts[] = $location;
        return $this;
    }

    /**
     * isset districts
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDistricts($index)
    {
        return isset($this->districts[$index]);
    }

    /**
     * unset districts
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDistricts($index)
    {
        unset($this->districts[$index]);
    }

    /**
     * Gets as districts
     *
     * @return \Conecto\FeratelDsi\Dtos\LocationType[]
     */
    public function getDistricts()
    {
        return $this->districts;
    }

    /**
     * Sets a new districts
     *
     * @param \Conecto\FeratelDsi\Dtos\LocationType[] $districts
     * @return self
     */
    public function setDistricts(array $districts = null)
    {
        $this->districts = $districts;
        return $this;
    }

    /**
     * Adds as hotSpotType
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\HotSpotGroupType $hotSpotType
     */
    public function addToHotSpotTypes(\Conecto\FeratelDsi\Dtos\HotSpotGroupType $hotSpotType)
    {
        $this->hotSpotTypes[] = $hotSpotType;
        return $this;
    }

    /**
     * isset hotSpotTypes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotSpotTypes($index)
    {
        return isset($this->hotSpotTypes[$index]);
    }

    /**
     * unset hotSpotTypes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotSpotTypes($index)
    {
        unset($this->hotSpotTypes[$index]);
    }

    /**
     * Gets as hotSpotTypes
     *
     * @return \Conecto\FeratelDsi\Dtos\HotSpotGroupType[]
     */
    public function getHotSpotTypes()
    {
        return $this->hotSpotTypes;
    }

    /**
     * Sets a new hotSpotTypes
     *
     * @param \Conecto\FeratelDsi\Dtos\HotSpotGroupType[] $hotSpotTypes
     * @return self
     */
    public function setHotSpotTypes(array $hotSpotTypes = null)
    {
        $this->hotSpotTypes = $hotSpotTypes;
        return $this;
    }

    /**
     * Adds as hotSpot
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\HotSpotItemType $hotSpot
     */
    public function addToHotSpots(\Conecto\FeratelDsi\Dtos\HotSpotItemType $hotSpot)
    {
        $this->hotSpots[] = $hotSpot;
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
     * @return \Conecto\FeratelDsi\Dtos\HotSpotItemType[]
     */
    public function getHotSpots()
    {
        return $this->hotSpots;
    }

    /**
     * Sets a new hotSpots
     *
     * @param \Conecto\FeratelDsi\Dtos\HotSpotItemType[] $hotSpots
     * @return self
     */
    public function setHotSpots(array $hotSpots = null)
    {
        $this->hotSpots = $hotSpots;
        return $this;
    }

    /**
     * Adds as category
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $category
     */
    public function addToCategories(\Conecto\FeratelDsi\Dtos\ClassificationType $category)
    {
        $this->categories[] = $category;
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
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets a new categories
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $categories
     * @return self
     */
    public function setCategories(array $categories = null)
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * Adds as star
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $star
     */
    public function addToStars(\Conecto\FeratelDsi\Dtos\ClassificationType $star)
    {
        $this->stars[] = $star;
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
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * Sets a new stars
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $stars
     * @return self
     */
    public function setStars(array $stars = null)
    {
        $this->stars = $stars;
        return $this;
    }

    /**
     * Adds as classification
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $classification
     */
    public function addToClassifications(\Conecto\FeratelDsi\Dtos\ClassificationType $classification)
    {
        $this->classifications[] = $classification;
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
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getClassifications()
    {
        return $this->classifications;
    }

    /**
     * Sets a new classifications
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $classifications
     * @return self
     */
    public function setClassifications(array $classifications = null)
    {
        $this->classifications = $classifications;
        return $this;
    }

    /**
     * Adds as guestCardClassification
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $guestCardClassification
     */
    public function addToGuestCardClassifications(\Conecto\FeratelDsi\Dtos\ClassificationType $guestCardClassification)
    {
        $this->guestCardClassifications[] = $guestCardClassification;
        return $this;
    }

    /**
     * isset guestCardClassifications
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuestCardClassifications($index)
    {
        return isset($this->guestCardClassifications[$index]);
    }

    /**
     * unset guestCardClassifications
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuestCardClassifications($index)
    {
        unset($this->guestCardClassifications[$index]);
    }

    /**
     * Gets as guestCardClassifications
     *
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getGuestCardClassifications()
    {
        return $this->guestCardClassifications;
    }

    /**
     * Sets a new guestCardClassifications
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $guestCardClassifications
     * @return self
     */
    public function setGuestCardClassifications(array $guestCardClassifications = null)
    {
        $this->guestCardClassifications = $guestCardClassifications;
        return $this;
    }

    /**
     * Adds as hotelChain
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $hotelChain
     */
    public function addToHotelChains(\Conecto\FeratelDsi\Dtos\ClassificationType $hotelChain)
    {
        $this->hotelChains[] = $hotelChain;
        return $this;
    }

    /**
     * isset hotelChains
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelChains($index)
    {
        return isset($this->hotelChains[$index]);
    }

    /**
     * unset hotelChains
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelChains($index)
    {
        unset($this->hotelChains[$index]);
    }

    /**
     * Gets as hotelChains
     *
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getHotelChains()
    {
        return $this->hotelChains;
    }

    /**
     * Sets a new hotelChains
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $hotelChains
     * @return self
     */
    public function setHotelChains(array $hotelChains = null)
    {
        $this->hotelChains = $hotelChains;
        return $this;
    }

    /**
     * Adds as marketingGroup
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $marketingGroup
     */
    public function addToMarketingGroups(\Conecto\FeratelDsi\Dtos\ClassificationType $marketingGroup)
    {
        $this->marketingGroups[] = $marketingGroup;
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
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getMarketingGroups()
    {
        return $this->marketingGroups;
    }

    /**
     * Sets a new marketingGroups
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $marketingGroups
     * @return self
     */
    public function setMarketingGroups(array $marketingGroups = null)
    {
        $this->marketingGroups = $marketingGroups;
        return $this;
    }

    /**
     * Adds as classification
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $classification
     */
    public function addToServiceClassifications(\Conecto\FeratelDsi\Dtos\ClassificationType $classification)
    {
        $this->serviceClassifications[] = $classification;
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
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getServiceClassifications()
    {
        return $this->serviceClassifications;
    }

    /**
     * Sets a new serviceClassifications
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $serviceClassifications
     * @return self
     */
    public function setServiceClassifications(array $serviceClassifications = null)
    {
        $this->serviceClassifications = $serviceClassifications;
        return $this;
    }

    /**
     * Adds as holidayTheme
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $holidayTheme
     */
    public function addToHolidayThemes(\Conecto\FeratelDsi\Dtos\ClassificationType $holidayTheme)
    {
        $this->holidayThemes[] = $holidayTheme;
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
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getHolidayThemes()
    {
        return $this->holidayThemes;
    }

    /**
     * Sets a new holidayThemes
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $holidayThemes
     * @return self
     */
    public function setHolidayThemes(array $holidayThemes = null)
    {
        $this->holidayThemes = $holidayThemes;
        return $this;
    }

    /**
     * Adds as facilityGroup
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\FacilityGroupType $facilityGroup
     */
    public function addToFacilityGroups(\Conecto\FeratelDsi\Dtos\FacilityGroupType $facilityGroup)
    {
        $this->facilityGroups[] = $facilityGroup;
        return $this;
    }

    /**
     * isset facilityGroups
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFacilityGroups($index)
    {
        return isset($this->facilityGroups[$index]);
    }

    /**
     * unset facilityGroups
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFacilityGroups($index)
    {
        unset($this->facilityGroups[$index]);
    }

    /**
     * Gets as facilityGroups
     *
     * @return \Conecto\FeratelDsi\Dtos\FacilityGroupType[]
     */
    public function getFacilityGroups()
    {
        return $this->facilityGroups;
    }

    /**
     * Sets a new facilityGroups
     *
     * @param \Conecto\FeratelDsi\Dtos\FacilityGroupType[] $facilityGroups
     * @return self
     */
    public function setFacilityGroups(array $facilityGroups = null)
    {
        $this->facilityGroups = $facilityGroups;
        return $this;
    }

    /**
     * Adds as facility
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\FacilityType $facility
     */
    public function addToFacilities(\Conecto\FeratelDsi\Dtos\FacilityType $facility)
    {
        $this->facilities[] = $facility;
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
     * @return \Conecto\FeratelDsi\Dtos\FacilityType[]
     */
    public function getFacilities()
    {
        return $this->facilities;
    }

    /**
     * Sets a new facilities
     *
     * @param \Conecto\FeratelDsi\Dtos\FacilityType[] $facilities
     * @return self
     */
    public function setFacilities(array $facilities = null)
    {
        $this->facilities = $facilities;
        return $this;
    }

    /**
     * Adds as language
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\LanguageSystemType $language
     */
    public function addToLanguages(\Conecto\FeratelDsi\Dtos\LanguageSystemType $language)
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
     * @return \Conecto\FeratelDsi\Dtos\LanguageSystemType[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Sets a new languages
     *
     * @param \Conecto\FeratelDsi\Dtos\LanguageSystemType[] $languages
     * @return self
     */
    public function setLanguages(array $languages = null)
    {
        $this->languages = $languages;
        return $this;
    }

    /**
     * Adds as ratingQuestion
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RatingQuestionType $ratingQuestion
     */
    public function addToRatingQuestions(\Conecto\FeratelDsi\Dtos\RatingQuestionType $ratingQuestion)
    {
        $this->ratingQuestions[] = $ratingQuestion;
        return $this;
    }

    /**
     * isset ratingQuestions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatingQuestions($index)
    {
        return isset($this->ratingQuestions[$index]);
    }

    /**
     * unset ratingQuestions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatingQuestions($index)
    {
        unset($this->ratingQuestions[$index]);
    }

    /**
     * Gets as ratingQuestions
     *
     * @return \Conecto\FeratelDsi\Dtos\RatingQuestionType[]
     */
    public function getRatingQuestions()
    {
        return $this->ratingQuestions;
    }

    /**
     * Sets a new ratingQuestions
     *
     * @param \Conecto\FeratelDsi\Dtos\RatingQuestionType[] $ratingQuestions
     * @return self
     */
    public function setRatingQuestions(array $ratingQuestions = null)
    {
        $this->ratingQuestions = $ratingQuestions;
        return $this;
    }

    /**
     * Adds as ratingVisitor
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RatingVisitorType $ratingVisitor
     */
    public function addToRatingVisitors(\Conecto\FeratelDsi\Dtos\RatingVisitorType $ratingVisitor)
    {
        $this->ratingVisitors[] = $ratingVisitor;
        return $this;
    }

    /**
     * isset ratingVisitors
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatingVisitors($index)
    {
        return isset($this->ratingVisitors[$index]);
    }

    /**
     * unset ratingVisitors
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatingVisitors($index)
    {
        unset($this->ratingVisitors[$index]);
    }

    /**
     * Gets as ratingVisitors
     *
     * @return \Conecto\FeratelDsi\Dtos\RatingVisitorType[]
     */
    public function getRatingVisitors()
    {
        return $this->ratingVisitors;
    }

    /**
     * Sets a new ratingVisitors
     *
     * @param \Conecto\FeratelDsi\Dtos\RatingVisitorType[] $ratingVisitors
     * @return self
     */
    public function setRatingVisitors(array $ratingVisitors = null)
    {
        $this->ratingVisitors = $ratingVisitors;
        return $this;
    }

    /**
     * Adds as serviceCode
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ServiceCodeType $serviceCode
     */
    public function addToServiceCodes(\Conecto\FeratelDsi\Dtos\ServiceCodeType $serviceCode)
    {
        $this->serviceCodes[] = $serviceCode;
        return $this;
    }

    /**
     * isset serviceCodes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceCodes($index)
    {
        return isset($this->serviceCodes[$index]);
    }

    /**
     * unset serviceCodes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceCodes($index)
    {
        unset($this->serviceCodes[$index]);
    }

    /**
     * Gets as serviceCodes
     *
     * @return \Conecto\FeratelDsi\Dtos\ServiceCodeType[]
     */
    public function getServiceCodes()
    {
        return $this->serviceCodes;
    }

    /**
     * Sets a new serviceCodes
     *
     * @param \Conecto\FeratelDsi\Dtos\ServiceCodeType[] $serviceCodes
     * @return self
     */
    public function setServiceCodes(array $serviceCodes = null)
    {
        $this->serviceCodes = $serviceCodes;
        return $this;
    }

    /**
     * Adds as salutation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\SalutationType $salutation
     */
    public function addToSalutations(\Conecto\FeratelDsi\Dtos\SalutationType $salutation)
    {
        $this->salutations[] = $salutation;
        return $this;
    }

    /**
     * isset salutations
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalutations($index)
    {
        return isset($this->salutations[$index]);
    }

    /**
     * unset salutations
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalutations($index)
    {
        unset($this->salutations[$index]);
    }

    /**
     * Gets as salutations
     *
     * @return \Conecto\FeratelDsi\Dtos\SalutationType[]
     */
    public function getSalutations()
    {
        return $this->salutations;
    }

    /**
     * Sets a new salutations
     *
     * @param \Conecto\FeratelDsi\Dtos\SalutationType[] $salutations
     * @return self
     */
    public function setSalutations(array $salutations = null)
    {
        $this->salutations = $salutations;
        return $this;
    }

    /**
     * Adds as country
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\CountryType $country
     */
    public function addToGuestCountries(\Conecto\FeratelDsi\Dtos\CountryType $country)
    {
        $this->guestCountries[] = $country;
        return $this;
    }

    /**
     * isset guestCountries
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuestCountries($index)
    {
        return isset($this->guestCountries[$index]);
    }

    /**
     * unset guestCountries
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuestCountries($index)
    {
        unset($this->guestCountries[$index]);
    }

    /**
     * Gets as guestCountries
     *
     * @return \Conecto\FeratelDsi\Dtos\CountryType[]
     */
    public function getGuestCountries()
    {
        return $this->guestCountries;
    }

    /**
     * Sets a new guestCountries
     *
     * @param \Conecto\FeratelDsi\Dtos\CountryType[] $guestCountries
     * @return self
     */
    public function setGuestCountries(array $guestCountries = null)
    {
        $this->guestCountries = $guestCountries;
        return $this;
    }

    /**
     * Adds as shopItemGroup
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ShopItemGroupType $shopItemGroup
     */
    public function addToShopItemGroups(\Conecto\FeratelDsi\Dtos\ShopItemGroupType $shopItemGroup)
    {
        $this->shopItemGroups[] = $shopItemGroup;
        return $this;
    }

    /**
     * isset shopItemGroups
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShopItemGroups($index)
    {
        return isset($this->shopItemGroups[$index]);
    }

    /**
     * unset shopItemGroups
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShopItemGroups($index)
    {
        unset($this->shopItemGroups[$index]);
    }

    /**
     * Gets as shopItemGroups
     *
     * @return \Conecto\FeratelDsi\Dtos\ShopItemGroupType[]
     */
    public function getShopItemGroups()
    {
        return $this->shopItemGroups;
    }

    /**
     * Sets a new shopItemGroups
     *
     * @param \Conecto\FeratelDsi\Dtos\ShopItemGroupType[] $shopItemGroups
     * @return self
     */
    public function setShopItemGroups(array $shopItemGroups = null)
    {
        $this->shopItemGroups = $shopItemGroups;
        return $this;
    }

    /**
     * Adds as infrastructureType
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\InfrastructureTypeType $infrastructureType
     */
    public function addToInfrastructureTypes(\Conecto\FeratelDsi\Dtos\InfrastructureTypeType $infrastructureType)
    {
        $this->infrastructureTypes[] = $infrastructureType;
        return $this;
    }

    /**
     * isset infrastructureTypes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInfrastructureTypes($index)
    {
        return isset($this->infrastructureTypes[$index]);
    }

    /**
     * unset infrastructureTypes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInfrastructureTypes($index)
    {
        unset($this->infrastructureTypes[$index]);
    }

    /**
     * Gets as infrastructureTypes
     *
     * @return \Conecto\FeratelDsi\Dtos\InfrastructureTypeType[]
     */
    public function getInfrastructureTypes()
    {
        return $this->infrastructureTypes;
    }

    /**
     * Sets a new infrastructureTypes
     *
     * @param \Conecto\FeratelDsi\Dtos\InfrastructureTypeType[] $infrastructureTypes
     * @return self
     */
    public function setInfrastructureTypes(array $infrastructureTypes = null)
    {
        $this->infrastructureTypes = $infrastructureTypes;
        return $this;
    }

    /**
     * Adds as infrastructureTopic
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\InfrastructureTopicType $infrastructureTopic
     */
    public function addToInfrastructureTopics(\Conecto\FeratelDsi\Dtos\InfrastructureTopicType $infrastructureTopic)
    {
        $this->infrastructureTopics[] = $infrastructureTopic;
        return $this;
    }

    /**
     * isset infrastructureTopics
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInfrastructureTopics($index)
    {
        return isset($this->infrastructureTopics[$index]);
    }

    /**
     * unset infrastructureTopics
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInfrastructureTopics($index)
    {
        unset($this->infrastructureTopics[$index]);
    }

    /**
     * Gets as infrastructureTopics
     *
     * @return \Conecto\FeratelDsi\Dtos\InfrastructureTopicType[]
     */
    public function getInfrastructureTopics()
    {
        return $this->infrastructureTopics;
    }

    /**
     * Sets a new infrastructureTopics
     *
     * @param \Conecto\FeratelDsi\Dtos\InfrastructureTopicType[] $infrastructureTopics
     * @return self
     */
    public function setInfrastructureTopics(array $infrastructureTopics = null)
    {
        $this->infrastructureTopics = $infrastructureTopics;
        return $this;
    }

    /**
     * Adds as serialEvent
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\SerialEventType $serialEvent
     */
    public function addToSerialEvents(\Conecto\FeratelDsi\Dtos\SerialEventType $serialEvent)
    {
        $this->serialEvents[] = $serialEvent;
        return $this;
    }

    /**
     * isset serialEvents
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSerialEvents($index)
    {
        return isset($this->serialEvents[$index]);
    }

    /**
     * unset serialEvents
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSerialEvents($index)
    {
        unset($this->serialEvents[$index]);
    }

    /**
     * Gets as serialEvents
     *
     * @return \Conecto\FeratelDsi\Dtos\SerialEventType[]
     */
    public function getSerialEvents()
    {
        return $this->serialEvents;
    }

    /**
     * Sets a new serialEvents
     *
     * @param \Conecto\FeratelDsi\Dtos\SerialEventType[] $serialEvents
     * @return self
     */
    public function setSerialEvents(array $serialEvents = null)
    {
        $this->serialEvents = $serialEvents;
        return $this;
    }

    /**
     * Adds as bankCode
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BankCodeType $bankCode
     */
    public function addToBankCodes(\Conecto\FeratelDsi\Dtos\BankCodeType $bankCode)
    {
        $this->bankCodes[] = $bankCode;
        return $this;
    }

    /**
     * isset bankCodes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBankCodes($index)
    {
        return isset($this->bankCodes[$index]);
    }

    /**
     * unset bankCodes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBankCodes($index)
    {
        unset($this->bankCodes[$index]);
    }

    /**
     * Gets as bankCodes
     *
     * @return \Conecto\FeratelDsi\Dtos\BankCodeType[]
     */
    public function getBankCodes()
    {
        return $this->bankCodes;
    }

    /**
     * Sets a new bankCodes
     *
     * @param \Conecto\FeratelDsi\Dtos\BankCodeType[] $bankCodes
     * @return self
     */
    public function setBankCodes(array $bankCodes = null)
    {
        $this->bankCodes = $bankCodes;
        return $this;
    }

    /**
     * Adds as customAttribute
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\KVCustomAttributeType $customAttribute
     */
    public function addToCustomAttributes(\Conecto\FeratelDsi\Dtos\KVCustomAttributeType $customAttribute)
    {
        $this->customAttributes[] = $customAttribute;
        return $this;
    }

    /**
     * isset customAttributes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustomAttributes($index)
    {
        return isset($this->customAttributes[$index]);
    }

    /**
     * unset customAttributes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustomAttributes($index)
    {
        unset($this->customAttributes[$index]);
    }

    /**
     * Gets as customAttributes
     *
     * @return \Conecto\FeratelDsi\Dtos\KVCustomAttributeType[]
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * Sets a new customAttributes
     *
     * @param \Conecto\FeratelDsi\Dtos\KVCustomAttributeType[] $customAttributes
     * @return self
     */
    public function setCustomAttributes(array $customAttributes = null)
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }

    /**
     * Adds as language
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\KVFallbackLanguagesType $language
     */
    public function addToFallbackLanguages(\Conecto\FeratelDsi\Dtos\KVFallbackLanguagesType $language)
    {
        $this->fallbackLanguages[] = $language;
        return $this;
    }

    /**
     * isset fallbackLanguages
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFallbackLanguages($index)
    {
        return isset($this->fallbackLanguages[$index]);
    }

    /**
     * unset fallbackLanguages
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFallbackLanguages($index)
    {
        unset($this->fallbackLanguages[$index]);
    }

    /**
     * Gets as fallbackLanguages
     *
     * @return \Conecto\FeratelDsi\Dtos\KVFallbackLanguagesType[]
     */
    public function getFallbackLanguages()
    {
        return $this->fallbackLanguages;
    }

    /**
     * Sets a new fallbackLanguages
     *
     * @param \Conecto\FeratelDsi\Dtos\KVFallbackLanguagesType[] $fallbackLanguages
     * @return self
     */
    public function setFallbackLanguages(array $fallbackLanguages = null)
    {
        $this->fallbackLanguages = $fallbackLanguages;
        return $this;
    }

    /**
     * Adds as linkType
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\KVLinkType $linkType
     */
    public function addToLinkTypes(\Conecto\FeratelDsi\Dtos\KVLinkType $linkType)
    {
        $this->linkTypes[] = $linkType;
        return $this;
    }

    /**
     * isset linkTypes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkTypes($index)
    {
        return isset($this->linkTypes[$index]);
    }

    /**
     * unset linkTypes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkTypes($index)
    {
        unset($this->linkTypes[$index]);
    }

    /**
     * Gets as linkTypes
     *
     * @return \Conecto\FeratelDsi\Dtos\KVLinkType[]
     */
    public function getLinkTypes()
    {
        return $this->linkTypes;
    }

    /**
     * Sets a new linkTypes
     *
     * @param \Conecto\FeratelDsi\Dtos\KVLinkType[] $linkTypes
     * @return self
     */
    public function setLinkTypes(array $linkTypes = null)
    {
        $this->linkTypes = $linkTypes;
        return $this;
    }

    /**
     * Adds as handicapGroup
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\HandicapGlobalItemType $handicapGroup
     */
    public function addToHandicapGroups(\Conecto\FeratelDsi\Dtos\HandicapGlobalItemType $handicapGroup)
    {
        $this->handicapGroups[] = $handicapGroup;
        return $this;
    }

    /**
     * isset handicapGroups
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandicapGroups($index)
    {
        return isset($this->handicapGroups[$index]);
    }

    /**
     * unset handicapGroups
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandicapGroups($index)
    {
        unset($this->handicapGroups[$index]);
    }

    /**
     * Gets as handicapGroups
     *
     * @return \Conecto\FeratelDsi\Dtos\HandicapGlobalItemType[]
     */
    public function getHandicapGroups()
    {
        return $this->handicapGroups;
    }

    /**
     * Sets a new handicapGroups
     *
     * @param \Conecto\FeratelDsi\Dtos\HandicapGlobalItemType[] $handicapGroups
     * @return self
     */
    public function setHandicapGroups(array $handicapGroups = null)
    {
        $this->handicapGroups = $handicapGroups;
        return $this;
    }

    /**
     * Adds as handicapType
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\HandicapBaseItemType $handicapType
     */
    public function addToHandicapTypes(\Conecto\FeratelDsi\Dtos\HandicapBaseItemType $handicapType)
    {
        $this->handicapTypes[] = $handicapType;
        return $this;
    }

    /**
     * isset handicapTypes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandicapTypes($index)
    {
        return isset($this->handicapTypes[$index]);
    }

    /**
     * unset handicapTypes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandicapTypes($index)
    {
        unset($this->handicapTypes[$index]);
    }

    /**
     * Gets as handicapTypes
     *
     * @return \Conecto\FeratelDsi\Dtos\HandicapBaseItemType[]
     */
    public function getHandicapTypes()
    {
        return $this->handicapTypes;
    }

    /**
     * Sets a new handicapTypes
     *
     * @param \Conecto\FeratelDsi\Dtos\HandicapBaseItemType[] $handicapTypes
     * @return self
     */
    public function setHandicapTypes(array $handicapTypes = null)
    {
        $this->handicapTypes = $handicapTypes;
        return $this;
    }

    /**
     * Adds as handicapFacilityGroup
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\HandicapGlobalItemType $handicapFacilityGroup
     */
    public function addToHandicapFacilityGroups(\Conecto\FeratelDsi\Dtos\HandicapGlobalItemType $handicapFacilityGroup)
    {
        $this->handicapFacilityGroups[] = $handicapFacilityGroup;
        return $this;
    }

    /**
     * isset handicapFacilityGroups
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandicapFacilityGroups($index)
    {
        return isset($this->handicapFacilityGroups[$index]);
    }

    /**
     * unset handicapFacilityGroups
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandicapFacilityGroups($index)
    {
        unset($this->handicapFacilityGroups[$index]);
    }

    /**
     * Gets as handicapFacilityGroups
     *
     * @return \Conecto\FeratelDsi\Dtos\HandicapGlobalItemType[]
     */
    public function getHandicapFacilityGroups()
    {
        return $this->handicapFacilityGroups;
    }

    /**
     * Sets a new handicapFacilityGroups
     *
     * @param \Conecto\FeratelDsi\Dtos\HandicapGlobalItemType[] $handicapFacilityGroups
     * @return self
     */
    public function setHandicapFacilityGroups(array $handicapFacilityGroups = null)
    {
        $this->handicapFacilityGroups = $handicapFacilityGroups;
        return $this;
    }

    /**
     * Adds as handicapFacility
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\HandicapFacilityItemType $handicapFacility
     */
    public function addToHandicapFacilities(\Conecto\FeratelDsi\Dtos\HandicapFacilityItemType $handicapFacility)
    {
        $this->handicapFacilities[] = $handicapFacility;
        return $this;
    }

    /**
     * isset handicapFacilities
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandicapFacilities($index)
    {
        return isset($this->handicapFacilities[$index]);
    }

    /**
     * unset handicapFacilities
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandicapFacilities($index)
    {
        unset($this->handicapFacilities[$index]);
    }

    /**
     * Gets as handicapFacilities
     *
     * @return \Conecto\FeratelDsi\Dtos\HandicapFacilityItemType[]
     */
    public function getHandicapFacilities()
    {
        return $this->handicapFacilities;
    }

    /**
     * Sets a new handicapFacilities
     *
     * @param \Conecto\FeratelDsi\Dtos\HandicapFacilityItemType[] $handicapFacilities
     * @return self
     */
    public function setHandicapFacilities(array $handicapFacilities = null)
    {
        $this->handicapFacilities = $handicapFacilities;
        return $this;
    }

    /**
     * Adds as handicapClassification
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $handicapClassification
     */
    public function addToHandicapClassifications(\Conecto\FeratelDsi\Dtos\ClassificationType $handicapClassification)
    {
        $this->handicapClassifications[] = $handicapClassification;
        return $this;
    }

    /**
     * isset handicapClassifications
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandicapClassifications($index)
    {
        return isset($this->handicapClassifications[$index]);
    }

    /**
     * unset handicapClassifications
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandicapClassifications($index)
    {
        unset($this->handicapClassifications[$index]);
    }

    /**
     * Gets as handicapClassifications
     *
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getHandicapClassifications()
    {
        return $this->handicapClassifications;
    }

    /**
     * Sets a new handicapClassifications
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $handicapClassifications
     * @return self
     */
    public function setHandicapClassifications(array $handicapClassifications = null)
    {
        $this->handicapClassifications = $handicapClassifications;
        return $this;
    }

    /**
     * Adds as visitorTax
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\VisitorTaxType $visitorTax
     */
    public function addToVisitorTaxInfo(\Conecto\FeratelDsi\Dtos\VisitorTaxType $visitorTax)
    {
        $this->visitorTaxInfo[] = $visitorTax;
        return $this;
    }

    /**
     * isset visitorTaxInfo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVisitorTaxInfo($index)
    {
        return isset($this->visitorTaxInfo[$index]);
    }

    /**
     * unset visitorTaxInfo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVisitorTaxInfo($index)
    {
        unset($this->visitorTaxInfo[$index]);
    }

    /**
     * Gets as visitorTaxInfo
     *
     * @return \Conecto\FeratelDsi\Dtos\VisitorTaxType[]
     */
    public function getVisitorTaxInfo()
    {
        return $this->visitorTaxInfo;
    }

    /**
     * Sets a new visitorTaxInfo
     *
     * @param \Conecto\FeratelDsi\Dtos\VisitorTaxType[] $visitorTaxInfo
     * @return self
     */
    public function setVisitorTaxInfo(array $visitorTaxInfo = null)
    {
        $this->visitorTaxInfo = $visitorTaxInfo;
        return $this;
    }

    /**
     * Adds as additionalServiceType
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $additionalServiceType
     */
    public function addToAdditionalServiceTypes(\Conecto\FeratelDsi\Dtos\ClassificationType $additionalServiceType)
    {
        $this->additionalServiceTypes[] = $additionalServiceType;
        return $this;
    }

    /**
     * isset additionalServiceTypes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalServiceTypes($index)
    {
        return isset($this->additionalServiceTypes[$index]);
    }

    /**
     * unset additionalServiceTypes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalServiceTypes($index)
    {
        unset($this->additionalServiceTypes[$index]);
    }

    /**
     * Gets as additionalServiceTypes
     *
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getAdditionalServiceTypes()
    {
        return $this->additionalServiceTypes;
    }

    /**
     * Sets a new additionalServiceTypes
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $additionalServiceTypes
     * @return self
     */
    public function setAdditionalServiceTypes(array $additionalServiceTypes = null)
    {
        $this->additionalServiceTypes = $additionalServiceTypes;
        return $this;
    }

    /**
     * Adds as guestCard
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\KVGuestCardType $guestCard
     */
    public function addToGuestCards(\Conecto\FeratelDsi\Dtos\KVGuestCardType $guestCard)
    {
        $this->guestCards[] = $guestCard;
        return $this;
    }

    /**
     * isset guestCards
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuestCards($index)
    {
        return isset($this->guestCards[$index]);
    }

    /**
     * unset guestCards
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuestCards($index)
    {
        unset($this->guestCards[$index]);
    }

    /**
     * Gets as guestCards
     *
     * @return \Conecto\FeratelDsi\Dtos\KVGuestCardType[]
     */
    public function getGuestCards()
    {
        return $this->guestCards;
    }

    /**
     * Sets a new guestCards
     *
     * @param \Conecto\FeratelDsi\Dtos\KVGuestCardType[] $guestCards
     * @return self
     */
    public function setGuestCards(array $guestCards = null)
    {
        $this->guestCards = $guestCards;
        return $this;
    }

    /**
     * Adds as creativeCommon
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\KVCreativeCommonType $creativeCommon
     */
    public function addToCreativeCommons(\Conecto\FeratelDsi\Dtos\KVCreativeCommonType $creativeCommon)
    {
        $this->creativeCommons[] = $creativeCommon;
        return $this;
    }

    /**
     * isset creativeCommons
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCreativeCommons($index)
    {
        return isset($this->creativeCommons[$index]);
    }

    /**
     * unset creativeCommons
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCreativeCommons($index)
    {
        unset($this->creativeCommons[$index]);
    }

    /**
     * Gets as creativeCommons
     *
     * @return \Conecto\FeratelDsi\Dtos\KVCreativeCommonType[]
     */
    public function getCreativeCommons()
    {
        return $this->creativeCommons;
    }

    /**
     * Sets a new creativeCommons
     *
     * @param \Conecto\FeratelDsi\Dtos\KVCreativeCommonType[] $creativeCommons
     * @return self
     */
    public function setCreativeCommons(array $creativeCommons = null)
    {
        $this->creativeCommons = $creativeCommons;
        return $this;
    }
}

