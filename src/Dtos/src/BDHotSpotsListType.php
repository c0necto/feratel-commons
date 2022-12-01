<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDHotSpotsListType
 *
 *
 * XSD Type: BDHotSpotsList
 */
class BDHotSpotsListType
{
    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDHotSpotsListType\HotSpotAType[] $hotSpot
     */
    private $hotSpot = [
        
    ];

    public function __construct(\DateTime $changeDate = null, array $hotSpot = null)
    {
        $this->changeDate = $changeDate;
        $this->hotSpot = $hotSpot;
    }

    /**
     * Gets as changeDate
     *
     * @return \DateTime
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Sets a new changeDate
     *
     * @param \DateTime $changeDate
     * @return self
     */
    public function setChangeDate(\DateTime $changeDate)
    {
        $this->changeDate = $changeDate;
        return $this;
    }

    /**
     * Adds as hotSpot
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDHotSpotsListType\HotSpotAType $hotSpot
     */
    public function addToHotSpot(\Conecto\FeratelDsi\Dtos\BDHotSpotsListType\HotSpotAType $hotSpot)
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
     * @return \Conecto\FeratelDsi\Dtos\BDHotSpotsListType\HotSpotAType[]
     */
    public function getHotSpot()
    {
        return $this->hotSpot;
    }

    /**
     * Sets a new hotSpot
     *
     * @param \Conecto\FeratelDsi\Dtos\BDHotSpotsListType\HotSpotAType[] $hotSpot
     * @return self
     */
    public function setHotSpot(array $hotSpot)
    {
        $this->hotSpot = $hotSpot;
        return $this;
    }
}

