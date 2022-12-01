<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLUpdateAddressType
 *
 *
 * XSD Type: NLUpdateAddressType
 */
class NLUpdateAddressType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\NLUpdateAddressDetailType $address
     */
    private $address = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\NLUpdateAddressDetailType $address = null)
    {
        $this->address = $address;
    }

    /**
     * Gets as address
     *
     * @return \Conecto\FeratelDsi\Dtos\NLUpdateAddressDetailType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \Conecto\FeratelDsi\Dtos\NLUpdateAddressDetailType $address
     * @return self
     */
    public function setAddress(\Conecto\FeratelDsi\Dtos\NLUpdateAddressDetailType $address)
    {
        $this->address = $address;
        return $this;
    }
}

