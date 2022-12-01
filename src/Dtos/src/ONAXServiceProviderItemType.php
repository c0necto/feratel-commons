<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ONAXServiceProviderItemType
 *
 *
 * XSD Type: ONAXServiceProviderItem
 */
class ONAXServiceProviderItemType
{
    /**
     * @var string $sprIdentity
     */
    private $sprIdentity = null;

    /**
     * @var string $sprName
     */
    private $sprName = null;

    /**
     * @var string $sprCode
     */
    private $sprCode = null;

    /**
     * @var \DateTime $sprCreateDate
     */
    private $sprCreateDate = null;

    /**
     * @var \DateTime $sprChangeDate
     */
    private $sprChangeDate = null;

    /**
     * @var string $sprLoginID
     */
    private $sprLoginID = null;

    public function __construct(string $sprIdentity = null, string $sprName = null, string $sprCode = null, \DateTime $sprCreateDate = null, \DateTime $sprChangeDate = null, string $sprLoginID = null)
    {
        $this->sprIdentity = $sprIdentity;
        $this->sprName = $sprName;
        $this->sprCode = $sprCode;
        $this->sprCreateDate = $sprCreateDate;
        $this->sprChangeDate = $sprChangeDate;
        $this->sprLoginID = $sprLoginID;
    }

    /**
     * Gets as sprIdentity
     *
     * @return string
     */
    public function getSprIdentity()
    {
        return $this->sprIdentity;
    }

    /**
     * Sets a new sprIdentity
     *
     * @param string $sprIdentity
     * @return self
     */
    public function setSprIdentity($sprIdentity)
    {
        $this->sprIdentity = $sprIdentity;
        return $this;
    }

    /**
     * Gets as sprName
     *
     * @return string
     */
    public function getSprName()
    {
        return $this->sprName;
    }

    /**
     * Sets a new sprName
     *
     * @param string $sprName
     * @return self
     */
    public function setSprName($sprName)
    {
        $this->sprName = $sprName;
        return $this;
    }

    /**
     * Gets as sprCode
     *
     * @return string
     */
    public function getSprCode()
    {
        return $this->sprCode;
    }

    /**
     * Sets a new sprCode
     *
     * @param string $sprCode
     * @return self
     */
    public function setSprCode($sprCode)
    {
        $this->sprCode = $sprCode;
        return $this;
    }

    /**
     * Gets as sprCreateDate
     *
     * @return \DateTime
     */
    public function getSprCreateDate()
    {
        return $this->sprCreateDate;
    }

    /**
     * Sets a new sprCreateDate
     *
     * @param \DateTime $sprCreateDate
     * @return self
     */
    public function setSprCreateDate(\DateTime $sprCreateDate)
    {
        $this->sprCreateDate = $sprCreateDate;
        return $this;
    }

    /**
     * Gets as sprChangeDate
     *
     * @return \DateTime
     */
    public function getSprChangeDate()
    {
        return $this->sprChangeDate;
    }

    /**
     * Sets a new sprChangeDate
     *
     * @param \DateTime $sprChangeDate
     * @return self
     */
    public function setSprChangeDate(\DateTime $sprChangeDate)
    {
        $this->sprChangeDate = $sprChangeDate;
        return $this;
    }

    /**
     * Gets as sprLoginID
     *
     * @return string
     */
    public function getSprLoginID()
    {
        return $this->sprLoginID;
    }

    /**
     * Sets a new sprLoginID
     *
     * @param string $sprLoginID
     * @return self
     */
    public function setSprLoginID($sprLoginID)
    {
        $this->sprLoginID = $sprLoginID;
        return $this;
    }
}

