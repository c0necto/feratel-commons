<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ONAXServiceItemType
 *
 *
 * XSD Type: ONAXServiceItem
 */
class ONAXServiceItemType
{
    /**
     * @var string $srvIdentity
     */
    private $srvIdentity = null;

    /**
     * @var string $srvProviderID
     */
    private $srvProviderID = null;

    /**
     * @var string $srvName
     */
    private $srvName = null;

    /**
     * @var string $srvCode
     */
    private $srvCode = null;

    /**
     * @var \DateTime $srvCreateDate
     */
    private $srvCreateDate = null;

    /**
     * @var \DateTime $srvChangeDate
     */
    private $srvChangeDate = null;

    /**
     * @var string $srvLoginID
     */
    private $srvLoginID = null;

    public function __construct(string $srvIdentity = null, string $srvProviderID = null, string $srvName = null, string $srvCode = null, \DateTime $srvCreateDate = null, \DateTime $srvChangeDate = null, string $srvLoginID = null)
    {
        $this->srvIdentity = $srvIdentity;
        $this->srvProviderID = $srvProviderID;
        $this->srvName = $srvName;
        $this->srvCode = $srvCode;
        $this->srvCreateDate = $srvCreateDate;
        $this->srvChangeDate = $srvChangeDate;
        $this->srvLoginID = $srvLoginID;
    }

    /**
     * Gets as srvIdentity
     *
     * @return string
     */
    public function getSrvIdentity()
    {
        return $this->srvIdentity;
    }

    /**
     * Sets a new srvIdentity
     *
     * @param string $srvIdentity
     * @return self
     */
    public function setSrvIdentity($srvIdentity)
    {
        $this->srvIdentity = $srvIdentity;
        return $this;
    }

    /**
     * Gets as srvProviderID
     *
     * @return string
     */
    public function getSrvProviderID()
    {
        return $this->srvProviderID;
    }

    /**
     * Sets a new srvProviderID
     *
     * @param string $srvProviderID
     * @return self
     */
    public function setSrvProviderID($srvProviderID)
    {
        $this->srvProviderID = $srvProviderID;
        return $this;
    }

    /**
     * Gets as srvName
     *
     * @return string
     */
    public function getSrvName()
    {
        return $this->srvName;
    }

    /**
     * Sets a new srvName
     *
     * @param string $srvName
     * @return self
     */
    public function setSrvName($srvName)
    {
        $this->srvName = $srvName;
        return $this;
    }

    /**
     * Gets as srvCode
     *
     * @return string
     */
    public function getSrvCode()
    {
        return $this->srvCode;
    }

    /**
     * Sets a new srvCode
     *
     * @param string $srvCode
     * @return self
     */
    public function setSrvCode($srvCode)
    {
        $this->srvCode = $srvCode;
        return $this;
    }

    /**
     * Gets as srvCreateDate
     *
     * @return \DateTime
     */
    public function getSrvCreateDate()
    {
        return $this->srvCreateDate;
    }

    /**
     * Sets a new srvCreateDate
     *
     * @param \DateTime $srvCreateDate
     * @return self
     */
    public function setSrvCreateDate(\DateTime $srvCreateDate)
    {
        $this->srvCreateDate = $srvCreateDate;
        return $this;
    }

    /**
     * Gets as srvChangeDate
     *
     * @return \DateTime
     */
    public function getSrvChangeDate()
    {
        return $this->srvChangeDate;
    }

    /**
     * Sets a new srvChangeDate
     *
     * @param \DateTime $srvChangeDate
     * @return self
     */
    public function setSrvChangeDate(\DateTime $srvChangeDate)
    {
        $this->srvChangeDate = $srvChangeDate;
        return $this;
    }

    /**
     * Gets as srvLoginID
     *
     * @return string
     */
    public function getSrvLoginID()
    {
        return $this->srvLoginID;
    }

    /**
     * Sets a new srvLoginID
     *
     * @param string $srvLoginID
     * @return self
     */
    public function setSrvLoginID($srvLoginID)
    {
        $this->srvLoginID = $srvLoginID;
        return $this;
    }
}

