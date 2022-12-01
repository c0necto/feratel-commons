<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLNewsletterSubscribeType
 *
 *
 * XSD Type: NLNewsletterSubscribeType
 */
class NLNewsletterSubscribeType
{
    /**
     * @var string $addressId
     */
    private $addressId = null;

    public function __construct(string $addressId = null)
    {
        $this->addressId = $addressId;
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
}

