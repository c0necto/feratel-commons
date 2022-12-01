<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing FacilityType
 *
 *
 * XSD Type: FacilityType
 */
class FacilityType extends FacilityGroupType
{
    /**
     * @var string $groupID
     */
    private $groupID = null;

    /**
     * @var string $valueType
     */
    private $valueType = null;

    public function __construct(string $groupID = null, string $valueType = null, string $id = null, string $type = null, bool $active = null, \DateTime $changeDate = null, bool $global = null, array $name = null)
    {
        $this->groupID = $groupID;
        $this->valueType = $valueType;
        parent::__construct($id,$type,$active,$changeDate,$global,$name);
    }

    /**
     * Gets as groupID
     *
     * @return string
     */
    public function getGroupID()
    {
        return $this->groupID;
    }

    /**
     * Sets a new groupID
     *
     * @param string $groupID
     * @return self
     */
    public function setGroupID($groupID)
    {
        $this->groupID = $groupID;
        return $this;
    }

    /**
     * Gets as valueType
     *
     * @return string
     */
    public function getValueType()
    {
        return $this->valueType;
    }

    /**
     * Sets a new valueType
     *
     * @param string $valueType
     * @return self
     */
    public function setValueType($valueType)
    {
        $this->valueType = $valueType;
        return $this;
    }
}

