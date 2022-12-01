<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing PackageDetailsSearchType
 *
 *
 * XSD Type: PackageDetailsSearchType
 */
class PackageDetailsSearchType
{
    /**
     * @var string $dbCode
     */
    private $dbCode = null;

    /**
     * @var string $packageId
     */
    private $packageId = null;

    /**
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * @var int $duration
     */
    private $duration = null;

    /**
     * @var int $adults
     */
    private $adults = null;

    /**
     * @var string $children
     */
    private $children = null;

    /**
     * @var int $units
     */
    private $units = null;

    /**
     * @var string $settler
     */
    private $settler = null;

    /**
     * @var string $salesChannelID
     */
    private $salesChannelID = null;

    public function __construct(string $dbCode = null, string $packageId = null, \DateTime $dateFrom = null, int $duration = null, int $adults = null, string $children = null, int $units = null, string $settler = null, string $salesChannelID = null)
    {
        $this->dbCode = $dbCode;
        $this->packageId = $packageId;
        $this->dateFrom = $dateFrom;
        $this->duration = $duration;
        $this->adults = $adults;
        $this->children = $children;
        $this->units = $units;
        $this->settler = $settler;
        $this->salesChannelID = $salesChannelID;
    }

    /**
     * Gets as dbCode
     *
     * @return string
     */
    public function getDbCode()
    {
        return $this->dbCode;
    }

    /**
     * Sets a new dbCode
     *
     * @param string $dbCode
     * @return self
     */
    public function setDbCode($dbCode)
    {
        $this->dbCode = $dbCode;
        return $this;
    }

    /**
     * Gets as packageId
     *
     * @return string
     */
    public function getPackageId()
    {
        return $this->packageId;
    }

    /**
     * Sets a new packageId
     *
     * @param string $packageId
     * @return self
     */
    public function setPackageId($packageId)
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * Gets as dateFrom
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets a new dateFrom
     *
     * @param \DateTime $dateFrom
     * @return self
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    /**
     * Gets as duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * @param int $duration
     * @return self
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as adults
     *
     * @return int
     */
    public function getAdults()
    {
        return $this->adults;
    }

    /**
     * Sets a new adults
     *
     * @param int $adults
     * @return self
     */
    public function setAdults($adults)
    {
        $this->adults = $adults;
        return $this;
    }

    /**
     * Gets as children
     *
     * @return string
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Sets a new children
     *
     * @param string $children
     * @return self
     */
    public function setChildren($children)
    {
        $this->children = $children;
        return $this;
    }

    /**
     * Gets as units
     *
     * @return int
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Sets a new units
     *
     * @param int $units
     * @return self
     */
    public function setUnits($units)
    {
        $this->units = $units;
        return $this;
    }

    /**
     * Gets as settler
     *
     * @return string
     */
    public function getSettler()
    {
        return $this->settler;
    }

    /**
     * Sets a new settler
     *
     * @param string $settler
     * @return self
     */
    public function setSettler($settler)
    {
        $this->settler = $settler;
        return $this;
    }

    /**
     * Gets as salesChannelID
     *
     * @return string
     */
    public function getSalesChannelID()
    {
        return $this->salesChannelID;
    }

    /**
     * Sets a new salesChannelID
     *
     * @param string $salesChannelID
     * @return self
     */
    public function setSalesChannelID($salesChannelID)
    {
        $this->salesChannelID = $salesChannelID;
        return $this;
    }
}

