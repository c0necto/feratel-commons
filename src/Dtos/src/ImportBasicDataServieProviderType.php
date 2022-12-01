<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ImportBasicDataServieProviderType
 *
 *
 * XSD Type: ImportBasicDataServieProvider
 */
class ImportBasicDataServieProviderType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\STUItemResponseType $details
     */
    private $details = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\STUItemResponseType $classifications
     */
    private $classifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\STUItemResponseType $categories
     */
    private $categories = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\STUItemResponseType $facilities
     */
    private $facilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\STUAddressResponseType[] $addresses
     */
    private $addresses = null;

    public function __construct(string $id = null, \Conecto\FeratelDsi\Dtos\STUItemResponseType $details = null, \Conecto\FeratelDsi\Dtos\STUItemResponseType $classifications = null, \Conecto\FeratelDsi\Dtos\STUItemResponseType $categories = null, \Conecto\FeratelDsi\Dtos\STUItemResponseType $facilities = null, array $addresses = null)
    {
        $this->id = $id;
        $this->details = $details;
        $this->classifications = $classifications;
        $this->categories = $categories;
        $this->facilities = $facilities;
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
     * Gets as details
     *
     * @return \Conecto\FeratelDsi\Dtos\STUItemResponseType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param \Conecto\FeratelDsi\Dtos\STUItemResponseType $details
     * @return self
     */
    public function setDetails(?\Conecto\FeratelDsi\Dtos\STUItemResponseType $details = null)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Gets as classifications
     *
     * @return \Conecto\FeratelDsi\Dtos\STUItemResponseType
     */
    public function getClassifications()
    {
        return $this->classifications;
    }

    /**
     * Sets a new classifications
     *
     * @param \Conecto\FeratelDsi\Dtos\STUItemResponseType $classifications
     * @return self
     */
    public function setClassifications(?\Conecto\FeratelDsi\Dtos\STUItemResponseType $classifications = null)
    {
        $this->classifications = $classifications;
        return $this;
    }

    /**
     * Gets as categories
     *
     * @return \Conecto\FeratelDsi\Dtos\STUItemResponseType
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets a new categories
     *
     * @param \Conecto\FeratelDsi\Dtos\STUItemResponseType $categories
     * @return self
     */
    public function setCategories(?\Conecto\FeratelDsi\Dtos\STUItemResponseType $categories = null)
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * Gets as facilities
     *
     * @return \Conecto\FeratelDsi\Dtos\STUItemResponseType
     */
    public function getFacilities()
    {
        return $this->facilities;
    }

    /**
     * Sets a new facilities
     *
     * @param \Conecto\FeratelDsi\Dtos\STUItemResponseType $facilities
     * @return self
     */
    public function setFacilities(?\Conecto\FeratelDsi\Dtos\STUItemResponseType $facilities = null)
    {
        $this->facilities = $facilities;
        return $this;
    }

    /**
     * Adds as address
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\STUAddressResponseType $address
     */
    public function addToAddresses(\Conecto\FeratelDsi\Dtos\STUAddressResponseType $address)
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
     * @return \Conecto\FeratelDsi\Dtos\STUAddressResponseType[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Sets a new addresses
     *
     * @param \Conecto\FeratelDsi\Dtos\STUAddressResponseType[] $addresses
     * @return self
     */
    public function setAddresses(array $addresses = null)
    {
        $this->addresses = $addresses;
        return $this;
    }
}

