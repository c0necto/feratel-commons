<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDInfrastructureItemType
 *
 *
 * XSD Type: BDInfrastructureItem
 */
class BDInfrastructureItemType
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
     * @var string $systems
     */
    private $systems = null;

    /**
     * @var string $systemId
     */
    private $systemId = null;

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
     * @var \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType $details
     */
    private $details = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAddressType[] $addresses
     */
    private $addresses = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\DescriptionType[] $descriptions
     */
    private $descriptions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\DocumentType[] $documents
     */
    private $documents = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LinkType[] $links
     */
    private $links = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\FacilityItemListType $facilities
     */
    private $facilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDHotSpotsListType $hotSpots
     */
    private $hotSpots = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CustomAttributeListType $customAttributes
     */
    private $customAttributes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\HandicapFacilitiesItemListType $handicapFacilities
     */
    private $handicapFacilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDHandicapClassificationsType $handicapClassifications
     */
    private $handicapClassifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDInfrastructureQualityDetailsType $qualityDetails
     */
    private $qualityDetails = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAnnotationsItemType[] $annotations
     */
    private $annotations = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDGuestCardAssignmentsItemType[] $guestCards
     */
    private $guestCards = null;

    public function __construct(string $id = null, \DateTime $changeDate = null, string $systems = null, string $systemId = null, string $cCId = null, string $cCAuthor = null, string $cCCopyright = null, \DateTime $cCChangeDate = null, \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType $details = null, array $addresses = null, array $descriptions = null, array $documents = null, array $links = null, \Conecto\FeratelDsi\Dtos\FacilityItemListType $facilities = null, \Conecto\FeratelDsi\Dtos\BDHotSpotsListType $hotSpots = null, \Conecto\FeratelDsi\Dtos\CustomAttributeListType $customAttributes = null, \Conecto\FeratelDsi\Dtos\HandicapFacilitiesItemListType $handicapFacilities = null, \Conecto\FeratelDsi\Dtos\BDHandicapClassificationsType $handicapClassifications = null, \Conecto\FeratelDsi\Dtos\BDInfrastructureQualityDetailsType $qualityDetails = null, array $annotations = null, array $guestCards = null)
    {
        $this->id = $id;
        $this->changeDate = $changeDate;
        $this->systems = $systems;
        $this->systemId = $systemId;
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
        $this->hotSpots = $hotSpots;
        $this->customAttributes = $customAttributes;
        $this->handicapFacilities = $handicapFacilities;
        $this->handicapClassifications = $handicapClassifications;
        $this->qualityDetails = $qualityDetails;
        $this->annotations = $annotations;
        $this->guestCards = $guestCards;
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
     * Gets as systems
     *
     * @return string
     */
    public function getSystems()
    {
        return $this->systems;
    }

    /**
     * Sets a new systems
     *
     * @param string $systems
     * @return self
     */
    public function setSystems($systems)
    {
        $this->systems = $systems;
        return $this;
    }

    /**
     * Gets as systemId
     *
     * @return string
     */
    public function getSystemId()
    {
        return $this->systemId;
    }

    /**
     * Sets a new systemId
     *
     * @param string $systemId
     * @return self
     */
    public function setSystemId($systemId)
    {
        $this->systemId = $systemId;
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
     * @return \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType $details
     * @return self
     */
    public function setDetails(?\Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType $details = null)
    {
        $this->details = $details;
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
     * Gets as qualityDetails
     *
     * @return \Conecto\FeratelDsi\Dtos\BDInfrastructureQualityDetailsType
     */
    public function getQualityDetails()
    {
        return $this->qualityDetails;
    }

    /**
     * Sets a new qualityDetails
     *
     * @param \Conecto\FeratelDsi\Dtos\BDInfrastructureQualityDetailsType $qualityDetails
     * @return self
     */
    public function setQualityDetails(?\Conecto\FeratelDsi\Dtos\BDInfrastructureQualityDetailsType $qualityDetails = null)
    {
        $this->qualityDetails = $qualityDetails;
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
     * Adds as guestCard
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDGuestCardAssignmentsItemType $guestCard
     */
    public function addToGuestCards(\Conecto\FeratelDsi\Dtos\BDGuestCardAssignmentsItemType $guestCard)
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
     * @return \Conecto\FeratelDsi\Dtos\BDGuestCardAssignmentsItemType[]
     */
    public function getGuestCards()
    {
        return $this->guestCards;
    }

    /**
     * Sets a new guestCards
     *
     * @param \Conecto\FeratelDsi\Dtos\BDGuestCardAssignmentsItemType[] $guestCards
     * @return self
     */
    public function setGuestCards(array $guestCards = null)
    {
        $this->guestCards = $guestCards;
        return $this;
    }
}

