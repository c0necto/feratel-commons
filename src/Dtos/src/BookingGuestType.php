<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BookingGuestType
 *
 *
 * XSD Type: BookingGuestType
 */
class BookingGuestType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $firstName
     */
    private $firstName = null;

    /**
     * @var string $lastName
     */
    private $lastName = null;

    /**
     * @var string $company
     */
    private $company = null;

    /**
     * @var string $salutationId
     */
    private $salutationId = null;

    /**
     * @var string $title
     */
    private $title = null;

    /**
     * @var string $salutation
     */
    private $salutation = null;

    /**
     * @var string $address
     */
    private $address = null;

    /**
     * @var string $altAddress
     */
    private $altAddress = null;

    /**
     * @var string $phone
     */
    private $phone = null;

    /**
     * @var string $fax
     */
    private $fax = null;

    /**
     * @var string $mobile
     */
    private $mobile = null;

    /**
     * @var string $email
     */
    private $email = null;

    /**
     * @var string $country
     */
    private $country = null;

    /**
     * @var string $zipCode
     */
    private $zipCode = null;

    /**
     * @var string $city
     */
    private $city = null;

    /**
     * @var string $language
     */
    private $language = null;

    /**
     * @var bool $reusable
     */
    private $reusable = null;

    /**
     * @var string $confirmationUrl
     */
    private $confirmationUrl = null;

    public function __construct(string $id = null, string $firstName = null, string $lastName = null, string $company = null, string $salutationId = null, string $title = null, string $salutation = null, string $address = null, string $altAddress = null, string $phone = null, string $fax = null, string $mobile = null, string $email = null, string $country = null, string $zipCode = null, string $city = null, string $language = null, bool $reusable = null, string $confirmationUrl = null)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->company = $company;
        $this->salutationId = $salutationId;
        $this->title = $title;
        $this->salutation = $salutation;
        $this->address = $address;
        $this->altAddress = $altAddress;
        $this->phone = $phone;
        $this->fax = $fax;
        $this->mobile = $mobile;
        $this->email = $email;
        $this->country = $country;
        $this->zipCode = $zipCode;
        $this->city = $city;
        $this->language = $language;
        $this->reusable = $reusable;
        $this->confirmationUrl = $confirmationUrl;
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
     * Gets as salutationId
     *
     * @return string
     */
    public function getSalutationId()
    {
        return $this->salutationId;
    }

    /**
     * Sets a new salutationId
     *
     * @param string $salutationId
     * @return self
     */
    public function setSalutationId($salutationId)
    {
        $this->salutationId = $salutationId;
        return $this;
    }

    /**
     * Gets as title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * Gets as address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param string $address
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as altAddress
     *
     * @return string
     */
    public function getAltAddress()
    {
        return $this->altAddress;
    }

    /**
     * Sets a new altAddress
     *
     * @param string $altAddress
     * @return self
     */
    public function setAltAddress($altAddress)
    {
        $this->altAddress = $altAddress;
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
     * Gets as language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as reusable
     *
     * @return bool
     */
    public function getReusable()
    {
        return $this->reusable;
    }

    /**
     * Sets a new reusable
     *
     * @param bool $reusable
     * @return self
     */
    public function setReusable($reusable)
    {
        $this->reusable = $reusable;
        return $this;
    }

    /**
     * Gets as confirmationUrl
     *
     * @return string
     */
    public function getConfirmationUrl()
    {
        return $this->confirmationUrl;
    }

    /**
     * Sets a new confirmationUrl
     *
     * @param string $confirmationUrl
     * @return self
     */
    public function setConfirmationUrl($confirmationUrl)
    {
        $this->confirmationUrl = $confirmationUrl;
        return $this;
    }
}

