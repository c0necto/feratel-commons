<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDAdditionalServiceItemType
 *
 *
 * XSD Type: BDAdditionalServiceItem
 */
class BDAdditionalServiceItemType
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
     * @var bool $needAcco
     */
    private $needAcco = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType $details
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
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalServiceAvailabilityListType $availabilities
     */
    private $availabilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDHandicapClassificationsType $handicapClassifications
     */
    private $handicapClassifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDGuestCardAssignmentsItemType[] $guestCards
     */
    private $guestCards = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalProductItemType[] $products
     */
    private $products = null;

    public function __construct(string $id = null, \DateTime $changeDate = null, bool $needAcco = null, \Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType $details = null, array $documents = null, array $descriptions = null, array $links = null, \Conecto\FeratelDsi\Dtos\FacilityItemListType $facilities = null, \Conecto\FeratelDsi\Dtos\BDAdditionalServiceAvailabilityListType $availabilities = null, \Conecto\FeratelDsi\Dtos\BDHandicapClassificationsType $handicapClassifications = null, array $guestCards = null, array $products = null)
    {
        $this->id = $id;
        $this->changeDate = $changeDate;
        $this->needAcco = $needAcco;
        $this->details = $details;
        $this->documents = $documents;
        $this->descriptions = $descriptions;
        $this->links = $links;
        $this->facilities = $facilities;
        $this->availabilities = $availabilities;
        $this->handicapClassifications = $handicapClassifications;
        $this->guestCards = $guestCards;
        $this->products = $products;
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
     * Gets as needAcco
     *
     * @return bool
     */
    public function getNeedAcco()
    {
        return $this->needAcco;
    }

    /**
     * Sets a new needAcco
     *
     * @param bool $needAcco
     * @return self
     */
    public function setNeedAcco($needAcco)
    {
        $this->needAcco = $needAcco;
        return $this;
    }

    /**
     * Gets as details
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType $details
     * @return self
     */
    public function setDetails(?\Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType $details = null)
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
     * Gets as availabilities
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalServiceAvailabilityListType
     */
    public function getAvailabilities()
    {
        return $this->availabilities;
    }

    /**
     * Sets a new availabilities
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalServiceAvailabilityListType $availabilities
     * @return self
     */
    public function setAvailabilities(?\Conecto\FeratelDsi\Dtos\BDAdditionalServiceAvailabilityListType $availabilities = null)
    {
        $this->availabilities = $availabilities;
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

    /**
     * Adds as product
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalProductItemType $product
     */
    public function addToProducts(\Conecto\FeratelDsi\Dtos\BDAdditionalProductItemType $product)
    {
        $this->products[] = $product;
        return $this;
    }

    /**
     * isset products
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProducts($index)
    {
        return isset($this->products[$index]);
    }

    /**
     * unset products
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProducts($index)
    {
        unset($this->products[$index]);
    }

    /**
     * Gets as products
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalProductItemType[]
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Sets a new products
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalProductItemType[] $products
     * @return self
     */
    public function setProducts(array $products = null)
    {
        $this->products = $products;
        return $this;
    }
}

