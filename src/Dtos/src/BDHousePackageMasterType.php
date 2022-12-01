<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDHousePackageMasterType
 *
 *
 * XSD Type: BDHousePackageMasterType
 */
class BDHousePackageMasterType
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
     * @var \Conecto\FeratelDsi\Dtos\BDHousePackageMasterDetailsType $details
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
     * @var \Conecto\FeratelDsi\Dtos\BDHousePackageMasterType\AssignedProductsAType\AssignedProductAType[] $assignedProducts
     */
    private $assignedProducts = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAddressType[] $addresses
     */
    private $addresses = null;

    public function __construct(string $id = null, \DateTime $changeDate = null, \Conecto\FeratelDsi\Dtos\BDHousePackageMasterDetailsType $details = null, array $descriptions = null, array $documents = null, array $links = null, array $assignedProducts = null, array $addresses = null)
    {
        $this->id = $id;
        $this->changeDate = $changeDate;
        $this->details = $details;
        $this->descriptions = $descriptions;
        $this->documents = $documents;
        $this->links = $links;
        $this->assignedProducts = $assignedProducts;
        $this->addresses = $addresses;
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
     * @return \Conecto\FeratelDsi\Dtos\BDHousePackageMasterDetailsType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param \Conecto\FeratelDsi\Dtos\BDHousePackageMasterDetailsType $details
     * @return self
     */
    public function setDetails(\Conecto\FeratelDsi\Dtos\BDHousePackageMasterDetailsType $details)
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
     * Adds as assignedProduct
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDHousePackageMasterType\AssignedProductsAType\AssignedProductAType $assignedProduct
     */
    public function addToAssignedProducts(\Conecto\FeratelDsi\Dtos\BDHousePackageMasterType\AssignedProductsAType\AssignedProductAType $assignedProduct)
    {
        $this->assignedProducts[] = $assignedProduct;
        return $this;
    }

    /**
     * isset assignedProducts
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAssignedProducts($index)
    {
        return isset($this->assignedProducts[$index]);
    }

    /**
     * unset assignedProducts
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAssignedProducts($index)
    {
        unset($this->assignedProducts[$index]);
    }

    /**
     * Gets as assignedProducts
     *
     * @return \Conecto\FeratelDsi\Dtos\BDHousePackageMasterType\AssignedProductsAType\AssignedProductAType[]
     */
    public function getAssignedProducts()
    {
        return $this->assignedProducts;
    }

    /**
     * Sets a new assignedProducts
     *
     * @param \Conecto\FeratelDsi\Dtos\BDHousePackageMasterType\AssignedProductsAType\AssignedProductAType[] $assignedProducts
     * @return self
     */
    public function setAssignedProducts(array $assignedProducts = null)
    {
        $this->assignedProducts = $assignedProducts;
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
}

