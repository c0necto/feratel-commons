<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ONAXAddressItemType
 *
 *
 * XSD Type: ONAXAddressItem
 */
class ONAXAddressItemType
{
    /**
     * @var string $adrIdentity
     */
    private $adrIdentity = null;

    /**
     * @var string $adrProviderID
     */
    private $adrProviderID = null;

    /**
     * @var int $adrType
     */
    private $adrType = null;

    /**
     * @var string $adrCompany
     */
    private $adrCompany = null;

    /**
     * @var string $adrName
     */
    private $adrName = null;

    /**
     * @var string $adrAddress1
     */
    private $adrAddress1 = null;

    /**
     * @var string $adrAddress2
     */
    private $adrAddress2 = null;

    /**
     * @var string $adrCountry
     */
    private $adrCountry = null;

    /**
     * @var string $adrZipCode
     */
    private $adrZipCode = null;

    /**
     * @var string $adrCity
     */
    private $adrCity = null;

    /**
     * @var string $adrCurrency
     */
    private $adrCurrency = null;

    /**
     * @var int $adrActive
     */
    private $adrActive = null;

    /**
     * @var string $adrUIDNumber
     */
    private $adrUIDNumber = null;

    /**
     * @var string $adrAccount
     */
    private $adrAccount = null;

    /**
     * @var \DateTime $adrCreateDate
     */
    private $adrCreateDate = null;

    /**
     * @var \DateTime $adrChangeDate
     */
    private $adrChangeDate = null;

    /**
     * @var string $adrLoginID
     */
    private $adrLoginID = null;

    public function __construct(string $adrIdentity = null, string $adrProviderID = null, int $adrType = null, string $adrCompany = null, string $adrName = null, string $adrAddress1 = null, string $adrAddress2 = null, string $adrCountry = null, string $adrZipCode = null, string $adrCity = null, string $adrCurrency = null, int $adrActive = null, string $adrUIDNumber = null, string $adrAccount = null, \DateTime $adrCreateDate = null, \DateTime $adrChangeDate = null, string $adrLoginID = null)
    {
        $this->adrIdentity = $adrIdentity;
        $this->adrProviderID = $adrProviderID;
        $this->adrType = $adrType;
        $this->adrCompany = $adrCompany;
        $this->adrName = $adrName;
        $this->adrAddress1 = $adrAddress1;
        $this->adrAddress2 = $adrAddress2;
        $this->adrCountry = $adrCountry;
        $this->adrZipCode = $adrZipCode;
        $this->adrCity = $adrCity;
        $this->adrCurrency = $adrCurrency;
        $this->adrActive = $adrActive;
        $this->adrUIDNumber = $adrUIDNumber;
        $this->adrAccount = $adrAccount;
        $this->adrCreateDate = $adrCreateDate;
        $this->adrChangeDate = $adrChangeDate;
        $this->adrLoginID = $adrLoginID;
    }

    /**
     * Gets as adrIdentity
     *
     * @return string
     */
    public function getAdrIdentity()
    {
        return $this->adrIdentity;
    }

    /**
     * Sets a new adrIdentity
     *
     * @param string $adrIdentity
     * @return self
     */
    public function setAdrIdentity($adrIdentity)
    {
        $this->adrIdentity = $adrIdentity;
        return $this;
    }

    /**
     * Gets as adrProviderID
     *
     * @return string
     */
    public function getAdrProviderID()
    {
        return $this->adrProviderID;
    }

    /**
     * Sets a new adrProviderID
     *
     * @param string $adrProviderID
     * @return self
     */
    public function setAdrProviderID($adrProviderID)
    {
        $this->adrProviderID = $adrProviderID;
        return $this;
    }

    /**
     * Gets as adrType
     *
     * @return int
     */
    public function getAdrType()
    {
        return $this->adrType;
    }

    /**
     * Sets a new adrType
     *
     * @param int $adrType
     * @return self
     */
    public function setAdrType($adrType)
    {
        $this->adrType = $adrType;
        return $this;
    }

    /**
     * Gets as adrCompany
     *
     * @return string
     */
    public function getAdrCompany()
    {
        return $this->adrCompany;
    }

    /**
     * Sets a new adrCompany
     *
     * @param string $adrCompany
     * @return self
     */
    public function setAdrCompany($adrCompany)
    {
        $this->adrCompany = $adrCompany;
        return $this;
    }

    /**
     * Gets as adrName
     *
     * @return string
     */
    public function getAdrName()
    {
        return $this->adrName;
    }

    /**
     * Sets a new adrName
     *
     * @param string $adrName
     * @return self
     */
    public function setAdrName($adrName)
    {
        $this->adrName = $adrName;
        return $this;
    }

    /**
     * Gets as adrAddress1
     *
     * @return string
     */
    public function getAdrAddress1()
    {
        return $this->adrAddress1;
    }

    /**
     * Sets a new adrAddress1
     *
     * @param string $adrAddress1
     * @return self
     */
    public function setAdrAddress1($adrAddress1)
    {
        $this->adrAddress1 = $adrAddress1;
        return $this;
    }

    /**
     * Gets as adrAddress2
     *
     * @return string
     */
    public function getAdrAddress2()
    {
        return $this->adrAddress2;
    }

    /**
     * Sets a new adrAddress2
     *
     * @param string $adrAddress2
     * @return self
     */
    public function setAdrAddress2($adrAddress2)
    {
        $this->adrAddress2 = $adrAddress2;
        return $this;
    }

    /**
     * Gets as adrCountry
     *
     * @return string
     */
    public function getAdrCountry()
    {
        return $this->adrCountry;
    }

    /**
     * Sets a new adrCountry
     *
     * @param string $adrCountry
     * @return self
     */
    public function setAdrCountry($adrCountry)
    {
        $this->adrCountry = $adrCountry;
        return $this;
    }

    /**
     * Gets as adrZipCode
     *
     * @return string
     */
    public function getAdrZipCode()
    {
        return $this->adrZipCode;
    }

    /**
     * Sets a new adrZipCode
     *
     * @param string $adrZipCode
     * @return self
     */
    public function setAdrZipCode($adrZipCode)
    {
        $this->adrZipCode = $adrZipCode;
        return $this;
    }

    /**
     * Gets as adrCity
     *
     * @return string
     */
    public function getAdrCity()
    {
        return $this->adrCity;
    }

    /**
     * Sets a new adrCity
     *
     * @param string $adrCity
     * @return self
     */
    public function setAdrCity($adrCity)
    {
        $this->adrCity = $adrCity;
        return $this;
    }

    /**
     * Gets as adrCurrency
     *
     * @return string
     */
    public function getAdrCurrency()
    {
        return $this->adrCurrency;
    }

    /**
     * Sets a new adrCurrency
     *
     * @param string $adrCurrency
     * @return self
     */
    public function setAdrCurrency($adrCurrency)
    {
        $this->adrCurrency = $adrCurrency;
        return $this;
    }

    /**
     * Gets as adrActive
     *
     * @return int
     */
    public function getAdrActive()
    {
        return $this->adrActive;
    }

    /**
     * Sets a new adrActive
     *
     * @param int $adrActive
     * @return self
     */
    public function setAdrActive($adrActive)
    {
        $this->adrActive = $adrActive;
        return $this;
    }

    /**
     * Gets as adrUIDNumber
     *
     * @return string
     */
    public function getAdrUIDNumber()
    {
        return $this->adrUIDNumber;
    }

    /**
     * Sets a new adrUIDNumber
     *
     * @param string $adrUIDNumber
     * @return self
     */
    public function setAdrUIDNumber($adrUIDNumber)
    {
        $this->adrUIDNumber = $adrUIDNumber;
        return $this;
    }

    /**
     * Gets as adrAccount
     *
     * @return string
     */
    public function getAdrAccount()
    {
        return $this->adrAccount;
    }

    /**
     * Sets a new adrAccount
     *
     * @param string $adrAccount
     * @return self
     */
    public function setAdrAccount($adrAccount)
    {
        $this->adrAccount = $adrAccount;
        return $this;
    }

    /**
     * Gets as adrCreateDate
     *
     * @return \DateTime
     */
    public function getAdrCreateDate()
    {
        return $this->adrCreateDate;
    }

    /**
     * Sets a new adrCreateDate
     *
     * @param \DateTime $adrCreateDate
     * @return self
     */
    public function setAdrCreateDate(\DateTime $adrCreateDate)
    {
        $this->adrCreateDate = $adrCreateDate;
        return $this;
    }

    /**
     * Gets as adrChangeDate
     *
     * @return \DateTime
     */
    public function getAdrChangeDate()
    {
        return $this->adrChangeDate;
    }

    /**
     * Sets a new adrChangeDate
     *
     * @param \DateTime $adrChangeDate
     * @return self
     */
    public function setAdrChangeDate(\DateTime $adrChangeDate)
    {
        $this->adrChangeDate = $adrChangeDate;
        return $this;
    }

    /**
     * Gets as adrLoginID
     *
     * @return string
     */
    public function getAdrLoginID()
    {
        return $this->adrLoginID;
    }

    /**
     * Sets a new adrLoginID
     *
     * @param string $adrLoginID
     * @return self
     */
    public function setAdrLoginID($adrLoginID)
    {
        $this->adrLoginID = $adrLoginID;
        return $this;
    }
}

