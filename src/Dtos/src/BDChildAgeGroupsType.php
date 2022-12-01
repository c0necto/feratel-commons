<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDChildAgeGroupsType
 *
 *
 * XSD Type: BDChildAgeGroups
 */
class BDChildAgeGroupsType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDChildAgeGroupsType\ChildAgeGroupAType[] $childAgeGroup
     */
    private $childAgeGroup = [
        
    ];

    public function __construct(array $childAgeGroup = null)
    {
        $this->childAgeGroup = $childAgeGroup;
    }

    /**
     * Adds as childAgeGroup
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDChildAgeGroupsType\ChildAgeGroupAType $childAgeGroup
     */
    public function addToChildAgeGroup(\Conecto\FeratelDsi\Dtos\BDChildAgeGroupsType\ChildAgeGroupAType $childAgeGroup)
    {
        $this->childAgeGroup[] = $childAgeGroup;
        return $this;
    }

    /**
     * isset childAgeGroup
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChildAgeGroup($index)
    {
        return isset($this->childAgeGroup[$index]);
    }

    /**
     * unset childAgeGroup
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChildAgeGroup($index)
    {
        unset($this->childAgeGroup[$index]);
    }

    /**
     * Gets as childAgeGroup
     *
     * @return \Conecto\FeratelDsi\Dtos\BDChildAgeGroupsType\ChildAgeGroupAType[]
     */
    public function getChildAgeGroup()
    {
        return $this->childAgeGroup;
    }

    /**
     * Sets a new childAgeGroup
     *
     * @param \Conecto\FeratelDsi\Dtos\BDChildAgeGroupsType\ChildAgeGroupAType[] $childAgeGroup
     * @return self
     */
    public function setChildAgeGroup(array $childAgeGroup = null)
    {
        $this->childAgeGroup = $childAgeGroup;
        return $this;
    }
}

