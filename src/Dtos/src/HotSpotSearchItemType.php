<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing HotSpotSearchItemType
 *
 *
 * XSD Type: HotSpotSearchItem
 */
class HotSpotSearchItemType
{
    /**
     * @var string $searchBy
     */
    private $searchBy = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var float $distance
     */
    private $distance = null;

    public function __construct(string $searchBy = null, string $id = null, float $distance = null)
    {
        $this->searchBy = $searchBy;
        $this->id = $id;
        $this->distance = $distance;
    }

    /**
     * Gets as searchBy
     *
     * @return string
     */
    public function getSearchBy()
    {
        return $this->searchBy;
    }

    /**
     * Sets a new searchBy
     *
     * @param string $searchBy
     * @return self
     */
    public function setSearchBy($searchBy)
    {
        $this->searchBy = $searchBy;
        return $this;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as distance
     *
     * @return float
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Sets a new distance
     *
     * @param float $distance
     * @return self
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
        return $this;
    }
}

