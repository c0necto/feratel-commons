<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing LocationListType
 *
 *
 * XSD Type: LocationList
 */
class LocationListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\LocationType[] $location
     */
    private $location = [
        
    ];

    public function __construct(array $location = null)
    {
        $this->location = $location;
    }

    /**
     * Adds as location
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\LocationType $location
     */
    public function addToLocation(\Conecto\FeratelDsi\Dtos\LocationType $location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * isset location
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * @return \Conecto\FeratelDsi\Dtos\LocationType[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * @param \Conecto\FeratelDsi\Dtos\LocationType[] $location
     * @return self
     */
    public function setLocation(array $location = null)
    {
        $this->location = $location;
        return $this;
    }
}

