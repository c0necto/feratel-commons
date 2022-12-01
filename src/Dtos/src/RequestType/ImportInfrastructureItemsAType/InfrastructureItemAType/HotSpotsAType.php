<?php

namespace Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType;

/**
 * Class representing HotSpotsAType
 */
class HotSpotsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\HotSpotsAType\HotSpotAType[] $hotSpot
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
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\HotSpotsAType\HotSpotAType $hotSpot
     */
    public function addToHotSpot(\Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\HotSpotsAType\HotSpotAType $hotSpot)
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
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\HotSpotsAType\HotSpotAType[]
     */
    public function getHotSpot()
    {
        return $this->hotSpot;
    }

    /**
     * Sets a new hotSpot
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\HotSpotsAType\HotSpotAType[] $hotSpot
     * @return self
     */
    public function setHotSpot(array $hotSpot = null)
    {
        $this->hotSpot = $hotSpot;
        return $this;
    }
}

