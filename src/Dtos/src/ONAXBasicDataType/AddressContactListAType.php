<?php

namespace Conecto\FeratelDsi\Dtos\ONAXBasicDataType;

/**
 * Class representing AddressContactListAType
 */
class AddressContactListAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ONAXAddressContactItemType[] $addressContact
     */
    private $addressContact = [
        
    ];

    public function __construct(array $addressContact = null)
    {
        $this->addressContact = $addressContact;
    }

    /**
     * Adds as addressContact
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressContactItemType $addressContact
     */
    public function addToAddressContact(\Conecto\FeratelDsi\Dtos\ONAXAddressContactItemType $addressContact)
    {
        $this->addressContact[] = $addressContact;
        return $this;
    }

    /**
     * isset addressContact
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressContact($index)
    {
        return isset($this->addressContact[$index]);
    }

    /**
     * unset addressContact
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressContact($index)
    {
        unset($this->addressContact[$index]);
    }

    /**
     * Gets as addressContact
     *
     * @return \Conecto\FeratelDsi\Dtos\ONAXAddressContactItemType[]
     */
    public function getAddressContact()
    {
        return $this->addressContact;
    }

    /**
     * Sets a new addressContact
     *
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressContactItemType[] $addressContact
     * @return self
     */
    public function setAddressContact(array $addressContact)
    {
        $this->addressContact = $addressContact;
        return $this;
    }
}

