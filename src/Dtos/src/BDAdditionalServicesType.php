<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDAdditionalServicesType
 *
 *
 * XSD Type: BDAdditionalServicesType
 */
class BDAdditionalServicesType extends BasicInfoType
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
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $handicapClassifications
     */
    private $handicapClassifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $guestCards
     */
    private $guestCards = null;

    /**
     * Provides parameters information for product level for request of basic data.
     *
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalProductsType $additionalProducts
     */
    private $additionalProducts = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\BasicElementType $facilities = null, \Conecto\FeratelDsi\Dtos\BDAvailabilityType $availabilities = null, \Conecto\FeratelDsi\Dtos\BasicElementType $handicapClassifications = null, \Conecto\FeratelDsi\Dtos\BasicElementType $guestCards = null, \Conecto\FeratelDsi\Dtos\BDAdditionalProductsType $additionalProducts = null, \Conecto\FeratelDsi\Dtos\BasicInfoType\DetailsAType $details = null, \Conecto\FeratelDsi\Dtos\BasicSystemDocumentElementType $documents = null, \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $descriptions = null, \Conecto\FeratelDsi\Dtos\BasicElementLinksType $links = null)
    {
        $this->facilities = $facilities;
        $this->availabilities = $availabilities;
        $this->handicapClassifications = $handicapClassifications;
        $this->guestCards = $guestCards;
        $this->additionalProducts = $additionalProducts;
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
     * Gets as guestCards
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicElementType
     */
    public function getGuestCards()
    {
        return $this->guestCards;
    }

    /**
     * Sets a new guestCards
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicElementType $guestCards
     * @return self
     */
    public function setGuestCards(?\Conecto\FeratelDsi\Dtos\BasicElementType $guestCards = null)
    {
        $this->guestCards = $guestCards;
        return $this;
    }

    /**
     * Gets as additionalProducts
     *
     * Provides parameters information for product level for request of basic data.
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalProductsType
     */
    public function getAdditionalProducts()
    {
        return $this->additionalProducts;
    }

    /**
     * Sets a new additionalProducts
     *
     * Provides parameters information for product level for request of basic data.
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalProductsType $additionalProducts
     * @return self
     */
    public function setAdditionalProducts(?\Conecto\FeratelDsi\Dtos\BDAdditionalProductsType $additionalProducts = null)
    {
        $this->additionalProducts = $additionalProducts;
        return $this;
    }
}

