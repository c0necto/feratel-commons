<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SearchAdditionalServiceType
 *
 *
 * XSD Type: SearchAdditionalServiceType
 */
class SearchAdditionalServiceType
{
    /**
     * @var int $lastAvailabilityChangeDays
     */
    private $lastAvailabilityChangeDays = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $serviceFacility
     */
    private $serviceFacility = null;

    public function __construct(int $lastAvailabilityChangeDays = null, string $id = null, array $serviceFacility = null)
    {
        $this->lastAvailabilityChangeDays = $lastAvailabilityChangeDays;
        $this->id = $id;
        $this->serviceFacility = $serviceFacility;
    }

    /**
     * Gets as lastAvailabilityChangeDays
     *
     * @return int
     */
    public function getLastAvailabilityChangeDays()
    {
        return $this->lastAvailabilityChangeDays;
    }

    /**
     * Sets a new lastAvailabilityChangeDays
     *
     * @param int $lastAvailabilityChangeDays
     * @return self
     */
    public function setLastAvailabilityChangeDays($lastAvailabilityChangeDays)
    {
        $this->lastAvailabilityChangeDays = $lastAvailabilityChangeDays;
        return $this;
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
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToServiceFacility(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->serviceFacility[] = $item;
        return $this;
    }

    /**
     * isset serviceFacility
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceFacility($index)
    {
        return isset($this->serviceFacility[$index]);
    }

    /**
     * unset serviceFacility
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceFacility($index)
    {
        unset($this->serviceFacility[$index]);
    }

    /**
     * Gets as serviceFacility
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getServiceFacility()
    {
        return $this->serviceFacility;
    }

    /**
     * Sets a new serviceFacility
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $serviceFacility
     * @return self
     */
    public function setServiceFacility(array $serviceFacility = null)
    {
        $this->serviceFacility = $serviceFacility;
        return $this;
    }
}

