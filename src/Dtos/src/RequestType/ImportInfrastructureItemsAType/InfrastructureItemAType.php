<?php

namespace Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType;

/**
 * Class representing InfrastructureItemAType
 */
class InfrastructureItemAType
{
    /**
     * @var string $partnerId
     */
    private $partnerId = null;

    /**
     * @var \DateTime $partnerChangeDate
     */
    private $partnerChangeDate = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType $details
     */
    private $details = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\AddressesAType\AddressAType[] $addresses
     */
    private $addresses = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DescriptionsAType\DescriptionAType[] $descriptions
     */
    private $descriptions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DocumentsAType\DocumentAType[] $documents
     */
    private $documents = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\LinksAType\LinkAType[] $links
     */
    private $links = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $facilities
     */
    private $facilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\HotSpotsAType\HotSpotAType[] $hotSpots
     */
    private $hotSpots = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\GuestCardsAType\GuestCardAType[] $guestCards
     */
    private $guestCards = null;

    public function __construct(string $partnerId = null, \DateTime $partnerChangeDate = null, \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType $details = null, array $addresses = null, array $descriptions = null, array $documents = null, array $links = null, array $facilities = null, array $hotSpots = null, array $guestCards = null)
    {
        $this->partnerId = $partnerId;
        $this->partnerChangeDate = $partnerChangeDate;
        $this->details = $details;
        $this->addresses = $addresses;
        $this->descriptions = $descriptions;
        $this->documents = $documents;
        $this->links = $links;
        $this->facilities = $facilities;
        $this->hotSpots = $hotSpots;
        $this->guestCards = $guestCards;
    }

    /**
     * Gets as partnerId
     *
     * @return string
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * Sets a new partnerId
     *
     * @param string $partnerId
     * @return self
     */
    public function setPartnerId($partnerId)
    {
        $this->partnerId = $partnerId;
        return $this;
    }

    /**
     * Gets as partnerChangeDate
     *
     * @return \DateTime
     */
    public function getPartnerChangeDate()
    {
        return $this->partnerChangeDate;
    }

    /**
     * Sets a new partnerChangeDate
     *
     * @param \DateTime $partnerChangeDate
     * @return self
     */
    public function setPartnerChangeDate(\DateTime $partnerChangeDate)
    {
        $this->partnerChangeDate = $partnerChangeDate;
        return $this;
    }

    /**
     * Gets as details
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType $details
     * @return self
     */
    public function setDetails(\Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType $details)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Adds as address
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\AddressesAType\AddressAType $address
     */
    public function addToAddresses(\Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\AddressesAType\AddressAType $address)
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
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\AddressesAType\AddressAType[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Sets a new addresses
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\AddressesAType\AddressAType[] $addresses
     * @return self
     */
    public function setAddresses(array $addresses = null)
    {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * Adds as description
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DescriptionsAType\DescriptionAType $description
     */
    public function addToDescriptions(\Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DescriptionsAType\DescriptionAType $description)
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
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DescriptionsAType\DescriptionAType[]
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DescriptionsAType\DescriptionAType[] $descriptions
     * @return self
     */
    public function setDescriptions(array $descriptions = null)
    {
        $this->descriptions = $descriptions;
        return $this;
    }

    /**
     * Adds as document
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DocumentsAType\DocumentAType $document
     */
    public function addToDocuments(\Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DocumentsAType\DocumentAType $document)
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
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DocumentsAType\DocumentAType[]
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Sets a new documents
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DocumentsAType\DocumentAType[] $documents
     * @return self
     */
    public function setDocuments(array $documents = null)
    {
        $this->documents = $documents;
        return $this;
    }

    /**
     * Adds as link
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\LinksAType\LinkAType $link
     */
    public function addToLinks(\Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\LinksAType\LinkAType $link)
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
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\LinksAType\LinkAType[]
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Sets a new links
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\LinksAType\LinkAType[] $links
     * @return self
     */
    public function setLinks(array $links = null)
    {
        $this->links = $links;
        return $this;
    }

    /**
     * Adds as facility
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $facility
     */
    public function addToFacilities(\Conecto\FeratelDsi\Dtos\ItemType $facility)
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
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getFacilities()
    {
        return $this->facilities;
    }

    /**
     * Sets a new facilities
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $facilities
     * @return self
     */
    public function setFacilities(array $facilities = null)
    {
        $this->facilities = $facilities;
        return $this;
    }

    /**
     * Adds as hotSpot
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\HotSpotsAType\HotSpotAType $hotSpot
     */
    public function addToHotSpots(\Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\HotSpotsAType\HotSpotAType $hotSpot)
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
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\HotSpotsAType\HotSpotAType[]
     */
    public function getHotSpots()
    {
        return $this->hotSpots;
    }

    /**
     * Sets a new hotSpots
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\HotSpotsAType\HotSpotAType[] $hotSpots
     * @return self
     */
    public function setHotSpots(array $hotSpots = null)
    {
        $this->hotSpots = $hotSpots;
        return $this;
    }

    /**
     * Adds as guestCard
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\GuestCardsAType\GuestCardAType $guestCard
     */
    public function addToGuestCards(\Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\GuestCardsAType\GuestCardAType $guestCard)
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
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\GuestCardsAType\GuestCardAType[]
     */
    public function getGuestCards()
    {
        return $this->guestCards;
    }

    /**
     * Sets a new guestCards
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\GuestCardsAType\GuestCardAType[] $guestCards
     * @return self
     */
    public function setGuestCards(array $guestCards = null)
    {
        $this->guestCards = $guestCards;
        return $this;
    }
}

