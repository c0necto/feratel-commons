<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDServicesType
 *
 * Defines basic data elements for service level requested.
 * XSD Type: BDServicesType
 */
class BDServicesType extends BasicInfoType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $facilities
     */
    private $facilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAvailabilityType $availabilities
     */
    private $availabilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $handicapFacilities
     */
    private $handicapFacilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $handicapClassifications
     */
    private $handicapClassifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDProductsType $products
     */
    private $products = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $roomDetails
     */
    private $roomDetails = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\BasicElementType $facilities = null, \Conecto\FeratelDsi\Dtos\BDAvailabilityType $availabilities = null, \Conecto\FeratelDsi\Dtos\BasicElementType $handicapFacilities = null, \Conecto\FeratelDsi\Dtos\BasicElementType $handicapClassifications = null, \Conecto\FeratelDsi\Dtos\BDProductsType $products = null, \Conecto\FeratelDsi\Dtos\BasicElementType $roomDetails = null, \Conecto\FeratelDsi\Dtos\BasicInfoType\DetailsAType $details = null, \Conecto\FeratelDsi\Dtos\BasicSystemDocumentElementType $documents = null, \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $descriptions = null, \Conecto\FeratelDsi\Dtos\BasicElementLinksType $links = null)
    {
        $this->facilities = $facilities;
        $this->availabilities = $availabilities;
        $this->handicapFacilities = $handicapFacilities;
        $this->handicapClassifications = $handicapClassifications;
        $this->products = $products;
        $this->roomDetails = $roomDetails;
        parent::__construct($details,$documents,$descriptions,$links);
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
     * Gets as availabilities
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAvailabilityType
     */
    public function getAvailabilities()
    {
        return $this->availabilities;
    }

    /**
     * Sets a new availabilities
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAvailabilityType $availabilities
     * @return self
     */
    public function setAvailabilities(?\Conecto\FeratelDsi\Dtos\BDAvailabilityType $availabilities = null)
    {
        $this->availabilities = $availabilities;
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
     * Gets as products
     *
     * @return \Conecto\FeratelDsi\Dtos\BDProductsType
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Sets a new products
     *
     * @param \Conecto\FeratelDsi\Dtos\BDProductsType $products
     * @return self
     */
    public function setProducts(?\Conecto\FeratelDsi\Dtos\BDProductsType $products = null)
    {
        $this->products = $products;
        return $this;
    }

    /**
     * Gets as roomDetails
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicElementType
     */
    public function getRoomDetails()
    {
        return $this->roomDetails;
    }

    /**
     * Sets a new roomDetails
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicElementType $roomDetails
     * @return self
     */
    public function setRoomDetails(?\Conecto\FeratelDsi\Dtos\BasicElementType $roomDetails = null)
    {
        $this->roomDetails = $roomDetails;
        return $this;
    }
}

