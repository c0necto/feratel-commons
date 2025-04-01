<?php

namespace Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType;

/**
 * Class representing EventAType
 */
class EventAType
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
     * @var string $cCId
     */
    private $cCId = null;

    /**
     * @var string $cCAuthor
     */
    private $cCAuthor = null;

    /**
     * @var string $cCCopyright
     */
    private $cCCopyright = null;

    /**
     * @var \DateTime $cCChangeDate
     */
    private $cCChangeDate = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType $details
     */
    private $details = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\AddressesAType\AddressAType[] $addresses
     */
    private $addresses = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DescriptionsAType\DescriptionAType[] $descriptions
     */
    private $descriptions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DocumentsAType\DocumentAType[] $documents
     */
    private $documents = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\LinksAType\LinkAType[] $links
     */
    private $links = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $facilities
     */
    private $facilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\GuestCardsType\GuestCardAType[] $guestCards
     */
    private $guestCards = null;

    public function __construct(string $partnerId = null, \DateTime $partnerChangeDate = null, string $cCId = null, string $cCAuthor = null, string $cCCopyright = null, \DateTime $cCChangeDate = null, \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType $details = null, array $addresses = null, array $descriptions = null, array $documents = null, array $links = null, array $facilities = null, array $guestCards = null)
    {
        $this->partnerId = $partnerId;
        $this->partnerChangeDate = $partnerChangeDate;
        $this->cCId = $cCId;
        $this->cCAuthor = $cCAuthor;
        $this->cCCopyright = $cCCopyright;
        $this->cCChangeDate = $cCChangeDate;
        $this->details = $details;
        $this->addresses = $addresses;
        $this->descriptions = $descriptions;
        $this->documents = $documents;
        $this->links = $links;
        $this->facilities = $facilities;
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
     * Gets as cCId
     *
     * @return string
     */
    public function getCCId()
    {
        return $this->cCId;
    }

    /**
     * Sets a new cCId
     *
     * @param string $cCId
     * @return self
     */
    public function setCCId($cCId)
    {
        $this->cCId = $cCId;
        return $this;
    }

    /**
     * Gets as cCAuthor
     *
     * @return string
     */
    public function getCCAuthor()
    {
        return $this->cCAuthor;
    }

    /**
     * Sets a new cCAuthor
     *
     * @param string $cCAuthor
     * @return self
     */
    public function setCCAuthor($cCAuthor)
    {
        $this->cCAuthor = $cCAuthor;
        return $this;
    }

    /**
     * Gets as cCCopyright
     *
     * @return string
     */
    public function getCCCopyright()
    {
        return $this->cCCopyright;
    }

    /**
     * Sets a new cCCopyright
     *
     * @param string $cCCopyright
     * @return self
     */
    public function setCCCopyright($cCCopyright)
    {
        $this->cCCopyright = $cCCopyright;
        return $this;
    }

    /**
     * Gets as cCChangeDate
     *
     * @return \DateTime
     */
    public function getCCChangeDate()
    {
        return $this->cCChangeDate;
    }

    /**
     * Sets a new cCChangeDate
     *
     * @param \DateTime $cCChangeDate
     * @return self
     */
    public function setCCChangeDate(\DateTime $cCChangeDate)
    {
        $this->cCChangeDate = $cCChangeDate;
        return $this;
    }

    /**
     * Gets as details
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType $details
     * @return self
     */
    public function setDetails(\Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType $details)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Adds as address
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\AddressesAType\AddressAType $address
     */
    public function addToAddresses(\Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\AddressesAType\AddressAType $address)
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
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\AddressesAType\AddressAType[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Sets a new addresses
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\AddressesAType\AddressAType[] $addresses
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
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DescriptionsAType\DescriptionAType $description
     */
    public function addToDescriptions(\Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DescriptionsAType\DescriptionAType $description)
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
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DescriptionsAType\DescriptionAType[]
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DescriptionsAType\DescriptionAType[] $descriptions
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
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DocumentsAType\DocumentAType $document
     */
    public function addToDocuments(\Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DocumentsAType\DocumentAType $document)
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
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DocumentsAType\DocumentAType[]
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Sets a new documents
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DocumentsAType\DocumentAType[] $documents
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
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\LinksAType\LinkAType $link
     */
    public function addToLinks(\Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\LinksAType\LinkAType $link)
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
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\LinksAType\LinkAType[]
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Sets a new links
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\LinksAType\LinkAType[] $links
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
     * Adds as guestCard
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\GuestCardsType\GuestCardAType $guestCard
     */
    public function addToGuestCards(\Conecto\FeratelDsi\Dtos\GuestCardsType\GuestCardAType $guestCard)
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
     * @return \Conecto\FeratelDsi\Dtos\GuestCardsType\GuestCardAType[]
     */
    public function getGuestCards()
    {
        return $this->guestCards;
    }

    /**
     * Sets a new guestCards
     *
     * @param \Conecto\FeratelDsi\Dtos\GuestCardsType\GuestCardAType[] $guestCards
     * @return self
     */
    public function setGuestCards(array $guestCards = null)
    {
        $this->guestCards = $guestCards;
        return $this;
    }
}

