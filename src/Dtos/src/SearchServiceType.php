<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SearchServiceType
 *
 *
 * XSD Type: SearchServiceType
 */
class SearchServiceType
{
    /**
     * @var int $lastAvailabilityChangeDays
     */
    private $lastAvailabilityChangeDays = null;

    /**
     * @var float $minRooms
     */
    private $minRooms = null;

    /**
     * @var int $minSleepingRooms
     */
    private $minSleepingRooms = null;

    /**
     * @var int $minRoomSize
     */
    private $minRoomSize = null;

    /**
     * @var string $codeType
     */
    private $codeType = null;

    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchServiceType\ServiceFacilityAType\ItemAType[] $serviceFacility
     */
    private $serviceFacility = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $serviceClassification
     */
    private $serviceClassification = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $serviceHandicapFacility
     */
    private $serviceHandicapFacility = null;

    public function __construct(int $lastAvailabilityChangeDays = null, float $minRooms = null, int $minSleepingRooms = null, int $minRoomSize = null, string $codeType = null, string $code = null, array $serviceFacility = null, array $serviceClassification = null, array $serviceHandicapFacility = null)
    {
        $this->lastAvailabilityChangeDays = $lastAvailabilityChangeDays;
        $this->minRooms = $minRooms;
        $this->minSleepingRooms = $minSleepingRooms;
        $this->minRoomSize = $minRoomSize;
        $this->codeType = $codeType;
        $this->code = $code;
        $this->serviceFacility = $serviceFacility;
        $this->serviceClassification = $serviceClassification;
        $this->serviceHandicapFacility = $serviceHandicapFacility;
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
     * Gets as minRooms
     *
     * @return float
     */
    public function getMinRooms()
    {
        return $this->minRooms;
    }

    /**
     * Sets a new minRooms
     *
     * @param float $minRooms
     * @return self
     */
    public function setMinRooms($minRooms)
    {
        $this->minRooms = $minRooms;
        return $this;
    }

    /**
     * Gets as minSleepingRooms
     *
     * @return int
     */
    public function getMinSleepingRooms()
    {
        return $this->minSleepingRooms;
    }

    /**
     * Sets a new minSleepingRooms
     *
     * @param int $minSleepingRooms
     * @return self
     */
    public function setMinSleepingRooms($minSleepingRooms)
    {
        $this->minSleepingRooms = $minSleepingRooms;
        return $this;
    }

    /**
     * Gets as minRoomSize
     *
     * @return int
     */
    public function getMinRoomSize()
    {
        return $this->minRoomSize;
    }

    /**
     * Sets a new minRoomSize
     *
     * @param int $minRoomSize
     * @return self
     */
    public function setMinRoomSize($minRoomSize)
    {
        $this->minRoomSize = $minRoomSize;
        return $this;
    }

    /**
     * Gets as codeType
     *
     * @return string
     */
    public function getCodeType()
    {
        return $this->codeType;
    }

    /**
     * Sets a new codeType
     *
     * @param string $codeType
     * @return self
     */
    public function setCodeType($codeType)
    {
        $this->codeType = $codeType;
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
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\SearchServiceType\ServiceFacilityAType\ItemAType $item
     */
    public function addToServiceFacility(\Conecto\FeratelDsi\Dtos\SearchServiceType\ServiceFacilityAType\ItemAType $item)
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
     * @return \Conecto\FeratelDsi\Dtos\SearchServiceType\ServiceFacilityAType\ItemAType[]
     */
    public function getServiceFacility()
    {
        return $this->serviceFacility;
    }

    /**
     * Sets a new serviceFacility
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchServiceType\ServiceFacilityAType\ItemAType[] $serviceFacility
     * @return self
     */
    public function setServiceFacility(array $serviceFacility = null)
    {
        $this->serviceFacility = $serviceFacility;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToServiceClassification(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->serviceClassification[] = $item;
        return $this;
    }

    /**
     * isset serviceClassification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceClassification($index)
    {
        return isset($this->serviceClassification[$index]);
    }

    /**
     * unset serviceClassification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceClassification($index)
    {
        unset($this->serviceClassification[$index]);
    }

    /**
     * Gets as serviceClassification
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getServiceClassification()
    {
        return $this->serviceClassification;
    }

    /**
     * Sets a new serviceClassification
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $serviceClassification
     * @return self
     */
    public function setServiceClassification(array $serviceClassification = null)
    {
        $this->serviceClassification = $serviceClassification;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToServiceHandicapFacility(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->serviceHandicapFacility[] = $item;
        return $this;
    }

    /**
     * isset serviceHandicapFacility
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceHandicapFacility($index)
    {
        return isset($this->serviceHandicapFacility[$index]);
    }

    /**
     * unset serviceHandicapFacility
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceHandicapFacility($index)
    {
        unset($this->serviceHandicapFacility[$index]);
    }

    /**
     * Gets as serviceHandicapFacility
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getServiceHandicapFacility()
    {
        return $this->serviceHandicapFacility;
    }

    /**
     * Sets a new serviceHandicapFacility
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $serviceHandicapFacility
     * @return self
     */
    public function setServiceHandicapFacility(array $serviceHandicapFacility = null)
    {
        $this->serviceHandicapFacility = $serviceHandicapFacility;
        return $this;
    }
}

