<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing HandicapFacilitiesItemListType
 *
 *
 * XSD Type: HandicapFacilitiesItemList
 */
class HandicapFacilitiesItemListType
{
    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\HandicapFacilitiesItemListType\HandicapFacilityAType[] $handicapFacility
     */
    private $handicapFacility = [
        
    ];

    public function __construct(\DateTime $changeDate = null, array $handicapFacility = null)
    {
        $this->changeDate = $changeDate;
        $this->handicapFacility = $handicapFacility;
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
     * Adds as handicapFacility
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\HandicapFacilitiesItemListType\HandicapFacilityAType $handicapFacility
     */
    public function addToHandicapFacility(\Conecto\FeratelDsi\Dtos\HandicapFacilitiesItemListType\HandicapFacilityAType $handicapFacility)
    {
        $this->handicapFacility[] = $handicapFacility;
        return $this;
    }

    /**
     * isset handicapFacility
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandicapFacility($index)
    {
        return isset($this->handicapFacility[$index]);
    }

    /**
     * unset handicapFacility
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandicapFacility($index)
    {
        unset($this->handicapFacility[$index]);
    }

    /**
     * Gets as handicapFacility
     *
     * @return \Conecto\FeratelDsi\Dtos\HandicapFacilitiesItemListType\HandicapFacilityAType[]
     */
    public function getHandicapFacility()
    {
        return $this->handicapFacility;
    }

    /**
     * Sets a new handicapFacility
     *
     * @param \Conecto\FeratelDsi\Dtos\HandicapFacilitiesItemListType\HandicapFacilityAType[] $handicapFacility
     * @return self
     */
    public function setHandicapFacility(array $handicapFacility = null)
    {
        $this->handicapFacility = $handicapFacility;
        return $this;
    }
}

