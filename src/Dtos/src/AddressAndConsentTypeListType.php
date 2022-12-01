<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing AddressAndConsentTypeListType
 *
 *
 * XSD Type: AddressAndConsentTypeList
 */
class AddressAndConsentTypeListType
{
    /**
     * @var string $addressId
     */
    private $addressId = null;

    /**
     * @var string[] $type
     */
    private $type = null;

    public function __construct(string $addressId = null, array $type = null)
    {
        $this->addressId = $addressId;
        $this->type = $type;
    }

    /**
     * Gets as addressId
     *
     * @return string
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * Sets a new addressId
     *
     * @param string $addressId
     * @return self
     */
    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;
        return $this;
    }

    /**
     * Adds as type
     *
     * @return self
     * @param string $type
     */
    public function addToType($type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * @return string[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType(array $type)
    {
        $this->type = $type;
        return $this;
    }
}

