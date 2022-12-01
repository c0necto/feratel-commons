<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing HotSpotsListType
 *
 *
 * XSD Type: HotSpotsList
 */
class HotSpotsListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\HotSpotItemType[] $hotSpot
     */
    private $hotSpot = [
        
    ];

    public function __construct(array $hotSpot = null)
    {
        $this->hotSpot = $hotSpot;
    }

    /**
     * Adds as hotSpot
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\HotSpotItemType $hotSpot
     */
    public function addToHotSpot(\Conecto\FeratelDsi\Dtos\HotSpotItemType $hotSpot)
    {
        $this->hotSpot[] = $hotSpot;
        return $this;
    }

    /**
     * isset hotSpot
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotSpot($index)
    {
        return isset($this->hotSpot[$index]);
    }

    /**
     * unset hotSpot
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotSpot($index)
    {
        unset($this->hotSpot[$index]);
    }

    /**
     * Gets as hotSpot
     *
     * @return \Conecto\FeratelDsi\Dtos\HotSpotItemType[]
     */
    public function getHotSpot()
    {
        return $this->hotSpot;
    }

    /**
     * Sets a new hotSpot
     *
     * @param \Conecto\FeratelDsi\Dtos\HotSpotItemType[] $hotSpot
     * @return self
     */
    public function setHotSpot(array $hotSpot = null)
    {
        $this->hotSpot = $hotSpot;
        return $this;
    }
}

