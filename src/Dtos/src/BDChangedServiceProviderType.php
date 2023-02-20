<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDChangedServiceProviderType
 *
 * Defines basic data elements for service provider level requested.
 * XSD Type: BDChangedServiceProviderType
 */
class BDChangedServiceProviderType
{
    /**
     * @var string $details
     */
    private $details = null;

    /**
     * @var string $documents
     */
    private $documents = null;

    /**
     * @var string $descriptions
     */
    private $descriptions = null;

    /**
     * @var string $links
     */
    private $links = null;

    /**
     * @var string $facilities
     */
    private $facilities = null;

    /**
     * @var mixed $addresses
     */
    private $addresses = null;

    /**
     * @var mixed $ratingsAverage
     */
    private $ratingsAverage = null;

    /**
     * @var string $customAttributes
     */
    private $customAttributes = null;

    /**
     * @var string $hotSpots
     */
    private $hotSpots = null;

    /**
     * @var string $metaRating
     */
    private $metaRating = null;

    /**
     * @var string $closedPeriods
     */
    private $closedPeriods = null;

    /**
     * @var string $handicapFacilities
     */
    private $handicapFacilities = null;

    /**
     * @var string $handicapClassifications
     */
    private $handicapClassifications = null;

    /**
     * @var string $gTC
     */
    private $gTC = null;

    /**
     * @var string $qualityDetails
     */
    private $qualityDetails = null;

    /**
     * @var string $housePackageMasters
     */
    private $housePackageMasters = null;

    /**
     * @var string $cancellationPaymentInfo
     */
    private $cancellationPaymentInfo = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDChangedServicesType $services
     */
    private $services = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDChangedAdditionalServicesType $additionalServices
     */
    private $additionalServices = null;

    public function __construct(string $details = null, string $customAttributes = null, string $cancellationPaymentInfo = null, string $descriptions = null, string $links = null, string $facilities = null, $addresses = null, $ratingsAverage = null, string $documents = null, string $metaRating = null, string $hotSpots = null, string $closedPeriods = null, string $handicapFacilities = null, string $handicapClassifications = null, string $gTC = null, string $qualityDetails = null, string $housePackageMasters = null, \Conecto\FeratelDsi\Dtos\BDChangedServicesType $services = null, \Conecto\FeratelDsi\Dtos\BDChangedAdditionalServicesType $additionalServices = null)
    {
        $this->details = $details;
        $this->documents = $documents;
        $this->descriptions = $descriptions;
        $this->links = $links;
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
        $this->cancellationPaymentInfo = $cancellationPaymentInfo;
        $this->services = $services;
        $this->additionalServices = $additionalServices;
    }

    /**
     * Gets as details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param string $details
     * @return self
     */
    public function setDetails($details)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Gets as documents
     *
     * @return string
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Sets a new documents
     *
     * @param string $documents
     * @return self
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
        return $this;
    }

    /**
     * Gets as descriptions
     *
     * @return string
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * @param string $descriptions
     * @return self
     */
    public function setDescriptions($descriptions)
    {
        $this->descriptions = $descriptions;
        return $this;
    }

    /**
     * Gets as links
     *
     * @return string
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Sets a new links
     *
     * @param string $links
     * @return self
     */
    public function setLinks($links)
    {
        $this->links = $links;
        return $this;
    }

    /**
     * Gets as facilities
     *
     * @return string
     */
    public function getFacilities()
    {
        return $this->facilities;
    }

    /**
     * Sets a new facilities
     *
     * @param string $facilities
     * @return self
     */
    public function setFacilities($facilities)
    {
        $this->facilities = $facilities;
        return $this;
    }

    /**
     * Gets as addresses
     *
     * @return mixed
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Sets a new addresses
     *
     * @param mixed $addresses
     * @return self
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * Gets as ratingsAverage
     *
     * @return mixed
     */
    public function getRatingsAverage()
    {
        return $this->ratingsAverage;
    }

    /**
     * Sets a new ratingsAverage
     *
     * @param mixed $ratingsAverage
     * @return self
     */
    public function setRatingsAverage($ratingsAverage)
    {
        $this->ratingsAverage = $ratingsAverage;
        return $this;
    }

    /**
     * Gets as customAttributes
     *
     * @return string
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * Sets a new customAttributes
     *
     * @param string $customAttributes
     * @return self
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }

    /**
     * Gets as hotSpots
     *
     * @return string
     */
    public function getHotSpots()
    {
        return $this->hotSpots;
    }

    /**
     * Sets a new hotSpots
     *
     * @param string $hotSpots
     * @return self
     */
    public function setHotSpots($hotSpots)
    {
        $this->hotSpots = $hotSpots;
        return $this;
    }

    /**
     * Gets as metaRating
     *
     * @return string
     */
    public function getMetaRating()
    {
        return $this->metaRating;
    }

    /**
     * Sets a new metaRating
     *
     * @param string $metaRating
     * @return self
     */
    public function setMetaRating($metaRating)
    {
        $this->metaRating = $metaRating;
        return $this;
    }

    /**
     * Gets as closedPeriods
     *
     * @return string
     */
    public function getClosedPeriods()
    {
        return $this->closedPeriods;
    }

    /**
     * Sets a new closedPeriods
     *
     * @param string $closedPeriods
     * @return self
     */
    public function setClosedPeriods($closedPeriods)
    {
        $this->closedPeriods = $closedPeriods;
        return $this;
    }

    /**
     * Gets as handicapFacilities
     *
     * @return string
     */
    public function getHandicapFacilities()
    {
        return $this->handicapFacilities;
    }

    /**
     * Sets a new handicapFacilities
     *
     * @param string $handicapFacilities
     * @return self
     */
    public function setHandicapFacilities($handicapFacilities)
    {
        $this->handicapFacilities = $handicapFacilities;
        return $this;
    }

    /**
     * Gets as handicapClassifications
     *
     * @return string
     */
    public function getHandicapClassifications()
    {
        return $this->handicapClassifications;
    }

    /**
     * Sets a new handicapClassifications
     *
     * @param string $handicapClassifications
     * @return self
     */
    public function setHandicapClassifications($handicapClassifications)
    {
        $this->handicapClassifications = $handicapClassifications;
        return $this;
    }

    /**
     * Gets as gTC
     *
     * @return string
     */
    public function getGTC()
    {
        return $this->gTC;
    }

    /**
     * Sets a new gTC
     *
     * @param string $gTC
     * @return self
     */
    public function setGTC($gTC)
    {
        $this->gTC = $gTC;
        return $this;
    }

    /**
     * Gets as qualityDetails
     *
     * @return string
     */
    public function getQualityDetails()
    {
        return $this->qualityDetails;
    }

    /**
     * Sets a new qualityDetails
     *
     * @param string $qualityDetails
     * @return self
     */
    public function setQualityDetails($qualityDetails)
    {
        $this->qualityDetails = $qualityDetails;
        return $this;
    }

    /**
     * Gets as housePackageMasters
     *
     * @return string
     */
    public function getHousePackageMasters()
    {
        return $this->housePackageMasters;
    }

    /**
     * Sets a new housePackageMasters
     *
     * @param string $housePackageMasters
     * @return self
     */
    public function setHousePackageMasters($housePackageMasters)
    {
        $this->housePackageMasters = $housePackageMasters;
        return $this;
    }

    /**
     * Gets as cancellationPaymentInfo
     *
     * @return string
     */
    public function getCancellationPaymentInfo()
    {
        return $this->cancellationPaymentInfo;
    }

    /**
     * Sets a new cancellationPaymentInfo
     *
     * @param string $cancellationPaymentInfo
     * @return self
     */
    public function setCancellationPaymentInfo($cancellationPaymentInfo)
    {
        $this->cancellationPaymentInfo = $cancellationPaymentInfo;
        return $this;
    }

    /**
     * Gets as services
     *
     * @return \Conecto\FeratelDsi\Dtos\BDChangedServicesType
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Sets a new services
     *
     * @param \Conecto\FeratelDsi\Dtos\BDChangedServicesType $services
     * @return self
     */
    public function setServices(?\Conecto\FeratelDsi\Dtos\BDChangedServicesType $services = null)
    {
        $this->services = $services;
        return $this;
    }

    /**
     * Gets as additionalServices
     *
     * @return \Conecto\FeratelDsi\Dtos\BDChangedAdditionalServicesType
     */
    public function getAdditionalServices()
    {
        return $this->additionalServices;
    }

    /**
     * Sets a new additionalServices
     *
     * @param \Conecto\FeratelDsi\Dtos\BDChangedAdditionalServicesType $additionalServices
     * @return self
     */
    public function setAdditionalServices(?\Conecto\FeratelDsi\Dtos\BDChangedAdditionalServicesType $additionalServices = null)
    {
        $this->additionalServices = $additionalServices;
        return $this;
    }
}

