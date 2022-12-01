<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDServiceProvidersType
 *
 * Defines basic data elements for service provider level requested.
 * XSD Type: BDServiceProvidersType
 */
class BDServiceProvidersType extends BasicInfoType
{
    /**
     * @var bool $showDataOwner
     */
    private $showDataOwner = null;

    /**
     * @var bool $includeVTInfo
     */
    private $includeVTInfo = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $facilities
     */
    private $facilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDServiceProvidersType\AddressesAType $addresses
     */
    private $addresses = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RatingsAverageType $ratingsAverage
     */
    private $ratingsAverage = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $customAttributes
     */
    private $customAttributes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDHotSpotsType $hotSpots
     */
    private $hotSpots = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDServiceProvidersType\MetaRatingAType $metaRating
     */
    private $metaRating = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDServiceProvidersType\ClosedPeriodsAType $closedPeriods
     */
    private $closedPeriods = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $handicapFacilities
     */
    private $handicapFacilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $handicapClassifications
     */
    private $handicapClassifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicSystemElementType $gTC
     */
    private $gTC = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $qualityDetails
     */
    private $qualityDetails = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $housePackageMasters
     */
    private $housePackageMasters = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $housePackageMastersSelfAssign
     */
    private $housePackageMastersSelfAssign = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicSChElementType $revenueSettings
     */
    private $revenueSettings = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAnnotationsType $annotations
     */
    private $annotations = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDServicesType $services
     */
    private $services = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalServicesType $additionalServices
     */
    private $additionalServices = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $cancellationPaymentInfo
     */
    private $cancellationPaymentInfo = null;

    public function __construct(bool $showDataOwner = null, bool $includeVTInfo = null, \Conecto\FeratelDsi\Dtos\BasicElementType $facilities = null, \Conecto\FeratelDsi\Dtos\BDServiceProvidersType\AddressesAType $addresses = null, \Conecto\FeratelDsi\Dtos\RatingsAverageType $ratingsAverage = null, \Conecto\FeratelDsi\Dtos\BasicElementType $customAttributes = null, \Conecto\FeratelDsi\Dtos\BDHotSpotsType $hotSpots = null, \Conecto\FeratelDsi\Dtos\BDServiceProvidersType\MetaRatingAType $metaRating = null, \Conecto\FeratelDsi\Dtos\BDServiceProvidersType\ClosedPeriodsAType $closedPeriods = null, \Conecto\FeratelDsi\Dtos\BasicElementType $handicapFacilities = null, \Conecto\FeratelDsi\Dtos\BasicElementType $handicapClassifications = null, \Conecto\FeratelDsi\Dtos\BasicSystemElementType $gTC = null, \Conecto\FeratelDsi\Dtos\BasicElementType $qualityDetails = null, \Conecto\FeratelDsi\Dtos\BasicElementType $housePackageMasters = null, \Conecto\FeratelDsi\Dtos\BasicElementType $housePackageMastersSelfAssign = null, \Conecto\FeratelDsi\Dtos\BasicSChElementType $revenueSettings = null, \Conecto\FeratelDsi\Dtos\BDAnnotationsType $annotations = null, \Conecto\FeratelDsi\Dtos\BDServicesType $services = null, \Conecto\FeratelDsi\Dtos\BDAdditionalServicesType $additionalServices = null, \Conecto\FeratelDsi\Dtos\BasicElementType $cancellationPaymentInfo = null, \Conecto\FeratelDsi\Dtos\BasicInfoType\DetailsAType $details = null, \Conecto\FeratelDsi\Dtos\BasicSystemDocumentElementType $documents = null, \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $descriptions = null, \Conecto\FeratelDsi\Dtos\BasicElementLinksType $links = null)
    {
        $this->showDataOwner = $showDataOwner;
        $this->includeVTInfo = $includeVTInfo;
        $this->facilities = $facilities;
        $this->addresses = $addresses;
        $this->ratingsAverage = $ratingsAverage;
        $this->customAttributes = $customAttributes;
        $this->hotSpots = $hotSpots;
        $this->metaRating = $metaRating;
        $this->closedPeriods = $closedPeriods;
        $this->handicapFacilities = $handicapFacilities;
        $this->handicapClassifications = $handicapClassifications;
        $this->gTC = $gTC;
        $this->qualityDetails = $qualityDetails;
        $this->housePackageMasters = $housePackageMasters;
        $this->housePackageMastersSelfAssign = $housePackageMastersSelfAssign;
        $this->revenueSettings = $revenueSettings;
        $this->annotations = $annotations;
        $this->services = $services;
        $this->additionalServices = $additionalServices;
        $this->cancellationPaymentInfo = $cancellationPaymentInfo;
        parent::__construct($details,$documents,$descriptions,$links);
    }

    /**
     * Gets as showDataOwner
     *
     * @return bool
     */
    public function getShowDataOwner()
    {
        return $this->showDataOwner;
    }

    /**
     * Sets a new showDataOwner
     *
     * @param bool $showDataOwner
     * @return self
     */
    public function setShowDataOwner($showDataOwner)
    {
        $this->showDataOwner = $showDataOwner;
        return $this;
    }

    /**
     * Gets as includeVTInfo
     *
     * @return bool
     */
    public function getIncludeVTInfo()
    {
        return $this->includeVTInfo;
    }

    /**
     * Sets a new includeVTInfo
     *
     * @param bool $includeVTInfo
     * @return self
     */
    public function setIncludeVTInfo($includeVTInfo)
    {
        $this->includeVTInfo = $includeVTInfo;
        return $this;
    }

    /**
     * Gets as facilities
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicElementType
     */
    public function getFacilities()
    {
        return $this->facilities;
    }

    /**
     * Sets a new facilities
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicElementType $facilities
     * @return self
     */
    public function setFacilities(?\Conecto\FeratelDsi\Dtos\BasicElementType $facilities = null)
    {
        $this->facilities = $facilities;
        return $this;
    }

    /**
     * Gets as addresses
     *
     * @return \Conecto\FeratelDsi\Dtos\BDServiceProvidersType\AddressesAType
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Sets a new addresses
     *
     * @param \Conecto\FeratelDsi\Dtos\BDServiceProvidersType\AddressesAType $addresses
     * @return self
     */
    public function setAddresses(?\Conecto\FeratelDsi\Dtos\BDServiceProvidersType\AddressesAType $addresses = null)
    {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * Gets as ratingsAverage
     *
     * @return \Conecto\FeratelDsi\Dtos\RatingsAverageType
     */
    public function getRatingsAverage()
    {
        return $this->ratingsAverage;
    }

    /**
     * Sets a new ratingsAverage
     *
     * @param \Conecto\FeratelDsi\Dtos\RatingsAverageType $ratingsAverage
     * @return self
     */
    public function setRatingsAverage(?\Conecto\FeratelDsi\Dtos\RatingsAverageType $ratingsAverage = null)
    {
        $this->ratingsAverage = $ratingsAverage;
        return $this;
    }

    /**
     * Gets as customAttributes
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicElementType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * Sets a new customAttributes
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicElementType $customAttributes
     * @return self
     */
    public function setCustomAttributes(?\Conecto\FeratelDsi\Dtos\BasicElementType $customAttributes = null)
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }

    /**
     * Gets as hotSpots
     *
     * @return \Conecto\FeratelDsi\Dtos\BDHotSpotsType
     */
    public function getHotSpots()
    {
        return $this->hotSpots;
    }

    /**
     * Sets a new hotSpots
     *
     * @param \Conecto\FeratelDsi\Dtos\BDHotSpotsType $hotSpots
     * @return self
     */
    public function setHotSpots(?\Conecto\FeratelDsi\Dtos\BDHotSpotsType $hotSpots = null)
    {
        $this->hotSpots = $hotSpots;
        return $this;
    }

    /**
     * Gets as metaRating
     *
     * @return \Conecto\FeratelDsi\Dtos\BDServiceProvidersType\MetaRatingAType
     */
    public function getMetaRating()
    {
        return $this->metaRating;
    }

    /**
     * Sets a new metaRating
     *
     * @param \Conecto\FeratelDsi\Dtos\BDServiceProvidersType\MetaRatingAType $metaRating
     * @return self
     */
    public function setMetaRating(?\Conecto\FeratelDsi\Dtos\BDServiceProvidersType\MetaRatingAType $metaRating = null)
    {
        $this->metaRating = $metaRating;
        return $this;
    }

    /**
     * Gets as closedPeriods
     *
     * @return \Conecto\FeratelDsi\Dtos\BDServiceProvidersType\ClosedPeriodsAType
     */
    public function getClosedPeriods()
    {
        return $this->closedPeriods;
    }

    /**
     * Sets a new closedPeriods
     *
     * @param \Conecto\FeratelDsi\Dtos\BDServiceProvidersType\ClosedPeriodsAType $closedPeriods
     * @return self
     */
    public function setClosedPeriods(?\Conecto\FeratelDsi\Dtos\BDServiceProvidersType\ClosedPeriodsAType $closedPeriods = null)
    {
        $this->closedPeriods = $closedPeriods;
        return $this;
    }

    /**
     * Gets as handicapFacilities
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicElementType
     */
    public function getHandicapFacilities()
    {
        return $this->handicapFacilities;
    }

    /**
     * Sets a new handicapFacilities
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicElementType $handicapFacilities
     * @return self
     */
    public function setHandicapFacilities(?\Conecto\FeratelDsi\Dtos\BasicElementType $handicapFacilities = null)
    {
        $this->handicapFacilities = $handicapFacilities;
        return $this;
    }

    /**
     * Gets as handicapClassifications
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicElementType
     */
    public function getHandicapClassifications()
    {
        return $this->handicapClassifications;
    }

    /**
     * Sets a new handicapClassifications
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicElementType $handicapClassifications
     * @return self
     */
    public function setHandicapClassifications(?\Conecto\FeratelDsi\Dtos\BasicElementType $handicapClassifications = null)
    {
        $this->handicapClassifications = $handicapClassifications;
        return $this;
    }

    /**
     * Gets as gTC
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicSystemElementType
     */
    public function getGTC()
    {
        return $this->gTC;
    }

    /**
     * Sets a new gTC
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicSystemElementType $gTC
     * @return self
     */
    public function setGTC(?\Conecto\FeratelDsi\Dtos\BasicSystemElementType $gTC = null)
    {
        $this->gTC = $gTC;
        return $this;
    }

    /**
     * Gets as qualityDetails
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicElementType
     */
    public function getQualityDetails()
    {
        return $this->qualityDetails;
    }

    /**
     * Sets a new qualityDetails
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicElementType $qualityDetails
     * @return self
     */
    public function setQualityDetails(?\Conecto\FeratelDsi\Dtos\BasicElementType $qualityDetails = null)
    {
        $this->qualityDetails = $qualityDetails;
        return $this;
    }

    /**
     * Gets as housePackageMasters
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicElementType
     */
    public function getHousePackageMasters()
    {
        return $this->housePackageMasters;
    }

    /**
     * Sets a new housePackageMasters
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicElementType $housePackageMasters
     * @return self
     */
    public function setHousePackageMasters(?\Conecto\FeratelDsi\Dtos\BasicElementType $housePackageMasters = null)
    {
        $this->housePackageMasters = $housePackageMasters;
        return $this;
    }

    /**
     * Gets as housePackageMastersSelfAssign
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicElementType
     */
    public function getHousePackageMastersSelfAssign()
    {
        return $this->housePackageMastersSelfAssign;
    }

    /**
     * Sets a new housePackageMastersSelfAssign
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicElementType $housePackageMastersSelfAssign
     * @return self
     */
    public function setHousePackageMastersSelfAssign(?\Conecto\FeratelDsi\Dtos\BasicElementType $housePackageMastersSelfAssign = null)
    {
        $this->housePackageMastersSelfAssign = $housePackageMastersSelfAssign;
        return $this;
    }

    /**
     * Gets as revenueSettings
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicSChElementType
     */
    public function getRevenueSettings()
    {
        return $this->revenueSettings;
    }

    /**
     * Sets a new revenueSettings
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicSChElementType $revenueSettings
     * @return self
     */
    public function setRevenueSettings(?\Conecto\FeratelDsi\Dtos\BasicSChElementType $revenueSettings = null)
    {
        $this->revenueSettings = $revenueSettings;
        return $this;
    }

    /**
     * Gets as annotations
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAnnotationsType
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Sets a new annotations
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAnnotationsType $annotations
     * @return self
     */
    public function setAnnotations(?\Conecto\FeratelDsi\Dtos\BDAnnotationsType $annotations = null)
    {
        $this->annotations = $annotations;
        return $this;
    }

    /**
     * Gets as services
     *
     * @return \Conecto\FeratelDsi\Dtos\BDServicesType
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Sets a new services
     *
     * @param \Conecto\FeratelDsi\Dtos\BDServicesType $services
     * @return self
     */
    public function setServices(?\Conecto\FeratelDsi\Dtos\BDServicesType $services = null)
    {
        $this->services = $services;
        return $this;
    }

    /**
     * Gets as additionalServices
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalServicesType
     */
    public function getAdditionalServices()
    {
        return $this->additionalServices;
    }

    /**
     * Sets a new additionalServices
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalServicesType $additionalServices
     * @return self
     */
    public function setAdditionalServices(?\Conecto\FeratelDsi\Dtos\BDAdditionalServicesType $additionalServices = null)
    {
        $this->additionalServices = $additionalServices;
        return $this;
    }

    /**
     * Gets as cancellationPaymentInfo
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicElementType
     */
    public function getCancellationPaymentInfo()
    {
        return $this->cancellationPaymentInfo;
    }

    /**
     * Sets a new cancellationPaymentInfo
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicElementType $cancellationPaymentInfo
     * @return self
     */
    public function setCancellationPaymentInfo(?\Conecto\FeratelDsi\Dtos\BasicElementType $cancellationPaymentInfo = null)
    {
        $this->cancellationPaymentInfo = $cancellationPaymentInfo;
        return $this;
    }
}

