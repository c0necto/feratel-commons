<?php

namespace Conecto\FeratelDsi\Dtos\ONAXBasicDataType;

/**
 * Class representing AddressContactCodeListAType
 */
class AddressContactCodeListAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ONAXAddressContactCodeItemType[] $addressContactCode
     */
    private $addressContactCode = [
        
    ];

    public function __construct(array $addressContactCode = null)
    {
        $this->addressContactCode = $addressContactCode;
    }

    /**
     * Adds as addressContactCode
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressContactCodeItemType $addressContactCode
     */
    public function addToAddressContactCode(\Conecto\FeratelDsi\Dtos\ONAXAddressContactCodeItemType $addressContactCode)
    {
        $this->addressContactCode[] = $addressContactCode;
        return $this;
    }

    /**
     * isset addressContactCode
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressContactCode($index)
    {
        return isset($this->addressContactCode[$index]);
    }

    /**
     * unset addressContactCode
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressContactCode($index)
    {
        unset($this->addressContactCode[$index]);
    }

    /**
     * Gets as addressContactCode
     *
     * @return \Conecto\FeratelDsi\Dtos\ONAXAddressContactCodeItemType[]
     */
    public function getAddressContactCode()
    {
        return $this->addressContactCode;
    }

    /**
     * Sets a new addressContactCode
     *
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressContactCodeItemType[] $addressContactCode
     * @return self
     */
    public function setAddressContactCode(array $addressContactCode)
    {
        $this->addressContactCode = $addressContactCode;
        return $this;
    }
}

