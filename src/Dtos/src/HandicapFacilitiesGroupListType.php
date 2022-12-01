<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing HandicapFacilitiesGroupListType
 *
 *
 * XSD Type: HandicapFacilitiesGroupList
 */
class HandicapFacilitiesGroupListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\HandicapGlobalItemType[] $handicapFacilityGroup
     */
    private $handicapFacilityGroup = [
        
    ];

    public function __construct(array $handicapFacilityGroup = null)
    {
        $this->handicapFacilityGroup = $handicapFacilityGroup;
    }

    /**
     * Adds as handicapFacilityGroup
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\HandicapGlobalItemType $handicapFacilityGroup
     */
    public function addToHandicapFacilityGroup(\Conecto\FeratelDsi\Dtos\HandicapGlobalItemType $handicapFacilityGroup)
    {
        $this->handicapFacilityGroup[] = $handicapFacilityGroup;
        return $this;
    }

    /**
     * isset handicapFacilityGroup
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandicapFacilityGroup($index)
    {
        return isset($this->handicapFacilityGroup[$index]);
    }

    /**
     * unset handicapFacilityGroup
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandicapFacilityGroup($index)
    {
        unset($this->handicapFacilityGroup[$index]);
    }

    /**
     * Gets as handicapFacilityGroup
     *
     * @return \Conecto\FeratelDsi\Dtos\HandicapGlobalItemType[]
     */
    public function getHandicapFacilityGroup()
    {
        return $this->handicapFacilityGroup;
    }

    /**
     * Sets a new handicapFacilityGroup
     *
     * @param \Conecto\FeratelDsi\Dtos\HandicapGlobalItemType[] $handicapFacilityGroup
     * @return self
     */
    public function setHandicapFacilityGroup(array $handicapFacilityGroup = null)
    {
        $this->handicapFacilityGroup = $handicapFacilityGroup;
        return $this;
    }
}

