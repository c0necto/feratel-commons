<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ONAXAddressContactItemType
 *
 *
 * XSD Type: ONAXAddressContactItem
 */
class ONAXAddressContactItemType
{
    /**
     * @var string $adcIdentity
     */
    private $adcIdentity = null;

    /**
     * @var string $adcAddressID
     */
    private $adcAddressID = null;

    /**
     * @var string $adcLanguage
     */
    private $adcLanguage = null;

    /**
     * @var string $adcTitle
     */
    private $adcTitle = null;

    /**
     * @var string $adcFirstName
     */
    private $adcFirstName = null;

    /**
     * @var string $adcLastName
     */
    private $adcLastName = null;

    /**
     * @var string $adcSalutation
     */
    private $adcSalutation = null;

    /**
     * @var string $adcPhone
     */
    private $adcPhone = null;

    /**
     * @var string $adcFax
     */
    private $adcFax = null;

    /**
     * @var string $adcMobile
     */
    private $adcMobile = null;

    /**
     * @var string $adcEMail
     */
    private $adcEMail = null;

    /**
     * @var string $adcEMail2
     */
    private $adcEMail2 = null;

    /**
     * @var string $adcURL
     */
    private $adcURL = null;

    /**
     * @var int $adcCommunication
     */
    private $adcCommunication = null;

    /**
     * @var \DateTime $adcBirthday
     */
    private $adcBirthday = null;

    /**
     * @var string $adcMemo
     */
    private $adcMemo = null;

    /**
     * @var int $adcDefault
     */
    private $adcDefault = null;

    /**
     * @var \DateTime $adcCreateDate
     */
    private $adcCreateDate = null;

    /**
     * @var \DateTime $adcChangeDate
     */
    private $adcChangeDate = null;

    /**
     * @var string $adcLoginID
     */
    private $adcLoginID = null;

    public function __construct(string $adcIdentity = null, string $adcAddressID = null, string $adcLanguage = null, string $adcTitle = null, string $adcFirstName = null, string $adcLastName = null, string $adcSalutation = null, string $adcPhone = null, string $adcFax = null, string $adcMobile = null, string $adcEMail = null, string $adcEMail2 = null, string $adcURL = null, int $adcCommunication = null, \DateTime $adcBirthday = null, string $adcMemo = null, int $adcDefault = null, \DateTime $adcCreateDate = null, \DateTime $adcChangeDate = null, string $adcLoginID = null)
    {
        $this->adcIdentity = $adcIdentity;
        $this->adcAddressID = $adcAddressID;
        $this->adcLanguage = $adcLanguage;
        $this->adcTitle = $adcTitle;
        $this->adcFirstName = $adcFirstName;
        $this->adcLastName = $adcLastName;
        $this->adcSalutation = $adcSalutation;
        $this->adcPhone = $adcPhone;
        $this->adcFax = $adcFax;
        $this->adcMobile = $adcMobile;
        $this->adcEMail = $adcEMail;
        $this->adcEMail2 = $adcEMail2;
        $this->adcURL = $adcURL;
        $this->adcCommunication = $adcCommunication;
        $this->adcBirthday = $adcBirthday;
        $this->adcMemo = $adcMemo;
        $this->adcDefault = $adcDefault;
        $this->adcCreateDate = $adcCreateDate;
        $this->adcChangeDate = $adcChangeDate;
        $this->adcLoginID = $adcLoginID;
    }

    /**
     * Gets as adcIdentity
     *
     * @return string
     */
    public function getAdcIdentity()
    {
        return $this->adcIdentity;
    }

    /**
     * Sets a new adcIdentity
     *
     * @param string $adcIdentity
     * @return self
     */
    public function setAdcIdentity($adcIdentity)
    {
        $this->adcIdentity = $adcIdentity;
        return $this;
    }

    /**
     * Gets as adcAddressID
     *
     * @return string
     */
    public function getAdcAddressID()
    {
        return $this->adcAddressID;
    }

    /**
     * Sets a new adcAddressID
     *
     * @param string $adcAddressID
     * @return self
     */
    public function setAdcAddressID($adcAddressID)
    {
        $this->adcAddressID = $adcAddressID;
        return $this;
    }

    /**
     * Gets as adcLanguage
     *
     * @return string
     */
    public function getAdcLanguage()
    {
        return $this->adcLanguage;
    }

    /**
     * Sets a new adcLanguage
     *
     * @param string $adcLanguage
     * @return self
     */
    public function setAdcLanguage($adcLanguage)
    {
        $this->adcLanguage = $adcLanguage;
        return $this;
    }

    /**
     * Gets as adcTitle
     *
     * @return string
     */
    public function getAdcTitle()
    {
        return $this->adcTitle;
    }

    /**
     * Sets a new adcTitle
     *
     * @param string $adcTitle
     * @return self
     */
    public function setAdcTitle($adcTitle)
    {
        $this->adcTitle = $adcTitle;
        return $this;
    }

    /**
     * Gets as adcFirstName
     *
     * @return string
     */
    public function getAdcFirstName()
    {
        return $this->adcFirstName;
    }

    /**
     * Sets a new adcFirstName
     *
     * @param string $adcFirstName
     * @return self
     */
    public function setAdcFirstName($adcFirstName)
    {
        $this->adcFirstName = $adcFirstName;
        return $this;
    }

    /**
     * Gets as adcLastName
     *
     * @return string
     */
    public function getAdcLastName()
    {
        return $this->adcLastName;
    }

    /**
     * Sets a new adcLastName
     *
     * @param string $adcLastName
     * @return self
     */
    public function setAdcLastName($adcLastName)
    {
        $this->adcLastName = $adcLastName;
        return $this;
    }

    /**
     * Gets as adcSalutation
     *
     * @return string
     */
    public function getAdcSalutation()
    {
        return $this->adcSalutation;
    }

    /**
     * Sets a new adcSalutation
     *
     * @param string $adcSalutation
     * @return self
     */
    public function setAdcSalutation($adcSalutation)
    {
        $this->adcSalutation = $adcSalutation;
        return $this;
    }

    /**
     * Gets as adcPhone
     *
     * @return string
     */
    public function getAdcPhone()
    {
        return $this->adcPhone;
    }

    /**
     * Sets a new adcPhone
     *
     * @param string $adcPhone
     * @return self
     */
    public function setAdcPhone($adcPhone)
    {
        $this->adcPhone = $adcPhone;
        return $this;
    }

    /**
     * Gets as adcFax
     *
     * @return string
     */
    public function getAdcFax()
    {
        return $this->adcFax;
    }

    /**
     * Sets a new adcFax
     *
     * @param string $adcFax
     * @return self
     */
    public function setAdcFax($adcFax)
    {
        $this->adcFax = $adcFax;
        return $this;
    }

    /**
     * Gets as adcMobile
     *
     * @return string
     */
    public function getAdcMobile()
    {
        return $this->adcMobile;
    }

    /**
     * Sets a new adcMobile
     *
     * @param string $adcMobile
     * @return self
     */
    public function setAdcMobile($adcMobile)
    {
        $this->adcMobile = $adcMobile;
        return $this;
    }

    /**
     * Gets as adcEMail
     *
     * @return string
     */
    public function getAdcEMail()
    {
        return $this->adcEMail;
    }

    /**
     * Sets a new adcEMail
     *
     * @param string $adcEMail
     * @return self
     */
    public function setAdcEMail($adcEMail)
    {
        $this->adcEMail = $adcEMail;
        return $this;
    }

    /**
     * Gets as adcEMail2
     *
     * @return string
     */
    public function getAdcEMail2()
    {
        return $this->adcEMail2;
    }

    /**
     * Sets a new adcEMail2
     *
     * @param string $adcEMail2
     * @return self
     */
    public function setAdcEMail2($adcEMail2)
    {
        $this->adcEMail2 = $adcEMail2;
        return $this;
    }

    /**
     * Gets as adcURL
     *
     * @return string
     */
    public function getAdcURL()
    {
        return $this->adcURL;
    }

    /**
     * Sets a new adcURL
     *
     * @param string $adcURL
     * @return self
     */
    public function setAdcURL($adcURL)
    {
        $this->adcURL = $adcURL;
        return $this;
    }

    /**
     * Gets as adcCommunication
     *
     * @return int
     */
    public function getAdcCommunication()
    {
        return $this->adcCommunication;
    }

    /**
     * Sets a new adcCommunication
     *
     * @param int $adcCommunication
     * @return self
     */
    public function setAdcCommunication($adcCommunication)
    {
        $this->adcCommunication = $adcCommunication;
        return $this;
    }

    /**
     * Gets as adcBirthday
     *
     * @return \DateTime
     */
    public function getAdcBirthday()
    {
        return $this->adcBirthday;
    }

    /**
     * Sets a new adcBirthday
     *
     * @param \DateTime $adcBirthday
     * @return self
     */
    public function setAdcBirthday(\DateTime $adcBirthday)
    {
        $this->adcBirthday = $adcBirthday;
        return $this;
    }

    /**
     * Gets as adcMemo
     *
     * @return string
     */
    public function getAdcMemo()
    {
        return $this->adcMemo;
    }

    /**
     * Sets a new adcMemo
     *
     * @param string $adcMemo
     * @return self
     */
    public function setAdcMemo($adcMemo)
    {
        $this->adcMemo = $adcMemo;
        return $this;
    }

    /**
     * Gets as adcDefault
     *
     * @return int
     */
    public function getAdcDefault()
    {
        return $this->adcDefault;
    }

    /**
     * Sets a new adcDefault
     *
     * @param int $adcDefault
     * @return self
     */
    public function setAdcDefault($adcDefault)
    {
        $this->adcDefault = $adcDefault;
        return $this;
    }

    /**
     * Gets as adcCreateDate
     *
     * @return \DateTime
     */
    public function getAdcCreateDate()
    {
        return $this->adcCreateDate;
    }

    /**
     * Sets a new adcCreateDate
     *
     * @param \DateTime $adcCreateDate
     * @return self
     */
    public function setAdcCreateDate(\DateTime $adcCreateDate)
    {
        $this->adcCreateDate = $adcCreateDate;
        return $this;
    }

    /**
     * Gets as adcChangeDate
     *
     * @return \DateTime
     */
    public function getAdcChangeDate()
    {
        return $this->adcChangeDate;
    }

    /**
     * Sets a new adcChangeDate
     *
     * @param \DateTime $adcChangeDate
     * @return self
     */
    public function setAdcChangeDate(\DateTime $adcChangeDate)
    {
        $this->adcChangeDate = $adcChangeDate;
        return $this;
    }

    /**
     * Gets as adcLoginID
     *
     * @return string
     */
    public function getAdcLoginID()
    {
        return $this->adcLoginID;
    }

    /**
     * Sets a new adcLoginID
     *
     * @param string $adcLoginID
     * @return self
     */
    public function setAdcLoginID($adcLoginID)
    {
        $this->adcLoginID = $adcLoginID;
        return $this;
    }
}

