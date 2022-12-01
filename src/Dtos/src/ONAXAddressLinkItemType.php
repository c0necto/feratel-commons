<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ONAXAddressLinkItemType
 *
 *
 * XSD Type: ONAXAddressLinkItem
 */
class ONAXAddressLinkItemType
{
    /**
     * @var string $adlProviderID
     */
    private $adlProviderID = null;

    /**
     * @var string $adlContactID
     */
    private $adlContactID = null;

    /**
     * @var int $adlLinkType
     */
    private $adlLinkType = null;

    public function __construct(string $adlProviderID = null, string $adlContactID = null, int $adlLinkType = null)
    {
        $this->adlProviderID = $adlProviderID;
        $this->adlContactID = $adlContactID;
        $this->adlLinkType = $adlLinkType;
    }

    /**
     * Gets as adlProviderID
     *
     * @return string
     */
    public function getAdlProviderID()
    {
        return $this->adlProviderID;
    }

    /**
     * Sets a new adlProviderID
     *
     * @param string $adlProviderID
     * @return self
     */
    public function setAdlProviderID($adlProviderID)
    {
        $this->adlProviderID = $adlProviderID;
        return $this;
    }

    /**
     * Gets as adlContactID
     *
     * @return string
     */
    public function getAdlContactID()
    {
        return $this->adlContactID;
    }

    /**
     * Sets a new adlContactID
     *
     * @param string $adlContactID
     * @return self
     */
    public function setAdlContactID($adlContactID)
    {
        $this->adlContactID = $adlContactID;
        return $this;
    }

    /**
     * Gets as adlLinkType
     *
     * @return int
     */
    public function getAdlLinkType()
    {
        return $this->adlLinkType;
    }

    /**
     * Sets a new adlLinkType
     *
     * @param int $adlLinkType
     * @return self
     */
    public function setAdlLinkType($adlLinkType)
    {
        $this->adlLinkType = $adlLinkType;
        return $this;
    }
}

