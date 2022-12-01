<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDInfrastructureType
 *
 *
 * XSD Type: BDInfrastructureType
 */
class BDInfrastructureType
{
    /**
     * @var bool $showDataOwner
     */
    private $showDataOwner = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDInfrastructureType\DetailsAType $details
     */
    private $details = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicSystemDocumentElementType $documents
     */
    private $documents = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $descriptions
     */
    private $descriptions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementLinksType $links
     */
    private $links = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $facilities
     */
    private $facilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $addresses
     */
    private $addresses = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $hotSpots
     */
    private $hotSpots = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $customAttributes
     */
    private $customAttributes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $handicapFacilities
     */
    private $handicapFacilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $handicapClassifications
     */
    private $handicapClassifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $qualityDetails
     */
    private $qualityDetails = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAnnotationsType $annotations
     */
    private $annotations = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $guestCards
     */
    private $guestCards = null;

    public function __construct(bool $showDataOwner = null, \Conecto\FeratelDsi\Dtos\BDInfrastructureType\DetailsAType $details = null, \Conecto\FeratelDsi\Dtos\BasicSystemDocumentElementType $documents = null, \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $descriptions = null, \Conecto\FeratelDsi\Dtos\BasicElementLinksType $links = null, \Conecto\FeratelDsi\Dtos\BasicElementType $facilities = null, \Conecto\FeratelDsi\Dtos\BasicElementType $addresses = null, \Conecto\FeratelDsi\Dtos\BasicElementType $hotSpots = null, \Conecto\FeratelDsi\Dtos\BasicElementType $customAttributes = null, \Conecto\FeratelDsi\Dtos\BasicElementType $handicapFacilities = null, \Conecto\FeratelDsi\Dtos\BasicElementType $handicapClassifications = null, \Conecto\FeratelDsi\Dtos\BasicElementType $qualityDetails = null, \Conecto\FeratelDsi\Dtos\BDAnnotationsType $annotations = null, \Conecto\FeratelDsi\Dtos\BasicElementType $guestCards = null)
    {
        $this->showDataOwner = $showDataOwner;
        $this->details = $details;
        $this->documents = $documents;
        $this->descriptions = $descriptions;
        $this->links = $links;
        $this->facilities = $facilities;
        $this->addresses = $addresses;
        $this->hotSpots = $hotSpots;
        $this->customAttributes = $customAttributes;
        $this->handicapFacilities = $handicapFacilities;
        $this->handicapClassifications = $handicapClassifications;
        $this->qualityDetails = $qualityDetails;
        $this->annotations = $annotations;
        $this->guestCards = $guestCards;
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
     * Gets as details
     *
     * @return \Conecto\FeratelDsi\Dtos\BDInfrastructureType\DetailsAType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param \Conecto\FeratelDsi\Dtos\BDInfrastructureType\DetailsAType $details
     * @return self
     */
    public function setDetails(?\Conecto\FeratelDsi\Dtos\BDInfrastructureType\DetailsAType $details = null)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Gets as documents
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicSystemDocumentElementType
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Sets a new documents
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicSystemDocumentElementType $documents
     * @return self
     */
    public function setDocuments(?\Conecto\FeratelDsi\Dtos\BasicSystemDocumentElementType $documents = null)
    {
        $this->documents = $documents;
        return $this;
    }

    /**
     * Gets as descriptions
     *
     * @return \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * @param \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $descriptions
     * @return self
     */
    public function setDescriptions(?\Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $descriptions = null)
    {
        $this->descriptions = $descriptions;
        return $this;
    }

    /**
     * Gets as links
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicElementLinksType
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Sets a new links
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicElementLinksType $links
     * @return self
     */
    public function setLinks(?\Conecto\FeratelDsi\Dtos\BasicElementLinksType $links = null)
    {
        $this->links = $links;
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
     * @return \Conecto\FeratelDsi\Dtos\BasicElementType
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Sets a new addresses
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicElementType $addresses
     * @return self
     */
    public function setAddresses(?\Conecto\FeratelDsi\Dtos\BasicElementType $addresses = null)
    {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * Gets as hotSpots
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicElementType
     */
    public function getHotSpots()
    {
        return $this->hotSpots;
    }

    /**
     * Sets a new hotSpots
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicElementType $hotSpots
     * @return self
     */
    public function setHotSpots(?\Conecto\FeratelDsi\Dtos\BasicElementType $hotSpots = null)
    {
        $this->hotSpots = $hotSpots;
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
}

