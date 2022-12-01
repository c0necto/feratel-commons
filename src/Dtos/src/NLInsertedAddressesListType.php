<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLInsertedAddressesListType
 *
 *
 * XSD Type: NLInsertedAddressesList
 */
class NLInsertedAddressesListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\NLInsertedAddressType[] $insertedAddress
     */
    private $insertedAddress = [
        
    ];

    public function __construct(array $insertedAddress = null)
    {
        $this->insertedAddress = $insertedAddress;
    }

    /**
     * Adds as insertedAddress
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLInsertedAddressType $insertedAddress
     */
    public function addToInsertedAddress(\Conecto\FeratelDsi\Dtos\NLInsertedAddressType $insertedAddress)
    {
        $this->insertedAddress[] = $insertedAddress;
        return $this;
    }

    /**
     * isset insertedAddress
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInsertedAddress($index)
    {
        return isset($this->insertedAddress[$index]);
    }

    /**
     * unset insertedAddress
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInsertedAddress($index)
    {
        unset($this->insertedAddress[$index]);
    }

    /**
     * Gets as insertedAddress
     *
     * @return \Conecto\FeratelDsi\Dtos\NLInsertedAddressType[]
     */
    public function getInsertedAddress()
    {
        return $this->insertedAddress;
    }

    /**
     * Sets a new insertedAddress
     *
     * @param \Conecto\FeratelDsi\Dtos\NLInsertedAddressType[] $insertedAddress
     * @return self
     */
    public function setInsertedAddress(array $insertedAddress = null)
    {
        $this->insertedAddress = $insertedAddress;
        return $this;
    }
}

