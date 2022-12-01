<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDGTCListType
 *
 *
 * XSD Type: BDGTCList
 */
class BDGTCListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDGTCItemType[] $gTC
     */
    private $gTC = [
        
    ];

    public function __construct(array $gTC = null)
    {
        $this->gTC = $gTC;
    }

    /**
     * Adds as gTC
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDGTCItemType $gTC
     */
    public function addToGTC(\Conecto\FeratelDsi\Dtos\BDGTCItemType $gTC)
    {
        $this->gTC[] = $gTC;
        return $this;
    }

    /**
     * isset gTC
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGTC($index)
    {
        return isset($this->gTC[$index]);
    }

    /**
     * unset gTC
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGTC($index)
    {
        unset($this->gTC[$index]);
    }

    /**
     * Gets as gTC
     *
     * @return \Conecto\FeratelDsi\Dtos\BDGTCItemType[]
     */
    public function getGTC()
    {
        return $this->gTC;
    }

    /**
     * Sets a new gTC
     *
     * @param \Conecto\FeratelDsi\Dtos\BDGTCItemType[] $gTC
     * @return self
     */
    public function setGTC(array $gTC)
    {
        $this->gTC = $gTC;
        return $this;
    }
}

