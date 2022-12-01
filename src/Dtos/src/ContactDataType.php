<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ContactDataType
 *
 *
 * XSD Type: ContactDataType
 */
class ContactDataType
{
    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $country
     */
    private $country = null;

    /**
     * @var string $address
     */
    private $address = null;

    /**
     * @var string $altAddress
     */
    private $altAddress = null;

    /**
     * @var string $zipCode
     */
    private $zipCode = null;

    /**
     * @var string $city
     */
    private $city = null;

    /**
     * @var string $phone
     */
    private $phone = null;

    /**
     * @var string $fax
     */
    private $fax = null;

    /**
     * @var string $eMail
     */
    private $eMail = null;

    /**
     * @var string $url
     */
    private $url = null;

    public function __construct(string $name = null, string $country = null, string $address = null, string $altAddress = null, string $zipCode = null, string $city = null, string $phone = null, string $fax = null, string $eMail = null, string $url = null)
    {
        $this->name = $name;
        $this->country = $country;
        $this->address = $address;
        $this->altAddress = $altAddress;
        $this->zipCode = $zipCode;
        $this->city = $city;
        $this->phone = $phone;
        $this->fax = $fax;
        $this->eMail = $eMail;
        $this->url = $url;
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
     * Gets as eMail
     *
     * @return string
     */
    public function getEMail()
    {
        return $this->eMail;
    }

    /**
     * Sets a new eMail
     *
     * @param string $eMail
     * @return self
     */
    public function setEMail($eMail)
    {
        $this->eMail = $eMail;
        return $this;
    }

    /**
     * Gets as url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * @param string $url
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
}

