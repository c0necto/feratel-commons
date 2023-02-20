<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing KeyValuesType
 *
 *
 * XSD Type: KeyValuesType
 */
class KeyValuesType
{
    /**
     * @var bool $getLocalValues
     */
    private $getLocalValues = null;

    /**
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LanguageType[] $translations
     */
    private $translations = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedWithTranslationType $countries
     */
    private $countries = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedWithTranslationType $regions
     */
    private $regions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedWithTranslationType $towns
     */
    private $towns = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedWithTranslationType $districts
     */
    private $districts = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $hotSpotTypes
     */
    private $hotSpotTypes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $hotSpots
     */
    private $hotSpots = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $categories
     */
    private $categories = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $stars
     */
    private $stars = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\KeyValuesType\ClassificationsAType $classifications
     */
    private $classifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $guestCardClassifications
     */
    private $guestCardClassifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $hotelChains
     */
    private $hotelChains = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $marketingGroups
     */
    private $marketingGroups = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $serviceClassifications
     */
    private $serviceClassifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $holidayThemes
     */
    private $holidayThemes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LocalOnlyTypesRequestedType $facilityGroups
     */
    private $facilityGroups = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LocalOnlyTypesRequestedType $facilities
     */
    private $facilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $languages
     */
    private $languages = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $ratingQuestions
     */
    private $ratingQuestions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $ratingVisitors
     */
    private $ratingVisitors = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $serviceCodes
     */
    private $serviceCodes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $salutations
     */
    private $salutations = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $guestCountries
     */
    private $guestCountries = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShopItemGroupsRequestedType $shopItemGroups
     */
    private $shopItemGroups = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $infrastructureTypes
     */
    private $infrastructureTypes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $infrastructureTopics
     */
    private $infrastructureTopics = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $serialEvents
     */
    private $serialEvents = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $bankCodes
     */
    private $bankCodes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $customAttributes
     */
    private $customAttributes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $fallbackLanguages
     */
    private $fallbackLanguages = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $linkTypes
     */
    private $linkTypes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $handicapGroups
     */
    private $handicapGroups = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $handicapTypes
     */
    private $handicapTypes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $handicapFacilityGroups
     */
    private $handicapFacilityGroups = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $handicapFacilities
     */
    private $handicapFacilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $handicapClassifications
     */
    private $handicapClassifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $visitorTax
     */
    private $visitorTax = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $additionalServiceTypes
     */
    private $additionalServiceTypes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestedType $guestCards
     */
    private $guestCards = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $creativeCommons
     */
    private $creativeCommons = null;

    public function __construct(bool $getLocalValues = null, \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $stars = null, \Conecto\FeratelDsi\Dtos\RequestedType $ratingVisitors = null, \Conecto\FeratelDsi\Dtos\LocalOnlyTypesRequestedType $facilityGroups = null, \Conecto\FeratelDsi\Dtos\RequestedType $languages = null, \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $marketingGroups = null, \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $hotelChains = null, \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $serviceClassifications = null, \Conecto\FeratelDsi\Dtos\KeyValuesType\ClassificationsAType $classifications = null, \Conecto\FeratelDsi\Dtos\RequestedType $hotSpots = null, \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $guestCardClassifications = null, \Conecto\FeratelDsi\Dtos\RequestedType $handicapGroups = null, \Conecto\FeratelDsi\Dtos\RequestedType $fallbackLanguages = null, \Conecto\FeratelDsi\Dtos\RequestedType $handicapFacilityGroups = null, \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $bankCodes = null, \Conecto\FeratelDsi\Dtos\RequestedType $handicapClassifications = null, \Conecto\FeratelDsi\Dtos\RequestedType $infrastructureTopics = null, \Conecto\FeratelDsi\Dtos\RequestedType $additionalServiceTypes = null, \Conecto\FeratelDsi\Dtos\ShopItemGroupsRequestedType $shopItemGroups = null, \Conecto\FeratelDsi\Dtos\RequestedType $salutations = null, \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $categories = null, \Conecto\FeratelDsi\Dtos\RequestedType $hotSpotTypes = null, \Conecto\FeratelDsi\Dtos\RequestedWithTranslationType $regions = null, \Conecto\FeratelDsi\Dtos\RequestedType $guestCountries = null, \Conecto\FeratelDsi\Dtos\RequestedType $serviceCodes = null, \Conecto\FeratelDsi\Dtos\LocalOnlyTypesRequestedType $facilities = null, \Conecto\FeratelDsi\Dtos\RequestedType $ratingQuestions = null, array $translations = null, \Conecto\FeratelDsi\Dtos\RequestedWithTranslationType $countries = null, \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $holidayThemes = null, \Conecto\FeratelDsi\Dtos\RequestedWithTranslationType $towns = null, \Conecto\FeratelDsi\Dtos\RequestedWithTranslationType $districts = null, \DateTime $dateFrom = null, \Conecto\FeratelDsi\Dtos\RequestedType $handicapTypes = null, \Conecto\FeratelDsi\Dtos\RequestedType $linkTypes = null, \Conecto\FeratelDsi\Dtos\RequestedType $handicapFacilities = null, \Conecto\FeratelDsi\Dtos\RequestedType $customAttributes = null, \Conecto\FeratelDsi\Dtos\RequestedType $visitorTax = null, \Conecto\FeratelDsi\Dtos\RequestedType $serialEvents = null, \Conecto\FeratelDsi\Dtos\RequestedType $guestCards = null, \Conecto\FeratelDsi\Dtos\RequestedType $infrastructureTypes = null, \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $creativeCommons = null)
    {
        $this->getLocalValues = $getLocalValues;
        $this->dateFrom = $dateFrom;
        $this->translations = $translations;
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
        $this->visitorTax = $visitorTax;
        $this->additionalServiceTypes = $additionalServiceTypes;
        $this->guestCards = $guestCards;
        $this->creativeCommons = $creativeCommons;
    }

    /**
     * Gets as getLocalValues
     *
     * @return bool
     */
    public function getGetLocalValues()
    {
        return $this->getLocalValues;
    }

    /**
     * Sets a new getLocalValues
     *
     * @param bool $getLocalValues
     * @return self
     */
    public function setGetLocalValues($getLocalValues)
    {
        $this->getLocalValues = $getLocalValues;
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
     * Adds as language
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\LanguageType $language
     */
    public function addToTranslations(\Conecto\FeratelDsi\Dtos\LanguageType $language)
    {
        $this->translations[] = $language;
        return $this;
    }

    /**
     * isset translations
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTranslations($index)
    {
        return isset($this->translations[$index]);
    }

    /**
     * unset translations
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTranslations($index)
    {
        unset($this->translations[$index]);
    }

    /**
     * Gets as translations
     *
     * @return \Conecto\FeratelDsi\Dtos\LanguageType[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * Sets a new translations
     *
     * @param \Conecto\FeratelDsi\Dtos\LanguageType[] $translations
     * @return self
     */
    public function setTranslations(array $translations)
    {
        $this->translations = $translations;
        return $this;
    }

    /**
     * Gets as countries
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedWithTranslationType
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * Sets a new countries
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedWithTranslationType $countries
     * @return self
     */
    public function setCountries(?\Conecto\FeratelDsi\Dtos\RequestedWithTranslationType $countries = null)
    {
        $this->countries = $countries;
        return $this;
    }

    /**
     * Gets as regions
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedWithTranslationType
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * Sets a new regions
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedWithTranslationType $regions
     * @return self
     */
    public function setRegions(?\Conecto\FeratelDsi\Dtos\RequestedWithTranslationType $regions = null)
    {
        $this->regions = $regions;
        return $this;
    }

    /**
     * Gets as towns
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedWithTranslationType
     */
    public function getTowns()
    {
        return $this->towns;
    }

    /**
     * Sets a new towns
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedWithTranslationType $towns
     * @return self
     */
    public function setTowns(?\Conecto\FeratelDsi\Dtos\RequestedWithTranslationType $towns = null)
    {
        $this->towns = $towns;
        return $this;
    }

    /**
     * Gets as districts
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedWithTranslationType
     */
    public function getDistricts()
    {
        return $this->districts;
    }

    /**
     * Sets a new districts
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedWithTranslationType $districts
     * @return self
     */
    public function setDistricts(?\Conecto\FeratelDsi\Dtos\RequestedWithTranslationType $districts = null)
    {
        $this->districts = $districts;
        return $this;
    }

    /**
     * Gets as hotSpotTypes
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getHotSpotTypes()
    {
        return $this->hotSpotTypes;
    }

    /**
     * Sets a new hotSpotTypes
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $hotSpotTypes
     * @return self
     */
    public function setHotSpotTypes(?\Conecto\FeratelDsi\Dtos\RequestedType $hotSpotTypes = null)
    {
        $this->hotSpotTypes = $hotSpotTypes;
        return $this;
    }

    /**
     * Gets as hotSpots
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getHotSpots()
    {
        return $this->hotSpots;
    }

    /**
     * Sets a new hotSpots
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $hotSpots
     * @return self
     */
    public function setHotSpots(?\Conecto\FeratelDsi\Dtos\RequestedType $hotSpots = null)
    {
        $this->hotSpots = $hotSpots;
        return $this;
    }

    /**
     * Gets as categories
     *
     * @return \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets a new categories
     *
     * @param \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $categories
     * @return self
     */
    public function setCategories(?\Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $categories = null)
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * Gets as stars
     *
     * @return \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * Sets a new stars
     *
     * @param \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $stars
     * @return self
     */
    public function setStars(?\Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $stars = null)
    {
        $this->stars = $stars;
        return $this;
    }

    /**
     * Gets as classifications
     *
     * @return \Conecto\FeratelDsi\Dtos\KeyValuesType\ClassificationsAType
     */
    public function getClassifications()
    {
        return $this->classifications;
    }

    /**
     * Sets a new classifications
     *
     * @param \Conecto\FeratelDsi\Dtos\KeyValuesType\ClassificationsAType $classifications
     * @return self
     */
    public function setClassifications(?\Conecto\FeratelDsi\Dtos\KeyValuesType\ClassificationsAType $classifications = null)
    {
        $this->classifications = $classifications;
        return $this;
    }

    /**
     * Gets as guestCardClassifications
     *
     * @return \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType
     */
    public function getGuestCardClassifications()
    {
        return $this->guestCardClassifications;
    }

    /**
     * Sets a new guestCardClassifications
     *
     * @param \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $guestCardClassifications
     * @return self
     */
    public function setGuestCardClassifications(?\Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $guestCardClassifications = null)
    {
        $this->guestCardClassifications = $guestCardClassifications;
        return $this;
    }

    /**
     * Gets as hotelChains
     *
     * @return \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType
     */
    public function getHotelChains()
    {
        return $this->hotelChains;
    }

    /**
     * Sets a new hotelChains
     *
     * @param \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $hotelChains
     * @return self
     */
    public function setHotelChains(?\Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $hotelChains = null)
    {
        $this->hotelChains = $hotelChains;
        return $this;
    }

    /**
     * Gets as marketingGroups
     *
     * @return \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType
     */
    public function getMarketingGroups()
    {
        return $this->marketingGroups;
    }

    /**
     * Sets a new marketingGroups
     *
     * @param \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $marketingGroups
     * @return self
     */
    public function setMarketingGroups(?\Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $marketingGroups = null)
    {
        $this->marketingGroups = $marketingGroups;
        return $this;
    }

    /**
     * Gets as serviceClassifications
     *
     * @return \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType
     */
    public function getServiceClassifications()
    {
        return $this->serviceClassifications;
    }

    /**
     * Sets a new serviceClassifications
     *
     * @param \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $serviceClassifications
     * @return self
     */
    public function setServiceClassifications(?\Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $serviceClassifications = null)
    {
        $this->serviceClassifications = $serviceClassifications;
        return $this;
    }

    /**
     * Gets as holidayThemes
     *
     * @return \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType
     */
    public function getHolidayThemes()
    {
        return $this->holidayThemes;
    }

    /**
     * Sets a new holidayThemes
     *
     * @param \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $holidayThemes
     * @return self
     */
    public function setHolidayThemes(?\Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $holidayThemes = null)
    {
        $this->holidayThemes = $holidayThemes;
        return $this;
    }

    /**
     * Gets as facilityGroups
     *
     * @return \Conecto\FeratelDsi\Dtos\LocalOnlyTypesRequestedType
     */
    public function getFacilityGroups()
    {
        return $this->facilityGroups;
    }

    /**
     * Sets a new facilityGroups
     *
     * @param \Conecto\FeratelDsi\Dtos\LocalOnlyTypesRequestedType $facilityGroups
     * @return self
     */
    public function setFacilityGroups(?\Conecto\FeratelDsi\Dtos\LocalOnlyTypesRequestedType $facilityGroups = null)
    {
        $this->facilityGroups = $facilityGroups;
        return $this;
    }

    /**
     * Gets as facilities
     *
     * @return \Conecto\FeratelDsi\Dtos\LocalOnlyTypesRequestedType
     */
    public function getFacilities()
    {
        return $this->facilities;
    }

    /**
     * Sets a new facilities
     *
     * @param \Conecto\FeratelDsi\Dtos\LocalOnlyTypesRequestedType $facilities
     * @return self
     */
    public function setFacilities(?\Conecto\FeratelDsi\Dtos\LocalOnlyTypesRequestedType $facilities = null)
    {
        $this->facilities = $facilities;
        return $this;
    }

    /**
     * Gets as languages
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Sets a new languages
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $languages
     * @return self
     */
    public function setLanguages(?\Conecto\FeratelDsi\Dtos\RequestedType $languages = null)
    {
        $this->languages = $languages;
        return $this;
    }

    /**
     * Gets as ratingQuestions
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getRatingQuestions()
    {
        return $this->ratingQuestions;
    }

    /**
     * Sets a new ratingQuestions
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $ratingQuestions
     * @return self
     */
    public function setRatingQuestions(?\Conecto\FeratelDsi\Dtos\RequestedType $ratingQuestions = null)
    {
        $this->ratingQuestions = $ratingQuestions;
        return $this;
    }

    /**
     * Gets as ratingVisitors
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getRatingVisitors()
    {
        return $this->ratingVisitors;
    }

    /**
     * Sets a new ratingVisitors
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $ratingVisitors
     * @return self
     */
    public function setRatingVisitors(?\Conecto\FeratelDsi\Dtos\RequestedType $ratingVisitors = null)
    {
        $this->ratingVisitors = $ratingVisitors;
        return $this;
    }

    /**
     * Gets as serviceCodes
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getServiceCodes()
    {
        return $this->serviceCodes;
    }

    /**
     * Sets a new serviceCodes
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $serviceCodes
     * @return self
     */
    public function setServiceCodes(?\Conecto\FeratelDsi\Dtos\RequestedType $serviceCodes = null)
    {
        $this->serviceCodes = $serviceCodes;
        return $this;
    }

    /**
     * Gets as salutations
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getSalutations()
    {
        return $this->salutations;
    }

    /**
     * Sets a new salutations
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $salutations
     * @return self
     */
    public function setSalutations(?\Conecto\FeratelDsi\Dtos\RequestedType $salutations = null)
    {
        $this->salutations = $salutations;
        return $this;
    }

    /**
     * Gets as guestCountries
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getGuestCountries()
    {
        return $this->guestCountries;
    }

    /**
     * Sets a new guestCountries
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $guestCountries
     * @return self
     */
    public function setGuestCountries(?\Conecto\FeratelDsi\Dtos\RequestedType $guestCountries = null)
    {
        $this->guestCountries = $guestCountries;
        return $this;
    }

    /**
     * Gets as shopItemGroups
     *
     * @return \Conecto\FeratelDsi\Dtos\ShopItemGroupsRequestedType
     */
    public function getShopItemGroups()
    {
        return $this->shopItemGroups;
    }

    /**
     * Sets a new shopItemGroups
     *
     * @param \Conecto\FeratelDsi\Dtos\ShopItemGroupsRequestedType $shopItemGroups
     * @return self
     */
    public function setShopItemGroups(?\Conecto\FeratelDsi\Dtos\ShopItemGroupsRequestedType $shopItemGroups = null)
    {
        $this->shopItemGroups = $shopItemGroups;
        return $this;
    }

    /**
     * Gets as infrastructureTypes
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getInfrastructureTypes()
    {
        return $this->infrastructureTypes;
    }

    /**
     * Sets a new infrastructureTypes
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $infrastructureTypes
     * @return self
     */
    public function setInfrastructureTypes(?\Conecto\FeratelDsi\Dtos\RequestedType $infrastructureTypes = null)
    {
        $this->infrastructureTypes = $infrastructureTypes;
        return $this;
    }

    /**
     * Gets as infrastructureTopics
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getInfrastructureTopics()
    {
        return $this->infrastructureTopics;
    }

    /**
     * Sets a new infrastructureTopics
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $infrastructureTopics
     * @return self
     */
    public function setInfrastructureTopics(?\Conecto\FeratelDsi\Dtos\RequestedType $infrastructureTopics = null)
    {
        $this->infrastructureTopics = $infrastructureTopics;
        return $this;
    }

    /**
     * Gets as serialEvents
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getSerialEvents()
    {
        return $this->serialEvents;
    }

    /**
     * Sets a new serialEvents
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $serialEvents
     * @return self
     */
    public function setSerialEvents(?\Conecto\FeratelDsi\Dtos\RequestedType $serialEvents = null)
    {
        $this->serialEvents = $serialEvents;
        return $this;
    }

    /**
     * Gets as bankCodes
     *
     * @return \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType
     */
    public function getBankCodes()
    {
        return $this->bankCodes;
    }

    /**
     * Sets a new bankCodes
     *
     * @param \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $bankCodes
     * @return self
     */
    public function setBankCodes(?\Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $bankCodes = null)
    {
        $this->bankCodes = $bankCodes;
        return $this;
    }

    /**
     * Gets as customAttributes
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * Sets a new customAttributes
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $customAttributes
     * @return self
     */
    public function setCustomAttributes(?\Conecto\FeratelDsi\Dtos\RequestedType $customAttributes = null)
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }

    /**
     * Gets as fallbackLanguages
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getFallbackLanguages()
    {
        return $this->fallbackLanguages;
    }

    /**
     * Sets a new fallbackLanguages
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $fallbackLanguages
     * @return self
     */
    public function setFallbackLanguages(?\Conecto\FeratelDsi\Dtos\RequestedType $fallbackLanguages = null)
    {
        $this->fallbackLanguages = $fallbackLanguages;
        return $this;
    }

    /**
     * Gets as linkTypes
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getLinkTypes()
    {
        return $this->linkTypes;
    }

    /**
     * Sets a new linkTypes
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $linkTypes
     * @return self
     */
    public function setLinkTypes(?\Conecto\FeratelDsi\Dtos\RequestedType $linkTypes = null)
    {
        $this->linkTypes = $linkTypes;
        return $this;
    }

    /**
     * Gets as handicapGroups
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getHandicapGroups()
    {
        return $this->handicapGroups;
    }

    /**
     * Sets a new handicapGroups
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $handicapGroups
     * @return self
     */
    public function setHandicapGroups(?\Conecto\FeratelDsi\Dtos\RequestedType $handicapGroups = null)
    {
        $this->handicapGroups = $handicapGroups;
        return $this;
    }

    /**
     * Gets as handicapTypes
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getHandicapTypes()
    {
        return $this->handicapTypes;
    }

    /**
     * Sets a new handicapTypes
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $handicapTypes
     * @return self
     */
    public function setHandicapTypes(?\Conecto\FeratelDsi\Dtos\RequestedType $handicapTypes = null)
    {
        $this->handicapTypes = $handicapTypes;
        return $this;
    }

    /**
     * Gets as handicapFacilityGroups
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getHandicapFacilityGroups()
    {
        return $this->handicapFacilityGroups;
    }

    /**
     * Sets a new handicapFacilityGroups
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $handicapFacilityGroups
     * @return self
     */
    public function setHandicapFacilityGroups(?\Conecto\FeratelDsi\Dtos\RequestedType $handicapFacilityGroups = null)
    {
        $this->handicapFacilityGroups = $handicapFacilityGroups;
        return $this;
    }

    /**
     * Gets as handicapFacilities
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getHandicapFacilities()
    {
        return $this->handicapFacilities;
    }

    /**
     * Sets a new handicapFacilities
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $handicapFacilities
     * @return self
     */
    public function setHandicapFacilities(?\Conecto\FeratelDsi\Dtos\RequestedType $handicapFacilities = null)
    {
        $this->handicapFacilities = $handicapFacilities;
        return $this;
    }

    /**
     * Gets as handicapClassifications
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getHandicapClassifications()
    {
        return $this->handicapClassifications;
    }

    /**
     * Sets a new handicapClassifications
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $handicapClassifications
     * @return self
     */
    public function setHandicapClassifications(?\Conecto\FeratelDsi\Dtos\RequestedType $handicapClassifications = null)
    {
        $this->handicapClassifications = $handicapClassifications;
        return $this;
    }

    /**
     * Gets as visitorTax
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getVisitorTax()
    {
        return $this->visitorTax;
    }

    /**
     * Sets a new visitorTax
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $visitorTax
     * @return self
     */
    public function setVisitorTax(?\Conecto\FeratelDsi\Dtos\RequestedType $visitorTax = null)
    {
        $this->visitorTax = $visitorTax;
        return $this;
    }

    /**
     * Gets as additionalServiceTypes
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getAdditionalServiceTypes()
    {
        return $this->additionalServiceTypes;
    }

    /**
     * Sets a new additionalServiceTypes
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $additionalServiceTypes
     * @return self
     */
    public function setAdditionalServiceTypes(?\Conecto\FeratelDsi\Dtos\RequestedType $additionalServiceTypes = null)
    {
        $this->additionalServiceTypes = $additionalServiceTypes;
        return $this;
    }

    /**
     * Gets as guestCards
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestedType
     */
    public function getGuestCards()
    {
        return $this->guestCards;
    }

    /**
     * Sets a new guestCards
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestedType $guestCards
     * @return self
     */
    public function setGuestCards(?\Conecto\FeratelDsi\Dtos\RequestedType $guestCards = null)
    {
        $this->guestCards = $guestCards;
        return $this;
    }

    /**
     * Gets as creativeCommons
     *
     * @return \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType
     */
    public function getCreativeCommons()
    {
        return $this->creativeCommons;
    }

    /**
     * Sets a new creativeCommons
     *
     * @param \Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $creativeCommons
     * @return self
     */
    public function setCreativeCommons(?\Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType $creativeCommons = null)
    {
        $this->creativeCommons = $creativeCommons;
        return $this;
    }
}

