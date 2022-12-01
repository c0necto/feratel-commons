<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing HandicapTypeListType
 *
 *
 * XSD Type: HandicapTypeList
 */
class HandicapTypeListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\HandicapBaseItemType[] $handicapType
     */
    private $handicapType = [
        
    ];

    public function __construct(array $handicapType = null)
    {
        $this->handicapType = $handicapType;
    }

    /**
     * Adds as handicapType
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\HandicapBaseItemType $handicapType
     */
    public function addToHandicapType(\Conecto\FeratelDsi\Dtos\HandicapBaseItemType $handicapType)
    {
        $this->handicapType[] = $handicapType;
        return $this;
    }

    /**
     * isset handicapType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandicapType($index)
    {
        return isset($this->handicapType[$index]);
    }

    /**
     * unset handicapType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandicapType($index)
    {
        unset($this->handicapType[$index]);
    }

    /**
     * Gets as handicapType
     *
     * @return \Conecto\FeratelDsi\Dtos\HandicapBaseItemType[]
     */
    public function getHandicapType()
    {
        return $this->handicapType;
    }

    /**
     * Sets a new handicapType
     *
     * @param \Conecto\FeratelDsi\Dtos\HandicapBaseItemType[] $handicapType
     * @return self
     */
    public function setHandicapType(array $handicapType = null)
    {
        $this->handicapType = $handicapType;
        return $this;
    }
}

