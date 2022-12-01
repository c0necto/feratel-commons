<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ImportSPAddressesListType
 *
 *
 * XSD Type: ImportSPAddressesList
 */
class ImportSPAddressesListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ImportSPAddressesType[] $address
     */
    private $address = [
        
    ];

    public function __construct(array $address = null)
    {
        $this->address = $address;
    }

    /**
     * Adds as address
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ImportSPAddressesType $address
     */
    public function addToAddress(\Conecto\FeratelDsi\Dtos\ImportSPAddressesType $address)
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * isset address
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddress($index)
    {
        return isset($this->address[$index]);
    }

    /**
     * unset address
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddress($index)
    {
        unset($this->address[$index]);
    }

    /**
     * Gets as address
     *
     * @return \Conecto\FeratelDsi\Dtos\ImportSPAddressesType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \Conecto\FeratelDsi\Dtos\ImportSPAddressesType[] $address
     * @return self
     */
    public function setAddress(array $address = null)
    {
        $this->address = $address;
        return $this;
    }
}

