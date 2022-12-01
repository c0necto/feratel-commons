<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing HandicapFacilityItemType
 *
 *
 * XSD Type: HandicapFacilityItem
 */
class HandicapFacilityItemType extends HandicapGlobalItemType
{
    /**
     * @var string $groupID
     */
    private $groupID = null;

    /**
     * @var string $valueType
     */
    private $valueType = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $handicapTypes
     */
    private $handicapTypes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $handicapGroups
     */
    private $handicapGroups = null;

    public function __construct(string $groupID = null, string $valueType = null, array $handicapTypes = null, array $handicapGroups = null, bool $global = null, bool $active = null, string $id = null, \DateTime $changeDate = null, array $name = null)
    {
        $this->groupID = $groupID;
        $this->valueType = $valueType;
        $this->handicapTypes = $handicapTypes;
        $this->handicapGroups = $handicapGroups;
        parent::__construct($global,$active,$id,$changeDate,$name);
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

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToHandicapTypes(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->handicapTypes[] = $item;
        return $this;
    }

    /**
     * isset handicapTypes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandicapTypes($index)
    {
        return isset($this->handicapTypes[$index]);
    }

    /**
     * unset handicapTypes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandicapTypes($index)
    {
        unset($this->handicapTypes[$index]);
    }

    /**
     * Gets as handicapTypes
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getHandicapTypes()
    {
        return $this->handicapTypes;
    }

    /**
     * Sets a new handicapTypes
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $handicapTypes
     * @return self
     */
    public function setHandicapTypes(array $handicapTypes)
    {
        $this->handicapTypes = $handicapTypes;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToHandicapGroups(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->handicapGroups[] = $item;
        return $this;
    }

    /**
     * isset handicapGroups
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandicapGroups($index)
    {
        return isset($this->handicapGroups[$index]);
    }

    /**
     * unset handicapGroups
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandicapGroups($index)
    {
        unset($this->handicapGroups[$index]);
    }

    /**
     * Gets as handicapGroups
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getHandicapGroups()
    {
        return $this->handicapGroups;
    }

    /**
     * Sets a new handicapGroups
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $handicapGroups
     * @return self
     */
    public function setHandicapGroups(array $handicapGroups)
    {
        $this->handicapGroups = $handicapGroups;
        return $this;
    }
}

