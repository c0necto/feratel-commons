<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing HotSpotGroupListType
 *
 *
 * XSD Type: HotSpotGroupList
 */
class HotSpotGroupListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\HotSpotGroupType[] $hotSpotType
     */
    private $hotSpotType = [
        
    ];

    public function __construct(array $hotSpotType = null)
    {
        $this->hotSpotType = $hotSpotType;
    }

    /**
     * Adds as hotSpotType
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\HotSpotGroupType $hotSpotType
     */
    public function addToHotSpotType(\Conecto\FeratelDsi\Dtos\HotSpotGroupType $hotSpotType)
    {
        $this->hotSpotType[] = $hotSpotType;
        return $this;
    }

    /**
     * isset hotSpotType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotSpotType($index)
    {
        return isset($this->hotSpotType[$index]);
    }

    /**
     * unset hotSpotType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotSpotType($index)
    {
        unset($this->hotSpotType[$index]);
    }

    /**
     * Gets as hotSpotType
     *
     * @return \Conecto\FeratelDsi\Dtos\HotSpotGroupType[]
     */
    public function getHotSpotType()
    {
        return $this->hotSpotType;
    }

    /**
     * Sets a new hotSpotType
     *
     * @param \Conecto\FeratelDsi\Dtos\HotSpotGroupType[] $hotSpotType
     * @return self
     */
    public function setHotSpotType(array $hotSpotType = null)
    {
        $this->hotSpotType = $hotSpotType;
        return $this;
    }
}

