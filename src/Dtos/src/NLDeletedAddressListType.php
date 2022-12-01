<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLDeletedAddressListType
 *
 *
 * XSD Type: NLDeletedAddressList
 */
class NLDeletedAddressListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\NLDeletedAddressType[] $deletedAddress
     */
    private $deletedAddress = [
        
    ];

    public function __construct(array $deletedAddress = null)
    {
        $this->deletedAddress = $deletedAddress;
    }

    /**
     * Adds as deletedAddress
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLDeletedAddressType $deletedAddress
     */
    public function addToDeletedAddress(\Conecto\FeratelDsi\Dtos\NLDeletedAddressType $deletedAddress)
    {
        $this->deletedAddress[] = $deletedAddress;
        return $this;
    }

    /**
     * isset deletedAddress
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeletedAddress($index)
    {
        return isset($this->deletedAddress[$index]);
    }

    /**
     * unset deletedAddress
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeletedAddress($index)
    {
        unset($this->deletedAddress[$index]);
    }

    /**
     * Gets as deletedAddress
     *
     * @return \Conecto\FeratelDsi\Dtos\NLDeletedAddressType[]
     */
    public function getDeletedAddress()
    {
        return $this->deletedAddress;
    }

    /**
     * Sets a new deletedAddress
     *
     * @param \Conecto\FeratelDsi\Dtos\NLDeletedAddressType[] $deletedAddress
     * @return self
     */
    public function setDeletedAddress(array $deletedAddress = null)
    {
        $this->deletedAddress = $deletedAddress;
        return $this;
    }
}

