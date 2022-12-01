<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing FacilityGroupListType
 *
 *
 * XSD Type: FacilityGroupList
 */
class FacilityGroupListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\FacilityGroupType[] $facilityGroup
     */
    private $facilityGroup = [
        
    ];

    public function __construct(array $facilityGroup = null)
    {
        $this->facilityGroup = $facilityGroup;
    }

    /**
     * Adds as facilityGroup
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\FacilityGroupType $facilityGroup
     */
    public function addToFacilityGroup(\Conecto\FeratelDsi\Dtos\FacilityGroupType $facilityGroup)
    {
        $this->facilityGroup[] = $facilityGroup;
        return $this;
    }

    /**
     * isset facilityGroup
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFacilityGroup($index)
    {
        return isset($this->facilityGroup[$index]);
    }

    /**
     * unset facilityGroup
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFacilityGroup($index)
    {
        unset($this->facilityGroup[$index]);
    }

    /**
     * Gets as facilityGroup
     *
     * @return \Conecto\FeratelDsi\Dtos\FacilityGroupType[]
     */
    public function getFacilityGroup()
    {
        return $this->facilityGroup;
    }

    /**
     * Sets a new facilityGroup
     *
     * @param \Conecto\FeratelDsi\Dtos\FacilityGroupType[] $facilityGroup
     * @return self
     */
    public function setFacilityGroup(array $facilityGroup = null)
    {
        $this->facilityGroup = $facilityGroup;
        return $this;
    }
}

