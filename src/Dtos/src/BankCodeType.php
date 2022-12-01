<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BankCodeType
 *
 *
 * XSD Type: BankCodeType
 */
class BankCodeType
{
    /**
     * @var string $bankId
     */
    private $bankId = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var string $bIC
     */
    private $bIC = null;

    /**
     * @var string $countryCode
     */
    private $countryCode = null;

    /**
     * @var string $street
     */
    private $street = null;

    /**
     * @var string $zipCode
     */
    private $zipCode = null;

    /**
     * @var string $city
     */
    private $city = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    public function __construct(string $bankId = null, string $name = null, string $code = null, string $bIC = null, string $countryCode = null, string $street = null, string $zipCode = null, string $city = null, \DateTime $changeDate = null)
    {
        $this->bankId = $bankId;
        $this->name = $name;
        $this->code = $code;
        $this->bIC = $bIC;
        $this->countryCode = $countryCode;
        $this->street = $street;
        $this->zipCode = $zipCode;
        $this->city = $city;
        $this->changeDate = $changeDate;
    }

    /**
     * Gets as bankId
     *
     * @return string
     */
    public function getBankId()
    {
        return $this->bankId;
    }

    /**
     * Sets a new bankId
     *
     * @param string $bankId
     * @return self
     */
    public function setBankId($bankId)
    {
        $this->bankId = $bankId;
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
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as bIC
     *
     * @return string
     */
    public function getBIC()
    {
        return $this->bIC;
    }

    /**
     * Sets a new bIC
     *
     * @param string $bIC
     * @return self
     */
    public function setBIC($bIC)
    {
        $this->bIC = $bIC;
        return $this;
    }

    /**
     * Gets as countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Gets as street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * @param string $street
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;
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
     * Gets as changeDate
     *
     * @return \DateTime
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Sets a new changeDate
     *
     * @param \DateTime $changeDate
     * @return self
     */
    public function setChangeDate(\DateTime $changeDate)
    {
        $this->changeDate = $changeDate;
        return $this;
    }
}

