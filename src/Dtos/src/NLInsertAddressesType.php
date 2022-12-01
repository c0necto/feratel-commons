<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLInsertAddressesType
 *
 *
 * XSD Type: NLInsertAddressesType
 */
class NLInsertAddressesType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\NLInsertAddressType[] $address
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
     * @param \Conecto\FeratelDsi\Dtos\NLInsertAddressType $address
     */
    public function addToAddress(\Conecto\FeratelDsi\Dtos\NLInsertAddressType $address)
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
     * @return \Conecto\FeratelDsi\Dtos\NLInsertAddressType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \Conecto\FeratelDsi\Dtos\NLInsertAddressType[] $address
     * @return self
     */
    public function setAddress(array $address = null)
    {
        $this->address = $address;
        return $this;
    }
}

