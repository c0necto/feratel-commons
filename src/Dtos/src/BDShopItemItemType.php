<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDShopItemItemType
 *
 *
 * XSD Type: BDShopItemItem
 */
class BDShopItemItemType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDShopItemDetailsType $details
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
     * @var \Conecto\FeratelDsi\Dtos\BDVariationItemType[] $variations
     */
    private $variations = null;

    public function __construct(string $id = null, \Conecto\FeratelDsi\Dtos\BDShopItemDetailsType $details = null, array $documents = null, array $descriptions = null, array $links = null, array $variations = null)
    {
        $this->id = $id;
        $this->details = $details;
        $this->documents = $documents;
        $this->descriptions = $descriptions;
        $this->links = $links;
        $this->variations = $variations;
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
     * Gets as details
     *
     * @return \Conecto\FeratelDsi\Dtos\BDShopItemDetailsType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param \Conecto\FeratelDsi\Dtos\BDShopItemDetailsType $details
     * @return self
     */
    public function setDetails(?\Conecto\FeratelDsi\Dtos\BDShopItemDetailsType $details = null)
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
     * Adds as variation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDVariationItemType $variation
     */
    public function addToVariations(\Conecto\FeratelDsi\Dtos\BDVariationItemType $variation)
    {
        $this->variations[] = $variation;
        return $this;
    }

    /**
     * isset variations
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVariations($index)
    {
        return isset($this->variations[$index]);
    }

    /**
     * unset variations
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVariations($index)
    {
        unset($this->variations[$index]);
    }

    /**
     * Gets as variations
     *
     * @return \Conecto\FeratelDsi\Dtos\BDVariationItemType[]
     */
    public function getVariations()
    {
        return $this->variations;
    }

    /**
     * Sets a new variations
     *
     * @param \Conecto\FeratelDsi\Dtos\BDVariationItemType[] $variations
     * @return self
     */
    public function setVariations(array $variations = null)
    {
        $this->variations = $variations;
        return $this;
    }
}

