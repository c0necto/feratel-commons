<?php

namespace Conecto\FeratelDsi\Dtos\ONAXBasicDataType;

/**
 * Class representing AddressLinkListAType
 */
class AddressLinkListAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ONAXAddressLinkItemType[] $addressLink
     */
    private $addressLink = [
        
    ];

    public function __construct(array $addressLink = null)
    {
        $this->addressLink = $addressLink;
    }

    /**
     * Adds as addressLink
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressLinkItemType $addressLink
     */
    public function addToAddressLink(\Conecto\FeratelDsi\Dtos\ONAXAddressLinkItemType $addressLink)
    {
        $this->addressLink[] = $addressLink;
        return $this;
    }

    /**
     * isset addressLink
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressLink($index)
    {
        return isset($this->addressLink[$index]);
    }

    /**
     * unset addressLink
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressLink($index)
    {
        unset($this->addressLink[$index]);
    }

    /**
     * Gets as addressLink
     *
     * @return \Conecto\FeratelDsi\Dtos\ONAXAddressLinkItemType[]
     */
    public function getAddressLink()
    {
        return $this->addressLink;
    }

    /**
     * Sets a new addressLink
     *
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressLinkItemType[] $addressLink
     * @return self
     */
    public function setAddressLink(array $addressLink)
    {
        $this->addressLink = $addressLink;
        return $this;
    }
}

