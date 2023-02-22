<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDChangedEventsType
 *
 *
 * XSD Type: BDChangedEventsType
 */
class BDChangedEventsType
{
    /**
     * @var mixed $details
     */
    private $details = null;

    /**
     * @var mixed $documents
     */
    private $documents = null;

    /**
     * @var mixed $descriptions
     */
    private $descriptions = null;

    /**
     * @var mixed $links
     */
    private $links = null;

    /**
     * @var mixed $facilities
     */
    private $facilities = null;

    /**
     * @var mixed $addresses
     */
    private $addresses = null;

    /**
     * @var mixed $customAttributes
     */
    private $customAttributes = null;

    /**
     * @var mixed $handicapFacilities
     */
    private $handicapFacilities = null;

    /**
     * @var mixed $handicapClassifications
     */
    private $handicapClassifications = null;

    /**
     * @var mixed $guestCards
     */
    private $guestCards = null;

    public function __construct(mixed $details = null, mixed $documents = null, mixed $descriptions = null, mixed $links = null, mixed $facilities = null, mixed $addresses = null, mixed $customAttributes = null, mixed $handicapFacilities = null, mixed $handicapClassifications = null, mixed $guestCards = null)
    {
        $this->details = $details;
        $this->documents = $documents;
        $this->descriptions = $descriptions;
        $this->links = $links;
        $this->facilities = $facilities;
        $this->addresses = $addresses;
        $this->customAttributes = $customAttributes;
        $this->handicapFacilities = $handicapFacilities;
        $this->handicapClassifications = $handicapClassifications;
        $this->guestCards = $guestCards;
    }

    /**
     * Gets as details
     *
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param mixed $details
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
     * @return mixed
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Sets a new documents
     *
     * @param mixed $documents
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
     * @return mixed
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * @param mixed $descriptions
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
     * @return mixed
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Sets a new links
     *
     * @param mixed $links
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
     * @return mixed
     */
    public function getFacilities()
    {
        return $this->facilities;
    }

    /**
     * Sets a new facilities
     *
     * @param mixed $facilities
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
     * Gets as customAttributes
     *
     * @return mixed
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * Sets a new customAttributes
     *
     * @param mixed $customAttributes
     * @return self
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }

    /**
     * Gets as handicapFacilities
     *
     * @return mixed
     */
    public function getHandicapFacilities()
    {
        return $this->handicapFacilities;
    }

    /**
     * Sets a new handicapFacilities
     *
     * @param mixed $handicapFacilities
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
     * @return mixed
     */
    public function getHandicapClassifications()
    {
        return $this->handicapClassifications;
    }

    /**
     * Sets a new handicapClassifications
     *
     * @param mixed $handicapClassifications
     * @return self
     */
    public function setHandicapClassifications($handicapClassifications)
    {
        $this->handicapClassifications = $handicapClassifications;
        return $this;
    }

    /**
     * Gets as guestCards
     *
     * @return mixed
     */
    public function getGuestCards()
    {
        return $this->guestCards;
    }

    /**
     * Sets a new guestCards
     *
     * @param mixed $guestCards
     * @return self
     */
    public function setGuestCards($guestCards)
    {
        $this->guestCards = $guestCards;
        return $this;
    }
}

