<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ONAXProductItemType
 *
 *
 * XSD Type: ONAXProductItem
 */
class ONAXProductItemType
{
    /**
     * @var string $prdIdentity
     */
    private $prdIdentity = null;

    /**
     * @var string $prdServiceID
     */
    private $prdServiceID = null;

    /**
     * @var string $prdName
     */
    private $prdName = null;

    /**
     * @var string $prdCode
     */
    private $prdCode = null;

    /**
     * @var int $prdProductType
     */
    private $prdProductType = null;

    /**
     * @var int $prdAccoType
     */
    private $prdAccoType = null;

    /**
     * @var int $prdActive
     */
    private $prdActive = null;

    /**
     * @var int $prdMinBed
     */
    private $prdMinBed = null;

    /**
     * @var int $prdMaxBed
     */
    private $prdMaxBed = null;

    /**
     * @var int $prdMinAdult
     */
    private $prdMinAdult = null;

    /**
     * @var int $prdMaxAdult
     */
    private $prdMaxAdult = null;

    /**
     * @var int $prdMinChild
     */
    private $prdMinChild = null;

    /**
     * @var int $prdMaxChild
     */
    private $prdMaxChild = null;

    /**
     * @var int $prdStdOccupancy
     */
    private $prdStdOccupancy = null;

    /**
     * @var int $prdBookable
     */
    private $prdBookable = null;

    /**
     * @var \DateTime $prdCreateDate
     */
    private $prdCreateDate = null;

    /**
     * @var \DateTime $prdChangeDate
     */
    private $prdChangeDate = null;

    /**
     * @var string $prdLoginID
     */
    private $prdLoginID = null;

    public function __construct(string $prdIdentity = null, int $prdMaxBed = null, \DateTime $prdCreateDate = null, int $prdBookable = null, int $prdStdOccupancy = null, int $prdMaxChild = null, int $prdMinChild = null, int $prdMaxAdult = null, int $prdMinAdult = null, int $prdMinBed = null, string $prdServiceID = null, int $prdActive = null, int $prdAccoType = null, int $prdProductType = null, string $prdCode = null, string $prdName = null, \DateTime $prdChangeDate = null, string $prdLoginID = null)
    {
        $this->prdIdentity = $prdIdentity;
        $this->prdServiceID = $prdServiceID;
        $this->prdName = $prdName;
        $this->prdCode = $prdCode;
        $this->prdProductType = $prdProductType;
        $this->prdAccoType = $prdAccoType;
        $this->prdActive = $prdActive;
        $this->prdMinBed = $prdMinBed;
        $this->prdMaxBed = $prdMaxBed;
        $this->prdMinAdult = $prdMinAdult;
        $this->prdMaxAdult = $prdMaxAdult;
        $this->prdMinChild = $prdMinChild;
        $this->prdMaxChild = $prdMaxChild;
        $this->prdStdOccupancy = $prdStdOccupancy;
        $this->prdBookable = $prdBookable;
        $this->prdCreateDate = $prdCreateDate;
        $this->prdChangeDate = $prdChangeDate;
        $this->prdLoginID = $prdLoginID;
    }

    /**
     * Gets as prdIdentity
     *
     * @return string
     */
    public function getPrdIdentity()
    {
        return $this->prdIdentity;
    }

    /**
     * Sets a new prdIdentity
     *
     * @param string $prdIdentity
     * @return self
     */
    public function setPrdIdentity($prdIdentity)
    {
        $this->prdIdentity = $prdIdentity;
        return $this;
    }

    /**
     * Gets as prdServiceID
     *
     * @return string
     */
    public function getPrdServiceID()
    {
        return $this->prdServiceID;
    }

    /**
     * Sets a new prdServiceID
     *
     * @param string $prdServiceID
     * @return self
     */
    public function setPrdServiceID($prdServiceID)
    {
        $this->prdServiceID = $prdServiceID;
        return $this;
    }

    /**
     * Gets as prdName
     *
     * @return string
     */
    public function getPrdName()
    {
        return $this->prdName;
    }

    /**
     * Sets a new prdName
     *
     * @param string $prdName
     * @return self
     */
    public function setPrdName($prdName)
    {
        $this->prdName = $prdName;
        return $this;
    }

    /**
     * Gets as prdCode
     *
     * @return string
     */
    public function getPrdCode()
    {
        return $this->prdCode;
    }

    /**
     * Sets a new prdCode
     *
     * @param string $prdCode
     * @return self
     */
    public function setPrdCode($prdCode)
    {
        $this->prdCode = $prdCode;
        return $this;
    }

    /**
     * Gets as prdProductType
     *
     * @return int
     */
    public function getPrdProductType()
    {
        return $this->prdProductType;
    }

    /**
     * Sets a new prdProductType
     *
     * @param int $prdProductType
     * @return self
     */
    public function setPrdProductType($prdProductType)
    {
        $this->prdProductType = $prdProductType;
        return $this;
    }

    /**
     * Gets as prdAccoType
     *
     * @return int
     */
    public function getPrdAccoType()
    {
        return $this->prdAccoType;
    }

    /**
     * Sets a new prdAccoType
     *
     * @param int $prdAccoType
     * @return self
     */
    public function setPrdAccoType($prdAccoType)
    {
        $this->prdAccoType = $prdAccoType;
        return $this;
    }

    /**
     * Gets as prdActive
     *
     * @return int
     */
    public function getPrdActive()
    {
        return $this->prdActive;
    }

    /**
     * Sets a new prdActive
     *
     * @param int $prdActive
     * @return self
     */
    public function setPrdActive($prdActive)
    {
        $this->prdActive = $prdActive;
        return $this;
    }

    /**
     * Gets as prdMinBed
     *
     * @return int
     */
    public function getPrdMinBed()
    {
        return $this->prdMinBed;
    }

    /**
     * Sets a new prdMinBed
     *
     * @param int $prdMinBed
     * @return self
     */
    public function setPrdMinBed($prdMinBed)
    {
        $this->prdMinBed = $prdMinBed;
        return $this;
    }

    /**
     * Gets as prdMaxBed
     *
     * @return int
     */
    public function getPrdMaxBed()
    {
        return $this->prdMaxBed;
    }

    /**
     * Sets a new prdMaxBed
     *
     * @param int $prdMaxBed
     * @return self
     */
    public function setPrdMaxBed($prdMaxBed)
    {
        $this->prdMaxBed = $prdMaxBed;
        return $this;
    }

    /**
     * Gets as prdMinAdult
     *
     * @return int
     */
    public function getPrdMinAdult()
    {
        return $this->prdMinAdult;
    }

    /**
     * Sets a new prdMinAdult
     *
     * @param int $prdMinAdult
     * @return self
     */
    public function setPrdMinAdult($prdMinAdult)
    {
        $this->prdMinAdult = $prdMinAdult;
        return $this;
    }

    /**
     * Gets as prdMaxAdult
     *
     * @return int
     */
    public function getPrdMaxAdult()
    {
        return $this->prdMaxAdult;
    }

    /**
     * Sets a new prdMaxAdult
     *
     * @param int $prdMaxAdult
     * @return self
     */
    public function setPrdMaxAdult($prdMaxAdult)
    {
        $this->prdMaxAdult = $prdMaxAdult;
        return $this;
    }

    /**
     * Gets as prdMinChild
     *
     * @return int
     */
    public function getPrdMinChild()
    {
        return $this->prdMinChild;
    }

    /**
     * Sets a new prdMinChild
     *
     * @param int $prdMinChild
     * @return self
     */
    public function setPrdMinChild($prdMinChild)
    {
        $this->prdMinChild = $prdMinChild;
        return $this;
    }

    /**
     * Gets as prdMaxChild
     *
     * @return int
     */
    public function getPrdMaxChild()
    {
        return $this->prdMaxChild;
    }

    /**
     * Sets a new prdMaxChild
     *
     * @param int $prdMaxChild
     * @return self
     */
    public function setPrdMaxChild($prdMaxChild)
    {
        $this->prdMaxChild = $prdMaxChild;
        return $this;
    }

    /**
     * Gets as prdStdOccupancy
     *
     * @return int
     */
    public function getPrdStdOccupancy()
    {
        return $this->prdStdOccupancy;
    }

    /**
     * Sets a new prdStdOccupancy
     *
     * @param int $prdStdOccupancy
     * @return self
     */
    public function setPrdStdOccupancy($prdStdOccupancy)
    {
        $this->prdStdOccupancy = $prdStdOccupancy;
        return $this;
    }

    /**
     * Gets as prdBookable
     *
     * @return int
     */
    public function getPrdBookable()
    {
        return $this->prdBookable;
    }

    /**
     * Sets a new prdBookable
     *
     * @param int $prdBookable
     * @return self
     */
    public function setPrdBookable($prdBookable)
    {
        $this->prdBookable = $prdBookable;
        return $this;
    }

    /**
     * Gets as prdCreateDate
     *
     * @return \DateTime
     */
    public function getPrdCreateDate()
    {
        return $this->prdCreateDate;
    }

    /**
     * Sets a new prdCreateDate
     *
     * @param \DateTime $prdCreateDate
     * @return self
     */
    public function setPrdCreateDate(\DateTime $prdCreateDate)
    {
        $this->prdCreateDate = $prdCreateDate;
        return $this;
    }

    /**
     * Gets as prdChangeDate
     *
     * @return \DateTime
     */
    public function getPrdChangeDate()
    {
        return $this->prdChangeDate;
    }

    /**
     * Sets a new prdChangeDate
     *
     * @param \DateTime $prdChangeDate
     * @return self
     */
    public function setPrdChangeDate(\DateTime $prdChangeDate)
    {
        $this->prdChangeDate = $prdChangeDate;
        return $this;
    }

    /**
     * Gets as prdLoginID
     *
     * @return string
     */
    public function getPrdLoginID()
    {
        return $this->prdLoginID;
    }

    /**
     * Sets a new prdLoginID
     *
     * @param string $prdLoginID
     * @return self
     */
    public function setPrdLoginID($prdLoginID)
    {
        $this->prdLoginID = $prdLoginID;
        return $this;
    }
}

