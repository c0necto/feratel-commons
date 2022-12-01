<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ONAXAddressBankAccountItemType
 *
 *
 * XSD Type: ONAXAddressBankAccountItem
 */
class ONAXAddressBankAccountItemType
{
    /**
     * @var string $abaAddressID
     */
    private $abaAddressID = null;

    /**
     * @var string $abaBankName
     */
    private $abaBankName = null;

    /**
     * @var string $abaBankCode
     */
    private $abaBankCode = null;

    /**
     * @var string $abaCountryCode
     */
    private $abaCountryCode = null;

    /**
     * @var string $abaIBAN
     */
    private $abaIBAN = null;

    /**
     * @var string $abaAccount
     */
    private $abaAccount = null;

    /**
     * @var string $abaStreet
     */
    private $abaStreet = null;

    /**
     * @var string $abaZipCode
     */
    private $abaZipCode = null;

    /**
     * @var string $abaCity
     */
    private $abaCity = null;

    public function __construct(string $abaAddressID = null, string $abaBankName = null, string $abaBankCode = null, string $abaCountryCode = null, string $abaIBAN = null, string $abaAccount = null, string $abaStreet = null, string $abaZipCode = null, string $abaCity = null)
    {
        $this->abaAddressID = $abaAddressID;
        $this->abaBankName = $abaBankName;
        $this->abaBankCode = $abaBankCode;
        $this->abaCountryCode = $abaCountryCode;
        $this->abaIBAN = $abaIBAN;
        $this->abaAccount = $abaAccount;
        $this->abaStreet = $abaStreet;
        $this->abaZipCode = $abaZipCode;
        $this->abaCity = $abaCity;
    }

    /**
     * Gets as abaAddressID
     *
     * @return string
     */
    public function getAbaAddressID()
    {
        return $this->abaAddressID;
    }

    /**
     * Sets a new abaAddressID
     *
     * @param string $abaAddressID
     * @return self
     */
    public function setAbaAddressID($abaAddressID)
    {
        $this->abaAddressID = $abaAddressID;
        return $this;
    }

    /**
     * Gets as abaBankName
     *
     * @return string
     */
    public function getAbaBankName()
    {
        return $this->abaBankName;
    }

    /**
     * Sets a new abaBankName
     *
     * @param string $abaBankName
     * @return self
     */
    public function setAbaBankName($abaBankName)
    {
        $this->abaBankName = $abaBankName;
        return $this;
    }

    /**
     * Gets as abaBankCode
     *
     * @return string
     */
    public function getAbaBankCode()
    {
        return $this->abaBankCode;
    }

    /**
     * Sets a new abaBankCode
     *
     * @param string $abaBankCode
     * @return self
     */
    public function setAbaBankCode($abaBankCode)
    {
        $this->abaBankCode = $abaBankCode;
        return $this;
    }

    /**
     * Gets as abaCountryCode
     *
     * @return string
     */
    public function getAbaCountryCode()
    {
        return $this->abaCountryCode;
    }

    /**
     * Sets a new abaCountryCode
     *
     * @param string $abaCountryCode
     * @return self
     */
    public function setAbaCountryCode($abaCountryCode)
    {
        $this->abaCountryCode = $abaCountryCode;
        return $this;
    }

    /**
     * Gets as abaIBAN
     *
     * @return string
     */
    public function getAbaIBAN()
    {
        return $this->abaIBAN;
    }

    /**
     * Sets a new abaIBAN
     *
     * @param string $abaIBAN
     * @return self
     */
    public function setAbaIBAN($abaIBAN)
    {
        $this->abaIBAN = $abaIBAN;
        return $this;
    }

    /**
     * Gets as abaAccount
     *
     * @return string
     */
    public function getAbaAccount()
    {
        return $this->abaAccount;
    }

    /**
     * Sets a new abaAccount
     *
     * @param string $abaAccount
     * @return self
     */
    public function setAbaAccount($abaAccount)
    {
        $this->abaAccount = $abaAccount;
        return $this;
    }

    /**
     * Gets as abaStreet
     *
     * @return string
     */
    public function getAbaStreet()
    {
        return $this->abaStreet;
    }

    /**
     * Sets a new abaStreet
     *
     * @param string $abaStreet
     * @return self
     */
    public function setAbaStreet($abaStreet)
    {
        $this->abaStreet = $abaStreet;
        return $this;
    }

    /**
     * Gets as abaZipCode
     *
     * @return string
     */
    public function getAbaZipCode()
    {
        return $this->abaZipCode;
    }

    /**
     * Sets a new abaZipCode
     *
     * @param string $abaZipCode
     * @return self
     */
    public function setAbaZipCode($abaZipCode)
    {
        $this->abaZipCode = $abaZipCode;
        return $this;
    }

    /**
     * Gets as abaCity
     *
     * @return string
     */
    public function getAbaCity()
    {
        return $this->abaCity;
    }

    /**
     * Sets a new abaCity
     *
     * @param string $abaCity
     * @return self
     */
    public function setAbaCity($abaCity)
    {
        $this->abaCity = $abaCity;
        return $this;
    }
}

