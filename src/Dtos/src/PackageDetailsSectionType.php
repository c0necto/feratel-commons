<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing PackageDetailsSectionType
 *
 *
 * XSD Type: PackageDetailsSection
 */
class PackageDetailsSectionType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var bool $isArrivalDateOK
     */
    private $isArrivalDateOK = null;

    /**
     * @var int $order
     */
    private $order = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var string $productType
     */
    private $productType = null;

    /**
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * @var \DateTime $dateTo
     */
    private $dateTo = null;

    /**
     * @var int $duration
     */
    private $duration = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var bool $availabilityCheck
     */
    private $availabilityCheck = null;

    /**
     * @var int $maxUnit
     */
    private $maxUnit = null;

    /**
     * @var string $unitType
     */
    private $unitType = null;

    /**
     * @var string $parentId
     */
    private $parentId = null;

    /**
     * @var bool $addPrice
     */
    private $addPrice = null;

    /**
     * @var bool $showPrice
     */
    private $showPrice = null;

    public function __construct(string $id = null, bool $isArrivalDateOK = null, int $order = null, string $type = null, string $productType = null, \DateTime $dateFrom = null, \DateTime $dateTo = null, int $duration = null, string $name = null, bool $availabilityCheck = null, int $maxUnit = null, string $unitType = null, string $parentId = null, bool $addPrice = null, bool $showPrice = null)
    {
        $this->id = $id;
        $this->isArrivalDateOK = $isArrivalDateOK;
        $this->order = $order;
        $this->type = $type;
        $this->productType = $productType;
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->duration = $duration;
        $this->name = $name;
        $this->availabilityCheck = $availabilityCheck;
        $this->maxUnit = $maxUnit;
        $this->unitType = $unitType;
        $this->parentId = $parentId;
        $this->addPrice = $addPrice;
        $this->showPrice = $showPrice;
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
     * Gets as isArrivalDateOK
     *
     * @return bool
     */
    public function getIsArrivalDateOK()
    {
        return $this->isArrivalDateOK;
    }

    /**
     * Sets a new isArrivalDateOK
     *
     * @param bool $isArrivalDateOK
     * @return self
     */
    public function setIsArrivalDateOK($isArrivalDateOK)
    {
        $this->isArrivalDateOK = $isArrivalDateOK;
        return $this;
    }

    /**
     * Gets as order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as productType
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Sets a new productType
     *
     * @param string $productType
     * @return self
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
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
     * Gets as dateTo
     *
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Sets a new dateTo
     *
     * @param \DateTime $dateTo
     * @return self
     */
    public function setDateTo(\DateTime $dateTo)
    {
        $this->dateTo = $dateTo;
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
     * Gets as availabilityCheck
     *
     * @return bool
     */
    public function getAvailabilityCheck()
    {
        return $this->availabilityCheck;
    }

    /**
     * Sets a new availabilityCheck
     *
     * @param bool $availabilityCheck
     * @return self
     */
    public function setAvailabilityCheck($availabilityCheck)
    {
        $this->availabilityCheck = $availabilityCheck;
        return $this;
    }

    /**
     * Gets as maxUnit
     *
     * @return int
     */
    public function getMaxUnit()
    {
        return $this->maxUnit;
    }

    /**
     * Sets a new maxUnit
     *
     * @param int $maxUnit
     * @return self
     */
    public function setMaxUnit($maxUnit)
    {
        $this->maxUnit = $maxUnit;
        return $this;
    }

    /**
     * Gets as unitType
     *
     * @return string
     */
    public function getUnitType()
    {
        return $this->unitType;
    }

    /**
     * Sets a new unitType
     *
     * @param string $unitType
     * @return self
     */
    public function setUnitType($unitType)
    {
        $this->unitType = $unitType;
        return $this;
    }

    /**
     * Gets as parentId
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Sets a new parentId
     *
     * @param string $parentId
     * @return self
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        return $this;
    }

    /**
     * Gets as addPrice
     *
     * @return bool
     */
    public function getAddPrice()
    {
        return $this->addPrice;
    }

    /**
     * Sets a new addPrice
     *
     * @param bool $addPrice
     * @return self
     */
    public function setAddPrice($addPrice)
    {
        $this->addPrice = $addPrice;
        return $this;
    }

    /**
     * Gets as showPrice
     *
     * @return bool
     */
    public function getShowPrice()
    {
        return $this->showPrice;
    }

    /**
     * Sets a new showPrice
     *
     * @param bool $showPrice
     * @return self
     */
    public function setShowPrice($showPrice)
    {
        $this->showPrice = $showPrice;
        return $this;
    }
}

