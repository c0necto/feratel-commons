<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageItemType
 *
 *
 * XSD Type: BDPackageItem
 */
class BDPackageItemType
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
     * @var \Conecto\FeratelDsi\Dtos\BDPackageDetailsType $details
     */
    private $details = null;

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
     * @var \Conecto\FeratelDsi\Dtos\BDPackagePriceItemType[] $prices
     */
    private $prices = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageContentDescriptionItemType[] $contentDescriptions
     */
    private $contentDescriptions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageSectionItemType[] $sections
     */
    private $sections = null;

    public function __construct(string $id = null, \DateTime $changeDate = null, \Conecto\FeratelDsi\Dtos\BDPackageDetailsType $details = null, array $descriptions = null, array $documents = null, array $links = null, array $prices = null, array $contentDescriptions = null, array $sections = null)
    {
        $this->id = $id;
        $this->changeDate = $changeDate;
        $this->details = $details;
        $this->descriptions = $descriptions;
        $this->documents = $documents;
        $this->links = $links;
        $this->prices = $prices;
        $this->contentDescriptions = $contentDescriptions;
        $this->sections = $sections;
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
     * Gets as details
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageDetailsType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageDetailsType $details
     * @return self
     */
    public function setDetails(?\Conecto\FeratelDsi\Dtos\BDPackageDetailsType $details = null)
    {
        $this->details = $details;
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
     * Adds as price
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPackagePriceItemType $price
     */
    public function addToPrices(\Conecto\FeratelDsi\Dtos\BDPackagePriceItemType $price)
    {
        $this->prices[] = $price;
        return $this;
    }

    /**
     * isset prices
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrices($index)
    {
        return isset($this->prices[$index]);
    }

    /**
     * unset prices
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrices($index)
    {
        unset($this->prices[$index]);
    }

    /**
     * Gets as prices
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackagePriceItemType[]
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Sets a new prices
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackagePriceItemType[] $prices
     * @return self
     */
    public function setPrices(array $prices = null)
    {
        $this->prices = $prices;
        return $this;
    }

    /**
     * Adds as contentDescription
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPackageContentDescriptionItemType $contentDescription
     */
    public function addToContentDescriptions(\Conecto\FeratelDsi\Dtos\BDPackageContentDescriptionItemType $contentDescription)
    {
        $this->contentDescriptions[] = $contentDescription;
        return $this;
    }

    /**
     * isset contentDescriptions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContentDescriptions($index)
    {
        return isset($this->contentDescriptions[$index]);
    }

    /**
     * unset contentDescriptions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContentDescriptions($index)
    {
        unset($this->contentDescriptions[$index]);
    }

    /**
     * Gets as contentDescriptions
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageContentDescriptionItemType[]
     */
    public function getContentDescriptions()
    {
        return $this->contentDescriptions;
    }

    /**
     * Sets a new contentDescriptions
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageContentDescriptionItemType[] $contentDescriptions
     * @return self
     */
    public function setContentDescriptions(array $contentDescriptions = null)
    {
        $this->contentDescriptions = $contentDescriptions;
        return $this;
    }

    /**
     * Adds as section
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPackageSectionItemType $section
     */
    public function addToSections(\Conecto\FeratelDsi\Dtos\BDPackageSectionItemType $section)
    {
        $this->sections[] = $section;
        return $this;
    }

    /**
     * isset sections
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSections($index)
    {
        return isset($this->sections[$index]);
    }

    /**
     * unset sections
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSections($index)
    {
        unset($this->sections[$index]);
    }

    /**
     * Gets as sections
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageSectionItemType[]
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * Sets a new sections
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageSectionItemType[] $sections
     * @return self
     */
    public function setSections(array $sections = null)
    {
        $this->sections = $sections;
        return $this;
    }
}

