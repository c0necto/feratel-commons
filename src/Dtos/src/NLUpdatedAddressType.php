<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLUpdatedAddressType
 *
 *
 * XSD Type: NLUpdatedAddressType
 */
class NLUpdatedAddressType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\NLUpdatedAddressDetailType $address
     */
    private $address = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\NLUpdatedAddressDetailType $address = null)
    {
        $this->address = $address;
    }

    /**
     * Gets as address
     *
     * @return \Conecto\FeratelDsi\Dtos\NLUpdatedAddressDetailType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \Conecto\FeratelDsi\Dtos\NLUpdatedAddressDetailType $address
     * @return self
     */
    public function setAddress(\Conecto\FeratelDsi\Dtos\NLUpdatedAddressDetailType $address)
    {
        $this->address = $address;
        return $this;
    }
}

