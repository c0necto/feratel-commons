<?php

namespace Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\AddressesAType;

/**
 * Class representing AddressAType
 */
class AddressAType
{
    /**
     * @var string[] $type
     */
    private $type = null;

    /**
     * @var string $company
     */
    private $company = null;

    /**
     * @var string $salutation
     */
    private $salutation = null;

    /**
     * @var string $firstName
     */
    private $firstName = null;

    /**
     * @var string $lastName
     */
    private $lastName = null;

    /**
     * @var string $addressLine1
     */
    private $addressLine1 = null;

    /**
     * @var string $addressLine2
     */
    private $addressLine2 = null;

    /**
     * @var string $country
     */
    private $country = null;

    /**
     * @var string $zipCode
     */
    private $zipCode = null;

    /**
     * @var string $town
     */
    private $town = null;

    /**
     * @var string $email
     */
    private $email = null;

    /**
     * @var string $fax
     */
    private $fax = null;

    /**
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * @var string $phone
     */
    private $phone = null;

    /**
     * @var string $mobile
     */
    private $mobile = null;

    public function __construct(array $type = null, string $company = null, string $salutation = null, string $firstName = null, string $lastName = null, string $addressLine1 = null, string $addressLine2 = null, string $country = null, string $zipCode = null, string $town = null, string $email = null, string $fax = null, string $uRL = null, string $phone = null, string $mobile = null)
    {
        $this->type = $type;
        $this->company = $company;
        $this->salutation = $salutation;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->addressLine1 = $addressLine1;
        $this->addressLine2 = $addressLine2;
        $this->country = $country;
        $this->zipCode = $zipCode;
        $this->town = $town;
        $this->email = $email;
        $this->fax = $fax;
        $this->uRL = $uRL;
        $this->phone = $phone;
        $this->mobile = $mobile;
    }

    /**
     * Adds as type
     *
     * @return self
     * @param string $type
     */
    public function addToType($type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * @return string[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType(array $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Sets a new company
     *
     * @param string $company
     * @return self
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * Gets as salutation
     *
     * @return string
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * Sets a new salutation
     *
     * @param string $salutation
     * @return self
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;
        return $this;
    }

    /**
     * Gets as firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Gets as addressLine1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Sets a new addressLine1
     *
     * @param string $addressLine1
     * @return self
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;
        return $this;
    }

    /**
     * Gets as addressLine2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * Sets a new addressLine2
     *
     * @param string $addressLine2
     * @return self
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;
        return $this;
    }

    /**
     * Gets as country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
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
     * Gets as town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Sets a new town
     *
     * @param string $town
     * @return self
     */
    public function setTown($town)
    {
        $this->town = $town;
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
     * Gets as fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets a new fax
     *
     * @param string $fax
     * @return self
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Gets as phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Gets as mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Sets a new mobile
     *
     * @param string $mobile
     * @return self
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }
}

