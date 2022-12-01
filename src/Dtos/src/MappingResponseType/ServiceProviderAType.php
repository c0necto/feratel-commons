<?php

namespace Conecto\FeratelDsi\Dtos\MappingResponseType;

/**
 * Class representing ServiceProviderAType
 */
class ServiceProviderAType
{
    /**
     * @var string $hotelCode
     */
    private $hotelCode = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $dBCode
     */
    private $dBCode = null;

    /**
     * @var string $addressName
     */
    private $addressName = null;

    /**
     * @var string $address1
     */
    private $address1 = null;

    /**
     * @var string $zipCode
     */
    private $zipCode = null;

    /**
     * @var string $city
     */
    private $city = null;

    /**
     * @var string $email
     */
    private $email = null;

    /**
     * @var string $organisation
     */
    private $organisation = null;

    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * @var bool $checkAvailabiltyChange
     */
    private $checkAvailabiltyChange = null;

    /**
     * @var int $availabilityChangeDays
     */
    private $availabilityChangeDays = null;

    /**
     * @var bool $useIndividualPaymentCancellationPolicy
     */
    private $useIndividualPaymentCancellationPolicy = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\MappingResponseType\ServiceProviderAType\ServiceAType[] $service
     */
    private $service = [
        
    ];

    public function __construct(string $hotelCode = null, string $name = null, string $dBCode = null, string $addressName = null, string $address1 = null, string $zipCode = null, string $city = null, string $email = null, string $organisation = null, bool $active = null, bool $checkAvailabiltyChange = null, int $availabilityChangeDays = null, bool $useIndividualPaymentCancellationPolicy = null, array $service = null)
    {
        $this->hotelCode = $hotelCode;
        $this->name = $name;
        $this->dBCode = $dBCode;
        $this->addressName = $addressName;
        $this->address1 = $address1;
        $this->zipCode = $zipCode;
        $this->city = $city;
        $this->email = $email;
        $this->organisation = $organisation;
        $this->active = $active;
        $this->checkAvailabiltyChange = $checkAvailabiltyChange;
        $this->availabilityChangeDays = $availabilityChangeDays;
        $this->useIndividualPaymentCancellationPolicy = $useIndividualPaymentCancellationPolicy;
        $this->service = $service;
    }

    /**
     * Gets as hotelCode
     *
     * @return string
     */
    public function getHotelCode()
    {
        return $this->hotelCode;
    }

    /**
     * Sets a new hotelCode
     *
     * @param string $hotelCode
     * @return self
     */
    public function setHotelCode($hotelCode)
    {
        $this->hotelCode = $hotelCode;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as dBCode
     *
     * @return string
     */
    public function getDBCode()
    {
        return $this->dBCode;
    }

    /**
     * Sets a new dBCode
     *
     * @param string $dBCode
     * @return self
     */
    public function setDBCode($dBCode)
    {
        $this->dBCode = $dBCode;
        return $this;
    }

    /**
     * Gets as addressName
     *
     * @return string
     */
    public function getAddressName()
    {
        return $this->addressName;
    }

    /**
     * Sets a new addressName
     *
     * @param string $addressName
     * @return self
     */
    public function setAddressName($addressName)
    {
        $this->addressName = $addressName;
        return $this;
    }

    /**
     * Gets as address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Sets a new address1
     *
     * @param string $address1
     * @return self
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * Gets as zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Sets a new zipCode
     *
     * @param string $zipCode
     * @return self
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as organisation
     *
     * @return string
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Sets a new organisation
     *
     * @param string $organisation
     * @return self
     */
    public function setOrganisation($organisation)
    {
        $this->organisation = $organisation;
        return $this;
    }

    /**
     * Gets as active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param bool $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as checkAvailabiltyChange
     *
     * @return bool
     */
    public function getCheckAvailabiltyChange()
    {
        return $this->checkAvailabiltyChange;
    }

    /**
     * Sets a new checkAvailabiltyChange
     *
     * @param bool $checkAvailabiltyChange
     * @return self
     */
    public function setCheckAvailabiltyChange($checkAvailabiltyChange)
    {
        $this->checkAvailabiltyChange = $checkAvailabiltyChange;
        return $this;
    }

    /**
     * Gets as availabilityChangeDays
     *
     * @return int
     */
    public function getAvailabilityChangeDays()
    {
        return $this->availabilityChangeDays;
    }

    /**
     * Sets a new availabilityChangeDays
     *
     * @param int $availabilityChangeDays
     * @return self
     */
    public function setAvailabilityChangeDays($availabilityChangeDays)
    {
        $this->availabilityChangeDays = $availabilityChangeDays;
        return $this;
    }

    /**
     * Gets as useIndividualPaymentCancellationPolicy
     *
     * @return bool
     */
    public function getUseIndividualPaymentCancellationPolicy()
    {
        return $this->useIndividualPaymentCancellationPolicy;
    }

    /**
     * Sets a new useIndividualPaymentCancellationPolicy
     *
     * @param bool $useIndividualPaymentCancellationPolicy
     * @return self
     */
    public function setUseIndividualPaymentCancellationPolicy($useIndividualPaymentCancellationPolicy)
    {
        $this->useIndividualPaymentCancellationPolicy = $useIndividualPaymentCancellationPolicy;
        return $this;
    }

    /**
     * Adds as service
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\MappingResponseType\ServiceProviderAType\ServiceAType $service
     */
    public function addToService(\Conecto\FeratelDsi\Dtos\MappingResponseType\ServiceProviderAType\ServiceAType $service)
    {
        $this->service[] = $service;
        return $this;
    }

    /**
     * isset service
     *
     * @param int|string $index
     * @return bool
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service
     *
     * @param int|string $index
     * @return void
     */
    public function unsetService($index)
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service
     *
     * @return \Conecto\FeratelDsi\Dtos\MappingResponseType\ServiceProviderAType\ServiceAType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * @param \Conecto\FeratelDsi\Dtos\MappingResponseType\ServiceProviderAType\ServiceAType[] $service
     * @return self
     */
    public function setService(array $service = null)
    {
        $this->service = $service;
        return $this;
    }
}

