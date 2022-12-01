<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing HandicapGroupsListType
 *
 *
 * XSD Type: HandicapGroupsList
 */
class HandicapGroupsListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\HandicapGlobalItemType[] $handicapGroup
     */
    private $handicapGroup = [
        
    ];

    public function __construct(array $handicapGroup = null)
    {
        $this->handicapGroup = $handicapGroup;
    }

    /**
     * Adds as handicapGroup
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\HandicapGlobalItemType $handicapGroup
     */
    public function addToHandicapGroup(\Conecto\FeratelDsi\Dtos\HandicapGlobalItemType $handicapGroup)
    {
        $this->handicapGroup[] = $handicapGroup;
        return $this;
    }

    /**
     * isset handicapGroup
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandicapGroup($index)
    {
        return isset($this->handicapGroup[$index]);
    }

    /**
     * unset handicapGroup
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandicapGroup($index)
    {
        unset($this->handicapGroup[$index]);
    }

    /**
     * Gets as handicapGroup
     *
     * @return \Conecto\FeratelDsi\Dtos\HandicapGlobalItemType[]
     */
    public function getHandicapGroup()
    {
        return $this->handicapGroup;
    }

    /**
     * Sets a new handicapGroup
     *
     * @param \Conecto\FeratelDsi\Dtos\HandicapGlobalItemType[] $handicapGroup
     * @return self
     */
    public function setHandicapGroup(array $handicapGroup = null)
    {
        $this->handicapGroup = $handicapGroup;
        return $this;
    }
}

