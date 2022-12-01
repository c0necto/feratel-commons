<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing HandicapFacilitiesListType
 *
 *
 * XSD Type: HandicapFacilitiesList
 */
class HandicapFacilitiesListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\HandicapFacilityItemType[] $handicapFacility
     */
    private $handicapFacility = [
        
    ];

    public function __construct(array $handicapFacility = null)
    {
        $this->handicapFacility = $handicapFacility;
    }

    /**
     * Adds as handicapFacility
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\HandicapFacilityItemType $handicapFacility
     */
    public function addToHandicapFacility(\Conecto\FeratelDsi\Dtos\HandicapFacilityItemType $handicapFacility)
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
     * @return \Conecto\FeratelDsi\Dtos\HandicapFacilityItemType[]
     */
    public function getHandicapFacility()
    {
        return $this->handicapFacility;
    }

    /**
     * Sets a new handicapFacility
     *
     * @param \Conecto\FeratelDsi\Dtos\HandicapFacilityItemType[] $handicapFacility
     * @return self
     */
    public function setHandicapFacility(array $handicapFacility = null)
    {
        $this->handicapFacility = $handicapFacility;
        return $this;
    }
}

