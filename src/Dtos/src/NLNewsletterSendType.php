<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLNewsletterSendType
 *
 *
 * XSD Type: NLNewsletterSendType
 */
class NLNewsletterSendType
{
    /**
     * @var string $addressId
     */
    private $addressId = null;

    /**
     * @var string $info
     */
    private $info = null;

    public function __construct(string $addressId = null, string $info = null)
    {
        $this->addressId = $addressId;
        $this->info = $info;
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
     * Gets as info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * @param string $info
     * @return self
     */
    public function setInfo($info)
    {
        $this->info = $info;
        return $this;
    }
}

