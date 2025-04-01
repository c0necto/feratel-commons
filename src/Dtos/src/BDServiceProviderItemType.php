<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDServiceProviderItemType
 *
 *
 * XSD Type: BDServiceProviderItem
 */
class BDServiceProviderItemType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var string $mappingId
     */
    private $mappingId = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType $details
     */
    private $details = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\DocumentType[] $documents
     */
    private $documents = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\DescriptionType[] $descriptions
     */
    private $descriptions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LinkType[] $links
     */
    private $links = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\FacilityItemListType $facilities
     */
    private $facilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAddressType[] $addresses
     */
    private $addresses = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CustomAttributeListType $customAttributes
     */
    private $customAttributes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDHotSpotsListType $hotSpots
     */
    private $hotSpots = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\HandicapFacilitiesItemListType $handicapFacilities
     */
    private $handicapFacilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDGTCItemType[] $gTCs
     */
    private $gTCs = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDQualityDetailsType $qualityDetails
     */
    private $qualityDetails = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDHousePackageMasterType[] $housePackageMasters
     */
    private $housePackageMasters = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDHousePackageMasterType[] $housePackageMastersSelfAssign
     */
    private $housePackageMastersSelfAssign = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDRevenueSettingType[] $revenueSettings
     */
    private $revenueSettings = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAnnotationsItemType[] $annotations
     */
    private $annotations = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDServiceItemType[] $services
     */
    private $services = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalServiceItemType[] $additionalServices
     */
    private $additionalServices = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDRatingAverageItemType[] $ratingsAverage
     */
    private $ratingsAverage = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDMetaRatingsType $metaRating
     */
    private $metaRating = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDClosedPeriodType[] $closedPeriods
     */
    private $closedPeriods = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType[] $cancellationPaymentInfos
     */
    private $cancellationPaymentInfos = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDHandicapClassificationsType $handicapClassifications
     */
    private $handicapClassifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDServiceProviderPriceType $price
     */
    private $price = null;

    public function __construct(string $id = null, \DateTime $changeDate = null, string $mappingId = null, \Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType $details = null, array $documents = null, array $descriptions = null, array $links = null, \Conecto\FeratelDsi\Dtos\FacilityItemListType $facilities = null, array $addresses = null, \Conecto\FeratelDsi\Dtos\CustomAttributeListType $customAttributes = null, \Conecto\FeratelDsi\Dtos\BDHotSpotsListType $hotSpots = null, \Conecto\FeratelDsi\Dtos\HandicapFacilitiesItemListType $handicapFacilities = null, array $gTCs = null, \Conecto\FeratelDsi\Dtos\BDQualityDetailsType $qualityDetails = null, array $housePackageMasters = null, array $housePackageMastersSelfAssign = null, array $revenueSettings = null, array $annotations = null, array $services = null, array $additionalServices = null, array $ratingsAverage = null, \Conecto\FeratelDsi\Dtos\BDMetaRatingsType $metaRating = null, array $closedPeriods = null, array $cancellationPaymentInfos = null, \Conecto\FeratelDsi\Dtos\BDHandicapClassificationsType $handicapClassifications = null, \Conecto\FeratelDsi\Dtos\BDServiceProviderPriceType $price = null)
    {
        $this->id = $id;
        $this->changeDate = $changeDate;
        $this->mappingId = $mappingId;
        $this->details = $details;
        $this->documents = $documents;
        $this->descriptions = $descriptions;
        $this->links = $links;
        $this->facilities = $facilities;
        $this->addresses = $addresses;
        $this->customAttributes = $customAttributes;
        $this->hotSpots = $hotSpots;
        $this->handicapFacilities = $handicapFacilities;
        $this->gTCs = $gTCs;
        $this->qualityDetails = $qualityDetails;
        $this->housePackageMasters = $housePackageMasters;
        $this->housePackageMastersSelfAssign = $housePackageMastersSelfAssign;
        $this->revenueSettings = $revenueSettings;
        $this->annotations = $annotations;
        $this->services = $services;
        $this->additionalServices = $additionalServices;
        $this->ratingsAverage = $ratingsAverage;
        $this->metaRating = $metaRating;
        $this->closedPeriods = $closedPeriods;
        $this->cancellationPaymentInfos = $cancellationPaymentInfos;
        $this->handicapClassifications = $handicapClassifications;
        $this->price = $price;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as changeDate
     *
     * @return \DateTime
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Sets a new changeDate
     *
     * @param \DateTime $changeDate
     * @return self
     */
    public function setChangeDate(\DateTime $changeDate)
    {
        $this->changeDate = $changeDate;
        return $this;
    }

    /**
     * Gets as mappingId
     *
     * @return string
     */
    public function getMappingId()
    {
        return $this->mappingId;
    }

    /**
     * Sets a new mappingId
     *
     * @param string $mappingId
     * @return self
     */
    public function setMappingId($mappingId)
    {
        $this->mappingId = $mappingId;
        return $this;
    }

    /**
     * Gets as details
     *
     * @return \Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param \Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType $details
     * @return self
     */
    public function setDetails(?\Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType $details = null)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Adds as document
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\DocumentType $document
     */
    public function addToDocuments(\Conecto\FeratelDsi\Dtos\DocumentType $document)
    {
        $this->documents[] = $document;
        return $this;
    }

    /**
     * isset documents
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocuments($index)
    {
        return isset($this->documents[$index]);
    }

    /**
     * unset documents
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocuments($index)
    {
        unset($this->documents[$index]);
    }

    /**
     * Gets as documents
     *
     * @return \Conecto\FeratelDsi\Dtos\DocumentType[]
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Sets a new documents
     *
     * @param \Conecto\FeratelDsi\Dtos\DocumentType[] $documents
     * @return self
     */
    public function setDocuments(array $documents = null)
    {
        $this->documents = $documents;
        return $this;
    }

    /**
     * Adds as description
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\DescriptionType $description
     */
    public function addToDescriptions(\Conecto\FeratelDsi\Dtos\DescriptionType $description)
    {
        $this->descriptions[] = $description;
        return $this;
    }

    /**
     * isset descriptions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescriptions($index)
    {
        return isset($this->descriptions[$index]);
    }

    /**
     * unset descriptions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescriptions($index)
    {
        unset($this->descriptions[$index]);
    }

    /**
     * Gets as descriptions
     *
     * @return \Conecto\FeratelDsi\Dtos\DescriptionType[]
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * @param \Conecto\FeratelDsi\Dtos\DescriptionType[] $descriptions
     * @return self
     */
    public function setDescriptions(array $descriptions = null)
    {
        $this->descriptions = $descriptions;
        return $this;
    }

    /**
     * Adds as link
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\LinkType $link
     */
    public function addToLinks(\Conecto\FeratelDsi\Dtos\LinkType $link)
    {
        $this->links[] = $link;
        return $this;
    }

    /**
     * isset links
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinks($index)
    {
        return isset($this->links[$index]);
    }

    /**
     * unset links
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinks($index)
    {
        unset($this->links[$index]);
    }

    /**
     * Gets as links
     *
     * @return \Conecto\FeratelDsi\Dtos\LinkType[]
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Sets a new links
     *
     * @param \Conecto\FeratelDsi\Dtos\LinkType[] $links
     * @return self
     */
    public function setLinks(array $links = null)
    {
        $this->links = $links;
        return $this;
    }

    /**
     * Gets as facilities
     *
     * @return \Conecto\FeratelDsi\Dtos\FacilityItemListType
     */
    public function getFacilities()
    {
        return $this->facilities;
    }

    /**
     * Sets a new facilities
     *
     * @param \Conecto\FeratelDsi\Dtos\FacilityItemListType $facilities
     * @return self
     */
    public function setFacilities(?\Conecto\FeratelDsi\Dtos\FacilityItemListType $facilities = null)
    {
        $this->facilities = $facilities;
        return $this;
    }

    /**
     * Adds as address
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDAddressType $address
     */
    public function addToAddresses(\Conecto\FeratelDsi\Dtos\BDAddressType $address)
    {
        $this->addresses[] = $address;
        return $this;
    }

    /**
     * isset addresses
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddresses($index)
    {
        return isset($this->addresses[$index]);
    }

    /**
     * unset addresses
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddresses($index)
    {
        unset($this->addresses[$index]);
    }

    /**
     * Gets as addresses
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAddressType[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Sets a new addresses
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAddressType[] $addresses
     * @return self
     */
    public function setAddresses(array $addresses = null)
    {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * Gets as customAttributes
     *
     * @return \Conecto\FeratelDsi\Dtos\CustomAttributeListType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * Sets a new customAttributes
     *
     * @param \Conecto\FeratelDsi\Dtos\CustomAttributeListType $customAttributes
     * @return self
     */
    public function setCustomAttributes(?\Conecto\FeratelDsi\Dtos\CustomAttributeListType $customAttributes = null)
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }

    /**
     * Gets as hotSpots
     *
     * @return \Conecto\FeratelDsi\Dtos\BDHotSpotsListType
     */
    public function getHotSpots()
    {
        return $this->hotSpots;
    }

    /**
     * Sets a new hotSpots
     *
     * @param \Conecto\FeratelDsi\Dtos\BDHotSpotsListType $hotSpots
     * @return self
     */
    public function setHotSpots(?\Conecto\FeratelDsi\Dtos\BDHotSpotsListType $hotSpots = null)
    {
        $this->hotSpots = $hotSpots;
        return $this;
    }

    /**
     * Gets as handicapFacilities
     *
     * @return \Conecto\FeratelDsi\Dtos\HandicapFacilitiesItemListType
     */
    public function getHandicapFacilities()
    {
        return $this->handicapFacilities;
    }

    /**
     * Sets a new handicapFacilities
     *
     * @param \Conecto\FeratelDsi\Dtos\HandicapFacilitiesItemListType $handicapFacilities
     * @return self
     */
    public function setHandicapFacilities(?\Conecto\FeratelDsi\Dtos\HandicapFacilitiesItemListType $handicapFacilities = null)
    {
        $this->handicapFacilities = $handicapFacilities;
        return $this;
    }

    /**
     * Adds as gTC
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDGTCItemType $gTC
     */
    public function addToGTCs(\Conecto\FeratelDsi\Dtos\BDGTCItemType $gTC)
    {
        $this->gTCs[] = $gTC;
        return $this;
    }

    /**
     * isset gTCs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGTCs($index)
    {
        return isset($this->gTCs[$index]);
    }

    /**
     * unset gTCs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGTCs($index)
    {
        unset($this->gTCs[$index]);
    }

    /**
     * Gets as gTCs
     *
     * @return \Conecto\FeratelDsi\Dtos\BDGTCItemType[]
     */
    public function getGTCs()
    {
        return $this->gTCs;
    }

    /**
     * Sets a new gTCs
     *
     * @param \Conecto\FeratelDsi\Dtos\BDGTCItemType[] $gTCs
     * @return self
     */
    public function setGTCs(array $gTCs = null)
    {
        $this->gTCs = $gTCs;
        return $this;
    }

    /**
     * Gets as qualityDetails
     *
     * @return \Conecto\FeratelDsi\Dtos\BDQualityDetailsType
     */
    public function getQualityDetails()
    {
        return $this->qualityDetails;
    }

    /**
     * Sets a new qualityDetails
     *
     * @param \Conecto\FeratelDsi\Dtos\BDQualityDetailsType $qualityDetails
     * @return self
     */
    public function setQualityDetails(?\Conecto\FeratelDsi\Dtos\BDQualityDetailsType $qualityDetails = null)
    {
        $this->qualityDetails = $qualityDetails;
        return $this;
    }

    /**
     * Adds as housePackageMaster
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDHousePackageMasterType $housePackageMaster
     */
    public function addToHousePackageMasters(\Conecto\FeratelDsi\Dtos\BDHousePackageMasterType $housePackageMaster)
    {
        $this->housePackageMasters[] = $housePackageMaster;
        return $this;
    }

    /**
     * isset housePackageMasters
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHousePackageMasters($index)
    {
        return isset($this->housePackageMasters[$index]);
    }

    /**
     * unset housePackageMasters
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHousePackageMasters($index)
    {
        unset($this->housePackageMasters[$index]);
    }

    /**
     * Gets as housePackageMasters
     *
     * @return \Conecto\FeratelDsi\Dtos\BDHousePackageMasterType[]
     */
    public function getHousePackageMasters()
    {
        return $this->housePackageMasters;
    }

    /**
     * Sets a new housePackageMasters
     *
     * @param \Conecto\FeratelDsi\Dtos\BDHousePackageMasterType[] $housePackageMasters
     * @return self
     */
    public function setHousePackageMasters(array $housePackageMasters = null)
    {
        $this->housePackageMasters = $housePackageMasters;
        return $this;
    }

    /**
     * Adds as housePackageMaster
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDHousePackageMasterType $housePackageMaster
     */
    public function addToHousePackageMastersSelfAssign(\Conecto\FeratelDsi\Dtos\BDHousePackageMasterType $housePackageMaster)
    {
        $this->housePackageMastersSelfAssign[] = $housePackageMaster;
        return $this;
    }

    /**
     * isset housePackageMastersSelfAssign
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHousePackageMastersSelfAssign($index)
    {
        return isset($this->housePackageMastersSelfAssign[$index]);
    }

    /**
     * unset housePackageMastersSelfAssign
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHousePackageMastersSelfAssign($index)
    {
        unset($this->housePackageMastersSelfAssign[$index]);
    }

    /**
     * Gets as housePackageMastersSelfAssign
     *
     * @return \Conecto\FeratelDsi\Dtos\BDHousePackageMasterType[]
     */
    public function getHousePackageMastersSelfAssign()
    {
        return $this->housePackageMastersSelfAssign;
    }

    /**
     * Sets a new housePackageMastersSelfAssign
     *
     * @param \Conecto\FeratelDsi\Dtos\BDHousePackageMasterType[] $housePackageMastersSelfAssign
     * @return self
     */
    public function setHousePackageMastersSelfAssign(array $housePackageMastersSelfAssign = null)
    {
        $this->housePackageMastersSelfAssign = $housePackageMastersSelfAssign;
        return $this;
    }

    /**
     * Adds as revenueSetting
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDRevenueSettingType $revenueSetting
     */
    public function addToRevenueSettings(\Conecto\FeratelDsi\Dtos\BDRevenueSettingType $revenueSetting)
    {
        $this->revenueSettings[] = $revenueSetting;
        return $this;
    }

    /**
     * isset revenueSettings
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRevenueSettings($index)
    {
        return isset($this->revenueSettings[$index]);
    }

    /**
     * unset revenueSettings
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRevenueSettings($index)
    {
        unset($this->revenueSettings[$index]);
    }

    /**
     * Gets as revenueSettings
     *
     * @return \Conecto\FeratelDsi\Dtos\BDRevenueSettingType[]
     */
    public function getRevenueSettings()
    {
        return $this->revenueSettings;
    }

    /**
     * Sets a new revenueSettings
     *
     * @param \Conecto\FeratelDsi\Dtos\BDRevenueSettingType[] $revenueSettings
     * @return self
     */
    public function setRevenueSettings(array $revenueSettings = null)
    {
        $this->revenueSettings = $revenueSettings;
        return $this;
    }

    /**
     * Adds as annotation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDAnnotationsItemType $annotation
     */
    public function addToAnnotations(\Conecto\FeratelDsi\Dtos\BDAnnotationsItemType $annotation)
    {
        $this->annotations[] = $annotation;
        return $this;
    }

    /**
     * isset annotations
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAnnotations($index)
    {
        return isset($this->annotations[$index]);
    }

    /**
     * unset annotations
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAnnotations($index)
    {
        unset($this->annotations[$index]);
    }

    /**
     * Gets as annotations
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAnnotationsItemType[]
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Sets a new annotations
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAnnotationsItemType[] $annotations
     * @return self
     */
    public function setAnnotations(array $annotations = null)
    {
        $this->annotations = $annotations;
        return $this;
    }

    /**
     * Adds as service
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDServiceItemType $service
     */
    public function addToServices(\Conecto\FeratelDsi\Dtos\BDServiceItemType $service)
    {
        $this->services[] = $service;
        return $this;
    }

    /**
     * isset services
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServices($index)
    {
        return isset($this->services[$index]);
    }

    /**
     * unset services
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServices($index)
    {
        unset($this->services[$index]);
    }

    /**
     * Gets as services
     *
     * @return \Conecto\FeratelDsi\Dtos\BDServiceItemType[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Sets a new services
     *
     * @param \Conecto\FeratelDsi\Dtos\BDServiceItemType[] $services
     * @return self
     */
    public function setServices(array $services = null)
    {
        $this->services = $services;
        return $this;
    }

    /**
     * Adds as additionalService
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalServiceItemType $additionalService
     */
    public function addToAdditionalServices(\Conecto\FeratelDsi\Dtos\BDAdditionalServiceItemType $additionalService)
    {
        $this->additionalServices[] = $additionalService;
        return $this;
    }

    /**
     * isset additionalServices
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalServices($index)
    {
        return isset($this->additionalServices[$index]);
    }

    /**
     * unset additionalServices
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalServices($index)
    {
        unset($this->additionalServices[$index]);
    }

    /**
     * Gets as additionalServices
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalServiceItemType[]
     */
    public function getAdditionalServices()
    {
        return $this->additionalServices;
    }

    /**
     * Sets a new additionalServices
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalServiceItemType[] $additionalServices
     * @return self
     */
    public function setAdditionalServices(array $additionalServices = null)
    {
        $this->additionalServices = $additionalServices;
        return $this;
    }

    /**
     * Adds as ratingAverage
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDRatingAverageItemType $ratingAverage
     */
    public function addToRatingsAverage(\Conecto\FeratelDsi\Dtos\BDRatingAverageItemType $ratingAverage)
    {
        $this->ratingsAverage[] = $ratingAverage;
        return $this;
    }

    /**
     * isset ratingsAverage
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatingsAverage($index)
    {
        return isset($this->ratingsAverage[$index]);
    }

    /**
     * unset ratingsAverage
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatingsAverage($index)
    {
        unset($this->ratingsAverage[$index]);
    }

    /**
     * Gets as ratingsAverage
     *
     * @return \Conecto\FeratelDsi\Dtos\BDRatingAverageItemType[]
     */
    public function getRatingsAverage()
    {
        return $this->ratingsAverage;
    }

    /**
     * Sets a new ratingsAverage
     *
     * @param \Conecto\FeratelDsi\Dtos\BDRatingAverageItemType[] $ratingsAverage
     * @return self
     */
    public function setRatingsAverage(array $ratingsAverage = null)
    {
        $this->ratingsAverage = $ratingsAverage;
        return $this;
    }

    /**
     * Gets as metaRating
     *
     * @return \Conecto\FeratelDsi\Dtos\BDMetaRatingsType
     */
    public function getMetaRating()
    {
        return $this->metaRating;
    }

    /**
     * Sets a new metaRating
     *
     * @param \Conecto\FeratelDsi\Dtos\BDMetaRatingsType $metaRating
     * @return self
     */
    public function setMetaRating(?\Conecto\FeratelDsi\Dtos\BDMetaRatingsType $metaRating = null)
    {
        $this->metaRating = $metaRating;
        return $this;
    }

    /**
     * Adds as closedPeriod
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDClosedPeriodType $closedPeriod
     */
    public function addToClosedPeriods(\Conecto\FeratelDsi\Dtos\BDClosedPeriodType $closedPeriod)
    {
        $this->closedPeriods[] = $closedPeriod;
        return $this;
    }

    /**
     * isset closedPeriods
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClosedPeriods($index)
    {
        return isset($this->closedPeriods[$index]);
    }

    /**
     * unset closedPeriods
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClosedPeriods($index)
    {
        unset($this->closedPeriods[$index]);
    }

    /**
     * Gets as closedPeriods
     *
     * @return \Conecto\FeratelDsi\Dtos\BDClosedPeriodType[]
     */
    public function getClosedPeriods()
    {
        return $this->closedPeriods;
    }

    /**
     * Sets a new closedPeriods
     *
     * @param \Conecto\FeratelDsi\Dtos\BDClosedPeriodType[] $closedPeriods
     * @return self
     */
    public function setClosedPeriods(array $closedPeriods = null)
    {
        $this->closedPeriods = $closedPeriods;
        return $this;
    }

    /**
     * Adds as cancellationPaymentTemplate
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType $cancellationPaymentTemplate
     */
    public function addToCancellationPaymentInfos(\Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType $cancellationPaymentTemplate)
    {
        $this->cancellationPaymentInfos[] = $cancellationPaymentTemplate;
        return $this;
    }

    /**
     * isset cancellationPaymentInfos
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancellationPaymentInfos($index)
    {
        return isset($this->cancellationPaymentInfos[$index]);
    }

    /**
     * unset cancellationPaymentInfos
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancellationPaymentInfos($index)
    {
        unset($this->cancellationPaymentInfos[$index]);
    }

    /**
     * Gets as cancellationPaymentInfos
     *
     * @return \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType[]
     */
    public function getCancellationPaymentInfos()
    {
        return $this->cancellationPaymentInfos;
    }

    /**
     * Sets a new cancellationPaymentInfos
     *
     * @param \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType[] $cancellationPaymentInfos
     * @return self
     */
    public function setCancellationPaymentInfos(array $cancellationPaymentInfos = null)
    {
        $this->cancellationPaymentInfos = $cancellationPaymentInfos;
        return $this;
    }

    /**
     * Gets as handicapClassifications
     *
     * @return \Conecto\FeratelDsi\Dtos\BDHandicapClassificationsType
     */
    public function getHandicapClassifications()
    {
        return $this->handicapClassifications;
    }

    /**
     * Sets a new handicapClassifications
     *
     * @param \Conecto\FeratelDsi\Dtos\BDHandicapClassificationsType $handicapClassifications
     * @return self
     */
    public function setHandicapClassifications(?\Conecto\FeratelDsi\Dtos\BDHandicapClassificationsType $handicapClassifications = null)
    {
        $this->handicapClassifications = $handicapClassifications;
        return $this;
    }

    /**
     * Gets as price
     *
     * @return \Conecto\FeratelDsi\Dtos\BDServiceProviderPriceType
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param \Conecto\FeratelDsi\Dtos\BDServiceProviderPriceType $price
     * @return self
     */
    public function setPrice(?\Conecto\FeratelDsi\Dtos\BDServiceProviderPriceType $price = null)
    {
        $this->price = $price;
        return $this;
    }
}

