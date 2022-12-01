<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing STUServiceProviderType
 *
 *
 * XSD Type: STUServiceProvider
 */
class STUServiceProviderType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ImportDataSPDetailsType $details
     */
    private $details = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\STUFacilityType[] $facilities
     */
    private $facilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ImportSPAddressesType[] $addresses
     */
    private $addresses = null;

    public function __construct(string $id = null, \Conecto\FeratelDsi\Dtos\ImportDataSPDetailsType $details = null, array $facilities = null, array $addresses = null)
    {
        $this->id = $id;
        $this->details = $details;
        $this->facilities = $facilities;
        $this->addresses = $addresses;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as details
     *
     * @return \Conecto\FeratelDsi\Dtos\ImportDataSPDetailsType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param \Conecto\FeratelDsi\Dtos\ImportDataSPDetailsType $details
     * @return self
     */
    public function setDetails(?\Conecto\FeratelDsi\Dtos\ImportDataSPDetailsType $details = null)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Adds as facility
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\STUFacilityType $facility
     */
    public function addToFacilities(\Conecto\FeratelDsi\Dtos\STUFacilityType $facility)
    {
        $this->facilities[] = $facility;
        return $this;
    }

    /**
     * isset facilities
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFacilities($index)
    {
        return isset($this->facilities[$index]);
    }

    /**
     * unset facilities
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFacilities($index)
    {
        unset($this->facilities[$index]);
    }

    /**
     * Gets as facilities
     *
     * @return \Conecto\FeratelDsi\Dtos\STUFacilityType[]
     */
    public function getFacilities()
    {
        return $this->facilities;
    }

    /**
     * Sets a new facilities
     *
     * @param \Conecto\FeratelDsi\Dtos\STUFacilityType[] $facilities
     * @return self
     */
    public function setFacilities(array $facilities = null)
    {
        $this->facilities = $facilities;
        return $this;
    }

    /**
     * Adds as address
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ImportSPAddressesType $address
     */
    public function addToAddresses(\Conecto\FeratelDsi\Dtos\ImportSPAddressesType $address)
    {
        $this->addresses[] = $address;
        return $this;
    }

    /**
     * isset addresses
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddresses($index)
    {
        return isset($this->addresses[$index]);
    }

    /**
     * unset addresses
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddresses($index)
    {
        unset($this->addresses[$index]);
    }

    /**
     * Gets as addresses
     *
     * @return \Conecto\FeratelDsi\Dtos\ImportSPAddressesType[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Sets a new addresses
     *
     * @param \Conecto\FeratelDsi\Dtos\ImportSPAddressesType[] $addresses
     * @return self
     */
    public function setAddresses(array $addresses = null)
    {
        $this->addresses = $addresses;
        return $this;
    }
}

